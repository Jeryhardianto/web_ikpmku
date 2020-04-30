<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_visi_misi extends CI_Model
{
  public function GetVisiMisi()
  {
    $visi_misi = $this->db->query('SELECT * FROM visi_misi');
    return $visi_misi;
  }
  public function tambahVisiMisi()
  {
    $data   = [
      "visi" => htmlspecialchars($this->input->post('visi', true)),
      "misi" => htmlspecialchars($this->input->post('misi', true))
    ];

    $this->db->insert('visi_misi', $data);
  }
  public function getVisiMisiById($id)
  {
    return $this->db->get_where('visi_misi', ['id' => $id])->row_array();
  }
  public function ubahVisiMisi()
  {
    $data   = [
      "visi" => htmlspecialchars($this->input->post('visi', true)),
      "misi" => htmlspecialchars($this->input->post('misi', true))
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('visi_misi', $data);
  }
}