<?php


class JawabanModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * modul perintah get data jawaban
     */
//operasi select data dari tabel
    public function get_jawaban()
    {
        //perintah untuk mengambil seluruh data jawaban
        $this->db->join('soal', 'soal.id_soal = jawaban.id_soal');
        $jawaban = $this->db->get('jawaban');

        //mengembalikan data menjadi array
        return $jawaban->result_array();
    }

    public function get_jawaban_by_id($idJawaban)
    {
        $this->db->select('*');
        $this->db->from('jawaban');

        //fungsi db where : param1 = nama kolom, param2 = nilai yang diinginkan
        $this->db->where('id_jawaban', $idJawaban);

        //menyimpan data berupa objek ke variabel pengguna
        $jawaban = $this->db->get();

        //mengubah objek menjadi array/baris dan mengembalikan nilainya ke fungsi get_pengguna_by_id
        return $jawaban->row_array();
    }

//operasi insert
    public function insert_jawaban($dataJawaban)
    {
        /*
         * perintah masukkan record baru ke tabel pengguna
         * parameter pertama : nama Tabel
         * parameter kedua :data yang akan diinput ke DB
         */
        $this->db->insert('jawaban', $dataJawaban);
        //mengembalikan nilai 1 jika ada baris yang terpengaruh ditabel
        return $this->db->affected_rows();
    }

//operasi update data
//2 parameter, param1 = id pengguna, param2 = dataUbah
    public function edit_jawaban($idJawaban, $dataJawaban)
    {
        $this->db->where('id_jawaban', $idJawaban);

        //ubah data dgn data baru
        $this->db->update('jawaban', $dataJawaban);

        //mengembalikan status ubah dgn cara memeriksa baris terpenhi
        return $this->db->affected_rows();
    }

    //operasi hapus
    public function hapus_jawaban($idJawaban){
        $this->db->where('id_jawaban',$idJawaban);

        //delete baris ditabel pengguna berdasarkan id
        $this->db->delete('jawaban');

        //mengembalikan niali 1 jika ada baris terpengaruhi
        return $this->db->affected_rows();
    }
}