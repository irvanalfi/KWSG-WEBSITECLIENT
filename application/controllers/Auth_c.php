<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_c extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_already_login();
        $this->load->model(['Auth_m', 'Anggota_m']);
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function logout()
    {
        $params = ['user_name'];
        $this->session->unset_userdata($params);
        redirect('auth_c/login');
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            // jika query berhasil di load 
            $query = $this->Anggota_m->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'no_ang' => $row->user_name
                    // jika ingin menambahkan rule baru semisal status admin atau tidak admin tinggal di tambahkan di sini 
                );
                $this->session->set_userdata($params);
                echo "<script>alert('selamat login berhasil');
                    window.location='" . site_url('home_c') . "';
                    </script>";
            } else {
                // jika query gagal di load 
                echo "<script>alert('selamat login berhasil');
                    window.location='" . site_url('auth_c/login') . "';
                    </script>";
            }
        }
        // $user_name = $this->input->post('user_name');
        // $pass = $this->input->post('pass');

        // $cekLogin = $this->login->auth($user_name, $pass);

        // if ($cekLogin) {
        //     foreach ($cekLogin as $row) {
        //         $this->session->set_userdata('user_name', $row->user_name);
        //         $this->session->set_userdata('pass', $row->pass);
        //     }

        //     redirect('home');
        // } else {
        //     $this->session->set_flashdata('pesan', 'No Anggota dan PIN Kartu Sipintar salah!!!');

        //     redirect('login');
        // }
    }
}
