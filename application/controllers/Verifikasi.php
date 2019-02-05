<?php
class Verifikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Verifikasi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Data Verifikasi';
        $this->load->view('templates/header', $data);
        $this->load->view('verifikasi/index', $data);
        $this->load->view('templates/footer');
    }
}