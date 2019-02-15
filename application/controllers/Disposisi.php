<?php
class Disposisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Disposisi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Disposisi';
        $data['disposisi'] = $this->Disposisi_model->getAllDisposisi();
        if ($this->input->post('keyword')) {
            $data['disposisi'] = $this->Disposisi_model->cariDataDisposisi();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('disposisi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Disposisi';
        $this->form_validation->set_rules('iddivisi', 'Divisi', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('idsuratmasuk', 'Surat Masuk', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('disposisi/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Disposisi_model->tambahDataDisposisi();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('disposisi');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Detail Disposisi';
        $data['disposisi'] = $this->Disposisi_model->getDisposisiById($id);
        $this->form_validation->set_rules('iddivisi', 'Divisi', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('idsuratmasuk', 'Surat Masuk', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('disposisi/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Disposisi_model->editDataDisposisi($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('disposisi');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Dispoisi';
        $data['disposisi'] = $this->Disposisi_model->getDisposisiById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('disposisi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Disposisi_model->hapusDataDisposisi($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('disposisi');
    }
}