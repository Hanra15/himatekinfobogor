<?php
class f_galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_Model');
    }
    public function index()
    {
        $data['cooming_soon']=$this->Home_Model->getCoomingSoon();
        $data['slider'] = $this->Home_Model->getSlider();
        $data['post'] = $this->Home_Model->getPost();
        $data['title'] = "HIMATEKINFO UIKA BOGOR";
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/galeri/index', $data);
        $this->load->view('frontend/templates/footer');
    }
}
