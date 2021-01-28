<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sipintar_m extends CI_Model
{
    // untuk anggota
    public function kupon($where)
    {
        $this->db->select('*');
        $this->db->from('tabungan');
        $this->db->where('No_ang', $where);
        $this->db->where('GolonganTabungan', '09');
        $query = $this->db->get();
        return $query;
    }

    // untuk anggota
    public function shu($where)
    {
        $this->db->select('*');
        $this->db->from('tabungan');
        $this->db->where('No_ang', $where);
        $this->db->where('GolonganTabungan', '10');
        $query = $this->db->get();
        return $query;
    }

    // untuk pegawai (tetapi tidak dipakai)
    public function kupon2($where)
    {
       $this->db->select('SaldoAkhir');
       $this->db->from('tabungan');
        $this->db->where('no_peg', $where);
        $this->db->where('GolonganTabungan', '09');
    }

    // untuk pegawai (tetapi tidak dipakai)
    public function shu2($where)
    {
        $this->db->select('SaldoAkhir');
        $this->db->from('tabungan');
        $this->db->where('no_peg', $where);
        $this->db->where('GolonganTabungan', '10');
    }

    public function listKupon($where)
    {
        $this->db->select('*');
        $this->db->from('mutasitabungan');
        $this->db->where('No_ang', $where);
        $this->db->where('GolonganTabungan', '09');
        $query = $this->db->get();
        return $query;
    }
}
?>