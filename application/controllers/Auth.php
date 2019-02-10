<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register()
    {
        $data['judul'] = 'Halaman Register';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/register', $data);
        $this->load->view('templates/footer');
    }
}