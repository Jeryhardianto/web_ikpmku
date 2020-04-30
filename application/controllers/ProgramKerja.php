<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProgramKerja extends CI_Controller
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
        $this->load->model('m_programKerja');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Program Kerja";
        $data['programkerja'] = $this->m_programKerja->GetprogramKerja();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/program_kerja', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Tambah Data ";
        $data['status'] = $this->m_programKerja->Getstatus();
        $this->form_validation->set_rules('program_kerja', 'Program Kerja', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('sasaran', 'Sasaran', 'required');
        $this->form_validation->set_rules('mitra', 'Mitra', 'required');
        $this->form_validation->set_rules('pj', 'Penanggungjawab', 'required');
        $this->form_validation->set_rules('class', 'Class', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tb_programkerja', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_programKerja->tambahProgramKerja();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di tambah!</div>');
            redirect('ProgramKerja');
        }
    }
    public function ubah($id = null)
    {
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Edit Program Kerja";
        $data['status'] = ['TERLAKSANAKAN', 'BELUM TERLAKSANAKAN'];
        $data['class'] = ['badge badge-danger', 'badge badge-success'];
        $data['programkerja'] = $this->m_programKerja->getProgramKerjaById($id);

        $this->form_validation->set_rules('program_kerja', 'Program Kerja', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
        $this->form_validation->set_rules('sasaran', 'Sasaran', 'required');
        $this->form_validation->set_rules('mitra', 'Mitra', 'required');
        $this->form_validation->set_rules('pj', 'Penanggungjawab', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('class', 'Class', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_programkerja', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_programKerja->ubahProgramKerja();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('programkerja');
        }
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_programkerja');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data berhasil di hapus!</div>');
        redirect('programkerja');
    }
}