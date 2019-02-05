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
            "tanggal_surat" => $this->input->post('tanggal_surat', true),
            "dari" => $this->input->post('dari', true),
            "kepada" => $this->input->post('kepada', true),
            "perihal" => $this->input->post('perihal', true),
            "lampiran" => $this->input->post('lampiran', true),
            "keterangan" => $this->input->post('keterangan', true),
            "surat" => $this->input->post('surat', true)
        ];
        $this->db->insert('suratkeluar', $data);
    }

    public function editDataSuratKeluar($id)
    {
        $data = [
            "nomor_surat" => $this->input->post('nomor_surat', true),
            "tanggal_surat" => $this->input->post('tanggal_surat', true),
            "dari" => $this->input->post('dari', true),
            "kepada" => $this->input->post('kepada', true),
            "perihal" => $this->input->post('perihal', true),
            "lampiran" => $this->input->post('lampiran', true),
            "keterangan" => $this->input->post('keterangan', true),
            "surat" => $this->input->post('surat', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('suratkeluar', $data);
    }

    public function getSuratKeluarById($id)
    {
        return $this->db->get_where('suratkeluar', ['id' => $id])->row_array();
    }

    public function hapusDataSuratKeluar($id)
    {
        $this->db->delete('suratkeluar', ['id' => $id]);
    }

    public function save()
    {
        $post = $this->input->post();
        $this->surat = uniqid();
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->surat = $this->_uploadImage();
        $this->description = $post["description"];
        $this->db->insert($this->_table, $this);
    }

    public function cariDataSuratKeluar()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nomor_surat', $keyword);
        $this->db->or_like('tanggal_surat', $keyword);
        $this->db->or_like('dari', $keyword);
        $this->db->or_like('kepada', $keyword);
        $this->db->or_like('perihal', $keyword);
        $this->db->or_like('lampiran', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->or_like('surat', $keyword);
        return $this->db->get('suratkeluar')->result_array();
    }
}