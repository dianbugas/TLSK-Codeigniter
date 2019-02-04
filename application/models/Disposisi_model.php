<?php
class Disposisi_model extends CI_Model
{
    public function getAllDisposisi()
    {
        return $this->db->get('disposisi')->result_array();
    }

    public function tambahDataDisposisi()
    {
        $this
    }

    public function getDataDisposisiById($id)
    {
        return $this->db->get_where('disposisi', ['id' => $id])->result_array();
    }
}