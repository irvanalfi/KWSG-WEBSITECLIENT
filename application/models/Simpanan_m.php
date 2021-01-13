<?php

class Simpanan_m extends CI_Model {

    public function getSimpananSukarela($no_peg)
    {
        return $this->db->get_where('t_saldo_simpanan', ['no_peg' => $no_peg])->row_array();
    }

    public function getSimpananPokok($no_peg)
    {
        return $this->db->get_where('t_saldo_simpanan', ['no_peg' => $no_peg])->row_array();
    }

    public function getSimpananWajib($no_peg)
    {
        return $this->db->get_where('t_saldo_simpanan', ['no_peg' => $no_peg])->row_array();
    }

    public function getSimpananKhususPermanen($no_peg)
    {
        return $this->db->get_where('t_saldo_simpanan', ['no_peg' => $no_peg])->row_array();
    }

    public function getSimpananKhususBerjangka($no_peg)
    {
        return $this->db->get_where('t_saldo_simpanan', ['no_peg' => $no_peg])->row_array();
    }

    public function getSimpananDeposito($no_peg)
    {
        return $this->db->get_where('t_saldo_simpanan', ['no_peg' => $no_peg])->row_array();
    }

}

?>