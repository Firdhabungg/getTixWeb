<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Event_model', 'event');
    }
    public function index(){
        $data['title'] = 'Event';
        $login = $this->session->userdata('email');
        if(!$login){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
            redirect('auth');
        }
        $this->load->view('event/event', $data);
    }
    public function detail_event($id){
        $data['title'] = 'Detail Event';
        $this->load->view('event/detail_event');
    }
    public function detail($id){
        $data['title'] = 'Detail Event';
        $data['event'] = $this->event->getAllEventById($id);
        if (!$data['event']) {
            show_error('Event tidak ditemukan!', 404);
        }
        print_r($data['event']);
        exit;
        // $this->load->view('event/detail', $data);
        $this->load->view('admin', $data);
    }
    public function hapus($id){
        $this->event->hapusDataEvent($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event berhasil dihapus</div>');
        redirect('admin');
    }
}