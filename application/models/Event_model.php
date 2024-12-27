<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event_model extends CI_Model {
    public function getAllEvent(){
        return $this->db->get('event')->result_array();
    }
    public function getEventById($id){
        return $this->db->get_where('event', ['id_event' => $id])->row_array();
    }
    public function editEvent($id){
        $data = [
            "nama_event" => $this->input->post('nama_event', true),
            "waktu_event" => $this->input->post('waktu', true),
            "lokasi_event" => $this->input->post('lokasi', true),
            "kapasitas" => $this->input->post('kapasitas', true),
            "kategori" => $this->input->post('kategori', true),
            "deskripsi_event" => $this->input->post('deskripsi', true),
            "gambar_event" => $this->input->post('gambar_event', true)
        ];
        $this->db->update('event', $data, ['id_event' => $id]);
    }
    public function tambahEvent($data){
        $this->db->insert('event', $data);
    }
    public function hapusDataEvent($id){
        $this->db->delete('event',['id_event' => $id]);
    }
}