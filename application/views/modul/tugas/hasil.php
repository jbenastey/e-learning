
    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <?php
            $bgNumber = rand(1,8);
            ?>
            <div class="card  bg-img" style='background-image: url("<?= base_url()?>assets/images/portfolio/portfolio-<?=$bgNumber?>.jpg");height: 250px;'>
                <div class="card-body bg-black-transparent" style="height: 250px">

                    <div class="card mt-5" >
                        <div class="card-header">
                            <h1 class="mb-0 text-uppercase">Tugas <?= $tugas['nama_modul']?></h1>
							<h5 class="mt-1 badge badge-info"> <i class="ft ft-clock"></i> <?php $tenggat = new DateTime($tugas['tenggat_tugas']);echo $tenggat->format('d/m/Y')?></h5>
                        	<p class="mt-1">
								<?= $tugas['judul_tugas']?>
							</p>
						</div>
                        <div class="card-body">
							<h2 class="border-bottom pb-1 mb-1">
								<i class="ft ft-list"></i> Daftar Tugas
							</h2>
							<div class="row">
								<?php foreach ($hasiltugas as $k => $v):?>
								<div class="col-12">
									<ul class="list-group">
										<a href="#modalTugas-<?= $v['id_tugas']?>" class="" data-toggle="modal">
											<li class="list-group-item d-flex justify-content-between">
												<div>
													<h3><?= $v['nama_penggguna']?></h3>
													<h6><?= $v['username_pengguna']?></h6>
												</div>
												<span class="text-success"><i class="ft ft-check-circle"></i>
													mengirim pada : <?php $tugas = new DateTime($v['tgl_mengerjakan']);echo $tugas->format('d/m/Y h:m')?>
												</span>
											</li>
										</a>
									</ul>
									<!-- Modal -->
									<div class="modal fade" id="modalTugas-<?= $v['id_tugas']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content ">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel"><i class="ft ft-book"></i> LEMBAR TUGAS</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<h3>Catatan Tugas</h3>
													<p>
														<?= $v['deskripsi']?>
													</p>
													<h3>Berkas Dilampirkan</h3>
													<h5 ><a href="<?= base_url('assets/dokumen/tugas/'.$v['dokumen_tugas'])?>"><i class="ft ft-download"></i> <?= $v['dokumen_tugas']?></a></h5>
													<div class="row">
														<iframe src="<?= base_url('assets/dokumen/tugas/'.$v['dokumen_tugas'])?>" frameborder="0" class="col-12" height="400px"></iframe>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach;?>
							</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
