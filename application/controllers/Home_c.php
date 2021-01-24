<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_c extends CI_Controller
{

    protected $CI;

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->CI = &get_instance();
        $this->load->model('Auth_m');
    }

    public function index()
    {
        if ($this->CI->session->userdata('status') == 'pegawai') {
            $where      = $this->CI->session->userdata('username');
            $query      = $this->Auth_m->get_pegawai($where);
            $pegawai    = $query->row();
            $data       = [
                'row' => $pegawai,
                'who' => 'pegawai'
            ];
            $this->template->load('template', 'home', $data);
        } else {
            $where      = $this->CI->session->userdata('username');
            $query      = $this->Auth_m->get_anggota($where);
            $anggota    = $query->row();
            $data       = [
                'row' => $anggota,
                'who' => 'anggota'
            ];
            $this->template->load('template', 'home', $data);
        }
    }
}
