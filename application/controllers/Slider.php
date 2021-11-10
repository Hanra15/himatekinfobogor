<?php 
class Slider extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');

        $this->load->model('Slider_Model');
    }

    public function index(){
        $data['title'] = "HIMATEKINFO UIKA BOGOR - Slider";
        $data['slider'] = $this->Slider_Model->getSlider();

        $this->load->view('backend/templates/header_admin', $data);
        $this->load->view('backend/templates/sidebar_admin');
        $this->load->view('backend/templates/navbar_admin');
        $this->load->view('backend/slider/index', $data);
        $this->load->view('backend/templates/footer_admin');
    }

    public function tambah(){
        $data = [
            'judul_slider' => $this->input->post('judul_slider'),
            'text' => $this->input->post('text'),
            'slider' => $this->slider()
        ];

        $this->Slider_Model->addSlider($data);
        redirect('slider');
    }



    public function status_off($id)
    {
        $this->db->set('is_active', 0);
        $this->db->where('id_slider', $id);
        $this->db->update('tbl_slider');

        redirect('slider');
    }

    public function status_on($id)
    {
        $this->db->set('is_active', 1);
        $this->db->where('id_slider', $id);
        $this->db->update('tbl_slider');

        redirect('slider');
    }

    public function slider(){
        $config = [
            'upload_path' => './assets/slider',
            'allowed_types' => 'png|jpeg|jpg',
            'max_size' => 10000,
            'file_name' => uniqid()
        ];

        $this->upload->initialize($config);
        if (!$this->upload->do_upload('slider')) {
            $error = ['error' => $this->upload->display_errors()];
        } else {
            $file = $this->upload->data('file_name');
            return $file;
        }
    }
}