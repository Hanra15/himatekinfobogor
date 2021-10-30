<?php
class Auth_Model extends CI_Model {
    public function userEmail($email){
        return $this->db->get_where('tbl_user', ['email_user' => $email])->row_array();
    }
}