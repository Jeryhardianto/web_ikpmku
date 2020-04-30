<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Visi_misi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $this->load->model('m_visi_misi');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Visi & Misi";
        $data['visi_misi'] = $this->m_visi_misi->GetVisiMisi();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/visi_misi', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = "Tambah Visi & Misi";
        $data['user'] = $this->db->get_where('user')->row_array();
        // $data['visi_misi'] = $this->m_visi_misi->getVisiMisiById($id);
        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambah_visi_misi', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_visi_misi->tambahVisiMisi();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('visi_misi');
        }
    }
    public function ubah($id)
    {
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Edit Visi & Misi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['visi_misi'] = $this->m_visi_misi->getVisiMisiById($id);

        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_visi_misi', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_visi_misi->ubahVisiMisi();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('visi_misi');
        }
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('visi_misi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data berhasil di hapus!</div>');
        redirect('visi_misi');
    }
}