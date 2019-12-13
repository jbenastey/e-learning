<?php


class SoalModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_soal()
    {
//        $this->db->join('ujian', 'ujian.id_ujian = soal.id_ujian');
        $soal = $this->db->get('soal');

        return $soal->result_array();
    }

    public function get_soal_by_id($idSoal)
    {
        $this->db->select('*');
        $this->db->from('soal');

        //fungsi db where : param1 = nama kolom, param2 = nilai yang diinginkan
        $this->db->where('id_soal', $idSoal);

        //menyimpan data berupa objek ke variabel pengguna
        $soal = $this->db->get();

        //mengubah objek menjadi array/baris dan mengembalikan nilainya ke fungsi get_pengguna_by_id
        return $soal->row_array();
    }

    public function get_soal_by_ujian($idUjian)
    {
        $this->db->select('*');
        $this->db->from('soal');

        //fungsi db where : param1 = nama kolom, param2 = nilai yang diinginkan
        $this->db->where('id_ujian', $idUjian);

        //menyimpan data berupa objek ke variabel pengguna
        $soal = $this->db->get();

        //mengubah objek menjadi array/baris dan mengembalikan nilainya ke fungsi get_pengguna_by_id
        return $soal->result_array();
    }

    //operasi insert
    public function insert_soal($dataSoal)
    {
        /*
         * perintah masukkan record baru ke tabel soal
         * parameter pertama : nama Tabel
         * parameter kedua :data yang akan diinput ke DB
         */
        $this->db->insert('soal', $dataSoal);
        //mengembalikan nilai 1 jika ada baris yang terpengaruh ditabel
        return $this->db->affected_rows();
    }

    //operasi update data
//2 parameter, param1 = id pengguna, param2 = dataUbah
    public function edit_soal($idSoal, $dataSoal)
    {
        $this->db->where('id_soal', $idSoal);

        //ubah data dgn data baru
        $this->db->update('soal', $dataSoal);

        //mengembalikan status ubah dgn cara memeriksa baris terpenuhi
        return $this->db->affected_rows();
    }

    //operasi hapus
    public function hapus_soal($idSoal){
        $this->db->where('id_soal',$idSoal);

        //delete baris ditabel pengguna berdasarkan id
        $this->db->delete('soal');

        //mengembalikan niali 1 jika ada baris terpengaruhi
        return $this->db->affected_rows();
    }
}