<?php
class Verifikasi_model extends CI_Model
{
    public function getAllDisposisi()
    {
        return $this->db->get('verifikasi')->result_array();
    }

    public function tambahDataVerifikasi()
    {
        $data = [
            "persetujuan" => $this->input->post('persetujuan', true),
            "keterangan" => $this->input->post('keterangan', true),
            "idsuratkeluar" => $this->input->post('idsuratkeluar', true)
        ];
        $this->db->insert('verifikasi', $data);
    }

    public function editDataVerifikasi($id)
    {
        $data = [
            "persetujuan" => $this->input->post('persetujuan', true),
            "keterangan" => $this->input->post('keterangan', true),
            "idsuratkeluar" => $this->input->post('idsuratkeluar', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('verifikasi', $data);
    }

    public function getVerifikasiById($id)
    {
        return $this->db->get_where('verifikasi', ['id' => $id])->row_array();
    }

    public function hapusDataVerifikasi($id)
    {
        $this->db->delete('verifikasi', ['id' => $id]);
    }

    public function cariDataVerifikasi()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('persetujuan', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->or_like('idsuratkeluar', $keyword);
        return $this->db->get('verifikasi')->result_array();
    }
}