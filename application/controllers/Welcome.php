<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->has_userdata('username_pengguna')) {
            redirect('login');
        }
        $this->load->model('ModulModel', 'modul');
        $this->load->model('AuthModel', 'auth');
        $this->load->helper('class_helper');
    }


    public function index()
    {
        $nip = $this->session->userdata('username_pengguna');
        /*$data['modul'] = $this->modul->get_modul();*/

        $data['dosen'] = $this->modul->get_dosen_by_nip($nip);

//         echo '<pre>';print_r($data['dosen']);exit;

        $data['matkulDosen'] = $this->modul->get_matkul_dosen($data['dosen']['id_dosen']);
        $data['mahasiswa']=$this->modul->get_kelas($this->session->userdata('id_pengguna'));


        $this->load->view('templates/header', $data);
        $this->load->view('welcome_message');
        $this->load->view('templates/footer');
    }

    public function ikutiKelas()
    {
        if (isset($_POST['simpan'])) {
            $validasi=$this->auth->validasi_kode_kelas($this->input->post('kode_kelas'),($this->session->userdata('id_pengguna')));
            if ($validasi==null){
                $paket = $this->auth->get_paket_by_kodekelas($this->input->post('kode_kelas'));
                if($paket !=null){

                    $data = array(
                        'kode_kelas' => $this->input->post('kode_kelas'),
                        'id_pengguna' => $this->session->userdata('id_pengguna'),
                        'id_paket' => $paket['paket_id'],
                    );
//            $validasiKelas = $this->auth->validasi_kelas($data);
//            print_r($validasiKelas);
//            exit();

                    $statusInsert = $this->auth->ikuti_kelas($data);

                    if ($statusInsert > 0) {
                        redirect(base_url());
                    } else {
                        redirect(base_url());
                    }
                }else{
                    $this->session->set_flashdata('alert','kelas_tidak_ada');
                    redirect(base_url());
                }
                /*var_dump($paket);
                exit();*/
//
            }
            else{
                $this->session->set_flashdata('alert','sudah_masuk_kelas');
                redirect(base_url());
            }

//            print_r($dataPengguna);
        } else {
            show_404();
        }
    }
}