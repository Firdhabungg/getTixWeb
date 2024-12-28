<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'user');
    }
    public function index(){
        $data['title'] = 'My Profile';
        $email = $this->session->userdata('email'); //mengambil data dari session
        if (!$email) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
            redirect('auth');
        }
        $data['user'] = $this->user->getUserBySession($email);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    public function edit(){
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Profile';
            $email = $this->session->userdata('email'); //mengambil data dari session
            $data['user'] = $this->user->getUserBySession($email);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        }
    }
}