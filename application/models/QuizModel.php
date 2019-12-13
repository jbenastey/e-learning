<?php


class QuizModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * modul perintah get data pengguna
     */
//operasi select data dari tabel
    public function get_quiz($id_ujian)
    {
        //perintah untuk mengambil seluruh data pengguna

        $this->db->select('*');
        $this->db->from('ujian');

        $this->db->join('sub_modul','sub_modul.id_sub_modul = ujian.id_sub_modul');
        $this->db->join('nilai','nilai.id_ujian = sub_modul.id_sub_modul');
        $this->db->join('dosen','dosen.id_dosen = ujian.id_dosen');
        //fungsi db where : param1 = nama kolom, param2 = nilai yang diinginkan
        $this->db->where('ujian.id_sub_modul', $id_ujian);
        $quiz = $this->db->get();

        //mengembalikan data menjadi array
        return $quiz->row_array();
    }

    public function get_ujian_by_id($idUjian)
    {
        $this->db->from('ujian');
        $this->db->where('id_ujian',$idUjian);
        return $this->db->get()->row_array();
    }

    public function get_all_ujian()
    {
        $this->db->from('ujian');
//        $this->db->where('id_sub_modul',$idSubmodul);
        return $this->db->get()->result_array();
    }

    public function get_soal($id_ujian)
    {

        //perintah untuk mengambil seluruh data pengguna

        $this->db->select('*');
        $this->db->from('soal');

        //fungsi db where : param1 = nama kolom, param2 = nilai yang diinginkan
        $this->db->where('id_ujian', $id_ujian);
        $quiz = $this->db->get();

        //mengembalikan data menjadi array
        return $quiz->result_array();
    }

    public function get_soal_by_submodul($idSubmodul)
    {
        $this->db->from('soal');
        $this->db->where('id_ujian',$idSubmodul);
        return $this->db->get()->result_array();
    }

//    public function finish_ujian($ujianId,$userId,$data){
//        $this->db->where('id_ujian',$ujianId);
//        $this->db->where('id_pengguna',$userId);
//        $this->db->update('nilai',$data);
//        return $this->db->affected_rows();
//    }

    public function finish_ujian($data){
        $this->db->insert('nilai',$data);
        return $this->db->affected_rows();
    }

    public function create_hasil($dataNilai)
    {
        /*
         * perintah masukkan record baru ke tabel soal
         * parameter pertama : nama Tabel
         * parameter kedua :data yang akan diinput ke DB
         */
        $this->db->insert('nilai', $dataNilai);
        //mengembalikan nilai 1 jika ada baris yang terpengaruh ditabel
        return $this->db->affected_rows();
    }
    public function get_ujian_row($idUjian,$idUser){
        $this->db->select('*');
        $this->db->from('sub_modul');
        $this->db->join('nilai','nilai.id_ujian = sub_modul.id_sub_modul');
        $this->db->where('id_pengguna', $idUser);
        $this->db->where('nilai.id_ujian', $idUjian);
        $query = $this->db->get();
        return $query->row_array();
    }
//    public function get_dosen_by_id($idDosen)
//    {
//        $this->db->select('*');
//        $this->db->from('dosen');
//
//        //fungsi db where : param1 = nama kolom, param2 = nilai yang diinginkan
//        $this->db->where('id_dosen', $idDosen);
//
//        //menyimpan data berupa objek ke variabel pengguna
//        $dosen = $this->db->get();
//
//        //mengubah objek menjadi array/baris dan mengembalikan nilainya ke fungsi get_pengguna_by_id
//        return $dosen->row_array();
//    }
//
////operasi insert
//    public function insert_dosen($dataDosen)
//    {
//        /*
//         * perintah masukkan record baru ke tabel pengguna
//         * parameter pertama : nama Tabel
//         * parameter kedua :data yang akan diinput ke DB
//         */
//        $this->db->insert('dosen', $dataDosen);
//        //mengembalikan nilai 1 jika ada baris yang terpengaruh ditabel
//        return $this->db->affected_rows();
//    }
//
////operasi update data
////2 parameter, param1 = id pengguna, param2 = dataUbah
//    public function edit_dosen($idDosen, $dataDosen)
//    {
//        $this->db->where('id_dosen', $idDosen);
//
//        //ubah data dgn data baru
//        $this->db->update('dosen', $dataDosen);
//
//        //mengembalikan status ubah dgn cara memeriksa baris terpenhi
//        return $this->db->affected_rows();
//    }
//
//    //operasi hapus
//    public function hapus_dosen($idDosen){
//        $this->db->where('id_dosen',$idDosen);
//
//        //delete baris ditabel pengguna berdasarkan id
//        $this->db->delete('dosen');
//
//        //mengembalikan niali 1 jika ada baris terpengaruhi
//        return $this->db->affected_rows();
//    }
}