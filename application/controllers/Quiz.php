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

//		var_dump($data['quiz']);die;

        $cek = $this->quiz->cek_ujian($id_ujian, $this->session->userdata('id_pengguna'));

        if ($cek == null){
        	$waktu_mulai = date('Y-m-d H:i:s');
			$habis = strtotime('+'.$data['quiz']['durasi_ujian'].'minutes');
			$waktu_habis = date('Y-m-d H:i:s',$habis);

//			var_dump($waktu_mulai);

			shuffle($data['soal']);
			$soal = array();
			foreach ($data['soal'] as $key=>$value){
//				$soal = json_encode($value);
				array_push($soal,$value);
			}
			$array = array(
				'id_ujian' => $id_ujian,
				'id_pengguna' => $this->session->userdata('id_pengguna'),
				'waktu_mulai' => $waktu_mulai,
				'waktu_habis' => $waktu_habis,
				'soal' => json_encode($soal),
			);

			$this->quiz->tambah_sementara($array);

			$data['waktu_habis'] = str_replace('-','/',$waktu_habis);
			$data['soalnya'] = json_encode($soal);

//
		} else {
			$data['waktu_habis'] = str_replace('-','/',$cek['waktu_habis']);
			$data['soalnya'] = $cek['soal'];
		}


//        echo '<pre>';
//        var_dump($data['soal']);
//        die;

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
        $id_soal = array();
        $jawaban = array();
        $data_soal = array();
        $data_jawaban = array();
        $kunciJawaban = array();
        $nilaiBenar = 0;
        $nilaiDetail = array();
        for ($i = 0; $i < count($soals); $i++){
            $id_soal[$i] = $this->input->post('id-'.$i);
            $jawaban[$i] = $this->input->post('jawaban-'.$i);
            $kunciJawaban[$i] = ($soals[$i]['kunci_jawaban']);
            array_push($data_soal,array(
                'id_soal' => $id_soal[$i],
                'jawaban' => $jawaban[$i],
            ));
        }
        sort($data_soal);
        for ($i = 0; $i < count($soals); $i++){
            array_push($data_jawaban,$data_soal[$i]['jawaban']);
            if ($kunciJawaban[$i] == $data_soal[$i]['jawaban']){
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
            'jawaban_detail' => json_encode($data_jawaban),
            'nilai_detail' => json_encode($nilaiDetail)
        );
//        echo '<pre>';
//        var_dump($id_soal);
//        var_dump($dataNilai);
//        var_dump($data_jawaban);
//        var_dump($jawaban);
//        var_dump($data_soal);die;
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
        $data['ujian'] = $this->quiz->get_quiz_mhs($id,$idPengguna);
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
