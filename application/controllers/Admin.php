<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'user');
        $this->load->model('Event_model', 'event');
    }
    public function index(){
        $data['title'] = 'Dashboard';
        $email = $this->session->userdata('email'); //mengambil data dari session
        if (!$email) {
            redirect('auth');
        }
        $data['user'] = $this->user->getUserBySession($email);
        $data['event'] = $this->event->getAllEvent();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}