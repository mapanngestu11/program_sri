<?php
class M_dashboard extends CI_Model
{

    private $_table = "tbl_user";

    function count_user()
    {
        $this->db->select('count(id) as jumlah');
        $this->db->from('tbl_user');
        return $this->db->get('');
    }

    function count_pegawai()
    {
        $this->db->select('count(id) as jumlah');
        $this->db->from('tbl_pegawai');
        return $this->db->get('');
    }
    function count_gaji()
    {
      $this->db->select('count(id) as jumlah');
      $this->db->from('tbl_penggajian');
      return $this->db->get('');
  }

}
