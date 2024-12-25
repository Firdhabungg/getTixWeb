<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event_model extends CI_Model {
    public function getAllEvent(){
        return $this->db->get('event')->result_array();
    }
    public function getAllEventById($id){
        return $this->db->get_where('event', ['id_event' => $id])->row_array();
    }
}