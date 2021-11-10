<?php 
class Surat_Keluar_Model extends CI_Model{
    public function getSuratKeluar(){
        return $this->db->get('tbl_surat_keluar')->result_array();
    }

    public function addSuratKeluar($data){
        $this->db->insert('tbl_surat_keluar', $data);
    }
}
?>