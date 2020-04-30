<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asrama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari

        $this->load->model('m_asrama');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'IKPMKU-DIY | Asrama';
        $data['asrama'] = $this->m_asrama->GetAsrama();
        $this->load->view('blog_template/header', $data);
        $this->load->view('asrama', $data);
        $this->load->view('blog_template/footer');
    }
    public function asramaa()
    {
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['title'] = 'Asrama';
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['asrama'] = $this->m_asrama->GetAsrama();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/asrama', $data);
        $this->load->view('templates/footer', $data);
    }
    public function tambah()
    {
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = 'Tambah Data';
        $data['asrama'] = $this->m_asrama->GetAsrama();

        $this->form_validation->set_rules('asrama', 'Asrama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('ketua', 'Ketua Asrama', 'required');
        $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric');
        $this->form_validation->set_rules('daya_tampung', 'Daya Tampung', 'required|numeric');
        $this->form_validation->set_rules('map', 'Map', 'required');
        $this->form_validation->set_rules('j_kamar_kosong', 'Jumlah Kamar Kosong', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tb_asrama', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->m_asrama->tambahAsrama();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di tambah!</div>');
            redirect('asrama/asramaa');
        }
    }
    public function ubah($id = null) //Message: Too few arguments to function Struktur::ubah(), 0 passed in C:\xampp\htdocs\ikpmku\system\core\CodeIgniter.php on line 532 and exactly 1 expected --> tambahkan NULL = public function ubah($id = null)
    {
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Edit Data";
        $data['asrama'] = $this->m_asrama->getAsramaById($id);
        $data['asrama1'] = $this->db->get_where('tb_asrama', ['id' => $this->session->userdata('id')])->row_array();

        $this->form_validation->set_rules('asrama', 'Asrama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('ketua', 'Ketua Asrama', 'required');
        $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric');
        $this->form_validation->set_rules('daya_tampung', 'Daya Tampung', 'required|numeric');
        $this->form_validation->set_rules('map', 'Map', 'required');
        $this->form_validation->set_rules('j_kamar_kosong', 'Jumlah Kamar Kosong', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_asrama', $data);
            $this->load->view('templates/footer');
        } else {
            $asrama         = $this->input->post('asrama');
            $alamat         = $this->input->post('alamat');
            $ketua          = $this->input->post('ketua');
            $no_hp          = $this->input->post('no_hp');
            $daya_tampung   = $this->input->post('daya_tampung');
            $map = $this->input->post('map');
            $j_kamar_kosong = $this->input->post('j_kamar_kosong');

            // cek jika gambar yang diupload
            $upload_image = $_FILES['image']['name']; //nama ini di ambil dari file edit_struktur
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|JPG';
                $config['max_size'] = '2048';
                $config['upload_path'] = './upload/asrama/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['asrama1']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . './upload/asrama/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set([
                'asrama' => $asrama,
                'alamat' => $alamat,
                'ketua' => $ketua,
                'no_hp' => $no_hp,
                'daya_tampung' => $daya_tampung,
                'map' => $map,
                'j_kamar_kosong' => $j_kamar_kosong
            ]);
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('tb_asrama');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('asrama/asramaa');
        }
    }
    public function delete($id)
    {
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        if (!isset($id)) show_404();

        if ($this->m_asrama->delete($id)) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data berhasil di hapus!</div>');
            redirect('asrama/asramaa');
        }
    }
    public function detail()
    {

        $data['title'] = 'Asrama';
        $data['asrama1'] = $this->m_asrama->GetAsrama();
        $id = $this->uri->segment(3);
        $data['asrama'] = $this->m_asrama->AsramaSingle($id);

        $this->load->view('blog_template/header', $data);
        $this->load->view('detail', $data);
        $this->load->view('blog_template/footer');
    }
}