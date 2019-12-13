<?php


class AuthModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //memeriksa data pengguna dari username dan ppassword
    //param1: usernama , param2:password

    public function get_pengguna_by_login_data($username,$password)
    {
        $query=array(
            'username_pengguna'=>$username,
            'password_pengguna'=>$password,
        );
        //menhembalikan data penguuna berupa objeck
        $pengguna=$this->db->get_where('pengguna',$query);

        return $pengguna;
    }
    public function insert_mahasiswa($data)
    {
        $this->db->insert('pengguna', $data);
        //mengambalikan nilai 1 jika ada baris yang terpengaruh di tabel
        return $this->db->affected_rows();
    }
    public function ikuti_kelas($data)
    {
        $this->db->insert('kelas', $data);
        //mengambalikan nilai 1 jika ada baris yang terpengaruh di tabel
        return $this->db->affected_rows();
    }

    public function validasi_kelas($data)
    {
        $kelas = $this->db->get_where('kelas', $data);

        return $kelas->row_array();
    }

    public function get_paket_by_kodekelas($kodeKelas)
    {
        $this->db->from('paket');
        $this->db->where('kode_kelas', $kodeKelas);
        return $this->db->get()->row_array();
    }
    public function validasi_kode_kelas($kodeKelas,$idPengguna)
    {
        $this->db->from('kelas');
        $this->db->where('kode_kelas', $kodeKelas);
        $this->db->where('id_pengguna', $idPengguna);
        return $this->db->get()->row_array();
    }
    public function hitung_mahasiswa($kodeKelas)
    {
        $this->db->from('kelas');
        $this->db->where('kode_kelas', $kodeKelas);
        return $this->db->get()->num_rows();
    }
}