<?php


class MahasiswaModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // modul peintah get data
    public function get_mahasiswa()
    {
        //perintah untuk mengembalikan data mahasiswa
        $mahasiswa=$this->db->get('mahasiswa');
        //mengembalokan data menjadi array
        return $mahasiswa->result_array();
    }
    /*public function get_mahasiswa_by_id($idMahasiswa)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        //fung db->where:param1=nama kolom, param2=nilai yang diinginkan
        $this->db->where('mahasiswa_id',$idMahasiswa);
        //menyimpan data berupa objek ke variabel pengguna
        $dosen = $this->db->get();
        //mengubah objek menjadi arrray/ baris dan mengembalikan nilainya
        return $mahasiswa->row_array();
    }*/
    public function get_mahasiswa_by_id($idMahasiswa)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');

        // fungsi db->where : param1=nama kolom, param2=nilai yang diiginkan
        $this->db->where('mahasiswa_id', $idMahasiswa);
        //menyinpan data berupa objek ke variabel pengguna
        $mahasiswa = $this->db->get();

        //menguba objek menajdi array/baris dan mengembalikan nilainya ke fungsi get_pengguna_by_id
        return $mahasiswa->row_array();

    }
    // operasi insert
    public function insert_mahasiswa($dataMahasiswa)
    {
        /*
         * perintah memasukan record baru ke tabel pengguna
         * parameter pertama : nama tabel
         * parameter kedua: data yang akan diinput ke db
         *
         */
        $this->db->insert('mahasiswa', $dataMahasiswa);
        //mengambalikan nilai 1 jika ada baris yang terpengaruh di tabel
        return $this->db->affected_rows();
    }
    //operasi ubah data/upfatae data
    //2 parameter.param1 :idmahasiswa, param2:data ubah
    public function edit_mahasiswa($idMahasiswa,$dataMahasiswa)
    {
        $this->db->where('mahasiswa_id',$idMahasiswa);
        //ubah data dengan databaru dai param1
        $this->db->update('mahasiswa',$dataMahasiswa);
        //mengembalikan sttasus ubah dengan cara memriksa baris terpengaruhi
        return $this->db->affected_rows();
    }
    public function hapus_mahasiswa($idMahasiswa)
    {
        $this->db->where('mahasiswa_id', $idMahasiswa);
        //delete baris di tabel mahasiswa berdasarkan id
        $this->db->delete('mahasiswa');
        //mengembalikan nilai 1 jika ada baris yang terpengaruhi
        return $this->db->affected_rows();
    }
}
