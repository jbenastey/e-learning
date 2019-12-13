<?php


class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenggunaModel', 'pengguna');
    }

    public function index()
    {
        //menagmbil data pengguna dari model yang berbentuk array
        $data['pengguna'] = $this->pengguna->get_pengguna();
        $this->load->view('templates/header', $data);
        $this->load->view('pengguna/index', $data);
        $this->load->view('templates/footer', $data);

        //  print ke tampilan layar untuk melihat bentuk array
        /*  echo "<pre>";
          print_r($data['pengguna']);
          exit();*/
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('pengguna/tambah');
        $this->load->view('templates/footer');

    }

    public function insertPengguna()
    {
        if (isset($_POST['simpan'])) {
            $dataPengguna = array(
                'username_pengguna' => $this->input->post('username'),
                'password_pengguna' => $this->input->post('password'),
                'level_pengguna' => $this->input->post('level'),

            );
            $statusInsert = $this->pengguna->insert_pengguna($dataPengguna);

            if ($statusInsert > 0) {
                redirect('pengguna');
            } else {
                redirect('pengguna/tambah');
            }
//            echo "<pre>";
//            print_r($dataPengguna);
        } else {
            show_404();
        }
    }

    public function ubahPengguna($idPengguna)
    {
        $pengguna = $this->pengguna->get_pengguna_by_id($idPengguna);
        /*echo '<pre>';
        print_r($pengguna);
        exit();*/
        $data['pengguna']=$pengguna;

        $this->load->view('templates/header',$data);
        $this->load->view('pengguna/ubah',$data);
        $this->load->view('templates/footer',$data);
    }
    public function editPengguna($idPengguna)
    {
            $dataUbah = array(
            'username_pengguna'=> $this->input->post('username'),
            'password_pengguna'=> $this->input->post('password'),
            'level_pengguna'=> $this->input->post('level'),
        );
        // bernilai satu jika ada baris terpegaruhi data berhasil diubah
        $statusUbah= $this->pengguna->edit_pengguna($idPengguna,$dataUbah);

        if($statusUbah>0){
            redirect('pengguna');
        }else{
            redirect('pengguna/ubah/'.$idPengguna);
        }
    }
    public function hapus($idPengguna)
    {
        $statusDelete=$this->pengguna->hapus_pengguna($idPengguna);

        if($statusDelete>0){
            redirect('pengguna');
        }else{
            redirect('pengguna'.$idPengguna);
        }
    }
}