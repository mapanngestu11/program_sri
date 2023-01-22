<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_utama extends CI_Controller
{


  function __construct()
  {
    parent::__construct();
    $this->load->model('M_pegawai');
    $this->load->model('M_penggajian');

  }

  public function index()
  {
    $data['pegawai'] = $this->M_pegawai->tampil_data();
    $this->load->view('Dashboard_utama', $data);
  }

  public function cek_data()
  {
    $kode_pegawai       = $this->input->post('kode_pegawai');
    $nama               = $this->input->post('nama');
    $bulan              = $this->input->post('bulan');

    $data['info'] = $this->M_pegawai->cek_info_gaji($kode_pegawai,$nama,$bulan);

    $this->load->view('Penggajian',$data);
  }
  public function cetak_gaji()
  {
   $kode_pegawai       = $this->input->post('kode_pegawai');
   $nama               = $this->input->post('nama');
   $bulan              = $this->input->post('bulan');

   $data['info'] = $this->M_pegawai->cek_info_gaji($kode_pegawai,$nama,$bulan);

   $this->load->view('Cetak_gaji',$data);
 }
}
