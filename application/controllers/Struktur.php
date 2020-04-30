<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Struktur extends CI_Controller
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
        $this->load->model('m_struktur');
    }
    public function index()
    {
        $data['title'] = "Data Pengurus IKPMKU";
        $data['user'] = $this->db->get_where('user')->row_array();
        //menghitung jumlah data di tabel tb_struktur
        $data['jumlah']   = $this->m_struktur->countAllStruktur();
        // $data['struktur'] = $this->m_struktur->GetStruktur();
        // pagination
        $this->load->library('pagination');

        // config
        $config['total_rows']   = $this->m_struktur->countAllStruktur();
        $config['per_page']     = 5;


        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['struktur'] = $this->m_struktur->GetStruktur1($config['per_page'], $data['start']);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/struktur', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Tambah Data ";

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
            $this->m_struktur->tambahStruktur();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di tambah!</div>');
            redirect('struktur');
        }
    }
    public function ubah($id = null) //Message: Too few arguments to function Struktur::ubah(), 0 passed in C:\xampp\htdocs\ikpmku\system\core\CodeIgniter.php on line 532 and exactly 1 expected --> tambahkan NULL = public function ubah($id = null)
    {
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Edit Data";
        $data['struktur'] = $this->m_struktur->getStrukturById($id);
        $data['struktur1'] = $this->db->get_where('tb_struktur', ['id' => $this->session->userdata('id')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_struktur', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $jabatan = $this->input->post('jabatan');

            // cek jika gambar yang diupload
            $upload_image = $_FILES['image']['name']; //nama ini di ambil dari file edit_struktur
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|JPG';
                $config['max_size'] = '2048';
                $config['upload_path'] = './upload/struktur/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['struktur1']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . './upload/struktur/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set(['nama' => $nama, 'jabatan' => $jabatan]);
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('tb_struktur');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('struktur');
        }
    }

    public function delete($id)
    {
        if (!isset($id)) show_404();

        if ($this->m_struktur->delete($id)) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data berhasil di hapus!</div>');
            redirect('struktur');
        }
    }
}