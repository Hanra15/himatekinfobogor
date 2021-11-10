<?php 
class Proposal_Masuk extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Proposal_Masuk_Model');
        $this->load->library('upload');
    }

    public function index (){
        $data['title'] = "HIMATEKINFO UIKA BOGOR - Proposal Masuk";

        $data['proposal_masuk'] = $this->Proposal_Masuk_Model->getProposalMasuk();

        $this->load->view('backend/templates/header_admin', $data);
        $this->load->view('backend/templates/sidebar_admin');
        $this->load->view('backend/templates/navbar_admin');
        $this->load->view('backend/proposal_masuk/index', $data);
        $this->load->view('backend/templates/footer_admin');
    }

    public function tambah(){
        $data = [
            'nama_proposal_masuk' => $this->input->post('nama_proposal'),
            'asal_proposal' => $this->input->post('asal_proposal'),
            'tanggal_masuk' => date('D, M Y'),
            'file_proposal' => $this->proposalMasuk()
        ];

        $this->Proposal_Masuk_Model->addProposalMasuk($data);
        redirect('proposal_masuk');
    }

    public function proposalMasuk(){
        $config = [
            'upload_path' => './assets/proposal_masuk',
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