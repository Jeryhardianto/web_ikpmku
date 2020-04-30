<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
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
        $this->load->model('m_mahasiswa');
    }
    public function index()
    {
        $data['title'] = "Total Mahasiswa";
        $data['mahasiswa'] = $this->m_mahasiswa->GetMahasiswa();
        $data['user'] = $this->db->get_where('user')->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/mahasiswa', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['title'] = "Tambah Data ";
        $data['user'] = $this->db->get_where('user')->row_array();
        // $data['visi_misi'] = $this->m_visi_misi->getVisiMisiById($id);
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tb_mahasiswa', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_mahasiswa->tambahMahasiswa();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di tambah!</div>');
            redirect('mahasiswa');
        }
    }


    public function ubah($id = null) //Message: Too few arguments to function Struktur::ubah(), 0 passed in C:\xampp\htdocs\ikpmku\system\core\CodeIgniter.php on line 532 and exactly 1 expected --> tambahkan NULL = public function ubah($id = null)
    {
        $data['title'] = "Edit Data Mahasiswa";
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['mahasiswa'] = $this->m_mahasiswa->getMahasiswaById($id);

        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_mahasiswa', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_mahasiswa->ubahMahasiswa();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('mahasiswa');
        }
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_mahasiswa');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data berhasil di hapus!</div>');
        redirect('mahasiswa');
    }
}