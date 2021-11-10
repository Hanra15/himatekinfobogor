<?php 
class Home_Model extends CI_Model {
    public function getCoomingSoon(){
        return $this->db->get_where('tbl_cooming_soon', ['is_active'=>1])->row_array();
    }

    public function getSlider(){
        return $this->db->get_where('tbl_slider', ['is_active',1])->result_array();
    }

    public function getPost(){
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->limit('3');
        $this->db->order_by('id_post','DESC');
        $this->db->where('is_active',1);
        return $this->db->get()->result_array();
    }
}