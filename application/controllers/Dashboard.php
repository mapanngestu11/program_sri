<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        $this->load->model('M_dashboard');
        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('Login');
            redirect($url);
        }
    }

    public function index()
    {

        $data['jumlah_user'] = $this->M_dashboard->count_user();
        $data['jumlah_pegawai'] = $this->M_dashboard->count_pegawai();
        $data['jumlah_gaji'] = $this->M_dashboard->count_gaji();

        $this->load->view('Dashboard',$data);
    }
}
