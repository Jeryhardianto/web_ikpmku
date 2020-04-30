<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_profil');
        $this->load->model('m_visi_misi');
        $this->load->model('m_programKerja');
    }
    public function index()
    {
        $data['title'] = 'IKPMKU-DIY | Profil';
        $data['profil'] = $this->m_profil->GetProfil();
        $data['visi_misi'] = $this->m_visi_misi->GetVisiMisi();
        $data['programkerja'] = $this->m_programKerja->GetprogramKerja();
        $this->load->view('blog_template/header', $data);
        $this->load->view('profil', $data);
        $this->load->view('blog_template/footer');
    }

    public function profill()
    {
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['title'] = "Profil";
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['profil'] = $this->m_profil->GetProfil();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/profil', $data);
        $this->load->view('templates/footer');
    }
    public function ubah($id)
    {
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['title'] = "Edit Profil";
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['profil'] = $this->m_profil->getProfilById($id);

        $this->form_validation->set_rules('profil', 'Profil', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_profil', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_profil->ubahProfil();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('profil/profill');
        }
    }
    // public function struktur()
    // {
    //     $data['title'] = "Struktur Organisasi";
    //     $data['struktur'] = $this->m_profil->GetStruktur();
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('admin/struktur', $data);
    //     $this->load->view('templates/footer');
    // }
    public function tambah()
    {
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['title'] = "Tambah Data ";
        $data['user'] = $this->db->get_where('user')->row_array();

        // $data['visi_misi'] = $this->m_visi_misi->getVisiMisiById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tb_struktur', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_profil->tambahStruktur();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di tambah!</div>');
            redirect('profil/struktur');
        }
    }
    public function ubahStruktur($id)
    {
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Edit Profil";
        $data['struktur'] = $this->m_profil->getStrukturById($id);

        $this->form_validation->set_rules('profil', 'Profil', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_struktur', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_profil->ubahStruktur();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('profil/struktur');
        }
    }
}