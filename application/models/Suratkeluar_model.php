<?php
class Suratkeluar_model extends CI_Model
{
    public function getAllSuratKeluar()
    {
        return $this->db->get('suratkeluar')->result_array();
    }

    public function tambahDataSuratKeluar()
    {
        $data = [
            "nomor_surat" => $this->input->post('nomor_surat', true),
            "tanggal_surat" => $this->input0 > post('tanggal_surat', true),
            "dari" => $this->input->post('dari', true),
            "kepada" => $this->input->post('kepada', true),
            "perihal" => $this->input->post('perihal', true),
            "lampiran" => $this->input->post('lampiran', true),
            "keterangan" => $this->input->post('keterangan', true),
            "surat" => $this->input->post('surat', true)
        ];
        $this->db->insert('suratkeluar', $data);
    }
}