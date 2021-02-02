<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akwsg_c extends CI_Controller
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
            $data       = [
                'username'  => $this->CI->session->userdata('username'),
                'nopeg'     => $this->CI->session->userdata('nopeg'),
                'status'    => $this->CI->session->userdata('status')
            ];
            $this->template->load('template2', 'aboutkwsg', $data);
        } else {
            $data       = [
                'username'  => $this->CI->session->userdata('username'),
                'noang'     => $this->CI->session->userdata('noang'),
                'status'    => $this->CI->session->userdata('status')
            ];
            $this->template->load('template2', 'aboutkwsg', $data);
        }
    }
}
