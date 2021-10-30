<?php 
class Surat_Masuk_Model extends CI_Model{

    public function getSuratMasuk(){
        return $this->db->get('tbl_surat_masuk')->result_array();
    }

    public function addSuratMasuk($data){
        $this->db->insert('tbl_surat_masuk', $data);
    }
}