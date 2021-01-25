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
            $where      = $this->CI->session->userdata('username');
            $query      = $this->Auth_m->get_pegawai($where);
            $pegawai    = $query->row();
            $data       = [
                'row' => $pegawai,
                'who' => 'pegawai'
            ];
            $this->template->load('template', 'simpanan', $data);
        } else {
            $where      = $this->CI->session->userdata('username');
            $query      = $this->Auth_m->get_anggota($where);
            $anggota    = $query->row();
            $data       = [
                'row' => $anggota,
                'who' => 'anggota'
            ];
            $this->template->load('template', 'simpanan', $data);
        }

        $this->template->load('template', 'simpanan');
    }

}
