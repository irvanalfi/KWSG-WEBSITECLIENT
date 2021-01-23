<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_c extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_already_login();
        $this->load->model('Auth_m');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function logout()
    {
        $params = ['username'];
        $this->session->unset_userdata($params);
        redirect('auth_c/login');
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        $queryPegawai = $this->Auth_m->pegawai($post);
        $queryAnggota = $this->Auth_m->anggota($post);
        if ($queryPegawai->num_rows() > 0) {
            // jika pegawai/karyawan
            $row = $queryPegawai->row();
            $params1 = array(
                'username' => $row->nama
            );
            $this->session->set_userdata($params1);
            // var_dump($params1);
            // die();
            echo "<script>
            alert('selamat login berhasil');
            window.location='" . site_url('home_c') . "';
            </script>";
        } else if ($queryAnggota->num_rows() > 0) {
            // jika anggota
            $row = $queryAnggota->row();
            $params2 = array(
                'username' => $row->nm_ang
            );
            $this->session->set_userdata($params2);
            var_dump($params2);
            die();
            echo "<script>
            alert('selamat login berhasil');
            window.location='" . site_url('home_c') . "';
            </script>";
            // berhasil login 

        } else {
            // jika query gagal di load 
            echo "<script>alert('anda gagal login');
            window.location='" . site_url('auth_c/login') . "';
            </script>";
        }
    }
}
