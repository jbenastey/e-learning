<?php


class NilaiModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * modul perintah get data nilai
     */
//operasi select data dari tabel
    public function get_nilai()
    {
        //perintah untuk mengambil seluruh data jawaban
        $this->db->join('ujian', 'ujian.id_ujian= nilai.id_ujian');
        $this->db->join('pengguna', 'pengguna.id_pengguna = nilai.id_pengguna');
        $nilai = $this->db->get('nilai');

        //mengembalikan data menjadi array
        return $nilai->result_array();
    }

    public function get_nilai_by_id($idNilai)
    {
        $this->db->select('*');
        $this->db->from('nilai');

        //fungsi db where : param1 = nama kolom, param2 = nilai yang diinginkan
        $this->db->where('id_hasil', $idNilai);

        //menyimpan data berupa objek ke variabel pengguna
        $nilai = $this->db->get();

        //mengubah objek menjadi array/baris dan mengembalikan nilainya ke fungsi get_pengguna_by_id
        return $nilai->row_array();
    }
    public function get_nilai_by_subModul($idSubModul)
    {
        $this->db->select('*');
        $this->db->from('nilai');

        $this->db->join('ujian', 'ujian.id_sub_modul = nilai.id_ujian','left');
        $this->db->join('pengguna', 'pengguna.id_pengguna = nilai.id_pengguna','left');
        //fungsi db where : param1 = nama kolom, param2 = nilai yang diinginkan
        $this->db->where('id_sub_modul', $idSubModul);

        //menyimpan data berupa objek ke variabel pengguna
        $nilai = $this->db->get();

        //mengubah objek menjadi array/baris dan mengembalikan nilainya ke fungsi get_pengguna_by_id
        return $nilai->result_array();
    }

//operasi insert
    public function insert_nilai($dataNilai)
    {
        /*
         * perintah masukkan record baru ke tabel pengguna
         * parameter pertama : nama Tabel
         * parameter kedua :data yang akan diinput ke DB
         */
        $this->db->insert('nilai', $dataNilai);
        //mengembalikan nilai 1 jika ada baris yang terpengaruh ditabel
        return $this->db->affected_rows();
    }

//operasi update data
//2 parameter, param1 = id pengguna, param2 = dataUbah
    public function edit_nilai($idNilai, $dataNilai)
    {
        $this->db->where('id_nilai', $idNilai);

        //ubah data dgn data baru
        $this->db->update('nilai', $dataNilai);

        //mengembalikan status ubah dgn cara memeriksa baris terpenhi
        return $this->db->affected_rows();
    }

    //operasi hapus
    public function hapus_nilai($idNilai){
        $this->db->where('id_nilai',$idNilai);

        //delete baris ditabel pengguna berdasarkan id
        $this->db->delete('nilai');

        //mengembalikan niali 1 jika ada baris terpengaruhi
        return $this->db->affected_rows();
    }
}