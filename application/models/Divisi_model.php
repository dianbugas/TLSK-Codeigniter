<?php
class Divisi_model extends CI_Model
{
    public function getAllDataDivisi()
    {
        return $this->db->get('divisi')->result_array();
    }
}