<?php defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('M_pegawai');
        $this->load->model('M_penggajian');

        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('login');
            redirect($url);
        }
    }


    public function index()
    {
        $data['laporan_pegawai'] = $this->M_penggajian->tampil_data();
        $this->load->view('List.laporan.php', $data);
    }

    public function bulanan()
    {
       $data['laporan_pegawai'] = $this->M_penggajian->tampil_data();
       $this->load->view('List.laporan.bulanan.php', $data);
   }

   public function cek_bulan()
   {
    $bulan = $this->input->post('bulan');
    $data['laporan_bulan']= $this->M_penggajian->tampil_bulan($bulan)->result();
    $this->load->view('Laporan_bulan.php', $data);
}

public function print_laporan()
{
    $kode_pegawai = $this->input->post('kode_pegawai');
    $data['pegawai'] = $this->M_penggajian->cek_kode_pegawai($kode_pegawai)->result();

    $this->load->view('Laporan.php', $data);
}
}
