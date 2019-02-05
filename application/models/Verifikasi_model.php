<?php
class Verifikasi_model extends CI_Model
{
    public function getAllDisposisi()
    {
        return $this->db->get('verifikasi')->result_array();
    }
}