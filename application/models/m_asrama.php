<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_asrama extends CI_Model
{
    public function GetAsrama()
    {
        $asrama = $this->db->query('SELECT * FROM tb_asrama');
        return $asrama;
    }
    public function tambahAsrama()
    {
        $post = $this->input->post();
        $this->id = "Asrama" . time();
        $this->image = $this->_uploadImage();
        $this->asrama = $post["asrama"];
        $this->alamat = $post["alamat"];
        $this->ketua = $post["ketua"];
        $this->no_hp = $post["no_hp"];
        $this->daya_tampung = $post["daya_tampung"];
        $this->map = $post["map"];
        $this->j_kamar_kosong = $post["j_kamar_kosong"];

        $this->db->insert('tb_asrama', $this);
    }
    private function _uploadImage()
    {

        $config['upload_path']      = './upload/asrama/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 2048;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            return $this->upload->data('file_name');
        }
        return "default.jpg";
    }

    public function GetAsramaById($id)
    {
        return $this->db->get_where('tb_asrama', ['id' => $id])->row_array();
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete('tb_asrama', array("id" => $id));
    }
    public function getHapus($id)
    {
        return $this->db->get_where('tb_asrama', ['id' => $id])->row();
    }
    private function _deleteImage($id)
    {
        $nama   = $this->getHapus($id);
        if ($nama->image != "default.jpg") {
            $filename = explode(".", $nama->image)[0];
            return array_map('unlink', glob(FCPATH . "./upload/asrama/$filename.*"));
        }
    }
    public function AsramaSingle($id)
    {
        $asrama = $this->db->select('*')
            ->from('tb_asrama')
            ->where('id', $id)
            ->get();
        return $asrama;
    }
}