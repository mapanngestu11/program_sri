<?php
class M_pegawai extends CI_Model
{

    private $_table = "tbl_pegawai";

    function tampil_data()
    {
        return $this->db->get('tbl_pegawai');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id)
    {
        $hsl = $this->db->query("DELETE FROM tbl_pegawai WHERE id='$id'");
        return $hsl;
    }

    function cek_by_id($kode_pegawai)
    {
        $hsl = $this->db->query("SELECT * FROM tbl_pegawai Where kode_pegawai = '$kode_pegawai'");
        return $hsl;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
