<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email_user', 'Email User', 'trim|valid_email|required');
        $this->form_validation->set_rules('password_user', 'Password User', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('frontend/auth/auth');
        }
    }

    public function login()
    {



        $email = $this->input->post('email_user');
        $password = $this->input->post('password_user');
    }
}
