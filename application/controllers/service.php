<?php


class service extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ServiceModel','service');
    }
    public function dosens()
    {
        $dataDosen=$this->service->get_dosen();

        echo json_encode($dataDosen);
    }
}