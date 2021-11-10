<?php
class Cooming_soon extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cooming_Soon_Model');
        $this->load->library('upload');
    }

    public function index (){
        $data['cooming_soon'] = $this->Cooming_Soon_Model->getCoomingSoon();
        $data['title'] = "HIMATEKINFO UIKA BOGOR - Cooming Soon";

        $this->load->view('backend/templates/header_admin', $data);
        $this->load->view('backend/templates/sidebar_admin');
        $this->load->view('backend/templates/navbar_admin');
        $this->load->view('backend/cooming_soon/index', $data);
        $this->load->view('backend/templates/footer_admin');
    }

    public function tambah(){
        $data = [
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'tema_kegiatan' => $this->input->post('tema_kegiatan'),
            'deskripsi_kegiatan' => $this->input->post('deskripsi_kegiatan'),
            'tempat_kegiatan' => $this->input->post('tempat_kegiatan'),
            'tanggal_kegiatan' => $this->input->post('tanggal_kegiatan'),
            'flayer' => $this->flayer()
        ];

        $this->Cooming_Soon_Model->addCoomingSoon($data);
        redirect('cooming_soon');
    }

    public function status_off($id){
        $this->db->set('is_active', 0);
        $this->db->where('id_cooming_soon', $id);
        $this->db->update('tbl_cooming_soon');

        redirect('cooming_soon');
    }

    public function status_on($id){
        $this->db->set('is_active', 1);
        $this->db->where('id_cooming_soon', $id);
        $this->db->update('tbl_cooming_soon');

        redirect('cooming_soon');
        
    }


    private function flayer()
    {
        $config = [
            'upload_path' => './assets/flayer',
            'allowed_types' => 'png|jpeg|jpg',
            'max_size' => 10000,
            'file_name' => uniqid()
        ];

        $this->upload->initialize($config);
        if (!$this->upload->do_upload('flayer')) {
            $error = ['error' => $this->upload->display_errors()];
        } else {
            $file = $this->upload->data('file_name');
            return $file;
        }
    }
}