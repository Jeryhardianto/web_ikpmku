<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('m_galeri');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'IKPMKU-DIY | Galeri';
        $data['galeri'] = $this->m_galeri->GetGaleri();
        $this->load->view('blog_template/header', $data);
        $this->load->view('galeri');
        $this->load->view('blog_template/footer');
    }
    public function galerii()
    {
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['title'] = "Galeri";
        $data['galeri'] = $this->m_galeri->GetGaleri();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/galeri', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['title'] = "Tambah Data";
        $data['user'] = $this->db->get_where('user')->row_array();
        $data['galeri'] = $this->m_galeri->GetGaleri();
        $this->form_validation->set_rules('kegiatan', 'Nama Kegiatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tb_galeri', $data);
            $this->load->view('templates/footer');
        } else {
            $this->m_galeri->tambahGaleri();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di tambah!</div>');
            redirect('galeri/galerii');
        }
    }
    public function ubah($id = null)
    {
        $data['title']      = "Edit Data";
        $data['user']       = $this->db->get_where('user')->row_array();
        $data['galeri1']    = $this->db->get_where('tb_galeri', ['id' => $this->session->userdata('id')])->row_array();
        $data['galeri']     = $this->m_galeri->getGaleriById($id);

        $this->form_validation->set_rules('kegiatan', 'Nama Kegiatan', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_galeri', $data);
            $this->load->view('templates/footer');
        } else {
            $kegiatan = $this->input->post('kegiatan');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './upload/galeri/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['galeri1']['image'];

                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'upload/galeri/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');

                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set(['kegiatan' => $kegiatan]);
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('tb_galeri');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
            redirect('galeri/galerii');
        }
    }
    public function delete($id)
    {
        //fungsi ini untuk mencegah user masuk tanpa melalui login. 
        //atau hanya mengakses controller dari
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        if (!isset($id)) show_404();

        if ($this->m_galeri->delete($id)) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data berhasil di hapus!</div>');
            redirect('galeri/galerii');
        }
    }
}