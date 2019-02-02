<?php
class Suratkeluar_model extends CI_Model
{
    public function getAllSuratKeluar()
    {
        return $this->db->get('suratkeluar')->result_array();
    }
}