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
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password]');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $data);
            $this->load->view('auth/register', $data);
            $this->load->view('templates/footer');
        } else {
            //user save
        }
    }
}