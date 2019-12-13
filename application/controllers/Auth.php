<?php


class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel', 'auth');
        $this->load->model('DosenModel', 'dosen');
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
    public function register_mahasiswa()
    {
        $this->load->view('auth/register_mahasiswa');
    }
    public function register_dosen()
    {
        $this->load->view('auth/register_dosen');
    }
    public function insertMahasiswa()

    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'nama_pengguna' => $this->input->post('nama_pengguna'),
                'username_pengguna' => $this->input->post('username_pengguna'),
                'password_pengguna' => md5($this->input->post('password_pengguna')),
                'level_pengguna' => 'mahasiswa'
            );
            $validasiPengguna = $this->auth->validasiPengguna($data['username_pengguna']);

            if ($validasiPengguna > 0) {
                $this->session->set_flashdata('alert', 'errorregister');
                redirect('register_mahasiswa');
            } else {
                $statusInsert = $this->auth->insert_mahasiswa($data);

                if ($statusInsert > 0) {
                    redirect('login');
                } else {
                    redirect('register');
                }
            }
        } else {
            show_404();
        }
    }
//            $statusInsert = $this->auth->insert_mahasiswa($data);
//
//            if ($statusInsert > 0) {
//                redirect('login');
//            } else {
//                redirect('register');
//            }
////            echo "<pre>";
////            print_r($dataPengguna);
//        } else {
//            show_404();
//        }
//    }

    public function registerDosen()
    {
        if (isset($_POST['simpan'])) {
            $data = array(
                'nama_pengguna' => $this->input->post('nama_pengguna'),
                'username_pengguna' => str_replace(" ","",$this->input->post('username_pengguna')),
                'password_pengguna' => md5($this->input->post('password_pengguna')),
                'level_pengguna' => 'dosen'
            );
//            echo "<pre>";
//            print_r($data);
//            exit();

            $validasiPengguna= $this->auth->validasiPengguna($data['username_pengguna']);

            if ($validasiPengguna > 0){
                $this->session->set_flashdata('alert','errorregister');
                redirect('register_dosen');
            } else {
                $statusInsert = $this->auth->insert_dosen($data);

                if ($statusInsert > 0) {
                    redirect('login');
                } else {
                    redirect('register');
                }
            }
        } else {
            show_404();
        }
    }
    function dosen(){
        $dosen = $this->dosen->get_dosen();
        echo json_encode($dosen);
    }
}
