<?php


class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DosenModel', 'dosen');
    }
    public function index()
    {
        //menagmbil data pengguna dari model yang berbentuk array
        $data['dosen'] = $this->dosen->get_dosen();
        $this->load->view('templates/header',$data);
        $this->load->view('dosen/index',$data);
        $this->load->view('templates/footer',$data);
    }
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('dosen/tambah');
        $this->load->view('templates/footer');
    }
    public function insertDosen()
    {
        if (isset($_POST['simpan'])) {
            $dataDosen = array(
                'dosen_nama' => $this->input->post('nama_dosen'),
                'dosen_kategori' => $this->input->post('kategori_dosen'),
                'dosen_nip_nik' => $this->input->post('nip_nik_dosen'),
                'dosen_nid_nup' => $this->input->post('nid_nup_dosen'),
                'dosen_gol_jab' => $this->input->post('gol_jab_dosen'),
                'dosen_jurusan' => $this->input->post('jurusan_dosen'),
                'dosen_tugas_lain' => $this->input->post('tugas_lain_dosen'),
                'dosen_nomor_hp' => $this->input->post('nomor_hp_dosen'),
                'dosen_status' => $this->input->post('status_dosen'),

            );
            $statusInsert = $this->dosen->insert_dosen($dataDosen);

            if ($statusInsert > 0) {
                redirect('dosen');
            } else {
                redirect('dosen/tambah');
            }
//            echo "<pre>";
//            print_r($dataPengguna);
        } else {
            show_404();
        }
    }
    public function ubahDosen($idDosen)
    {
        $dosen=$this->dosen->get_dosen_by_id($idDosen);
        $data['dosen']=$dosen;
        $this->load->view('templates/header',$data);
        $this->load->view('dosen/ubah',$data);
        $this->load->view('templates/footer',$data);

    }
    public function editDosen($idDosen)
    {
        $dataUbah= array(
            'dosen_nama' => $this->input->post('nama_dosen'),
            'dosen_kategori' => $this->input->post('kategori_dosen'),
            'dosen_nip_nik' => $this->input->post('nip_nik_dosen'),
            'dosen_nid_nup' => $this->input->post('nid_nup_dosen'),
            'dosen_gol_jab' => $this->input->post('gol_jab_dosen'),
            'dosen_jurusan' => $this->input->post('jurusan_dosen'),
            'dosen_tugas_lain' => $this->input->post('tugas_lain_dosen'),
            'dosen_nomor_hp' => $this->input->post('nomor_hp_dosen'),
            'dosen_status' => $this->input->post('status_dosen'),
        );
        //bernilai satu jika ada baris terpengaruhi data berhasil diubah
        $statusUbah= $this->dosen->edit_dosen($idDosen,$dataUbah);

        if ($statusUbah>0){
            redirect('dosen');
        }else{
            redirect('dosen/ubah');
        }
    }
    public function hapus($idDosen)
    {
        $statusDelete=$this->dosen->hapus_dosen($idDosen);
        if ($statusDelete>0){
            redirect('dosen');
        }else{
            redirect('dosen'.$idDosen);
        }
    }
    public function cari()
    {
        if (isset($_POST['dosen'])){
            echo $this->input->post('dosen');
            exit;

        }else{
            $this->load->view('templates/header');
            $this->load->view('dosen/cari_dosen');
            $this->load->view('templates/footer');
        }

    }
}