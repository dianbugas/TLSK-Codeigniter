<?php
class Divisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Divisi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Divisi';
        $data['divisi'] = $this->Divisi_model->getAllDataDivisi();
        if ($this->input->post('keyword')) {
            $data['divisi'] = $this->Divisi_model->cariDataDivisi();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('divisi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Divisi';

    }

}
