<?php 
class Suratmasuk_model extends CI_Model
{
    public function getAllSuratMasuk()
    {
        return $this->db->get('suratmasuk')->result_array();
    }

    public function tambahDataSuratMasuk()
    {
        $data = [
            "nomor_surat" => $this->input->post('nomor_surat', true),
            "tanggal_surat" => $this->input->post('tanggal_surat', true),
            "tanggal_terima" => $this->input->post('tanggal_terima', true),
            "dari" => $this->input->post('dari', true),
            "perihal" => $this->input->post('perihal', true),
            "lampiran" => $this->input->post('lampiran', true),
            "surat" => $this->input->post('surat', true)
        ];

        $this->db->insert('suratmasuk', $data);
    }

    public function hapusDataSuratMasuk($id)
    {
        $this->db->delete('suratmasuk', ['id' => $id]);
    }

    public function getMasukById($id)
    {
        return $this->db->get_where('suratmasuk', ['id' => $id])->row_array();
    }
}