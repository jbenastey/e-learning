<div class="content-wrapper pt-0">
    <div class="content-wrapper-before bg-header" ></div>
    <div class="content-header row">
		<?php if ($this->session->userdata('level_pengguna') == 'mahasiswa'): ?>
			<div class="content-header-left col-md-2 col-12 mb-2">
					<button data-target="#modal-ikuti-kelas" data-toggle="modal" class="modal-trigger btn bg-white ">
						<span style="float: left">ikuti kelas </span> <i class="ft ft-arrow-right tooltip-text-grey-blue"></i>
					</button>
			</div>
		<?php else: ?>
			<form action="#" class="col-12 mb-2" method="get">
				<input type="text" class="form-control col-12 header-search" placeholder="cari kelas" name="cari">
			</form>
		<?php endif;?>
	</div>

    <div class="content-body"><!-- Zero configuration table -->
        <section id="configuration">
            <div class="row">
                <div class="col-12 mt-1">
                    <!--                    <div class="card-deck">-->
                    <div class="row">
                        <?php if ($this->session->userdata('level_pengguna') == 'mahasiswa'): ?>
                            <?php $no = 1; foreach($mahasiswa as $matkul):
                              $totalMahasiswa=$this->auth->hitung_mahasiswa($matkul['kode_kelas']);?>
                                <div class="col-4">
                                    <div class="card pull-up  bg-img" style='background-image: url("assets/images/portfolio/portfolio-<?= $no?>.jpg");'>
                                        <div class="card-header bg-black-transparent" >
                                            <h4 class="font-weight-light text-white"><?= $matkul['matkul_nama'] ?></h4>
                                            <span class="text-white"><?=$matkul['nama_dosen'] ?></span>

                                        </div>
                                        <div class="card-content collapse show bg-black-transparent">
                                            <div class="card-body">
                                                <div class="media d-flex">
                                                    <div class="align-self-center width-100">
                                                        <h1 class="text-white" style="font-size: 90px!important;"><?= kelas($matkul['paket_rombel_index'])?></h1>
                                                        <span class="text-white badge" style="background-color: #00000073"><?=$totalMahasiswa ?> Mahasiswa</span>
                                                    </div>
                                                    <div class="media-body text-right mt-1">

                                                        <h3 class="font-large-2 text-danger"><?= $matkul['matkul_jurusan'] ?></h3>

                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-black-transparent" style="padding: 8px!important;">
                                            <div class="d-flex justify-content-end">
                                                <a class="btn btn-sm btn-danger box-shadow-1 round btn-min-width pull-right text-white"
                                                   href="<?= base_url('modul/index/' . $matkul['paket_id']) ?>">Lihat Kelas <i class="ft-arrow-right "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="col-4 mb-3">
                                    <div class="card">
                                        <img class="card-img-top img-fluid"
                                             src="<?/*= base_url() */?>assets/images/gallery/14.jpg"
                                             alt="Card image cap"/>
                                        <div class="card-body ">
                                            <h4 class="card-title"><?/*= $matkul['matkul_nama'] */?></h4>
                                            <span> <i class="icon-briefcase"></i> Jurusan <?/*= $matkul['matkul_jurusan'] */?></span>
                                            <br>
                                            <span> <i class="ft-file-text"></i> Semester <?/*= $matkul['matkul_semester'] */?></span><br>
                                            <span class="mb-2"> <i
                                                        class="icon-pointer"></i> Kelas <?/*= kelas($matkul['paket_rombel_index']) */?></span><br>
                                            <span class="mb-2"> <i
                                                        class="icon-pointer"></i> kode Kelas <?/*= ($matkul['kode_kelas']) */?></span>

                                            <a href="<?/*= base_url('modul/lihatMhs/' . $matkul['paket_id']) */?>"
                                               class="btn btn-info col-12 mt-1">Lihat
                                                Modul</a>
                                        </div>
                                    </div>
                                </div>-->
                            <?php  $no++; endforeach; ?>
                        <?php endif; ?>


                        <?php
                            $no = 1;
                        foreach ($matkulDosen as $matkul):
                        $totalMahasiswa=$this->auth->hitung_mahasiswa($matkul['kode_kelas']);
                        ?>
                            <div class="col-4">
                                <div class="card pull-up  bg-img" style='background-image: url("assets/images/portfolio/portfolio-<?= $no?>.jpg");'>
                                    <div class="card-header bg-black-transparent" >
                                        <h4 class="font-weight-light text-white"><?= $matkul['matkul_nama'] ?></h4>
                                        <span class="text-white"><?=$matkul['nama_dosen'] ?></span>

                                    </div>
                                    <div class="card-content collapse show bg-black-transparent">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="align-self-center width-100">
                                                    <h1 class="text-white" style="font-size: 90px!important;"><?= kelas($matkul['paket_rombel_index'])?></h1>
                                                    <span class="text-white badge" style="background-color: #00000073"><?=$totalMahasiswa ?> Mahasiswa</span>
                                                </div>
                                                <div class="media-body text-right mt-1">
                                                    <h3 class="font-large-2 text-danger">Sm. <?= $matkul['matkul_semester'] ?></h3>
                                                    <span class="badge bg-white text-black-50">KODE KELAS : <?= $matkul['kode_kelas']?> </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-black-transparent" style="padding: 8px!important;">
                                        <div class="d-flex justify-content-end">
                                            <a class="btn btn-sm btn-danger box-shadow-1 round btn-min-width pull-right text-white"
                                               href="<?= base_url('modul/index/' . $matkul['paket_id']) ?>">Kelola <i class="ft-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                            $no++;
                            endforeach;
                        ?>
                    </div>
                    <!--                    </div>-->

                </div>
            </div>


        </section>

    </div>
</div>
<div class="modal " id="modal-ikuti-kelas" tabindex="-1" role="dialog">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Masukkan Kode Kelas</h5>
                <button type="button" class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="form-horizontal" method="post"
                  action="<?= base_url('welcome/ikutiKelas') ?>"
            >

                <div class="modal-body">
                    <fieldset
                            class="form-group position-relative has-icon-left">
                        <input type="text"
                               class="form-control round"
                               id="user-name"
                               placeholder="Enter Code Class"
                               required name="kode_kelas">
                        <div class="form-control-position">
                            <i class="ft-user"></i>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="submit"
                            class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue "
                            name="simpan">gabung
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
//
//    function kelas($index){
//        $data = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N');
//        return $data[$index];
//    }
?>

