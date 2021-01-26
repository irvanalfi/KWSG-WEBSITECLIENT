<?php

class Simpanan_c extends CI_Controller {

    protected $CI;

    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
        $this->load->model('Auth_m');
        $this->load->model('Simpanan_m');
    }

    public function index()
    {
        // $data['title'] = 'Simpanan';
        // $data['t_saldo_simpanan'] = $this->Simpanan_m->getAllSimpananIDPegawai;

        if ($this->CI->session->userdata('status') == 'pegawai') {
            $data       = [
                'username'  => $this->CI->session->userdata('username'),
                'nopeg'     => $this->CI->session->userdata('nopeg'),
                'status'    => $this->CI->session->userdata('status')
            ];
            $this->template->load('template', 'simpanan', $data);
        } else {
            $data       = [
                'username'  => $this->CI->session->userdata('username'),
                'noang'     => $this->CI->session->userdata('noang'),
                'status'    => $this->CI->session->userdata('status')
            ];
            $this->template->load('template', 'simpanan', $data);
        }

    }

}
