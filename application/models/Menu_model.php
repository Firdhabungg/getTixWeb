<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {
    public function getAllMenu(){
        return $this->db->get('user_menu')->result_array();
    }
    public function getMenuById($id){
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }
    public function tambahMenu(){
        $data = [
            'menu' => $this->input->post('menu')
        ];
        $this->db->insert('user_menu', $data);
    }
    public function editMenu(){
        $data = [
            'menu' => $this->input->post('menu')
        ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('user_menu', $data);
    }
    public function hapusMenu($id){
        $this->db->delete('user_menu', ['id' => $id]);
    }
}