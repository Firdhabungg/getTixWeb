<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model', 'user');
    }
    public function index()
    {
        if($this->session->userdata('email')){
            if($this->session->userdata('role_id') == 1){
                redirect('admin');
            }else {
                redirect('user');
            }
        }
        $data['title'] = 'Login';
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if($this->form_validation->run() == false){
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        }else {
            $this->_login();
        }
    }
    private function _login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $data = $this->user->getUserByEmail($email);
        // ngecek jika $data itu ada
        if($data){
            // cek jika customer sudah diaktivasi(1) atau belum (0)
            if($data['is_active'] == 1){
                // cek jika passwordnya sama dengan didatabase 
                if($password === $data['password']){
                    $data = [
                        'email' => $data['email'],
                        'role_id' => $data['role_id']
                        // role_id = 1 = admin -> untuk menentukan menu apa yang akan ditampilkan admin atau user
                    ];
                    $this->session->set_userdata($data); // mengirim data ke session 
                    if($data['role_id'] == 1){
                        redirect('admin');
                    }else {
                        redirect('event');
                    }
                }else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
                redirect('auth');
                }
            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum diaktivasi</div>');
                redirect('auth');
            }
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar</div>');
            redirect('auth');
        }
    }
    public function registrasi()
    {
        if($this->session->userdata('email')){
            if($this->session->userdata('role_id') == 1){
                redirect('admin');
            }else {
                redirect('user');
            }
        }
        $data['title'] = 'Registrasi';
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[customer.email]', [
            'is_unique' => 'Email ini sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim|numeric');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password tidak cocok',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/auth_footer');
        } else {
            // field disesuaikan dengan tabel di database dan urut
            $data = [
                'name' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_telp' => htmlspecialchars($this->input->post('telepon', true)),
                'password' => $this->input->post('password1'),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time(),
                'gambar' => 'profile.png'
            ];
            $this->user->tambahDataUser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun anda telah dibuat. Silahkan Login</div>');
            redirect('auth');
        }
    }
    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah keluar!</div>');
        redirect('auth');
    }
}