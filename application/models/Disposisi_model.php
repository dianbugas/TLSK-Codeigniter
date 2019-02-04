<?php
class Disposisi_model extends CI_Model
{
    public function getAllDisposisi()
    {
        return $this->db->get('disposisi')->result_array();
    }
}