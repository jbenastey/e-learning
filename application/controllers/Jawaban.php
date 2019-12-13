<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jawaban extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JawabanModel', 'jawaban');
    }

    public function index()
    {
        //mengambil data pengguna dari authModel yang berbentuk array
        $data['jawaban'] = $this->jawaban->get_jawaban();

//            echo "<pre>";
//          var_dump( $data['jawaban']);
//        exit();

        $this->load->view('templates/header', $data);
        $this->load->view('jawaban/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('jawaban/tambah');
        $this->load->view('templates/footer');
    }

    public function insertJawaban()
    {
        if (isset($_POST['simpan'])) {
            $dataJawaban = array(
                'pertanyaan_jawaban' => $this->input->post('pertanyaan_jawaban'),
                'format_jawaban' => $this->input->post('format_jawaban'),
                'nilai' => $this->input->post('nilai'),
                'tanggal_menjawab' => $this->input->post('tanggal_menjawab'),
                'id_soal' => $this->input->post('id_soal'),
            );
//            echo "<pre>";
//            print_r($dataPengguna);
//            exit();
            $statusInsert = $this->jawaban->insert_jawaban($dataJawaban);

            if ($statusInsert > 0) {
                redirect('jawaban');
            } else {
                redirect('jawaban/tambah');
            }
        } else {
            show_404();
        }
    }

    public function ubah($idJawaban)
    {
        $jawaban = $this->jawaban->get_jawaban_by_id($idJawaban);
        //echo '<pre>';
        //var_dump($pengguna);
        //exit();

        $data['jawaban'] = $jawaban;

        $this->load->view('templates/header',$data);
        $this->load->view('jawaban/ubah',$data);
        $this->load->view('templates/footer',$data);
    }

    public function editJawaban($idJawaban)
    {
        $dataUbah = array(
            'pertanyaan_jawaban' => $this->input->post('pertanyaan_jawaban'),
            'format_jawaban' => $this->input->post('format_jawaban'),
            'nilai' => $this->input->post('nilai'),
            'tanggal_menjawab' => $this->input->post('tanggal_menjawab'),
            'id_soal' => $this->input->post('id_soal'),
        );

        //berniali 1 jika ada baris terpengaruhi(data berhasil diubah)
        $statusUbah = $this->jawaban->edit_jawaban($idJawaban, $dataUbah);

        if ($statusUbah > 0){
            redirect('jawaban');
        }else{
            redirect('jawaban/ubah/'.$idJawaban);
        }

    }

    public function hapus($idJawaban)
    {
        $statusDelete = $this->jawaban->hapus_jawaban($idJawaban);

        if ($statusDelete > 0){
            redirect('jawaban');
        } else {
            redirect('jawaban');
        }
    }
}