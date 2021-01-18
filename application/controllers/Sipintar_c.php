<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sipintar_c extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $this->template->load('template', 'sipintar/sipintar');
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
}
