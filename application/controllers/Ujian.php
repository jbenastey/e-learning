<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UjianModel', 'ujian');
        $this->load->model('SoalModel', 'soal');
        $this->load->model('ModulModel', 'modul');

    }

    public function index()
    {
        //mengambil data pengguna dari authModel yang berbentuk array
        $data['ujian'] = $this->ujian->get_ujian();

//         echo "<pre>";
//          var_dump( $data['ujian']);
//        exit();

        $this->load->view('templates/header', $data);
        $this->load->view('ujian/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah($id_sub_modul)
    {
        $data['sub_modul'] = $this->modul->get_sub_modul_by_id($id_sub_modul);
        $this->load->view('templates/header');
        $this->load->view('ujian/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['ujian'] = $this->ujian->get_ujian_by_id($id);
        $data['soal'] = $this->soal->get_soal_by_ujian($id);
        $data['tes']='s';
        $this->load->view('templates/header', $data);
        $this->load->view('ujian/detail', $data);
        $this->load->view('templates/footer', $data);
    }

    public function insertUjian()
    {
        if (isset($_POST['simpan'])) {
            $dataUjian = array(
                'id_dosen' => $this->input->post('id_dosen'),
                'kelas_ujian' => $this->input->post('kelas_ujian'),
                'nilai_minimal_ujian' => $this->input->post('nilai_minimal_ujian'),
                'durasi_ujian' => $this->input->post('durasi_ujian'),
                'id_sub_modul' => $this->input->post('id_sub_modul'),
                );
//            echo "<pre>";
//            print_r($dataSoal);
//            exit();
            $statusInsert = $this->ujian->insert_ujian($dataUjian);

            if ($statusInsert > 0) {
                redirect('ujian/detail/'.$dataUjian['id_sub_modul']);
            } else {
                redirect('ujian/tambah');
            }
        } else {
            show_404();
        }
    }

    public function ubah($idUjian)
    {
        $ujian = $this->ujian->get_ujian_by_id($idUjian);
//        echo '<pre>';
//        print_r($soal);
//        exit();

        $data['ujian'] = $ujian;

        $this->load->view('templates/header',$data);
        $this->load->view('ujian/ubah',$data);
        $this->load->view('templates/footer',$data);
    }

    public function editUjian($idUjian)
    {
        $dataUbah = array(
            'nilai_minimal_ujian' => $this->input->post('nilai_minimal_ujian'),
            'durasi_ujian' => $this->input->post('durasi_ujian'),
        );
//
        $statusUbah = $this->ujian->edit_ujian($idUjian, $dataUbah);

        if ($statusUbah > 0) {
            redirect('ujian/detail/'.$idUjian);
        } else {
            redirect('ujian/ubah/'.$idUjian);
        }

    }

    public function hapus($idUjian)
    {
        $statusDelete = $this->nilai->hapus_ujian($idUjian);

        if ($statusDelete > 0){
            redirect('ujian');
        } else {
            redirect('ujian');
        }
    }
}