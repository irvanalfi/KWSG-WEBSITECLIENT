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

    // public function index()
    // {
    //     if ($this->CI->session->userdata('status') == 'pegawai') {
    //         $data       = [
    //             'username'  => $this->CI->session->userdata('username'),
    //             'nopeg'     => $this->CI->session->userdata('nopeg'),
    //             'status'    => $this->CI->session->userdata('status')
    //         ];
    //         $this->template->load('template', 'simpanan', $data);
    //     } else {
    //         $data       = [
    //             'username'  => $this->CI->session->userdata('username'),
    //             'noang'     => $this->CI->session->userdata('noang'),
    //             'status'    => $this->CI->session->userdata('status'),
    //         ];
    //         $this->template->load('template', 'simpanan', $data);
    //     }
    // }

    public function index()
    {
        if ($this->CI->session->userdata('status') == 'pegawai') {
            // tidak digunakan
            $where      = $this->CI->session->userdata('noang');
            $querySimpSukarela = $this->Simpanan_m->getSimpananSukarela($where);
            $querySimpWajib = $this->Simpanan_m->getSimpananWajib($where);
            $querySimpKBerjangka = $this->Simpanan_m->getSimpananKhususBerjangka($where);
            $querySimpKPermanen = $this->Simpanan_m->getSimpananKhususPermanen($where);
            $querySimpPokok = $this->Simpanan_m->getSimpananPokok($where);
            $querySimpDeposito = $this->Simpanan_m->getSimpananDeposito($where);

            $simpananSukarela      = $querySimpSukarela->row();
            $simpananWajib         = $querySimpWajib->row();
            $simpananKBerjangka    = $querySimpKBerjangka->row();
            $simpananKPermanen     = $querySimpKPermanen->row();
            $simpananPokok         = $querySimpPokok->row();
            $simpananDeposito      = $querySimpDeposito->row();

            $data       = [
                'simpananSukarela'      => $simpananSukarela,
                'simpananWajib'         => $simpananWajib,
                'simpananKBerjangka'    => $simpananKBerjangka,
                'simpananKPermanen'     => $simpananKPermanen,
                'simpananPokok'         => $simpananPokok,
                'simpananDeposito'      => $simpananDeposito,
                'username'  => $this->CI->session->userdata('username'),
                'nopeg'     => $this->CI->session->userdata('nopeg'),
                'status'    => $this->CI->session->userdata('status')
            ];
            $this->template->load('template', 'simpanan', $data);
        } else {
            $where      = $this->CI->session->userdata('noang');
            $querySimpSukarela = $this->Simpanan_m->getSimpananSukarela($where);
            $querySimpWajib = $this->Simpanan_m->getSimpananWajib($where);
            $querySimpKBerjangka = $this->Simpanan_m->getSimpananKhususBerjangka($where);
            $querySimpKPermanen = $this->Simpanan_m->getSimpananKhususPermanen($where);
            $querySimpPokok = $this->Simpanan_m->getSimpananPokok($where);
            $querySimpDeposito = $this->Simpanan_m->getSimpananDeposito($where);

            $simpananSukarela      = $querySimpSukarela->row();
            $simpananWajib         = $querySimpWajib->row();
            $simpananKBerjangka    = $querySimpKBerjangka->row();
            $simpananKPermanen     = $querySimpKPermanen->row();
            $simpananPokok         = $querySimpPokok->row();
            $simpananDeposito      = $querySimpDeposito->row();

            $data       = [
                'simpananSukarela'      => $simpananSukarela,
                'simpananWajib'         => $simpananWajib,
                'simpananKBerjangka'    => $simpananKBerjangka,
                'simpananKPermanen'     => $simpananKPermanen,
                'simpananPokok'         => $simpananPokok,
                'simpananDeposito'      => $simpananDeposito,
                'username'  => $this->CI->session->userdata('username'),
                'noang'     => $this->CI->session->userdata('noang'),
                'status'    => $this->CI->session->userdata('status')
            ];
            $this->template->load('template', 'simpanan', $data);
        }
    }

}
