<?php 
class Proposal_Masuk_Model extends CI_Model{
    public function getProposalMasuk(){
        return $this->db->get('tbl_proposal_masuk')->result_array();
    }

    public function addProposalMasuk($data){
        $this->db->insert('tbl_proposal_masuk', $data);
    }
}