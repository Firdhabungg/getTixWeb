<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket_model extends CI_Model {
    public function getAllTiket(){
        return $this->db->get('ticket')->result_array();
    }
    public function getTiketById($id){
        return $this->db->get_where('ticket', ['id_ticket' => $id])->row_array();
    }
    public function getTiketByEvent($id){
        return $this->db->get_where('ticket', ['id_event' => $id])->result_array();
    }
    public function getTiketWithEvent($id_ticket) {
        $this->db->select('ticket.*, event.nama_event, event.gambar_event, event.waktu_acara');
        $this->db->from('ticket');
        $this->db->join('event', 'event.id_event = ticket.id_event');
        $this->db->where('ticket.id_ticket', $id_ticket);
        return $this->db->get()->row_array();
    }
    public function getTiketByJenis($id_event, $jenis_tiket) {
        $this->db->select('ticket.*, event.nama_event, event.gambar_event');
        $this->db->from('ticket');
        $this->db->join('event', 'event.id_event = ticket.id_event');
        $this->db->where('ticket.id_event', $id_event);
        $this->db->where('ticket.jenis_ticket', $jenis_tiket); // Tambahkan filter jenis tiket
        return $this->db->get()->row_array();
    }    
    public function tambahHarga($data){
        $this->db->insert('ticket', $data);
    }
}