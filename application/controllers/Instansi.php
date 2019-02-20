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
        $data['instansi'] = $this->Instansi_model->getAllDataInstansi();
        if ($this->input->post('keyword')) {
            $data['instansi'] = $this->Instansi_model->cariDataInstansi();
        }
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
        $this->form_validation->set_rules('iduser', 'iduser', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('instansi/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Instansi_model->tambahDataInstansi();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('instansi');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Ubah data Instansi';
        $data['instansi'] = $this->Instansi_model->getInstansiById($id);
        $this->form_validation->set_rules('institusi', 'Institusi', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kepsek', 'Kepsek', 'required');
        $this->form_validation->set_rules('nip', 'Nip', 'required');
        $this->form_validation->set_rules('website', 'Website', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('logo', 'Logo', 'required');
        $this->form_validation->set_rules('iduser', 'iduser', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('instansi/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Instansi_model->editDataInstansi($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('instansi');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail data Instansi';
        $data['instansi'] = $this->Instansi_model->getInstansiById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('instansi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Instansi_model->hapusDataInstansi($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('instansi');
    }
}