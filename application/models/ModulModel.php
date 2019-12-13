<?php


class ModulModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_matkul()
    {
        $this->db->from('matkul');
        $this->db->where('matkul_jurusan','PBA');
        $matkul=$this->db->get();
        return $matkul->result_array();
    }
    //start modul
    public function get_modul($id_matkul)
    {
        //perintah untuk mengambil data array
        $this->db->where('paket_id',$id_matkul);
        $soal=$this->db->get('modul');
        //mengembalikan dataa array
        return $soal->result_array();
    }
    public function get_modul_by_id($idModul)
    {
        $this->db->select('*');
        $this->db->from('modul');

        //fungdi db>where param1=nama kolom, param2=nilsi ysng diinginkn
        $this->db->where('id_modul',$idModul);
        ///menyimpan data berupa ibjek je variabel soal
        $soal=$this->db->get();

        return $soal->row_array();

    }
    public function insert_modul($dataModul)
    {
        /*
         * perintah memasukan record baru ke tabel pengguna
         * parameter pertama : nama tabel
         * parameter kedua: data yang akan diinput ke db
         *
         */
        $this->db->insert('modul', $dataModul);
        //mengambalikan nilai 1 jika ada baris yang terpengaruh di tabel
        return $this->db->affected_rows();
    }
    public function edit_modul($idModul,$dataModul)
    {
        $this->db->where('id_modul',$idModul);
        //ubah data dengan databaru dai param1
        $this->db->update('modul',$dataModul);
        //mengembalikan sttasus ubah dengan cara memriksa baris terpengaruhi
        return $this->db->affected_rows();
    }
    public function hapus_modul($idModul)
    {
        $this->db->where('id_modul', $idModul);

        //delete baris di tael pengguna berdasarkan id
        $this->db->delete('modul');

        //mengembalikan nilai 1 jika ada baris yang terpengaruhi
        return $this->db->affected_rows();
    }
    // end modul

    //start sub modul
    public function get_sub_modul($id_modul)
    {
//        $this->db->from('sub_modul');
        $this->db->join('modul','sub_modul.id_modul=modul.id_modul');
//        $this->db->join('nilai','nilai.id_ujian=sub_modul.id_sub_modul','left');
        $this->db->where('sub_modul.id_modul',$id_modul);
        $modul=$this->db->get('sub_modul');
        return $modul->result_array();
    }
    public function get_nilai_sub_modul($id_modul)
    {
        $this->db->from('sub_modul');
        $this->db->join('modul','sub_modul.id_modul=modul.id_modul');
        $this->db->join('nilai','nilai.id_ujian=sub_modul.id_sub_modul','left');
        $this->db->where('sub_modul.id_modul',$id_modul);
        $modul=$this->db->get();
        return $modul->result_array();
    }
    public function insert_sub_modul($data)
    {
        $this->db->insert('sub_modul',$data);
        return $this->db->affected_rows();
    }
    public function get_sub_modul_by_id($idSubModul)
    {
        $this->db->join('modul','sub_modul.id_modul=modul.id_modul');
        $this->db->join('paket','modul.paket_id=paket.paket_id');
        $this->db->join('matkul','paket.paket_matkul_id=matkul.matkul_id');
        $this->db->where('sub_modul.id_sub_modul',$idSubModul);
        $modul=$this->db->get('sub_modul');
        return $modul->row_array();
    }
    public function edit_sub_modul($idSubModul,$dataSubModul)
    {
        $this->db->where('id_sub_modul',$idSubModul);
        //ubah data dengan databaru dai param1
        $this->db->update('sub_modul',$dataSubModul);
        //mengembalikan sttasus ubah dengan cara memriksa baris terpengaruhi
        return $this->db->affected_rows();
    }

    public function hapus_sub_modul($idSubModul)
    {
        $this->db->where('id_sub_modul', $idSubModul);

        //delete baris di tael pengguna berdasarkan id
        $this->db->delete('sub_modul');

        //mengembalikan nilai 1 jika ada baris yang terpengaruhi
        return $this->db->affected_rows();
    }
    public function get_dosen_by_nip($nip)
    {
        $query = "SELECT * FROM dosen WHERE REPLACE(nip_nik_dosen,' ','') = '$nip'";

        $dosen = $this->db->query($query);
        return $dosen->row_array();
    }
    public function get_matkul_dosen($dosen_id)
    {
        $this->db->from('paket');
        $this->db->join('matkul', 'matkul.matkul_id= paket.paket_matkul_id');
        $this->db->join('dosen', 'dosen.id_dosen= paket.paket_dosen_id');
        $this->db->where('id_dosen',$dosen_id);

        $paket=$this->db->get();
        return $paket->result_array();

        /*     $this->db->join('modul','sub_modul.id_modul=modul.id_modul');
        $this->db->where('sub_modul.id_sub_modul',$idSubModul);
        $modul=$this->db->get('sub_modul');
        return $modul->row_array();*/
    }
    public function get_kelas($idPengguna)
    {
        $this->db->from('kelas');
        $this->db->join('paket', 'paket.paket_id= kelas.id_paket');
        $this->db->join('dosen', 'dosen.id_dosen= paket.paket_dosen_id');
        $this->db->join('matkul', 'matkul.matkul_id= paket.paket_matkul_id');
        $this->db->where('id_pengguna',$idPengguna);

        $paket=$this->db->get();
        return $paket->result_array();

        /*     $this->db->join('modul','sub_modul.id_modul=modul.id_modul');
        $this->db->where('sub_modul.id_sub_modul',$idSubModul);
        $modul=$this->db->get('sub_modul');
        return $modul->row_array();*/
    }
}