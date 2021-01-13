<?php

class Simpanan_c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Simpanan_m');
    }

    public function index()
    {
        // $data['title'] = 'Simpanan';
        // $data['t_saldo_simpanan'] = $this->Simpanan_m->getAllSimpananIDPegawai;

        $this->load->view('simpanan');
    }

}

?>