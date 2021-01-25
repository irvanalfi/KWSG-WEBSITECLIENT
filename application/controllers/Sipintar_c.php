<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sipintar_c extends CI_Controller
{

    protected $CI;

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->CI = &get_instance();
        $this->load->model('Auth_m');
        $this->load->model('Sipintar_m');
    }

    public function index()
    {
        if ($this->CI->session->userdata('status') == 'pegawai') {
            $data       = [
                'username'  => $this->CI->session->userdata('username'),
                'nopeg'     => $this->CI->session->userdata('nopeg'),
                'status'    => $this->CI->session->userdata('status')
            ];
            $this->template->load('template', 'sipintar/sipintar', $data);
        } else {
            $query      = $this->Sipintar_m->kupon('noang');
            $query2     = $this->Sipintar_m->shu('noang');
            $kupon      = $query->row();
            $shu        = $query2->row();
            $data       = [
                'row'       => $kupon,
                'row'       => $shu,
                'username'  => $this->CI->session->userdata('username'),
                'noang'     => $this->CI->session->userdata('noang'),
                'status'    => $this->CI->session->userdata('status')
            ];
            
            $this->template->load('template', 'sipintar/sipintar', $data);
        }
    }

    public function listSipintarKupon()
    {
        $this->template->load('template2', 'sipintar/listSipintarKupon');
    }

    public function listSipintarShu()
    {
        $this->template->load('template2', 'sipintar/listSipintarShu');
    }

    public function detailSipintarKupon()
    {
        // iki gae detail ketika salah satu lis sipintar kupon di pencet
        $this->load->view('detailSipintarKupon');
    }

    public function detailSipintarShu()
    {
        // iki gae detail ketika salah satu lis sipintar shu di pencet
        $this->load->view('detailSipintarShu');
    }

    public function proses()
    {
        $get = $this->get->get(null, TRUE);
        $queryKupon = $this->Sipintar_m->kupon($get);
        $queryShu = $this->Sipintar_m->shu($get);
    }
}
