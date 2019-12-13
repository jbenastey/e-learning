<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('NilaiModel', 'nilai');
    }

    public function index()
    {
        //mengambil data pengguna dari authModel yang berbentuk array
        $data['nilai'] = $this->nilai->get_nilai();

//            echo "<pre>";
//          print_r( $data['soal']);
//        exit();

        $this->load->view('templates/header', $data);
        $this->load->view('nilai/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('nilai/tambah');
        $this->load->view('templates/footer');
    }

    public function insertNilai()
    {
        if (isset($_POST['simpan'])) {
            $dataNilai = array(
                'id_ujian' => $this->input->post('id_ujian'),
                'id_pengguna' => $this->input->post('id_pengguna'),
                'nilai' => $this->input->post('nilai'),
                'jawaban_detail' => $this->input->post('jawaban_detail'),
                'nilai_detail' => $this->input->post('nilai_detail'),
            );
//            echo "<pre>";
//            print_r($dataSoal);
//            exit();
            $statusInsert = $this->nilai->insert_nilai($dataNilai);

            if ($statusInsert > 0) {
                redirect('nilai');
            } else {
                redirect('nilai/tambah');
            }
        } else {
            show_404();
        }
    }

    public function ubah($idNilai)
    {
        $nilai = $this->nilai->get_nilai_by_id($idNilai);
//        echo '<pre>';
//        print_r($soal);
//        exit();

        $data['nilai'] = $nilai;

        $this->load->view('templates/header',$data);
        $this->load->view('nilai/ubah',$data);
        $this->load->view('templates/footer',$data);
    }

    public function editNilai($idNilai)
    {
        $dataUbah = array(
            'id_ujian' => $this->input->post('id_ujian'),
            'id_pengguna' => $this->input->post('id_pengguna'),
            'nilai' => $this->input->post('nilai'),
            'jawaban_detail' => $this->input->post('jawaban_detail'),
            'nilai_detail' => $this->input->post('nilai_detail'),
        );
//
        $statusUbah = $this->nilai->edit_nilai($idNilai, $dataUbah);

        if ($statusUbah > 0) {
            redirect('nilai');
        } else {
            redirect('nilai/ubah/'.$idNilai);
        }

    }

    public function hapus($idNilai)
    {
        $statusDelete = $this->nilai->hapus_nilai($idNilai);

        if ($statusDelete > 0){
            redirect('nilai');
        } else {
            redirect('nilai');
        }
    }
}