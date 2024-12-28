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
}