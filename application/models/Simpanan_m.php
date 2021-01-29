<?php

class Simpanan_m extends CI_Model {

    // public function getAllSimpanan()
    // {
    //     $query = $this->db->get('t_saldo_simpanan');
    //     return $query->result_array();
    // }

    public function getSimpananSukarela($no_ang)
    {
        $this->db->select('*');
        $this->db->from('t_saldo_simpanan');
        $this->db->where('no_ang', $no_ang);
        $this->db->where('nm_simpanan', 'SIMPANAN SUKARELA TUNAI');

        $query = $this->db->get();
        return $query;
    }

    public function getSimpananWajib($no_ang)
    {
        $this->db->select('*');
        $this->db->from('t_saldo_simpanan');
        $this->db->where('no_ang', $no_ang);
        $this->db->where('nm_simpanan', 'SIMPANAN WAJIB');

        $query = $this->db->get();
        return $query;
    }

    public function getSimpananKhususBerjangka($no_ang)
    {
        $this->db->select('*');
        $this->db->from('t_saldo_simpanan');
        $this->db->where('no_ang', $no_ang);
        $this->db->where('nm_simpanan', 'SIMPANAN KHUSUS PERMANENT');

        $query = $this->db->get();
        return $query;
    }

    public function getSimpananKhususPermanen($no_ang)
    {
        $this->db->select('*');
        $this->db->from('t_saldo_simpanan');
        $this->db->where('no_ang', $no_ang);
        $this->db->where('nm_simpanan', 'SIMPANAN KHUSUS BERJANGKA');

        $query = $this->db->get();
        return $query;
    }

    public function getSimpananPokok($no_ang)
    {
        $this->db->select('*');
        $this->db->from('t_saldo_simpanan');
        $this->db->where('no_ang', $no_ang);
        $this->db->where('nm_simpanan', 'SIMPANAN POKOK');

        $query = $this->db->get();
        return $query;
    }

    public function getSimpananDeposito($no_ang)
    {
        $this->db->select('*');
        $this->db->from('t_saldo_simpanan');
        $this->db->where('no_ang', $no_ang);
        $this->db->where('nm_simpanan', 'DEPOSITO');

        $query = $this->db->get();
        return $query;
    }

}

?>