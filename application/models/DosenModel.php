<?php


class DosenModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_dosen()
    {
        //PERINTAH UNTK MENGAMBIL DATA PENGGUNA
        $dosen = $this->db->get('dosen');
        //mengembalikan data menjadi array
        return $dosen->result_array();


    }

    public function get_dosen_by_id($idDosen)
    {
        $this->db->select('*');
        $this->db->from('dosen');

        // fungsi db->where : param1=nama kolom, param2=nilai yang diiginkan
        $this->db->where('dosen_id', $idDosen);
        //menyinpan data berupa objek ke variabel pengguna
        $dosen = $this->db->get();

        //menguba objek menajdi array/baris dan mengembalikan nilainya ke fungsi get_pengguna_by_id

        return $dosen->row_array();

    }

    public function insert_dosen($dataDosen)
    {
        /*
         * perintah memasukan record baru ke tabel pengguna
         * parameter pertama : nama tabel
         * parameter kedua: data yang akan diinput ke db
         *
         */
        $this->db->insert('dosen', $dataDosen);
        //mengambalikan nilai 1 jika ada baris yang terpengaruh di tabel
        return $this->db->affected_rows();
    }
    public function edit_dosen($idDosen,$dataDosen)
    {
        $this->db->where('dosen_id', $idDosen);
        //ubah data dengan databae dari param 1
        $this->db->update('dosen',$dataDosen);

        //mengembalikan status ubah dengan cara memeriksa baris terpengaruhi
        return $this->db->affected_rows();
    }
    public function hapus_dosen($idDosen)
    {
        $this->db->where('dosen_id',$idDosen);

        //delete aris di tabel dosen berdasarkna id
        $this->db->delete('dosen');
        //mengembalikian nilai 1 jika ada baris yang terpengaruhi
        return $this->db->affected_rows();
    }

}