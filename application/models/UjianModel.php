<?php


class UjianModel extends CI_Model
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
    public function get_ujian()
    {
        //perintah untuk mengambil seluruh data pengguna
        $this->db->join('dosen', 'dosen.id_dosen = ujian.id_dosen');
        $this->db->join('sub_modul', 'sub_modul.id_sub_modul = ujian.id_sub_modul');

        $ujian = $this->db->get('ujian');

        //mengembalikan data menjadi array
        return $ujian->result_array();
    }

    public function get_ujian_by_id($idUjian)
    {
        $this->db->select('*');
        $this->db->from('ujian');
        $this->db->join('dosen', 'dosen.id_dosen = ujian.id_dosen');
        $this->db->join('sub_modul', 'sub_modul.id_sub_modul = ujian.id_sub_modul');

        //fungsi db where : param1 = nama kolom, param2 = nilai yang diinginkan
        $this->db->where('ujian.id_sub_modul', $idUjian);

        //menyimpan data berupa objek ke variabel pengguna
        $ujian = $this->db->get();

        //mengubah objek menjadi array/baris dan mengembalikan nilainya ke fungsi get_pengguna_by_id
        return $ujian->row_array();
    }

//operasi insert
    public function insert_ujian($dataUjian)
    {
        /*
         * perintah masukkan record baru ke tabel pengguna
         * parameter pertama : nama Tabel
         * parameter kedua :data yang akan diinput ke DB
         */
        $this->db->insert('ujian', $dataUjian);
        //mengembalikan nilai 1 jika ada baris yang terpengaruh ditabel
        return $this->db->affected_rows();
    }

//operasi update data
//2 parameter, param1 = id pengguna, param2 = dataUbah
    public function edit_ujian($idUjian, $dataUjian)
    {
        $this->db->where('id_sub_modul', $idUjian);

        //ubah data dgn data baru
        $this->db->update('ujian', $dataUjian);

        //mengembalikan status ubah dgn cara memeriksa baris terpenhi
        return $this->db->affected_rows();
    }

    //operasi hapus
    public function hapus_ujian($idUjian){
        $this->db->where('id_ujian',$idUjian);

        //delete baris ditabel pengguna berdasarkan id
        $this->db->delete('ujian');

        //mengembalikan niali 1 jika ada baris terpengaruhi
        return $this->db->affected_rows();
    }
}