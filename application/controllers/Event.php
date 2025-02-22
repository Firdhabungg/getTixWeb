<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Event_model', 'event');
        $this->load->model('User_model', 'user');
        $this->load->model('Tiket_model', 'tiket');
    }
    public function index(){
        $data['title'] = 'Halaman Event';
        $data['event'] = $this->event->getAllEvent();
        if($this->input->post('search')){
            $data['event'] = $this->event->searchEvent();
            if(empty($data['event'])){
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Event tidak ditemukan</div>');
                redirect('event');
            }
        }
        $email = $this->session->userdata('email');
        if(!$email){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
            redirect('auth');
        }
        $data['user'] = $this->user->getUserBySession($email);
        $this->load->view('event/index', $data);
    }
    public function detail_event($id){
        $data['title'] = 'Detail Event';
        $email = $this->session->userdata('email'); //jika sudah login maka session dibuat
        if(!$email){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
            redirect('auth');
        }
        $data['user'] = $this->user->getUserBySession($email);
        $data['detail'] = $this->event->getEventById($id);
        $data['tickets'] = $this->tiket->getTiketByEvent($id);
        $this->load->view('event/detail_event', $data);
    }
    public function editEvent($id){
        $this->event->getEventById($id);
    }
    public function hapus($id){
        $event = $this->event->getEventById($id);
        if($event){
            $gambar = $event['gambar_event'];
            $path = './uploads/events/' . $gambar;
            
            if(file_exists($path)){
                unlink($path);
            }
            $this->event->hapusDataEvent($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event berhasil dihapus</div>');
            redirect('admin');
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Event gagal dihapus</div>');
        }
        redirect('admin');
    }
    public function harga($id){
        $data['title'] = 'Tambah Harga Tiket';
        $data['event'] = $this->event->getEventById($id);
        $data['tickets'] = $this->tiket->getTiketByEvent($id);
        $data['user'] = $this->user->getUserBySession($this->session->userdata('email'));
        $this->load->view('event/harga', $data);
    }
}