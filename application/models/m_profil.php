<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_profil extends CI_Model
{
    //model untuk profil
    public function GetProfil()
    {
        $profil = $this->db->query('SELECT * FROM profil');
        return $profil;
    }
    public function getProfilById($id)
    {
        return $this->db->get_where('profil', ['id' => $id])->row_array();
    }
    public function ubahProfil()
    {
        $data   = [
            "profil" => htmlspecialchars($this->input->post('profil', true)),

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('profil', $data);
    }
    //model untuk struktur organisasi
    public function GetStruktur()
    {
        $struktur = $this->db->query('SELECT * FROM tb_struktur');
        return $struktur;
    }
    public function tambahStruktur()
    {
        $data   = [
            "nama" => htmlspecialchars($this->input->post('nama', true)),
            "jabatan" => htmlspecialchars($this->input->post('jabatan', true))
        ];
        $this->db->insert('tb_struktur', $data);
    }
    public function getStrukturById($id)
    {
        return $this->db->get_where('tb_struktur', ['id' => $id])->row_array();
    }
    public function ubahStruktur()
    {
        $data   = [
            "nama" => htmlspecialchars($this->input->post('nama', true)),
            "jabatan" => htmlspecialchars($this->input->post('jabatan', true))
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_struktur', $data);
    }
}