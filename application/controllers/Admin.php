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
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
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
    public function detail($id){
        $data['title'] = 'Detail Event';
        $email = $this->session->userdata('email'); //mengambil data dari session
        if (!$email) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
            redirect('auth');
        }
        $data['user'] = $this->user->getUserBySession($email);
        $data['event'] = $this->event->getEventById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detailEvent', $data);
        $this->load->view('templates/footer');
    }
    // public function editEvent($id){
    //     $data['title'] = 'Edit Event';
    //     $this->form_validation->set_rules('nama_event', 'Nama Event', 'required|trim');
    //     $this->form_validation->set_rules('waktu', 'Waktu', 'required|trim');
    //     $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');
    //     $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|trim');
    //     $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
    //     $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
    //     $this->form_validation->set_rules('gambar_event', 'Gambar Event', 'required');
    //     if($this->form_validation->run() == false){
    //         $email = $this->session->userdata('email'); //mengambil data dari session
    //         if (!$email) {
    //             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
    //             redirect('auth');
    //         }
    //         $data['user'] = $this->user->getUserBySession($email);
    //         $data['event'] = $this->event->getEventById($id);
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('admin/editEvent', $data);
    //         $this->load->view('templates/footer');
    //     }else{
    //         $this->event->editEvent($id);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event berhasil diedit</div>');
    //         redirect('admin');
    //     }
    // }
    public function tambah(){
        $data['title'] = 'Tambah Event';
    
        $this->form_validation->set_rules('nama_event', 'Nama Event', 'required|trim');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required|trim');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|numeric|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if($this->form_validation->run() == false){
            $email = $this->session->userdata('email');
            if (!$email) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
                redirect('auth');
            }
            $data['user'] = $this->user->getUserBySession($email);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambahEvent', $data);
            $this->load->view('templates/footer');
        } else{
            // upload gambar event
            $config['upload_path'] = './uploads/events/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar_event')) {
                $gambarData = $this->upload->data(); // Data gambar yang berhasil diupload
                $gambarEvent = $gambarData['file_name'];
        
                $eventData = [
                    'nama_event' => $this->input->post('nama_event', true),
                    'waktu_acara' => $this->input->post('waktu', true),
                    'lokasi' => $this->input->post('lokasi', true),
                    'kapasitas' => $this->input->post('kapasitas', true),
                    'kategori' => $this->input->post('kategori', true),
                    'deskripsi' => $this->input->post('deskripsi', true),
                    'gambar_event' => $gambarEvent
                ];
    
                $coba = $this->event->tambahEvent($eventData);
                var_dump($coba);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event berhasil ditambahkan</div>');
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('admin/tambah');
            }
        }
    }
    public function editEvent($id) {
        $data['title'] = 'Edit Event';
        $this->form_validation->set_rules('nama_event', 'Nama Event', 'required|trim');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required|trim');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|numeric|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
    
        if ($this->form_validation->run() == false) {
            $email = $this->session->userdata('email');
            if (!$email) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
                redirect('auth');
            }
    
            $data['user'] = $this->user->getUserBySession($email);
            $data['event'] = $this->event->getEventById($id);
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editEvent', $data);
            $this->load->view('templates/footer');
        } else {
            $updatedData = [
                'nama_event' => $this->input->post('nama_event', true),
                'waktu_acara' => $this->input->post('waktu', true),
                'lokasi' => $this->input->post('lokasi', true),
                'kapasitas' => $this->input->post('kapasitas', true),
                'kategori' => $this->input->post('kategori', true),
                'deskripsi' => $this->input->post('deskripsi', true),
            ];
    
            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path'] = './uploads/events/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 4096;
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('gambar')) {
                    $uploadedImage = $this->upload->data('file_name');
                    $updatedData['gambar_event'] = $uploadedImage;
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('admin/editEvent/' . $id);
                }
            }
    
            // Update data ke database
            $this->db->update('event', $updatedData, ['id_event' => $id]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event berhasil diedit</div>');
            redirect('admin');
        }
    }
    
    
}