<?php
class Disposisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Disposisi_model');
        //$this->load->helper('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Disposisi';
        $data['disposisi'] = $this->Disposisi_model->getAllDisposisi();
        $this->load->view('templates/header', $data);
        $this->load->view('disposisi/index', $data);
        $this->load->view('templates/footer');
    }
}