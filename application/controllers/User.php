<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function profile()
    {
        $data['judul'] = 'Halaman Profile';

        if (!$this->User_model->is_LoggedIn()) {
            redirect('login');
        }

        $data['user'] = $this->User_model->get_user('id', $_SESSION['user_id']);
        $this->load->view('templates/header', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer');
    }
}

//halaman profile belum dibuat