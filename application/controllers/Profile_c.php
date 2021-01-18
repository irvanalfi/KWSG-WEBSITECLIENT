<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_c extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('');
    }

    public function index()
    {
        $this->template->load('template', 'profile');
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
