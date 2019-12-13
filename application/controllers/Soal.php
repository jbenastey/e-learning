<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class soal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SoalModel', 'soal');
    }

    public function index()
    {
        //mengambil data pengguna dari authModel yang berbentuk array
        $data['soal'] = $this->soal->get_soal();

//            echo "<pre>";
//          print_r( $data['soal']);
//        exit();

        $this->load->view('templates/header', $data);
        $this->load->view('soal/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah($idUjian)
    {
        $data['id_ujian'] = $idUjian;
        $this->load->view('templates/header',$data);
        $this->load->view('soal/tambah',$data);
        $this->load->view('templates/footer',$data);
    }

    public function insertSoal()
    {
        if (isset($_POST['simpan'])) {
            $dataSoal = array(
                'id_ujian' => $this->input->post('id_ujian'),
                'soal' => $this->input->post('soal'),
                'jawaban_soal_a' => $this->input->post('jawaban_soal_a'),
                'jawaban_soal_b' => $this->input->post('jawaban_soal_b'),
                'jawaban_soal_c' => $this->input->post('jawaban_soal_c'),
                'jawaban_soal_d' => $this->input->post('jawaban_soal_d'),
                'jawaban_soal_e' => $this->input->post('jawaban_soal_e'),
                'kunci_jawaban' => $this->input->post('kunci_jawaban'),
            );
//            echo "<pre>";
//            print_r($dataSoal);
//            exit();
            $statusInsert = $this->soal->insert_soal($dataSoal);

            if ($statusInsert > 0) {
                redirect('ujian/detail/'.$dataSoal['id_ujian']);
            } else {
                redirect('soal/tambah'.$dataSoal['id_ujian']);
            }
        } else {
            show_404();
        }
    }

    public function ubah($idSoal)
    {
        $soal = $this->soal->get_soal_by_id($idSoal);
//        echo '<pre>';
//        print_r($soal);
//        exit();

        $data['soal'] = $soal;

        $this->load->view('templates/header',$data);
        $this->load->view('soal/ubah',$data);
        $this->load->view('templates/footer',$data);
    }

    public function editSoal($idSoal)
    {
       $dataUbah = array(
//           'id_ujian' => $this->input->post('id_ujian'),
           'soal' => $this->input->post('soal'),
           'jawaban_soal_a' => $this->input->post('jawaban_soal_a'),
           'jawaban_soal_b' => $this->input->post('jawaban_soal_b'),
           'jawaban_soal_c' => $this->input->post('jawaban_soal_c'),
           'jawaban_soal_d' => $this->input->post('jawaban_soal_d'),
           'jawaban_soal_e' => $this->input->post('jawaban_soal_e'),
           'kunci_jawaban' => $this->input->post('kunci_jawaban'),
           );
//
            $statusUbah = $this->soal->edit_soal($idSoal, $dataUbah);

            if ($statusUbah > 0) {
                redirect('ujian/detail/'.$this->input->post('id_ujian'));
            } else {
                redirect('ujian/detail/'.$this->input->post('id_ujian'));
        }

    }

    public function hapus($idSoal)
    {
        $statusDelete = $this->soal->hapus_soal($idSoal);

        if ($statusDelete > 0){
            redirect('soal');
        } else {
            redirect('soal');
        }
    }
}