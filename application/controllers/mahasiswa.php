<?php


class mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel','mahasiswa');
    }

    public function index()
    {
        //mengambil data pengguna dari model yang berbentuk array
        $data['mahasiswa']=$this->mahasiswa->get_mahasiswa();
        $this->load->view('templates/header');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('templates/footer',$data);
    }
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('mahasiswa/tambah');
        $this->load->view('templates/footer');
    }
    public function insertMahasiswa()
    {
        if(isset($_POST['simpan'])){
            $dataMahasiswa=array(
              'mahasiswa_nama'=>$this->input->post('nama_mahasiswa'),
              'mahasiswa_nim'=>$this->input->post('nim_mahasiswa') ,
              'mahasiswa_no_hp'=>$this->input->post('no_hp_mahasiswa') ,
              'mahasiswa_email'=>$this->input->post('email_mahasiswa') ,
            );

            $statusInsert = $this->mahasiswa->insert_mahasiswa($dataMahasiswa);
            if ($statusInsert>0){
                redirect('mahasiswa');
            }else{
                redirect('mahasiswa/tambah');
            }
        }else{
            show_404();
        }
    }
    public function ubahMahasiswa($idMahasiswa)
    {
        $mahasiswa=$this->mahasiswa->get_mahasiswa_by_id($idMahasiswa);
        $data['mahasiswa']=$mahasiswa;

        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/ubah',$data);
        $this->load->view('templates/footer',$data);
    }
    public function editMahasiswa($idMahasiswa)
    {
        $dataUbah=array(
            'mahasiswa_nama'=>$this->input->post('nama_mahasiswa'),
            'mahasiswa_nim'=>$this->input->post('nim_mahasiswa') ,
            'mahasiswa_no_hp'=>$this->input->post('no_hp_mahasiswa') ,
            'mahasiswa_email'=>$this->input->post('email_mahasiswa') ,
        );
        //bernilai satu jjika ada baris terpengaruh data berhasil diubah
        $statusUbah=$this->mahasiswa->edit_mahasiswa($idMahasiswa,$dataUbah);
        if ($statusUbah>0){
            redirect('mahasiswa');
        }else{
            redirect('mahasiswa/ubah/'.$idMahasiswa);
        }
    }
    public function hapus($idMahasiswa)
    {
        $statusDelete=$this->mahasiswa->hapus_mahasiswa($idMahasiswa);
        if($statusDelete>0){
            redirect('mahasiswa');
        }else{
            redirect('mahasiswa'.$idMahasiswa);
        }
    }
}