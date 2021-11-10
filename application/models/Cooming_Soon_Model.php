<?php 
class Cooming_Soon_Model extends CI_Model {

    public function getCoomingSoon(){
        return $this->db->get('tbl_cooming_soon')->result_array();
    }
    public function addCoomingSoon($data){
        $this->db->insert('tbl_cooming_soon', $data);
    }
}