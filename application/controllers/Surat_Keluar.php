<?php 
class Surat_Keluar extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_Keluar_Model');
        $this->load->library('upload');
    }

    public function index(){
        $data['title'] = "HIMATEKINFO UIKA BOGOR - Surat Keluar";
        $data['surat_keluar'] = $this->Surat_Keluar_Model->getSuratKeluar();

        $this->load->view('backend/templates/header_admin', $data);
        $this->load->view('backend/templates/sidebar_admin');
        $this->load->view('backend/templates/navbar_admin');
        $this->load->view('backend/surat_keluar/index', $data);
        $this->load->view('backend/templates/footer_admin');
    }

    public function tambah(){
        $data = [
            'kode_surat_keluar' => $this->input->post('kode_surat_keluar'),
            'tujuan_surat' => $this->input->post('tujuan_surat'),
            'tanggal_keluar' => $this->input->post('tanggal_keluar'),
            'perihal' => $this->input->post('perihal'),
            'catatan' => $this->input->post('catatan'),
            'file_surat_keluar' => $this->file_surat()
        ];

        $this->Surat_Keluar_Model->addSuratKeluar($data);
        redirect('Surat_Keluar');
    }



    private function file_surat()
    {
        $config = [
            'upload_path' => './assets/surat_keluar',
            'allowed_types' => 'pdf|docx|doc',
            'max_size' => 10000,
            'file_name' => uniqid()
        ];

        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file_surat_keluar')) {
            $error = ['error' => $this->upload->display_errors()];
        } else {
            $file = $this->upload->data('file_name');
            return $file;
        }
    }
}