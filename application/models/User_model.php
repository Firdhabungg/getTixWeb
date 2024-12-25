<?php 
class User_model extends CI_Model {

    public function getAllMenu(){
        return $this->db->get('user_menu')->result_array();
    }
    public function tambahDataUser($data){
        $this->db->insert('customer', $data);
    }
    public function getUserByEmail($email){
        return $this->db->get_where('customer', ['email' => $email])->row_array();
    }
    public function getUserBySession($email){
        return $this->db->get_where('customer', ['email' => $email])->row_array();
    }
    public function insertMenu(){
        $data = [
            'menu' => $this->input->post('menu')
        ];
        $this->db->insert('user_menu', $data);
    }
    public function hapusMenu($id){
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }
}