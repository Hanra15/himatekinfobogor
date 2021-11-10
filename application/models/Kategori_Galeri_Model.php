<?php 
class Kategori_Galeri_Model extends CI_Model {
    public function getKategoriGaleri(){
        return $this->db->get('tbl_kategori_galeri')->result_array();
    }
}