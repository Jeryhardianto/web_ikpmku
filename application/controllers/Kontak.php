<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_kontak');
    }

    public function index()
    {
        $data['title'] = 'IKPMKU-DIY | Hubungi Kami';
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('message', 'Saran & Kritik', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('blog_template/header', $data);
            $this->load->view('kontak', $data);
            $this->load->view('blog_template/footer');
        } else {
            $this->m_kontak->get_Kirim();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Saran dan Kritik Terkirim!</div>');
            redirect('kontak');
        }
    }
    public function saran()
    {
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['title'] = 'Saran & Kritik';
        $data['saran_kritik'] = $this->m_kontak->GetSaranKritik();
        $data['user'] = $this->db->get_where('user')->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/saran', $data);
        $this->load->view('templates/footer');
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('saran_kritik');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data berhasil di hapus!</div>');
        redirect('kontak/saran');
    }
}