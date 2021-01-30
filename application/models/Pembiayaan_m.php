<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pembiayaan_m extends CI_Model
{
    public function pinjaman($where)
    {
        $this->db->select('*');
        $this->db->from('t_pinjaman_ang');
        $this->db->where('no_ang', $where);
        $query = $this->db->get();
        return $query;
    }
}
?>