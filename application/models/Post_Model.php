<?php 
class Post_Model extends CI_Model{
    public function getPost(){
        return $this->db->get('tbl_post')->result_array();
    }
    
    public function addPost($data){
        $this->db->insert('tbl_post', $data);
    }


    
}