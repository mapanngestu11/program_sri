<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $this->load->view('Login');
    }

    public function login_user()
    {
        $this->load->view('Login_user');
    }

    public function auth()
    {
        $username = strip_tags(str_replace("'", "", $this->input->post('username')));
        $password = strip_tags(str_replace("'", "", $this->input->post('password')));

        $u = $username;
        $p = $password;
        $cadmin = $this->M_login->cekadmin($u, $p);
        json_encode($cadmin);

        if ($cadmin->num_rows() > 0) {
            // echo "berhasil";
            // die();
            $this->session->set_userdata('masuk', true);
            $this->session->set_userdata('user', $u);
            $xcadmin = $cadmin->row_array();

            // var_dump($xcadmin['hak_akses']);
            // die;

            if ($xcadmin['hak_akses'] == 'Admin') {
                $this->session->set_userdata('akses', 'admin');
                $id = $xcadmin['id'];
                $nama = $xcadmin['nama'];
                $hak_akses = $xcadmin['hak_akses'];
                $this->session->set_userdata('id', $id);
                $this->session->set_userdata('nama', $nama);
                $this->session->set_userdata('hak_akses', $hak_akses);
                $data = array(
                    'hak_akses'     => $hak_akses,
                    'logged_in' => TRUE
                );
                redirect('Dashboard', $data);
            } elseif ($xcadmin['hak_akses'] == 'Pln') {
                $this->session->set_userdata('akses', 'pln');
                $id = $xcadmin['id'];
                $nama_lengkap = $xcadmin['nama_lengkap'];
                $hak_akses = $xcadmin['hak_akses'];
                $this->session->set_userdata('id', $id);
                $this->session->set_userdata('nama_lengkap', $nama_lengkap);
                $this->session->set_userdata('hak_akses', $hak_akses);
                $data = array(
                    'hak_akses'     => $hak_akses,
                    'logged_in' => TRUE
                );

                redirect('Homepage', $data);
            } elseif ($xcadmin['hak_akses'] == 'Manager') {
                $this->session->set_userdata('akses', 'manager');
                $id = $xcadmin['id'];
                $nama_lengkap = $xcadmin['nama_lengkap'];
                $hak_akses = $xcadmin['hak_akses'];
                $this->session->set_userdata('id', $id);
                $this->session->set_userdata('nama_lengkap', $nama_lengkap);
                $this->session->set_userdata('hak_akses', $hak_akses);
                $data = array(
                    'hak_akses'     => $hak_akses,
                    'logged_in' => TRUE
                );

                redirect('Homepage', $data);
            }
        } else {

            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Username Atau Password Salah</div>');
            redirect('login');
        }
    }
    function auth_user()
    {
        $username = strip_tags(str_replace("'", "", $this->input->post('username')));
        $password = strip_tags(str_replace("'", "", $this->input->post('password')));

        $u = $username;
        $p = $password;
        $cadmin = $this->m_login->cek_instansi($u, $p);
        json_encode($cadmin);
        if ($cadmin->num_rows() > 0) {
            // echo "berhasil";
            // die();
            $this->session->set_userdata('masuk', true);
            $this->session->set_userdata('user', $u);
            $xcadmin = $cadmin->row_array();

            // var_dump($xcadmin['hak_akses']);
            // die;

            if ($xcadmin['hak_akses'] == 'Instansi') {
                $this->session->set_userdata('akses', 'Instansi');
                $id = $xcadmin['id'];
                $nama_lengkap = $xcadmin['nama_lengkap'];
                $hak_akses = $xcadmin['hak_akses'];
                $this->session->set_userdata('id', $id);
                $this->session->set_userdata('nama_lengkap', $nama_lengkap);
                $this->session->set_userdata('hak_akses', $hak_akses);
                $data = array(
                    'hak_akses'     => $hak_akses,
                    'logged_in' => TRUE
                );
                redirect('Homepage', $data);
            }
        } else {

            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Username Atau Password Salah</div>');
            redirect('login');
        }
    }
    function logout()
    {

        $this->session->sess_destroy();
        redirect('Login');
    }
}
