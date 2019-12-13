<?php


class ServiceModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_dosen()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        return $this->db->get()->result_array();
    }
}