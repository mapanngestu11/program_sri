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
    function cek_info_gaji($kode_pegawai,$nama,$bulan){
        $this->db->select('*');
        $this->db->from('tbl_penggajian a');
        $this->db->join('tbl_pegawai b', 'b.kode_pegawai = a.kode_pegawai');
        $this->db->where('b.nama', $nama);
        $this->db->where('b.kode_pegawai', $kode_pegawai);
        $this->db->where('a.bulan', $bulan);
        return $this->db->get('')->result();
    }
}
