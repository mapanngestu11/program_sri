<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_jabatan');

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

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $jabatan = $this->input->post('jabatan');


        $data = array(
            'jabatan' => $jabatan

        );

        $this->M_jabatan->input_data($data, 'tbl_jabatan');
        echo $this->session->set_flashdata('msg', 'success');
        redirect('Jabatan');
    }

    public function delete($id)
    {
        $id = $this->input->post('id');
        $this->M_jabatan->delete_data($id);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('Jabatan');
    }

    public function update($id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $id = $this->input->post('id');
        $jabatan = $this->input->post('jabatan');


        $data = array(
            'jabatan' => $jabatan

        );

        $where = array(
            'id' => $id
        );

        $this->M_jabatan->update_data($where, $data, 'tbl_jabatan');
        echo $this->session->set_flashdata('msg', 'info-update');
        redirect('Jabatan');
    }
}
