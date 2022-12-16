<?php defined('BASEPATH') or exit('No direct script access allowed');

class Penggajian extends CI_Controller
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
        $data['data_jabatan'] = $this->M_jabatan->tampil_data();
        $this->load->view('List.jabatan.php', $data);
    }
    public function tambah()
    {
        $data['pegawai'] = $this->M_pegawai->tampil_data();
        $this->load->view('add.penggajian.php', $data);
    }
    public function add()
    {
        $kode_pegawai = $this->input->post('kode_pegawai');
        $gaji_pokok = $this->input->post('gaji_pokok');
        $uang_transport = $this->input->post('uang_transport');
        $uang_makan = $this->input->post('uang_makan');
        $lembur = $this->input->post('lembur');
        $uang_rajin = $this->input->post('uang_rajin');
        $bpjs_jht = $this->input->post('bpjs_jht');
        $bpjs_jkk = $this->input->post('bpjs_jkk');
        $bpjs_jkm = $this->input->post('bpjs_jkm');

        $cuti = $this->input->post('cuti');
        $potongan_bpjs_jht = $this->input->post('potongan_bpjs_jht');
        $potongan_bpjs_kantor = $this->input->post('potongan_bpjs_kantor');

        $penghasilan = $gaji_pokok + $uang_makan + $uang_transport + $lembur + $bpjs_jht + $bpjs_jkk + $bpjs_jkm + $uang_rajin;
        $potongan    = $cuti + $potongan_bpjs_jht + $potongan_bpjs_kantor;

        $total_gaji = $penghasilan - $potongan;
        $tanggal =  date('Y-m-d h:i:s');
        // var_dump($total_gaji);
        // die;
        $data = array(
            'kode_pegawai' => $kode_pegawai,
            'gaji_pokok' => $gaji_pokok,
            'uang_transport' => $uang_transport,
            'uang_makan' => $uang_makan,
            'uang_rajin' => $uang_rajin,
            'lembur' => $lembur,
            'bpjs_jht' => $bpjs_jht,
            'bpjs_jkm' => $bpjs_jkm,
            'cuti' => $cuti,
            'potongan_bpjs_jht' => $potongan_bpjs_jht,
            'potongan_bpjs_kantor' => $potongan_bpjs_kantor,
            'total_gaji' => $total_gaji,
            'tanggal' => $tanggal
        );

        $this->M_penggajian->input_data($data, 'tbl_penggajian');
        echo $this->session->set_flashdata('msg', 'success');
        redirect('Pegawai');
    }
}
