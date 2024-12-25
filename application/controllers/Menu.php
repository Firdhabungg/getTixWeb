<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Menu extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'user');
    }
    public function index(){
        $data['title'] = 'Menu Management';
        $email = $this->session->userdata('email'); //mengambil data dari session
        if (!$email) {
            redirect('auth');
        }
        $data['user'] = $this->user->getUserBySession($email);
        $data['menu'] = $this->user->getAllMenu();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        }else {
            $this->user->insertMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Baru berhasil ditambahkan</div>');
            redirect('menu');
        }
    }
    public function hapus($id){
        $this->db->delete('user_menu', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil dihapus</div>');
        redirect('menu');
        // $this->user->hapusMenu($id);
        // if (!$id) {
        //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">ID menu tidak valid!</div>');
        //     redirect('menu');
        // }
    }
    
}