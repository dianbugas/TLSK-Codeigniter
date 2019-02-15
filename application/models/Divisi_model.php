<?php
class Divisi_model extends CI_Model
{
    public function getAllDataDivisi()
    {
        return $this->db->get('divisi')->result_array();
    }

    public function tambahDataDivisi()
    {
        $data = [
            "divisi" => $this->input->post('divisi', true),
            "nama" => $this->input->post('nama', true),
        ];
        $this->db->insert('divisi', $data);
    }

    public function editDataDivisi($id)
    {
        $data = [
            "divisi" => $this->input->post('divisi', true),
            "nama" => $this->input->post('nama', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('divisi', $data);
    }

    public function getDivisiById($id)
    {
        return $this->db->get_where('divisi', ['id' => $id])->row_array();
    }

    public function hapusDataDivisi($id)
    {
        $this->db->delete('divisi', ['id' => $id]);
    }

    public function cariDataDivisi()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('divisi', $keyword);
        $this->db->or_like('nama', $keyword);
        return $this->db->get('divisi')->result_array();
    }
}