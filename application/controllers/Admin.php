<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'user');
        $this->load->model('Event_model', 'event');
        $this->load->model('Tiket_model', 'tiket');
        
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
        
        $data['ticket_reguler'] = $this->tiket->getTiketByJenis($id, 'Reguler');
        $data['ticket_vip'] = $this->tiket->getTiketByJenis($id, 'VIP');
        $data['ticket_vvip'] = $this->tiket->getTiketByJenis($id, 'VVIP');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detailEvent', $data);
        $this->load->view('templates/footer');
    }
    private function generateIdEvent() {
        $this->db->select('id_event');
        $this->db->order_by('id_event', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('event');
        $lastId = $query->row_array();
    
        if ($lastId) {
            // Ambil angka terakhir dari ID event
            $lastNumber = (int) substr($lastId['id_event'], -4);
            $newNumber = $lastNumber + 1;
        } else {
            // Jika belum ada data, mulai dari 1
            $newNumber = 1;
        }

        // Format ID event menjadi EV0001, EV0002, dst.
        return 'EV' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
    }    
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
            $config['upload_path'] = './uploads/events/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar_event')) {
                $gambarData = $this->upload->data(); // Data gambar yang berhasil diupload
                $gambarEvent = $gambarData['file_name'];
        
                $eventData = [
                    'id_event' => $this->generateIdEvent(),
                    'nama_event' => $this->input->post('nama_event', true),
                    'waktu_acara' => $this->input->post('waktu', true),
                    'lokasi' => $this->input->post('lokasi', true),
                    'kapasitas' => $this->input->post('kapasitas', true),
                    'kategori' => $this->input->post('kategori', true),
                    'deskripsi' => $this->input->post('deskripsi', true),
                    'gambar_event' => $gambarEvent
                ];
            $this->event->tambahEvent($eventData);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event berhasil ditambahkan</div>');
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('admin/tambah');
            }
        }
    }
    public function edit($id) {
        $data['title'] = 'Edit Event';
        $data['event'] = $this->event->getEventById($id);
        $data['kategori'] = ['Konser', 'Seminar', 'Sport'];
    
        // Validasi form
        $this->form_validation->set_rules('nama_event', 'Nama Event', 'required|trim');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required|trim');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|numeric|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
    
        if ($this->form_validation->run() == FALSE) {
            $email = $this->session->userdata('email');
            if (!$email) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda harus login terlebih dahulu!</div>');
                redirect('auth');
            }
            $data['user'] = $this->user->getUserBySession($email);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editEvent', $data);
            $this->load->view('templates/footer');
        } else {
            $updateData = [
                'nama_event' => $this->input->post('nama_event', true),
                'waktu_acara' => $this->input->post('waktu', true),
                'lokasi' => $this->input->post('lokasi', true),
                'kapasitas' => $this->input->post('kapasitas', true),
                'kategori' => $this->input->post('kategori', true),
                'deskripsi' => $this->input->post('deskripsi', true)
            ];
    
            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path'] = './uploads/events/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 4096;
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('gambar')) {
                    $uploadedImg = $this->upload->data('file_name');
                    $updateData['gambar_event'] = $uploadedImg;
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors('', '') . '</div>');
                    redirect('admin/edit/' . $id);
                    return;
                }
            }
    
            $this->event->editDataEvent($updateData, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event berhasil diperbarui</div>');
            redirect('admin');
        }
    }    
    
}