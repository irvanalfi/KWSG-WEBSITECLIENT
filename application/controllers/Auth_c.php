<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_c extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function logout()
    {
        // session_destroy();
    }
}
