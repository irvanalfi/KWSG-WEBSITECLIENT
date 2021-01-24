<?php
class Fungsi
{
    protected $CI;

    function __construct()
    {
        $this->CI = &get_instance();
    }

    function login_pegawai()
    {
        $this->CI->load->model('m_pass');
        $username   = $this->CI->session->userdata('username');
        $user_data  = $this->CI->Auth_m->get_pegawai($username)->row();
        return $user_data;
    }

    function login_anggota()
    {
        $this->CI->load->model('tbl_anggota');
        $username   = $this->CI->session->userdata('username');
        $user_data  = $this->CI->Auth_m->get_anggota($username)->row();
        return $user_data;
    }
}
