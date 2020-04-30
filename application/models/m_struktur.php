<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_struktur extends CI_Model
{
    //model untuk struktur organisasi
    public function GetStruktur()
    {
        $struktur = $this->db->query('SELECT * FROM tb_struktur');
        return $struktur;
    }
    public function tambahStruktur()
    {

        $post = $this->input->post();
        $this->id = "profil" . time();
        $this->nama = $post["nama"];
        $this->jabatan = $post["jabatan"];
        $this->image = $this->_uploadImage();

        $this->db->insert('tb_struktur', $this);
    }

    private function _uploadImage()
    {

        $config['upload_path']      = './upload/struktur/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 2048;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            return $this->upload->data('file_name');
        }
        return "default.jpg";
    }


    public function getStrukturById($id)
    {
        return $this->db->get_where('tb_struktur', ['id' => $id])->row_array();
    }
    public function ubahStruktur()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->jabatan = $post["jabatan"];


        if (!empty($_FILES["image"]["nama"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        $this->db->update($this->tb_struktur, $this, array('id' => $post['id']));
        // $this->db->where('id', $this->input->post('id'));
        //$this->db->update('tb_struktur', $this);
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete('tb_struktur', array("id" => $id));
    }
    public function getHapus($id)
    {
        return $this->db->get_where('tb_struktur', ['id' => $id])->row();
    }
    private function _deleteImage($id)
    {
        $nama   = $this->getHapus($id);
        if ($nama->image != "default.jpg") {
            $filename = explode(".", $nama->image)[0];
            return array_map('unlink', glob(FCPATH . "./upload/struktur/$filename.*"));
        }
    }
    //Pagination
    public function GetStruktur1($limit, $start)
    {
        return $this->db->get('tb_struktur', $limit, $start)->result_array();
    }

    public function countAllStruktur()
    {
        return $this->db->get('tb_struktur')->num_rows();
    }
}