<?php

class modul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModulModel', 'modul');
        $this->load->model('QuizModel', 'quiz');
        $this->load->model('AuthModel', 'auth');
        $this->load->helper('class_helper');
    }

    // start untuk modul
    public function index($id_matkul)
    {
        $this->session->set_userdata('matkul_id', $id_matkul);
//		echo '<pre>';var_dump($id_matkul);exit();
		$data['modul'] = $this->modul->get_modul($id_matkul);


		if (!empty($data['modul'])){
			$data['modul'] = $this->modul->get_modul($id_matkul);
			$kodeKelas = $data['modul'][0]['kode_kelas'];
			$data['totalMahasiswa']=$this->auth->hitung_mahasiswa($kodeKelas);
			$data['anggota'] = $this->modul->get_anggota_kelas($kodeKelas);
			$data['breadcrumb'] = array(
				'<li class="breadcrumb-item"><a href="'.base_url().'">Home</a></li>',
				'<li class="breadcrumb-item active">'.$data['modul'][0]['matkul_nama'].'</li>'
			);
//			echo '<pre>';print_r($data['breadcrumb']);exit();

			if (!empty($data['anggota'])){
				$data['anggota'] = $this->modul->get_anggota_kelas($kodeKelas);
			}else{
				$data['anggota'] = null;
			}
		}else{
			$data['modul'] = null;
			$data['totalMahasiswa'] = null;
			$data['anggota'] = null;
		}

		$data['posting']=$this->modul->get_posting();
		$data['id_matakuliah'] = $id_matkul;


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

            $pertemuan = $this->modul->totalModulByMatkul($idmatkul);

            $dataModul = array(
                'nama_pertemuan' => 'Pertemuan '.($pertemuan+1),
                'nama_modul' => $this->input->post('nama_modul'),
                'paket_id' => $idmatkul
            );

            $statusInsert = $this->modul->insert_modul($dataModul);

            if ($statusInsert > 0) {
                $this->session->set_flashdata('alert','simpan_data');
                redirect('modul/index/' . $idmatkul);
            } else {
                $this->session->set_flashdata('alert','data_tidak_tersimpan');
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
		$id_matkul = $this->session->userdata('matkul_id');

        $data['tugas'] = $this->modul->get_tugas_by_modul($idModul);
        $data['detail'] = $this->modul->get_modul_by_id($idModul);
		$data['nilai'] = $this->modul->get_nilai_sub_modul($idModul);
		$data['ujian'] = $this->quiz->get_all_ujian();
		$data['modul'] = $this->modul->get_modul($id_matkul);

//		echo '<pre>';
//		print_r($data['detail']);exit();

		$data['submodul'] = $this->modul->get_sub_modul($idModul);

		if (!empty($data['submodul'])) {
			$data['submodul'] = $this->modul->get_sub_modul($idModul);
			$data['breadcrumb'] = array(
				'<li class="breadcrumb-item"><a href="' . base_url() . '">Home</a></li>',
				'<li class="breadcrumb-item"><a href="' . base_url('modul/index/' . $id_matkul) . '">' . $data['modul'][0]['matkul_nama'] . '</a></li>',
				'<li class="breadcrumb-item active">' . $data['submodul'][0]['nama_modul'] . '</li>',
			);
		} else {
			$data['submodul'] = null;
		}

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
                'nama_sub_modul' => $this->input->post('nama_sub_modul'),
                'keterangan' => $this->input->post('keterangan'),
                'dokumen_ppt' => $ppt,
                'dokumen_pdf' => $pdf,

            );
//            echo '<pre>';print_r($dataSubModul);exit();
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
    public function insertPosting()
    {
        if (isset($_POST['posting']))
        {
            $id_matkul = $this->session->userdata('matkul_id');
            $this->session->set_userdata('matkul_id', $id_matkul);
            $data['modul'] = $this->modul->get_modul($id_matkul);
            $kodeKelas = $data['modul'][0]['kode_kelas'];
            $data=array(
                'judul'=>$this->input->post('judul'),
                'isi_posting'=>$this->input->post('isi_posting'),
                'kode_kelas'=>$kodeKelas,
                'id_pengguna'=>$this->session->userdata('matkul_id')

            );

//            print_r($data);exit();
            $status=$this->modul->insert_posting($data);

            if ($status>0)
            {
                redirect('modul/index/'.$id_matkul);
            }
        }else{
            show_404();
        }
    }

    public function insertTugas($idModul)
    {
        if (isset($_POST['posting'])){
            $tugas = array(
              'judul_tugas' => $this->input->post('judul_tugas'),
              'tenggat_tugas' => $this->input->post('tenggat'),
              'id_modul' => $idModul
            );

            $status = $this->modul->insertTugas($tugas);

            if ($status > 0){
                redirect('modul/lihat/'.$idModul);
            }
        }else{
            show_404();
        }
    }

    public function kerjakanTugas($idTugas)
    {
        $data['tugas'] = $this->modul->get_tugas_by_id($idTugas);
//        print_r($data['tugas']);exit();
        $this->load->view('templates/header', $data);
        $this->load->view('modul/tugas/kerjakan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function serahkanTugas($idTugas)
    {
        $idModul = $this->modul->get_tugas_by_id($idTugas);
        $config['upload_path'] = './assets/dokumen/tugas/';
        $config['allowed_types'] = 'pptx|pdf|doc|docx';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

//		print_r($idModul);exit();
		$this->upload->do_upload('dokumen');
		$ppt = $this->upload->data('file_name');


		$tugas = array(
          'id_pengguna' => $this->session->userdata('id_pengguna'),
            'id_tugas' => $idModul['id_tugas'],
            'dokumen_tugas' => $ppt,
            'deskripsi' =>  $this->input->post('deskripsi'),
            'id_modul' => $idModul['id_modul']
        );


        $status = $this->modul->serahkan_tugas($tugas);
        if ($status > 0){
            redirect('modul/lihat/'.$idModul['id_modul']);
        }
    }

	public function hasilTugas($idTugas)
	{
		$data['tugas'] = $this->modul->get_tugas_by_id($idTugas);
		$data['hasiltugas'] = $this->modul->get_hasitugas_by_tugas($idTugas);

//		echo '<pre>';print_r($data['hasiltugas']);exit();
		$this->load->view('templates/header', $data);
		$this->load->view('modul/tugas/hasil', $data);
		$this->load->view('templates/footer', $data);
	}
}

