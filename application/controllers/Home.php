<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = "HIMATEKINFO UIKA BOGOR";
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/home/index');
        $this->load->view('frontend/templates/footer');
    }
}
