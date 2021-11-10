<?php 
class Post extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->load->model('Post_Model');
    }

    public function index(){
        $data['title'] = "HIMATEKINFO UIKA BOGOR - Post";
        $data['post'] = $this->Post_Model->getPost();

        $this->load->view('backend/templates/header_admin', $data);
        $this->load->view('backend/templates/sidebar_admin');
        $this->load->view('backend/templates/navbar_admin');
        $this->load->view('backend/post/index', $data);
        $this->load->view('backend/templates/footer_admin');
    }


    public function tambah(){

        $data['title'] = "HIMATEKINFO UIKA BOGOR - Tambah Post";

        $this->form_validation->set_rules('judul_post', 'Judul Post', 'required');

        if($this->form_validation->run()==FALSE){
            $this->load->view('backend/templates/header_admin', $data);
            $this->load->view('backend/templates/sidebar_admin');
            $this->load->view('backend/templates/navbar_admin');
            $this->load->view('backend/post/tambah', $data);
            $this->load->view('backend/templates/footer_admin');

        }else{
            $data = [
                'judul_post' => $this->input->post('judul_post'),
                'tanggal_post' => $this->input->post('tanggal_post'),
                'deskripsi_post' => $this->input->post('deskripsi_post'),
                'penulis' => $this->input->post('penulis'),
                'foto_post' => $this->foto()
            ];
            $this->Post_Model->addPost($data);
            redirect('post');
        }

    }


    public function status_off($id)
    {
        $this->db->set('is_active', 0);
        $this->db->where('id_post', $id);
        $this->db->update('tbl_post');

        redirect('post');
    }

    public function status_on($id)
    {
        $this->db->set('is_active', 1);
        $this->db->where('id_post', $id);
        $this->db->update('tbl_post');

        redirect('post');
    }


    public function foto(){
        $config = [
            'upload_path' => './assets/post',
            'allowed_types' => 'png|jpeg|jpg',
            'max_size' => 10000,
            'file_name' => uniqid()
        ];

        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto_post')) {
            $error = ['error' => $this->upload->display_errors()];
        } else {
            $file = $this->upload->data('file_name');
            return $file;
        }
    }


}