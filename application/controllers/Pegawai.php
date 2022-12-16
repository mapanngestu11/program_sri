<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai');
        $this->load->model('M_jabatan');

        // if ($this->session->userdata('masuk') != TRUE) {
        //     $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
        //     $url = base_url('login');
        //     redirect($url);
        // }
    }


    public function index()
    {
        $data['pegawai'] = $this->M_pegawai->tampil_data();
        $data['data_jabatan'] = $this->M_jabatan->tampil_data();
        $this->load->view('List.pegawai.php', $data);
    }

    public function tambah()
    {
        $data['data_jabatan'] = $this->M_jabatan->tampil_data();


        $this->load->view('Add.pegawai.php', $data);
    }

    public function add()
    {

        date_default_timezone_set("Asia/Jakarta");
        $kode_pegawai = $this->input->post('kode_pegawai');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $hak_akses = $this->input->post('hak_akses');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $tanggal =  date('Y-m-d h:i:s');

        $data = array(
            'kode_pegawai' => $kode_pegawai,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'jenis_kelamin' => $jenis_kelamin,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'username' => $username,
            'password' => $password,
            'hak_akses' => $hak_akses,
            'tanggal' => $tanggal
        );

        $this->M_pegawai->input_data($data, 'tbl_pegawai');
        echo $this->session->set_flashdata('msg', 'success');
        redirect('Pegawai');
    }

    public function delete($id)
    {
        $id = $this->input->post('id');
        $this->M_pegawai->delete_data($id);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('Pegawai');
    }


    public function edit($kode_pegawai)
    {

        $data['pegawai'] = $this->M_pegawai->cek_by_id($kode_pegawai);
        $data['data_jabatan'] = $this->M_jabatan->tampil_data();
        $this->load->view('Edit.pegawai.php', $data);
    }

    public function update($kode_pegawai)
    {
        date_default_timezone_set("Asia/Jakarta");
        $kode_pegawai = $this->input->post('kode_pegawai');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $hak_akses = $this->input->post('hak_akses');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $tanggal =  date('Y-m-d h:i:s');

        $data = array(
            'kode_pegawai' => $kode_pegawai,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'jenis_kelamin' => $jenis_kelamin,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'username' => $username,
            'password' => $password,
            'hak_akses' => $hak_akses,
            'tanggal' => $tanggal
        );
        $where = array(
            'kode_pegawai' => $kode_pegawai
        );

        $this->M_pegawai->update_data($where, $data, 'tbl_pegawai');
        echo $this->session->set_flashdata('msg', 'info-update');
        redirect('Pegawai');
    }
}
