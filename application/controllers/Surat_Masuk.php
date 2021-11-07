<?php 
class Surat_Masuk extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model('Surat_Masuk_Model');
    }

    public function index(){
        $data['surat_masuk'] = $this->Surat_Masuk_Model->getSuratMasuk();
        $data['title'] = "HIMATEKINFO UIKA BOGOR - Surat Masuk";

        $this->load->view('backend/templates/header_admin', $data);
        $this->load->view('backend/templates/sidebar_admin');
        $this->load->view('backend/templates/navbar_admin');
        $this->load->view('backend/surat_masuk/index', $data);
        $this->load->view('backend/templates/footer_admin');
    }

    public function tambah(){
        $data = [
            'kode_surat_masuk' => $this->input->post('kode_surat_masuk'),
            'asal_surat' => $this->input->post('asal_surat'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
            'tanggal_acara' => $this->input->post('tanggal_acara'),
            'tujuan_surat' => $this->input->post('tujuan_surat'),
            'file_surat_masuk' => $this->file_surat()
        ];

        $this->Surat_Masuk_Model->addSuratMasuk($data);
        redirect('Surat_Masuk');
    }

    private function file_surat(){
        $config = [
            'upload_path' => './assets/surat_masuk',
            'allowed_types' => 'pdf|docx|doc',
            'max_size' => 10000,
            'file_name' => uniqid()
        ];

        $this->upload->initialize($config);
        if(!$this->upload->do_upload('file_surat_masuk')){
            $error = ['error'=>$this->upload->display_errors()];
        }else {
            $file = $this->upload->data('file_name');
            return $file;
        }
    }
}

?>