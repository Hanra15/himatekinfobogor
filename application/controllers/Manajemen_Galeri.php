<?php 
class Manajemen_Galeri extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_Galeri_Model');
        
    }

    public function index(){
        $data['title'] = "HIMATEKINFO UIKA BOGOR - Kategori Galeri";
        $data['kategori_galeri'] = $this->Kategori_Galeri_Model->getKategoriGaleri();

        $this->load->view('backend/templates/header_admin', $data);
        $this->load->view('backend/templates/sidebar_admin');
        $this->load->view('backend/templates/navbar_admin');
        $this->load->view('backend/kategori_galeri/index', $data);
        $this->load->view('backend/templates/footer_admin');
    }

    public function tambah(){
        $data = [
            'nama_kategori' => $this->input->post('kategori_galeri')
        ];

        $this->db->insert('tbl_kategori_galeri', $data);
        redirect('manajemen_galeri');
    }
}