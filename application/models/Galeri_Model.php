<?php 
class Galeri_Model extends CI_Model{

    public function getGaleri(){
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->join('tbl_kategori_galeri','tbl_kategori_galeri.id_kategori_galeri=tbl_galeri.kategori_galeri');
        return $this->db->get()->result_array();
        
    }

    public function addGaleri($data){
        $this->db->insert('tbl_galeri', $data);
    }


    public function getKategoriGaleri(){
        return $this->db->get('tbl_kategori_galeri')->result_array();
    }
}