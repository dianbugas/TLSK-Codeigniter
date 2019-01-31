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

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Surat Masuk';

        $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Tanggal Surat', 'required');
        $this->form_validation->set_rules('tanggal_terima', 'Tanggal Terima', 'required');
        $this->form_validation->set_rules('dari', 'Dari', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        $this->form_validation->set_rules('lampiran', 'Lampiran', 'required');
        $this->form_validation->set_rules('surat', 'Surat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('suratmasuk/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Suratmasuk_model->tambahDataSuratMasuk();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('suratmasuk');
        }
    }

    public function hapus($id)
    {
        $this->Suratmasuk_model->hapusDataSuratMasuk($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('suratmasuk');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Surat Masuk';
        $data['suratmasuk'] = $this->Suratmasuk_model->getSuratMasukById($id);

        $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Tanggal Surat', 'required');
        $this->form_validation->set_rules('tanggal_terima', 'Tanggal Terima', 'required');
        $this->form_validation->set_rules('dari', 'Dari', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        $this->form_validation->set_rules('lampiran', 'Lampiran', 'required');
        $this->form_validation->set_rules('surat', 'Surat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('suratmasuk/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Suratmasuk_model->editDataSuratMasuk($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('suratmasuk');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Surat Masuk';
        $data['suratmasuk'] = $this->Suratmasuk_model->getSuratMasukById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('suratmasuk/detail', $data);
        $this->load->view('templates/footer');
    }
}