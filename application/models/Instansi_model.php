<?php
class Instansi_model extends CI_Model
{
    public function getAllDataInstansi()
    {
        return $this->db->get('tbl_instansi')->result_array();
    }
}