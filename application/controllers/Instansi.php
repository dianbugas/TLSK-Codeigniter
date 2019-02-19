<?php

class Instansi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Instansi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Instansi';
        $data['tbl_instansi'] = $this->Instansi_model->getAllDataInstansi();
        $this->load->view('templates/header', $data);
        $this->load->view('instansi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Instansi';
        $this->form_validation->set_rules('institusi', 'Institusi', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kepsek', 'Kepsek', 'required');
        $this->form_validation->set_rules('nip', 'Nip', 'required');
        $this->form_validation->set_rules('website', 'Website', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('logo', 'Logo', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('instansi/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Suratkeluar_model->tambahDataInstansi();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('instansi');
        }
    }
}