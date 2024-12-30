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
    public function hargaEvent(){
        $this->form_validation->set_rules('reguler', 'Reguler', 'required|numeric|trim');
        $this->form_validation->set_rules('vip', 'VIP', 'numeric|trim');
        $this->form_validation->set_rules('vvip', 'VVIP', 'numeric|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('event/harga');
        } else {
            $id_event = $this->input->post('id_event');
            $ticket_increment = '1';

            $data = [
                [
                    'id_event' => $id_event,
                    'jenis_ticket' => 'reguler',
                    'harga' => $this->input->post('reguler'),
                    'ticket_increment' => $ticket_increment,
                ],
                [
                    'id_event' => $id_event,
                    'jenis_ticket' => 'vip',
                    'harga' => $this->input->post('vip'),
                    'ticket_increment' => $ticket_increment,
                ],
                [
                    'id_event' => $id_event,
                    'jenis_ticket' => 'vvip',
                    'harga' => $this->input->post('vvip'),
                    'ticket_increment' => $ticket_increment,
                ],
            ];

            // Tambahkan data ke database
            foreach ($data as $row) {
                $this->tiket->tambahHarga($row);
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Harga tiket berhasil ditambahkan!</div>');
            redirect('admin');
        }
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