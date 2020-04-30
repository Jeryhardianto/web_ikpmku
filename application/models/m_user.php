<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_user extends CI_Model
{
    public function get($email)
    {
        $this->db->where('email', $email);
        $result = $this->db->get('user')->row();
        return $result;
    }
}