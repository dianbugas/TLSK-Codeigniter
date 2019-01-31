<?php 
class Suratmasuk_model extends CI_Model
{
    public function getAllSuratMasuk()
    {
        return $this->db->get('suratmasuk')->result_array();
    }
}