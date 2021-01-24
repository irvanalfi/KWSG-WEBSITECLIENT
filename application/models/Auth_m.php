<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{

    public function pegawai($post)
    {
        $this->db->select('*');
        $this->db->from('m_pass');
        $this->db->where('user_name', $post['username']);
        $this->db->where('pass', md5($post['password']));
        $query = $this->db->get();
        return $query;

        // $this->db->select('*');
        // $this->db->from('m_pass');
        // $this->db->join('mas_peg', 'mas_peg.NO_PEG = m_pass.user_name');
        // $this->db->where('user_name', $post['username']);
        // $this->db->where('pass', md5($post['password']));
        // $query = $this->db->get();
        // return $query;
    }

    public function anggota($post)
    {
        $this->db->select('tbl_ang.nm_ang, tbl_ang.no_ang');
        $this->db->from('tbl_ang');
        $this->db->join('registernasabah', 'tbl_ang.no_ang = registernasabah.no_ang');
        $this->db->where('tbl_ang.no_ang', $post['username']);
        $this->db->where('registernasabah.password', md5($post['password']));
        $this->db->where('registernasabah.password', 0);
        $query = $this->db->get();
        return $query;
    }

    public function get_pegawai($where)
    {
        $this->db->from('m_pass');
        if ($where != null) {
            // kondisi untuk menampilkan satu baris data saja jika ada parameter
            $this->db->where('nama', $where);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_anggota($where)
    {
        $this->db->from('tbl_ang');
        if ($where != null) {
            // kondisi untuk menampilkan satu baris data saja jika ada parameter
            $this->db->where('nm_ang', $where);
        }
        $query = $this->db->get();
        return $query;
    }
}
