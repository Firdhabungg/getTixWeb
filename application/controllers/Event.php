<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Event_model', 'event');
    }
    public function index(){
        $data['title'] = 'Event';
        $this->load->view('event/event', $data);
    }
    public function detail_event(){
        $data['title'] = 'Detail Event';
        $this->load->view('event/detail_event');
    }
    public function detail($id){
        $data['title'] = 'Detail Event';
        $data['id'] = $this->event->getAllEventById($id);
        $this->load->view('admin/index', $data);
    }
    public function hapus($id){
        $this->event->hapusDataEvent($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event berhasil dihapus</div>');
        redirect('admin');
    }
}