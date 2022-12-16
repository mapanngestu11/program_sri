<?php
class M_penggajian extends CI_Model
{

    private $_table = "tbl_penggajian";

    function tampil_data()
    {
        return $this->db->get('tbl_penggajian');
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
