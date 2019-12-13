<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
//        $this->load->model('JawabanModel', 'jawaban');
        $this->load->model('QuizModel', 'quiz');
    }

    public function index($id_ujian)
    {
        //mengambil data pengguna dari authModel yang berbentuk array
        $data['quiz'] = $this->quiz->get_quiz($id_ujian);
        $data['soal'] = $this->quiz->get_soal($id_ujian);
        $data['idSubmodul'] = $id_ujian;

//        $penggunaId = $this->session->userdata('id_pengguna');
//        $dataUjian = array(
//            'id_ujian' => $id_ujian,
//            'id_pengguna' => $penggunaId
//        );
//        $this->quiz->create_hasil($dataUjian);

//            echo "<pre>";
//          print_r( $data['soal']);
//        exit();

        $this->load->view('templates/header', $data);
        $this->load->view('quiz/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function jawaban($idSubmodul)
    {
        $idPengguna = $this->session->userdata('id_pengguna');
        $soals = $this->quiz->get_soal_by_submodul($idSubmodul);
        $jawaban = array();
        $kunciJawaban = array();
        $nilaiBenar = 0;
        $nilaiDetail = array();
        for ($i = 0; $i < count($soals); $i++){
            $jawaban[$i] = $this->input->post('jawaban-'.$i);
            $kunciJawaban[$i] = ($soals[$i]['kunci_jawaban']);
            if ($kunciJawaban[$i] == $jawaban[$i]){
                $nilaiDetail[$i] = 'benar';
                $nilaiBenar = $nilaiBenar+1;
            }
            else{
                $nilaiDetail[$i] = 'salah';
            }
        }
        $nilai = ($nilaiBenar/count($jawaban))*100;
        $dataNilai = array(
            'id_ujian' => $idSubmodul,
            'id_pengguna' => $idPengguna,
            'nilai' => $nilai,
            'jawaban_detail' => json_encode($jawaban),
            'nilai_detail' => json_encode($nilaiDetail)
        );
//        var_dump($jawaban);
//        var_dump($kunciJawaban);die;
        $save = $this->quiz->finish_ujian($dataNilai);
        if ($save > 0){
            redirect('quiz/lihat/'.$idSubmodul);
        }
        else{
            echo 'gagal';
        }


    }

    public function lihat($id){
        $idPengguna = $this->session->userdata('id_pengguna');
        $data['ujian'] = $this->quiz->get_quiz($id);
        $data['soal'] = $this->quiz->get_soal($id);
        $data['hasil'] = $this->quiz->get_ujian_row($id,$idPengguna);


        $this->load->view('templates/header', $data);
        $this->load->view('nilai/index', $data);
        $this->load->view('templates/footer', $data);
    }

//
//    public function tambah()
//    {
//        $this->load->view('templates/header');
//        $this->load->view('jawaban/tambah');
//        $this->load->view('templates/footer');
//    }
//
//    public function insertJawaban()
//    {
//        if (isset($_POST['simpan'])) {
//            $dataJawaban = array(
//                'pertanyaan_jawaban' => $this->input->post('pertanyaan_jawaban'),
//                'format_jawaban' => $this->input->post('format_jawaban'),
//                'nilai' => $this->input->post('nilai'),
//                'tanggal_menjawab' => $this->input->post('tanggal_menjawab'),
//                'id_soal' => $this->input->post('id_soal'),
//            );
////            echo "<pre>";
////            print_r($dataPengguna);
////            exit();
//            $statusInsert = $this->jawaban->insert_jawaban($dataJawaban);
//
//            if ($statusInsert > 0) {
//                redirect('jawaban');
//            } else {
//                redirect('jawaban/tambah');
//            }
//        } else {
//            show_404();
//        }
//    }
//
//    public function ubah($idJawaban)
//    {
//        $jawaban = $this->jawaban->get_jawaban_by_id($idJawaban);
//        //echo '<pre>';
//        //var_dump($pengguna);
//        //exit();
//
//        $data['jawaban'] = $jawaban;
//
//        $this->load->view('templates/header',$data);
//        $this->load->view('jawaban/ubah',$data);
//        $this->load->view('templates/footer',$data);
//    }
//
//    public function editJawaban($idJawaban)
//    {
//        $dataUbah = array(
//            'pertanyaan_jawaban' => $this->input->post('pertanyaan_jawaban'),
//            'format_jawaban' => $this->input->post('format_jawaban'),
//            'nilai' => $this->input->post('nilai'),
//            'tanggal_menjawab' => $this->input->post('tanggal_menjawab'),
//            'id_soal' => $this->input->post('id_soal'),
//        );
//
//        //berniali 1 jika ada baris terpengaruhi(data berhasil diubah)
//        $statusUbah = $this->jawaban->edit_jawaban($idJawaban, $dataUbah);
//
//        if ($statusUbah > 0){
//            redirect('jawaban');
//        }else{
//            redirect('jawaban/ubah/'.$idJawaban);
//        }
//
//    }
//
//    public function hapus($idJawaban)
//    {
//        $statusDelete = $this->jawaban->hapus_jawaban($idJawaban);
//
//        if ($statusDelete > 0){
//            redirect('jawaban');
//        } else {
//            redirect('jawaban');
//        }
//    }
}