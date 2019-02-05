<?php
class Disposisi_model extends CI_Model
{
    public function getAllDisposisi()
    {
        return $this->db->get('disposisi')->result_array();
    }

    public function tambahDataDisposisi()
    {
        $data = [
            "iddivisi" => $this->input->post('iddivisi', true),
            "keterangan" => $this->input->post('keterangan', true),
            "idsuratmasuk" => $this->input->post('idsuratmasuk', true)
        ];
        $this->db->insert('disposisi', $data);
    }

    public function getDisposisiById($id)
    {
        return $this->db->get_where('disposisi', ['id' => $id])->row_array();
    }

    public function editDataDisposisi($id)
    {
        $data = [
            "iddivisi" => $this->input->post('iddivisi', true),
            "keterangan" => $this->input->post('keterangan', true),
            "idsuratmasuk" => $this->input->post('idsuratmasuk', true)
        ];
        $this->db->where('id', $this->input->post($id));
        $this->db->update('disposisi', $data);
    }

    public function hapusDataDisposisi($id)
    {
        $this->db->delete('disposisi', ['id' => $id]);
    }

    public function cariDataDisposisi()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('iddivis', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->or_like('idsuratmasuk', $keyword);
        return $this->db->get('disposisi')->result_array();
    }
}