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
        // if ($this->input->post('keyword')) {
        //     $data['divisi'] = $this->Divisi_model->cariDataDivisi();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('divisi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Divisi';
        $this->form_validation->set_rules('divisi', 'Divisi', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('divisi/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Divisi_model->tambahDataDivisi();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('divisi');
        }

    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Divisi';
        $data['divisi'] = $this->Divisi_model->getDivisiById($id);
        $this->form_validation->set_rules('divisi', 'Divisi', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('divisi/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Divisi_model->editDataDivisi($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('divisi');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Divisi';
        $data['divisi'] = $this->Divisi_model->getDivisiById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('divisi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Divisi_model->hapusDataDivisi($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('divisi');
    }

}
