<div class="row">
    <div class="col-lg-12 col-xl-12">
		<?php
			$bgNumber = rand(1,8);
		?>
        <?php
			if ($totalMahasiswa !== null):
		?>
				<div class="card  bg-img" style='background-image: url("<?= base_url()?>assets/images/portfolio/portfolio-<?=$bgNumber?>.jpg");height: 250px;'>
					<div class="card-body bg-black-transparent" style="height: 250px;position: relative">
						<h1 class="mb-0 text-uppercase text-white"><?= $modul[0]['matkul_nama']?></h1>
						<span class="text-white badge mt-1" style="background-color: #00000073"><?=$totalMahasiswa ?> Mahasiswa</span>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb custom-breadcrumb">
								<?php foreach ($breadcrumb as $menu):?>
									<?= $menu?>
								<?php endforeach;?>
							</ol>
						</nav>
					</div>
				</div>
		<?php else:?>
				<div class="alert " role="alert" style="color: #856404;background-color: #fff3cd;border-color: #ffeeba;">
					<i class="ft ft-info"></i> Belum ada modul ditambahkan pada matakuliah ini
				</div>
		<?php endif;?>

    </div>


    <div class="col-12" id="content-kelas">


            <div class="col-12 row">

                <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom: 24px">

                    <li class="nav-item">
                        <a class="nav-link  active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="padding: 8px!important;margin-right: 8px">Modul</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="padding: 8px!important;margin-right: 8px">Anggota</a>
                    </li>
                </ul>
            </div>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="row">
						<div class="col-8">
						<?php
							if ($modul !== null):
						?>
							<?php
								$no = 1;
								foreach ($modul as $row => $index):
							?>
							<div class="card " style="background-image: url('<?= base_url()?>assets/images/portfolio/portfolio-<?=($row+1)?>.jpg')">
								<div class="card-body bg-black-transparent">
									<div class="row">
										<div class="col-10">
											<h1 class="text-white"><?= $index['nama_modul']?></h1>
											<h5 class="text-white"><?= $index['nama_pertemuan']; ?></h5>
											<?php if ($this->session->userdata('level_pengguna') === 'dosen'):?>
											<div class="row mt-2">
												<div class="col-12">
													<div class="justify-content-center">
														<a href="<?= base_url('modul/lihatSubModul/' . $index['id_modul']) ?> "
														   class="btn btn-small bg-white text-primary" title="kelola modul " style="margin: 0px 5px;padding: 4px 12px">
															<i class="ft-search"> </i>
														</a>
														<a href="<?= base_url('modul/ubahModul/' . $index['id_modul'].'/'. $this->uri->segment(3)) ?> "
														   class="btn btn-small bg-white text-warning" style="margin: 0px 5px;padding: 4px 12px" title="ubah modul">
															<i class="ft-edit-2"> </i>
														</a>
														<a href="#modal-hapus-<?= $index['id_modul'] ?>"
														   data-toggle="modal"
														   class="btn btn-small bg-white  text-danger" style="margin: 0px 5px;padding: 4px 12px" title="hapus modul">
															<i class="ft-trash-2"> </i>
														</a>
													</div>

													<div class="modal " id="modal-hapus-<?= $index['id_modul'] ?>"
														 tabindex="-1" role="dialog">
														<div class="modal-dialog " role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Menghapus Data</h5>
																	<button type="button" class="close" data-dismiss="modal"
																			aria-label="Close">
																		<span aria-hidden="true">×</span>
																	</button>
																</div>
																<div class="modal-body">
																	<p>Apakah anda ingin melanjutkan?</p>
																</div>
																<div class="modal-footer">
																	<a href="<?= base_url('modul/hapusModul/' . $index['id_modul']) ?>/<?= $this->uri->segment(3) ?>"
																	   class="btn btn-danger">Lanjutkan</a>
																	<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Batalkan
																	</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<?php endif;?>
										</div>
										<div class="col-2">
											<a href="<?= base_url('modul/lihat/' . $index['id_modul'])?> "
											   class="btn btn-small bg-white text-primary" style="margin: 0px 5px;padding: 4px 12px" title="lihat modul">
												<i class="ft-arrow-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						<?php else: ?>

							<div class="card">
								<div class="card-body">
									<h3 class="text-danger"><i class="ft ft-x"></i> Belum ada modul</h3>
								</div>
							</div>
						<?php endif;?>
						</div>

						<?php if ($this->session->userdata('level_pengguna') === 'dosen'):?>
						<div class="col-4">

							<div class="card">
								<div class="card-body">
									<h4 style="margin-bottom: 34px!important;"><i class="ft ft-plus"></i> Tambah Modul</h4>

									<form class="needs-validation was-validated" novalidate="" action="<?= base_url('Modul/insertModul/'.$id_matakuliah) ?>" method="post">
										<div class="form-row">

											<div class="col-md-12 mb-3">
												<label for="validationTooltip">Nama Modul</label>
												<input type="text" class="form-control position-relative" id="validationTooltip01" name="nama_modul"
													   placeholder="modul" value="" required="">
											</div>


											<div>
												<button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
											</div>
										</div>

									</form>


								</div>
							</div>
						</div>
						<?php endif;?>

					</div>
				</div>

				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<?php
						if ($anggota !== null):
					?>
							<?php
							foreach ($anggota as $key => $v):
								?>
								<div class="card">
									<div class="card-body">
										<div class="media">
											<img src="<?= base_url()?>assets/images/portfolio/portfolio-2.jpg" class="mr-3 rounded" width="40px" height="40px">
											<div class="media-body">
												<h4 class="mt-0"><?= $v['nama_penggguna']?></h4>
												<h6><?= $v['username_pengguna']?></h6>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach;?>
					<?php else:?>
							<div class="card">
								<div class="card-body">
									<h3 class="text-danger"><i class="ft ft-x"></i> Belum ada anggota </h3>
								</div>
							</div>
					<?php endif;?>
				</div>
			</div>

    </div>
</div>




