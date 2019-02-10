<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function register()
    {
        $data['judul'] = 'Halaman Register';
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password]');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/footer');
        } else {
            $this->User_model->insert_user();//save user
            $this->send_email_verification($this->input->post('email'), $_SESSION['token']); //verifikasi email
            redirect('login');
        }
    }

    public function send_email_verification($email, $token)
    {
        $this->load->library('email');
        $this->email->from('dianynf20@gmail.com', 'Dianaku');
        $this->email->to($email);
        $this->email->subject('register aplikasi auth local');
        $this->email->message("
                    Klik untuk konfirmasi pendaftaran
                    <a href='http://localhost/surat/auth/verify/$email/$token'>Konfirmasi Email</a>
                    ");
        $this->email->set_mailtype('html');
        $this->email->send();
    }

    public function verify_register($email, $token)
    {
        $user = $this->User_model->get_user('email', $email);

        //cek email
        if (!$user)
            die('email not exists');

        if ($user['token'] !== $token)
            die('token not match');

            //update user role
        $this->User_model->update_role($user['id'], 1);

            //set sessiom

            //redirct profile
        redirect('profile');
    }
}