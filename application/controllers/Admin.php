<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        // //atau hanya mengakses controller dari URL
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('m_visi_misi');
        $this->load->model('m_mahasiswa');
    }
    public function index()
    {
        $data['title'] = "Dashboard";
        $data['user'] = $this->db->get_where('user')->row_array();
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->m_mahasiswa->GetMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}