<?php
class Suratmasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Suratmasuk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Surat Masuk';
        $data['suratmasuk'] = $this->Suratmasuk_model->getAllSuratMasuk();
        $this->load->view('templates/header', $data);
        $this->load->view('suratmasuk/index', $data);
        $this->load->view('templates/footer');
    }
}