<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_programKerja extends CI_Model
{
    //model untuk programkerja
    public function GetprogramKerja()
    {
        $program_kerja = $this->db->query('SELECT * FROM tb_programkerja');
        return $program_kerja;
    }
    public function Getstatus()
    {
        $status = $this->db->query('SELECT * FROM tb_status');
        return $status;
    }
    public function getStatusById($id)
    {
        return $this->db->get_where('tb_programkerja', ['id' => $id])->row_array();
    }
    public function tambahProgramKerja()
    {
        $data   = [
            "program_kerja" => htmlspecialchars($this->input->post('program_kerja', true)),
            "tujuan" => htmlspecialchars($this->input->post('tujuan', true)),
            "sasaran" => htmlspecialchars($this->input->post('sasaran', true)),
            "mitra" => htmlspecialchars($this->input->post('mitra', true)),
            "pj" => htmlspecialchars($this->input->post('pj', true)),
            "tanggal_pelaksanaan" => htmlspecialchars($this->input->post('tanggal_pelaksanaan', true)),
            "class" => htmlspecialchars($this->input->post('class', true)),
            "status" => htmlspecialchars($this->input->post('status', true)),
        ];
        $this->db->insert('tb_programkerja', $data);
    }
    public function getProgramKerjaById($id)
    {
        return $this->db->get_where('tb_programkerja', ['id' => $id])->row_array();
    }
    public function ubahProgramKerja()
    {
        $data   = [
            "program_kerja" => htmlspecialchars($this->input->post('program_kerja', true)),
            "tujuan" => htmlspecialchars($this->input->post('tujuan', true)),
            "sasaran" => htmlspecialchars($this->input->post('sasaran', true)),
            "mitra" => htmlspecialchars($this->input->post('mitra', true)),
            "pj" => htmlspecialchars($this->input->post('pj', true)),
            "tanggal_pelaksanaan" => htmlspecialchars($this->input->post('tanggal_pelaksanaan', true)),
            "class" => htmlspecialchars($this->input->post('class', true)),
            "status" => htmlspecialchars($this->input->post('status', true)),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_programkerja', $data);
    }
}