<?php


class modul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModulModel', 'modul');
        $this->load->model('QuizModel', 'quiz');
        $this->load->helper('class_helper');
    }

    // start untuk modul
    public function index($id_matkul)
    {
        $this->session->set_userdata('matkul_id', $id_matkul);
        $data['modul'] = $this->modul->get_modul($id_matkul);
        $this->load->view('templates/header');
        $this->load->view('modul/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahModul($idMatkul)
    {
//        $data['modul'] = $this->modul->get_modul();
//        $data['matkul']=$this->modul->get_matkul();
        $data = array(
            'matkul' => $idMatkul
        );
        $this->load->view('templates/header');
        $this->load->view('modul/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function insertModul($idmatkul)
    {
        if (isset($_POST['simpan'])) {
            $dataModul = array(
                'nama_modul' => $this->input->post('nama_modul'),
                'paket_id' => $idmatkul,
            );
            $statusInsert = $this->modul->insert_modul($dataModul);

            if ($statusInsert > 0) {
                redirect('modul/index/' . $idmatkul);
            } else {
                redirect('modul/tambah/' . $idmatkul);
            }
//            echo "<pre>";
//            print_r($dataPengguna);
        } else {
            show_404();
        }
    }

    public function ubahModul($idModul, $idmatkul)
    {
        $modul = $this->modul->get_modul_by_id($idModul);
        $data['data'] = $modul;
        $data['modul'] = $this->modul->get_modul($idmatkul);
        $this->load->view('templates/header', $data);
        $this->load->view('modul/ubah', $data);
        $this->load->view('templates/footer', $data);
    }

    public function editModul($idModul)
    {
        $dataUbah = array(
            'nama_modul' => $this->input->post('nama_modul')
        );
        //bernilai satu jjika ada baris terpengaruh data berhasil diubah
        $statusUbah = $this->modul->edit_modul($idModul, $dataUbah);
        if ($statusUbah > 0) {
            $this->session->set_flashdata('alert','ubah_data');
            redirect('modul/index/' . $this->input->post('id_matkul'));
        } else {
            $this->session->set_flashdata('alert','tidak_terubah');
            redirect('modul/index/' . $this->input->post('id_matkul'));
        }
    }

    public function lihatModul($idModul)
    {
        /*$data['modul'] = $this->modul->get_modul();
        $data['detail'] = $this->modul->get_modul_by_id($idModul);
        $this->load->view('templates/header',$data);
        $this->load->view('modul/lihat',$data);
        $this->load->view('templates/footer',$data);*/
//        $data['modul'] = $this->modul->get_modul();

        $data['detail'] = $this->modul->get_modul_by_id($idModul);
        $data['submodul'] = $this->modul->get_sub_modul($idModul);
        $data['nilai'] = $this->modul->get_nilai_sub_modul($idModul);
        $data['ujian'] = $this->quiz->get_all_ujian();

//        echo '<pre>';
//        var_dump($data['nilai']);die;
//

        $this->load->view('templates/header', $data);
        $this->load->view('modul/lihat', $data);
        $this->load->view('templates/footer', $data);
    }

    public function lihatModulMhs($idPaket)
    {
        $data['modul'] = $this->modul->get_modul($idPaket);
        $this->session->set_userdata('matkul_id', $idPaket);

        $this->load->view('templates/header', $data);
        $this->load->view('modul/lihatMhs', $data);
        $this->load->view('templates/footer', $data);

    }

    public function hapusModul($idModul, $idMatkul)
    {
        $statusDelete = $this->modul->hapus_modul($idModul);
        if ($statusDelete > 0) {
            $this->session->set_flashdata('alert','hapus_data');
            redirect('modul/index/' . $idMatkul);
        } else {
            redirect('modul/index/' . $idMatkul);
        }
    }
    // end modul


    // untuk sub model
    public function lihatSubModul($idModul)
    {
        $data['submodul'] = $this->modul->get_sub_modul($idModul);
//          echo '<pre>';
//        var_dump($data['nilai']);
//        exit();

        $data['idModul'] = $idModul;

        $this->load->view('templates/header', $data);
        $this->load->view('modul/submodul/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah($idModul)
    {
        $data['idModul'] = $idModul;

        $this->load->view('templates/header', $data);
        $this->load->view('modul/submodul/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function insertSubModul($idModul)
    {
//        var_dump($idModul);
//        var_dump($idMatkul);exit();
        if (isset($_POST['simpan'])) {
//            var_dump($idModul);die;
            $config['upload_path'] = './assets/dokumen/';
            $config['allowed_types'] = 'pptx|pdf';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('dokumen_ppt');
            $ppt = $this->upload->data('file_name');

            $this->upload->do_upload('dokumen_pdf');
            $pdf = $this->upload->data('file_name');

            $dataSubModul = array(
                'id_modul' => $idModul,
                /*  'matkul_id' => $idMatkul,*/
                'nama_sub_modul' => $this->input->post('nama_sub_modul'),
                'keterangan' => $this->input->post('keterangan'),
                'dokumen_ppt' => $ppt,
                'dokumen_pdf' => $pdf,

            );
            $statusInsert = $this->modul->insert_sub_modul($dataSubModul);
            if ($statusInsert > 0) {
                redirect('modul/lihatSubModul/' . $idModul);
            } else {
                redirect('modul/submodul/tambah/' . $idModul);
            }
        } else {
            show_404();
        }
    }

    public function ubahSubModul($idSubModul)
    {
        $submodul = $this->modul->get_sub_modul_by_id($idSubModul);
        $data['submodul'] = $submodul;

        $this->load->view('templates/header', $data);
        $this->load->view('modul/submodul/ubah', $data);
        $this->load->view('templates/footer', $data);
    }

    public function editSubModul($idSubModul)
    {
        if (isset($_POST['ubah'])) {
            $idModul = $this->input->post('id_modul');
            $config['upload_path'] = './assets/dokumen/';
            $config['allowed_types'] = 'pptx|pdf';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('dokumen_ppt');
            $ppt = $this->upload->data('file_name');

            $this->upload->do_upload('dokumen_pdf');
            $pdf = $this->upload->data('file_name');

            $dataUbah = array(
                'nama_sub_modul' => $this->input->post('nama_sub_modul'),
                'keterangan' => $this->input->post('keterangan'),
                'dokumen_ppt' => $ppt,
                'dokumen_pdf' => $pdf,

            );
            //bernilai satu jjika ada baris terpengaruh data berhasil diubah
            $statusUbah = $this->modul->edit_sub_modul($idSubModul, $dataUbah);
            if ($statusUbah > 0) {
                $this->session->set_flashdata('alert','ubahsub_data');
                redirect('modul/lihatSubModul/' . $idModul);
            } else {
                redirect('modul/submodul/ubah/' . $idSubModul);
            }
        }
    }

    public function lihatMateri($idSubModul)
    {
        $submodul = $this->modul->get_sub_modul_by_id($idSubModul);
        $data['submodul'] = $submodul;
        $data['modul'] = $this->modul->get_modul();

        $this->load->view('templates/header', $data);
        $this->load->view('modul/submodul/lihatmateri', $data);
        $this->load->view('templates/footer', $data);
    }


    public function hapusSubModul($idSubModul, $idModul)
    {
        $this->session->set_flashdata('alert','hapussub_data');
        $statusDelete = $this->modul->hapus_sub_modul($idSubModul);
        if ($statusDelete > 0) {
            redirect('modul/lihatSubModul/' . $idModul);
        } else {
            redirect('sub_modul/' . $idModul);
        }
    }
}

