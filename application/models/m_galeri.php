<?php
class M_galeri  extends CI_Model
{
    public function GetGaleri()
    {
        $galeri = $this->db->query('SELECT * FROM tb_galeri');
        return $galeri;
    }
    public function tambahGaleri()
    {
        $post           = $this->input->post();
        $this->id       = "galeri" . time();
        $this->kegiatan = $post["kegiatan"];
        $this->image    = $this->_uploadImage();

        $this->db->insert('tb_galeri', $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']       = './upload/galeri/';
        $config['allowed_types']     = 'gif|jpg|png|JPG';
        $config['image_width']       = 6000;
        $config['image_height']      = 4000;
        $config['max_size']          = 9216;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            return $this->upload->data('file_name');
        } else {
            return "default.jpg";
        }
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete('tb_galeri', array("id" => $id));
    }
    public function getHapus($id)
    {
        return $this->db->get_where('tb_galeri', ['id' => $id])->row();
    }
    private function _deleteImage($id)
    {
        $nama   = $this->getHapus($id);
        if ($nama->image != "default.jpg") {
            $filename = explode(".", $nama->image)[0];
            return array_map('unlink', glob(FCPATH . "./upload/galeri/$filename.*"));
        }
    }
    public function getGaleriById($id)
    {
        return $this->db->get_where('tb_galeri', ['id' => $id])->row_array();
    }
}