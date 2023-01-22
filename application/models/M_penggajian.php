<?php
class M_penggajian extends CI_Model
{

    private $_table = "tbl_penggajian";

    function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_penggajian a');
        $this->db->join('tbl_pegawai b', 'b.kode_pegawai = a.kode_pegawai');
        return $this->db->get('');
    }

    function cek_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_penggajian a');
        $this->db->join('tbl_pegawai b', 'b.kode_pegawai = a.kode_pegawai');
        $this->db->where('a.id', $id);
        return $this->db->get('');
    }

    function cek_kode_pegawai($kode_pegawai)
    {
        $this->db->select('*');
        $this->db->from('tbl_penggajian a');
        $this->db->join('tbl_pegawai b', 'b.kode_pegawai = a.kode_pegawai');
        $this->db->where('a.kode_pegawai', $kode_pegawai);
        return $this->db->get('');
    }
    function tampil_bulan($bulan)
    {
        $this->db->select('*');
        $this->db->from('tbl_penggajian a');
        $this->db->join('tbl_pegawai b', 'b.kode_pegawai = a.kode_pegawai');
        $this->db->where('a.bulan', $bulan);
        return $this->db->get('');
    }



    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id)
    {
        $hsl = $this->db->query("DELETE FROM tbl_penggajian WHERE id='$id'");
        return $hsl;
    }

    function cek_by_id($kode_pegawai)
    {
        $hsl = $this->db->query("SELECT * FROM tbl_penggajian Where kode_pegawai = '$kode_pegawai'");
        return $hsl;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
