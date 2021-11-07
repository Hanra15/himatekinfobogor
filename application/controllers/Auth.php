<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_Model');
    }

    public function index()

    {
        $this->form_validation->set_rules('email_user', 'Email User', 'trim|valid_email|required');
        $this->form_validation->set_rules('password_user', 'Password User', 'trim|required');

        $data['title'] = "HIMATEKINFO UIKA BOGOR - Auth";

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/auth/auth');
            $this->load->view('frontend/templates/footer');
        }else{
            $this->login();
        }
    }

    private function login()
    {
        $email = $this->input->post('email_user');
        $password = $this->input->post('password_user');

        $user = $this->Auth_Model->userEmail($email);

        
        
        if($user){
            if(md5($password)==$user['password_user']){
                $data = [
                    'email_user' => $user['email_user'],
                    'id_role' => $user['id_role'],
                    'id_user' => $user['id_user']
                ];
                $this->session->set_userdata($data);
                if ($user['id_role'] == 2) {
                    redirect('dashboard');
                }else{
                    redirect('dashboard');
                }
            }else{
                $this->session->set_flashdata('flashdata', 'Password salah');
                redirect('Auth');
            }
        }else{
            $this->session->set_flashdata('flashdata', 'Email belum terdaftar');
            redirect('Auth');
        }
    }

    public function logout()
    {
        session_destroy();
        $this->session->set_flashdata('flashdata', 'Logout berhasil');
        redirect('auth');
    }
}
