<?php
class Instansi_model extends CI_Model
{
    public function getAllDataInstansi()
    {
        return $this->db->get('instansi')->result_array();
    }

    public function tambahDataInstansi()
    {
        $data = [
            "institusi" => $this->input->post('institusi', true),
            "nama" => $this->input->post('nama', true),
            "status" => $this->input->post('status', true),
            "alamat" => $this->input->post('alamat', true),
            "kepsek" => $this->input->post('kepsek', true),
            "nip" => $this->input->post('nip', true),
            "website" => $this->input->post('website', true),
            "email" => $this->input->post('email', true),
            "logo" => $this->input->post('logo', true),
            "id_user" => $this->input->post('iduser', true)
        ];
        $this->db->insert('instansi', $data);
    }

    public function editDataInstansi()
    {
        $data = [
            "institusi" => $this->input->post('institusi', true),
            "nama" => $this->input->post('nama', true),
            "status" => $this->input->post('status', true),
            "alamat" => $this->input->post('alamat', true),
            "kepsek" => $this->input->post('kepsek', true),
            "nip" => $this->input->post('nip', true),
            "website" => $this->input->post('website', true),
            "email" => $this->input->post('email', true),
            "logo" => $this->input->post('logo', true),
            "id_user" => $this->input->post('iduser', true)

        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('instansi', $data);
    }

    public function getInstansiById($id)
    {
        return $this->db->get_where('instansi', ['id' => $id])->row_array();
    }

    public function hapusDataInstansi($id)
    {
        $this->db->delete('instansi', ['id' => $id]);
    }

    public function cariDataInstansi()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('institusi', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('status', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('kepsek', $keyword);
        $this->db->or_like('nip', $keyword);
        $this->db->or_like('website', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('logo', $keyword);
        $this->db->or_like('iduser', $keyword);
        return $this->db->get('instansi')->result_array();
    }
}