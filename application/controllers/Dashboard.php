<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('backend/templates/header_admin');
        $this->load->view('backend/templates/sidebar_admin');
        $this->load->view('backend/templates/navbar_admin');
        $this->load->view('backend/dashboard');
        $this->load->view('backend/templates/footer_admin');
    }
}
