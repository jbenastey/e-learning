<?php


class PenggunaModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    /*
     * modul perintahget data pengguna
     *
     */
    // operasi sleect data dari tabel

    public function get_pengguna()
    {
        //PERINTAH UNTK MENGAMBIL DATA PENGGUNA
        $pengguna = $this->db->get('pengguna');
        //mengembalikan data menjadi array
        return $pengguna->result_array();


    }

    public function get_pengguna_by_id($idPengguna)
    {
        $this->db->select('*');
        $this->db->from('pengguna');

        // fungsi db->where : param1=nama kolom, param2=nilai yang diiginkan
        $this->db->where('id_pengguna', $idPengguna);
        //menyinpan data berupa objek ke variabel pengguna
        $pengguna = $this->db->get();

        //menguba objek menajdi array/baris dan mengembalikan nilainya ke fungsi get_pengguna_by_id

        return $pengguna->row_array();

    }

    // operasi insert
    public function insert_pengguna($dataPengguna)
    {
        /*
         * perintah memasukan record baru ke tabel pengguna
         * parameter pertama : nama tabel
         * parameter kedua: data yang akan diinput ke db
         *
         */
        $this->db->insert('pengguna', $dataPengguna);
        //mengambalikan nilai 1 jika ada baris yang terpengaruh di tabel
        return $this->db->affected_rows();
    }
    // operasi ubah data/updta data
    // 2 parameter.param1: idpengguna, param2: data ubah
    public function edit_pengguna($idPengguna, $dataPengguna)

    {

        $this->db->where('id_pengguna', $idPengguna);

        // ubah data dengan databaru dari param1
        $this->db->update('pengguna', $dataPengguna);

        //mengembalikan ststaus unah dengan cara memeriksa baris terpengaruhi
        return $this->db->affected_rows();
    }

    // operasi hapus
    public function hapus_pengguna($idPengguna)
    {
        $this->db->where('id_pengguna', $idPengguna);

        //delete baris di tael pengguna berdasarkan id
        $this->db->delete('pengguna');

        //mengembalikan nilai 1 jika ada baris yang terpengaruhi
        return $this->db->affected_rows();
    }
}