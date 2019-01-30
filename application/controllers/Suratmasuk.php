<?php
class Suratmasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct;
    }

    public function index()
    {
        $data['judul'] = 'Surat Masuk';
        $data['suratmasuk']->$this->Suratmasuk_model->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('suratmasuk/index', $data);
        $this->load->view('templates/footer');
    }
}