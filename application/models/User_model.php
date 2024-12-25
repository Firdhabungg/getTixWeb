<?php 
class User_model extends CI_Model {
    public function tambahDataUser($data){
        $this->db->insert('customer', $data);
    }
    public function getUserByEmail($email){
        return $this->db->get_where('customer', ['email' => $email])->row_array();
    }
    public function getUserBySession($email){
        return $this->db->get_where('customer', ['email' => $email])->row_array();
    }

}