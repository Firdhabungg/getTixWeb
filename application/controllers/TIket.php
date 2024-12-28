<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tiket extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Tiket_model', 'tiket');
        $this->load->model('User_model', 'user');
        $this->load->model('Event_model', 'event');
    }
    public function index(){
        $data['title'] = 'Tiket';
        $data['tiket'] = $this->tiket->getAllTiket();
        $email = $this->session->userdata('email'); //jika sudah login maka session dibuat
        if(!$email){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
            redirect('auth');
        }
        $data['user'] = $this->user->getUserBySession($email);
        $this->load->view('event/index', $data);
    }
    // public function detail_tiket($id){
    //     $data['title'] = 'Detail Tiket';
    //     $data['tiket'] =  $this->ticket->getTiketByEvent($id);
    //     $this->load->view('event/detail_event', $data);
    // }
}