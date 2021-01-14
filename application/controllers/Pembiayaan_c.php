<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembiayaan_c extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $this->template->load('template', 'pembiayaan');
    }
}
