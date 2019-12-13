<?php


class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel', 'auth');
    }

    public function login()
    {
        if (isset($_POST['login'])) {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $pengguna = $this->auth->get_pengguna_by_login_data($username, $password);

            //akan bernilai 1 ika data ditemukan
            $statusExist = $pengguna->num_rows();
            if ($statusExist > 0) {
                $dataPengguna = $pengguna->row_array();

                $this->session->set_userdata($dataPengguna);
                redirect(base_url());
                /*echo "<pre>";
                print_r($dataPengguna);
                exit();*/

            } else {
                redirect('login');
            }
        } else {
            $this->load->view('auth/login');
        }
    }
    public function logout()
    {
        //prose menghaous sesi pengguna
        $this->session->sess_destroy();
        //arahkan halamn kembali ke login
        redirect('login');
    }
    public function register()
    {
        $this->load->view('auth/register');
    }
    public function insertMahasiswa()

    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'username_pengguna' => $this->input->post('username_pengguna'),
                'password_pengguna' => md5($this->input->post('password_pengguna')),
                'level_pengguna' => 'mahasiswa'
            );
            $statusInsert = $this->auth->insert_mahasiswa($data);

            if ($statusInsert > 0) {
                redirect('login');
            } else {
                redirect('register');
            }
//            echo "<pre>";
//            print_r($dataPengguna);
        } else {
            show_404();
        }
    }

}
