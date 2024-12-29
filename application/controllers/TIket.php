<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tiket extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'user');
        $this->load->model('Event_model', 'event');
        $this->load->model('Tiket_model', 'tiket');
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
    public function detail_tiket($id){
        $data['title'] = 'Detail Pembayaran';
        $email = $this->session->userdata('email'); //jika sudah login maka session dibuat
        if(!$email){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
            redirect('auth');
        }
        $data['user'] = $this->user->getUserBySession($email);
        $data['detail'] = $this->event->getEventById($id);
        $data['tickets'] = $this->tiket->getTiketByEvent($id);
        
        $data['tiket'] = $this->tiket->getTiketById($id);
        $this->load->view('tiket/detail_pembayaran', $data);
    }
    public function qrcode($id){
        $data['title'] = 'QR Code';
        $email = $this->session->userdata('email'); //jika sudah login maka session dibuat
        if(!$email){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
            redirect('auth');
        }
        $data['user'] = $this->user->getUserBySession($email);
        $data['tiket'] = $this->tiket->getTiketWithEvent($id);

        $this->load->view('tiket/qrcode', $data);
    }
    
}