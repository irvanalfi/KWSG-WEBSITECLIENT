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
        $this->load->view('sipintar');
    }

    public function sipintarKupon()
    {
        $this->load->view('sipintarKupon');
    }

    public function sipintarShu()
    {
        $this->load->view('sipintarShu');
    }

    public function listSipintarKupon()
    {
        // iki gae detail sipintar kupon
        $this->load->view('listSipintarKupon');
    }

    public function listSipintarShu()
    {
        // iki gae detail sipintar shu
        $this->load->view('listSipintarShu');
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
