<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['title'] = 'Informasi';
        $this->load->view('blog_template/header', $data);
        $this->load->view('informasi');
        $this->load->view('blog_template/footer');
    }
}