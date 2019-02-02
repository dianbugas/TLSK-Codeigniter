<?php 
class Suratkeluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Suratkeluar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Surat Keluar';
        $data['suratkeluar'] = $this->Suratkelur_model->getAllSuratKeluar();
        if ($this->input->post('keyword')) {
            $data['suratkeluar'] = $this->Suratkeluar_model->cariDataSuratKeluar();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('suratkeluar/index', $data);
        $this->load->view('templates/footer');
    }
}