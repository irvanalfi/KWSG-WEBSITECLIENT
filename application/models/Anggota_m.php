<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_m extends CI_Model
{

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('m_pass');
        $this->db->where('user_name', $post['no_ang']);
        $this->db->where('pass', md5($post['pin']));
        $query = $this->db->get();
        return $query;
    }

    // public function auth($user_name, $pass)
    // {
    //     $this->db->select('a.user_name, a.nama, a.pass, b.KD_JAB as kd_jab, c.NM_UNIT as nama_unit, b.KD_UNIT as kd_unit_sdm, c.KD_WILAYAH_AKUN as kd_wilayah_akun, c.KD_GROUP_AKUN as kd_group_akun, c.KD_UNIT_AKUN as kd_unit_akun');
    //     $this->db->from('m_pass a');
    //     $this->db->join('mas_peg b', 'a.user_name=b.NO_PEG');
    //     $this->db->join('tab_unit c', 'b.KD_UNIT=c.KD_UNIT');
    //     $this->db->where('a.user_name', $user_name);
    //     $this->db->where('a.pass', $pass);
    //     $query = $this->db->get();
    //     if ($query->num_rows() == 0) {
    //         return false;
    //     } else {
    //         return $query->result_array();
    //     }
    // }
}
