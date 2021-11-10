<?php 
class Proposal_Keluar extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Proposal_Keluar_Model');
        $this->load->library('upload');
    }

    public function index(){
        $data['title'] = "HIMATEKINFO UIKA BOGOR - Proposal Keluar";

        $data['proposal_keluar'] = $this->Proposal_Keluar_Model->getProposalKeluar();

        $this->load->view('backend/templates/header_admin', $data);
        $this->load->view('backend/templates/sidebar_admin');
        $this->load->view('backend/templates/navbar_admin');
        $this->load->view('backend/proposal_keluar/index', $data);
        $this->load->view('backend/templates/footer_admin');
    }

    public function tambah(){
        $data = [
            'nama_proposal' => $this->input->post('nama_proposal'),
            'tanggal_upload' => date('D, M Y'),
            'file_proposal' => $this->proposalKeluar()
        ];

        $this->Proposal_Keluar_Model->addProposalKeluar($data);
        redirect('proposal_keluar');

    }

    public function proposalKeluar(){
        $config = [
            'upload_path' => './assets/proposal_keluar',
            'allowed_types' => 'doc|docx|pdf',
            'max_size' => 10000,
            'file_name' => uniqid()
        ];

        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file_proposal')) {
            $error = ['error' => $this->upload->display_errors()];
        } else {
            $file = $this->upload->data('file_name');
            return $file;
        }
    }
}