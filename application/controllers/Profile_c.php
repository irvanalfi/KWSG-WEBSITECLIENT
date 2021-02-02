<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_c extends CI_Controller
{

    protected $CI;

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->CI = &get_instance();
        $this->load->model('Auth_m');
        $this->load->model('');
    }

    public function index()
    {
        if ($this->CI->session->userdata('status') == 'pegawai') {
            $data       = [
                'username'  => $this->CI->session->userdata('username'),
                'nopeg'     => $this->CI->session->userdata('nopeg'),
                'status'    => $this->CI->session->userdata('status')
            ];
            $this->template->load('template', 'profile', $data);
        } else {
            $data       = [
                'username'  => $this->CI->session->userdata('username'),
                'noang'     => $this->CI->session->userdata('noang'),
                'status'    => $this->CI->session->userdata('status')
            ];
            $this->template->load('template', 'profile', $data);
        }
    }

    public function bahasa()
    {
        $this->template->load('template', 'bahasa');
    }
    public function password()
    {
        $this->template->load('template', 'password');
    }
    public function kartu()
    {
        $this->template->load('template', 'kartu');
    }
    public function alamat()
    {
        $this->template->load('template', 'alamat');
    }
}
