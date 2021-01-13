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
        $this->load->view('profile');
        // $this->template->load('template_c', 'client/home', $data);
    }
}
