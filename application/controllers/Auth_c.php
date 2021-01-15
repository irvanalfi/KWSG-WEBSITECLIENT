<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_c extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_m', 'login');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function logout()
    {
        // session_destroy();
    }

    public function auth()
    {
        $user_name = $this->input->post('user_name');
        $pass = $this->input->post('pass');

        $cekLogin = $this->login->auth($user_name, $pass);

        if ($cekLogin) {
            foreach ($cekLogin as $row) {
                $this->session->set_userdata('user_name', $row->user_name);
                $this->session->set_userdata('pass', $row->pass);
            }

            redirect('home');
            
        } else {
            $this->session->set_flashdata('pesan', 'No Anggota dan PIN Kartu Sipintar salah!!!');
            
            redirect('login');
            
        }
    }
}
