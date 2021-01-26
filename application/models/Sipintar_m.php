<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sipintar_m extends CI_Model
{
    public function kupon($where)
    {
        $this->db->select('*');
        $this->db->from('tabungan');
        $this->db->where('No_ang', $where);
        $this->db->where('GolonganTabungan', '09');
        $query = $this->db->get();
        return $query;
    }

    public function shu($where)
    {
        $this->db->select('*');
        $this->db->from('tabungan');
        $this->db->where('No_ang', $where);
        $this->db->where('GolonganTabungan', '10');
        $query = $this->db->get();
        return $query;
    }

    // public function kupon2($where)
    // {
    //     $this->db->select('SaldoAkhir');
    //     $this->db->from('tabungan');
    //     $this->db->where('no_ang', $where);
    //     $this->db->where('GolonganTabungan', '09');
    // }

    // public function shu2($where)
    // {
    //     $this->db->select('SaldoAkhir');
    //     $this->db->from('tabungan');
    //     $this->db->where('no_ang', $where);
    //     $this->db->where('GolonganTabungan', '10');
    // }
}
?>