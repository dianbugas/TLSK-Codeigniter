<?php
class Instansi_model extends CI_Model
{
    public function getAllDataInstansi()
    {
        return $this->db->get('tbl_instansi')->result_array();
    }

    public function tambahDataInstansi()
    {
        $data = [
            "institusi" => $this->input->post('institusi', true),
            "nama" => $this->input->post('nama', true),
            "status" => $this->input->post('status', true),
            "alamat" => $this->input->post('alamat', true),
            "kepsek" => $this->input
                "nip"
                "website"
                "email"
                "logo"
        ];
    }
}