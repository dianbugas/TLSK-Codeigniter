<?php 
class Suratkeluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Suratkeluar_model');
        $this->load->library('form_validation');
        $this->load->library('uplode', $config);
    }

    public function index()
    {
        $data['judul'] = 'Daftar Surat Keluar';
        $data['suratkeluar'] = $this->Suratkeluar_model->getAllSuratKeluar();
        if ($this->input->post('keyword')) {
            $data['suratkeluar'] = $this->Suratkeluar_model->cariDataSuratKeluar();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('suratkeluar/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Surat Keluar';

        $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Tanggal Surat', 'required');
        $this->form_validation->set_rules('dari', 'Dari', 'required');
        $this->form_validation->set_rules('kepada', 'Kepada', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        $this->form_validation->set_rules('lampiran', 'Lampiran', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('surat', 'Surat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('suratkeluar/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Suratkeluar_model->tambahDataSuratKeluar();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('suratkeluar');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Surat Keluar';
        $data['suratkeluar'] = $this->Suratkeluar_model->getSuratKeluarById($id);

        $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Tanggal Surat', 'required');
        $this->form_validation->set_rules('dari', 'Dari', 'required');
        $this->form_validation->set_rules('kepada', 'Kepada', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        $this->form_validation->set_rules('lampiran', 'Lampiran', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('surat', 'Surat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('suratkeluar/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Suratkeluar_model->editDataSuratKeluar($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('suratkeluar');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Surat Keluar';
        $data['suratkeluar'] = $this->Suratkeluar_model->getSuratKeluarById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('suratkeluar/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Suratkeluar_model->hapusDataSuratKeluar($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('suratkeluar');
    }

    public function do_upload()
    {
        $this->load->library('upload');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'png|jpg|bmp';
        $this->upload->initialize($config);
        $upload = $this->upload->do_upload();
    }

}