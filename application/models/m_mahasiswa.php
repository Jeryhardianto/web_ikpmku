<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_mahasiswa extends CI_Model
{
    //model untuk mahasiswa
    public function GetMahasiswa()
    {
        $mahasiswa = $this->db->query('SELECT * FROM tb_mahasiswa');
        return $mahasiswa;
    }
    public function GetMahasiswa1()
    {
        $mahasiswa = "SELECT * FROM tb_mahasiswa";
        return $this->db->query($mahasiswa)->result();
    }

    public function tambahMahasiswa()
    {
        $data   = [
            "kabupaten" => htmlspecialchars($this->input->post('kabupaten', true)),
            "jumlah" => htmlspecialchars($this->input->post('jumlah', true))
        ];
        $this->db->insert('tb_mahasiswa', $data);
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('tb_mahasiswa', ['id' => $id])->row_array();
    }
    public function ubahMahasiswa()
    {
        $data   = [
            "kabupaten" => htmlspecialchars($this->input->post('kabupaten', true)),
            "jumlah" => htmlspecialchars($this->input->post('jumlah', true)),

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_mahasiswa', $data);
    }
}