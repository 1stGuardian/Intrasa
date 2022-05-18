<?php

class Sekolah_model extends CI_Model
{
    public function getAllSekolah()
    {
        return $this->db->get('sekolah')->result_array();
    }

    public function searchSekolah()
    {
        $keyword = $this->input->get('q', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('provinsi', $keyword);
        $this->db->or_like('kota', $keyword);
        return $this->db->get('sekolah')->result_array();
    }

    public function getSekolah($namasekolah)
    {
        $this->db->like('link', $namasekolah);
        return $this->db->get('sekolah')->row_array();
    }
}
