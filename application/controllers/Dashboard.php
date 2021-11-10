<?php
class Dashboard extends CI_Controller
{
    public function index()
    {

        $data['surat_keluar'] = $this->db->count_all('tbl_surat_keluar');
        $data['surat_masuk'] = $this->db->count_all('tbl_surat_masuk');
        $data['proposal_keluar'] = $this->db->count_all('tbl_proposal_keluar');
        $data['proposal_masuk'] = $this->db->count_all('tbl_proposal_masuk');
        $data['cooming_soon'] = $this->db->get_where('tbl_cooming_soon',['is_active'=>1])->row_array();

        $data['title'] = "HIMATEKINFO UIKA BOGOR - Dashboard";
        $this->load->view('backend/templates/header_admin', $data);
        $this->load->view('backend/templates/sidebar_admin');
        $this->load->view('backend/templates/navbar_admin');
        $this->load->view('backend/dashboard', $data);
        $this->load->view('backend/templates/footer_admin');
    }
}
