<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event_model extends CI_Model {
    public function getAllEvent(){
        return $this->db->get('event')->result_array();
    }
    public function getEventById($id){
        return $this->db->get_where('event', ['id_event' => $id])->row_array();
    }
    public function editDataEvent($data, $id) {
        $this->db->where('id_event', $id);
        $this->db->update('event', $data);
    }
    
    public function tambahEvent($data){
        $this->db->insert('event', $data);
    }
    public function hapusDataEvent($id){
        $this->db->delete('event',['id_event' => $id]);
    }
    public function searchEvent(){
        $search = $this->input->post('search', true);
        $this->db->like('nama_event', $search);
        $this->db->or_like('kategori', $search);
        $this->db->or_like('lokasi', $search);
        return $this->db->get('event')->result_array();
    }
}