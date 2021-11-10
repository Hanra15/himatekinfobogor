<?php 

class Proposal_Keluar_Model extends CI_Model{
    public function getProposalKeluar(){
        return $this->db->get('tbl_proposal_keluar')->result_array();
    }

    public function addProposalKeluar($data){
        $this->db->insert('tbl_proposal_keluar', $data);
    }
}