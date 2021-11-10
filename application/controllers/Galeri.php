<?php
class Galeri extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model('Galeri_Model');
    }

    public function index(){
        $data['title'] = "HIMATEKINFO UIKA BOGOR - Galeri";
        $data['kategori_galeri'] = $this->Galeri_Model->getKategoriGaleri();
        $data['galeri'] = $this->Galeri_Model->getGaleri();

        $this->load->view('backend/templates/header_admin', $data);
        $this->load->view('backend/templates/sidebar_admin');
        $this->load->view('backend/templates/navbar_admin');
        $this->load->view('backend/galeri/index', $data);
        $this->load->view('backend/templates/footer_admin');
    }

    public function tambah(){
        $data = [
            'nama_galeri' => $this->input->post('nama_galeri'),
            'kategori_galeri' => $this->input->post('kategori_galeri'),
            'tanggal_upload' => date('D, M Y'),
            'file_gambar' => $this->galeri()
        ];

        $this->Galeri_Model->addGaleri($data);
        redirect('galeri');
    }

    public function galeri(){
        $config = [
            'upload_path' => './assets/galeri',
            'allowed_types' => 'png|jpeg|jpg',
            'max_size' => 10000,
            'file_name' => uniqid()
        ];

        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file_gambar')) {
            $error = ['error' => $this->upload->display_errors()];
        } else {
            $file = $this->upload->data('file_name');
            return $file;
        }
    }
}