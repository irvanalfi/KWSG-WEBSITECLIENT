<?php

class Simpanan_m extends CI_Model {

    public function getAllSimpanan()
    {
        $query = $this->db->get('t_saldo_simpanan');
        return $query->result_array();
    }

    public function getSimpananSukarela($no_ang)
    {
        return $this->db->get_where('t_saldo_simpanan', ['no_ang' => $no_ang])->row_array();
    }

}

?>