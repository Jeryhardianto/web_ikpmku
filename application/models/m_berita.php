<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_berita extends CI_Model
{
    public function GetBerita()
    {
        $berita = $this->db->query('SELECT * FROM tb_berita');
        return $berita;
    }
    public function tambahBerita()
    {
        $data = array(
            "id" => $this->input->post('id', true),
            "judul" => htmlspecialchars($this->input->post('judul', true)),
            "isi" => htmlspecialchars($this->input->post('isi', true)),
            "penulis" => htmlspecialchars($this->input->post('penulis', true)),
            "image" => $this->_uploadImage(),
            "tanggal" => htmlspecialchars($this->input->post('tanggal', true)),

        );
        $this->db->insert('tb_berita', $data);
    }
    private function _uploadImage()
    {
        $config['upload_path']      = './upload/berita/';
        $config['allowed_types']      = 'gif|jpg|png';
        $config['max_size']      = '2048';
        $config['file_name']      = "berita" . time();
        $config['overwrite']      = 'true';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            return $this->upload->data('file_name');
        }
        return "default.jpg";
    }
    public function getBeritaById($id)
    {
        return $this->db->get_where('tb_berita', ['id' => $id])->row_array();
    }
    public function ubahBerita()
    {
        $data = [
            "judul" => htmlspecialchars($this->input->post('judul', true)),
            "isi" => htmlspecialchars($this->input->post('isi', true)),
            "penulis" => htmlspecialchars($this->input->post('penulis', true)),
            "tanggal" => htmlspecialchars($this->input->post('tanggal', true)),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_berita', $data);
    }
    public function BeritaSingle($id)
    {
        $berita = $this->db->select('*')
            ->from('tb_berita')
            ->where('id', $id)
            ->get();
        return $berita;
    }
    function get_one($slug)
    {
        $this->db->get_where('tb_berita', array('judul' => $slug));
        $query = $this->db->get('tb_berita');
        return $query->row();
    }
    function update_counter($slug)
    {
        $this->db->where('judul', urldecode($slug));
        $this->db->select('view');
        $count = $this->db->get('tb_berita')->row();
        $this->db->where('judul', urldecode($slug));
        $this->db->set('view', ($count->view + 1));
        $this->db->update('tb_berita');
    }
}