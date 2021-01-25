<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sipintar_m extends CI_Model
{
    public function kupon($get)
    {
        $this->db->select('SaldoAkhir, DateTime');
        $this->db->from('tabungan');
        $this->db->where('no_ang', $get);
        $this->db->where('GolonganTabungan', '09');
        $query = $this->db->get();
        return $query;
    }

    public function shu($get)
    {
        $this->db->select('SaldoAkhir, DateTime');
        $this->db->from('tabungan');
        $this->db->where('no_ang', $get);
        $this->db->where('GolonganTabungan', '10');
        $query = $this->db->get();
        return $query;
    }

    // public function kupon2($get)
    // {
    //     $this->db->select('SaldoAkhir');
    //     $this->db->from('tabungan');
    //     $this->db->where('no_ang', $get);
    //     $this->db->where('GolonganTabungan', '09');
    // }

    // public function shu2($get)
    // {
    //     $this->db->select('SaldoAkhir');
    //     $this->db->from('tabungan');
    //     $this->db->where('no_ang', $get);
    //     $this->db->where('GolonganTabungan', '10');
    // }
}
?>