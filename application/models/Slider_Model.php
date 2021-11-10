<?php 
class Slider_Model extends CI_Model {

    public function getSlider(){
        return $this->db->get_where('tbl_slider',['is_active', 1])->result_array();
    }
    
    public function addSlider($data){
        $this->db->insert('tbl_slider', $data);
    }
}