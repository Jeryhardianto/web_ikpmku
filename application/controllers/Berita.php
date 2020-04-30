<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('m_berita');
    }
    public function index()
    {
        $data['title'] = 'IKPMKU-DIY | Berita';
        $data['berita'] = $this->m_berita->GetBerita();

        $this->load->view('blog_template/header', $data);
        $this->load->view('berita', $data);

        $this->load->view('blog_template/footer');
    }


    public function readmore($slug)
    {

        $data['title'] = 'IKPMKU-DIY | Berita';
        $data['berita1'] = $this->m_berita->GetBerita();

        $id = $this->uri->segment(3);
        $data['berita'] = $this->m_berita->BeritaSingle($id);

        $this->load->view('blog_template/header', $data);
        $this->load->view('readmore', $data);

        $this->load->view('blog_template/footer');
    }

    public function beritaa()
    {
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Berita";
        $data['berita'] = $this->m_berita->GetBerita();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/berita', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Tambah Data";
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tb_berita', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_berita->tambahBerita();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di tambah!</div>');
            redirect('berita/beritaa');
        }
    }
    public function ubah($id = null)
    {
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Edit Berita";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->m_berita->getBeritaById($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_berita', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_berita->ubahBerita();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('berita/beritaa');
        }
    }
    public function hapus($id)
    {
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->db->where('id', $id);
        $this->db->delete('tb_berita');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data berhasil di hapus!</div>');
        redirect('berita/beritaa');
    }
}