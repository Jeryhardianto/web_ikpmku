<?php
class M_kontak extends CI_Model
{
    public function GetSaranKritik()
    {
        $saran_kritik = $this->db->query('SELECT * FROM saran_kritik');
        return $saran_kritik;
    }
    public function get_Kirim()
    {
        $data = [
            "name"       => htmlspecialchars($this->input->post('name', true)),
            "email"      => htmlspecialchars($this->input->post('email', true)),
            "message"    => htmlspecialchars($this->input->post('message', true)),
            "tgl_pesan"  => time()
        ];
        $this->db->insert('saran_kritik', $data);
    }
}