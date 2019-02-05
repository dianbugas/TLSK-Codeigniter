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
        $data['verifikasi'] = $this->Verifikasi_model->getAllDisposisi();
        if ($this->input->post('keyword')) {
            $data['verifikasi'] = $this->Verifikasi_model->cariDataVerifikasi();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('verifikasi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Verifikasi';
        $this->form_validation->set_rules('persetujuan', 'Persetujuan', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('idsuratkeluar', 'Surat Keluar', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('verifikasi/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Verifikasi_model->tambahDataVerifikasi();
            $this->session->set_flashdata('flash', 'Dtambahkan');
            redirect('verifikasi');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Verifikasi';
        $data['verifikasi'] = $this->Verifikasi_model->getDataVerifikasiById($di);

        $this->form_validation->set_rules('persetujuan', 'Persetujuan', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('idsuratkeluar', 'Surat Keluar', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('verifikasi/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Verifikasi_model->editDataVerifikasi($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('verifikasi');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Verifikasi';
        $data['verifikasi'] = $this->Verifikasi_model->getDataVerifikasiById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('verifikasi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Verifikasi_model->hapusDataVerifikasi($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('verifikasi');
    }
}