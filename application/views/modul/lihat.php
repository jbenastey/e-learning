<?php

    $admin = $this->session->userdata('nama_penggguna');
?>
<div class="col-lg-12 col-xl-12">

    <?php
		if ($submodul !== null):
	?>
	<div class="card  bg-img" style='background-image: url("<?= base_url()?>assets/images/portfolio/portfolio-5.jpg");height: 250px;'>
		<div class="card-body bg-black-transparent" style="height: 250px;position: relative">
			<h3 class="mb-0 text-uppercase text-white"><?= $detail['nama_pertemuan'].' : '.$detail['nama_modul'] ?></h3>
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
			<div class="alert d-flex justify-content-between" role="alert" style="color: #856404;background-color: #fff3cd;border-color: #ffeeba;">
				<span><i class="ft ft-info"></i> Belum ada submodul ditambahkan</span>
				<a href="<?= base_url('modul/submodul/tambah/'.$detail['id_modul'])?>" class="btn btn-sm btn-success font-weight-light">tambahkan</a>
			</div>
	<?php endif?>

</div>

<div class="col-12">
	<ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom: 12px">
		<li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="padding: 8px!important;margin-right: 8px">Kiriman</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="padding: 8px!important;margin-right: 8px">Tugas</a>
		</li>
	</ul>

	<div class="tab-content" id="myTabContent">

		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			<div class="row">
				<div class="col-8">
					<?php
					if ($submodul !== null):
						foreach ($submodul as $key => $item):
							?>
							<div class="card rounded" id="<?= $key?>">
								<div class="card-header">
									<h3><?= $item['nama_sub_modul']?></h3>
								</div>

								<div class="card-body">
									<div class="row">
										<div class="col-1">
											<h2><i class="ft-info"></i></h2>
										</div>
										<div class="col-11">
											<h3>Deskripsi</h3>
											<p><?= $item['keterangan'] ?></p>
										</div>

										<div class="col-1">
											<h2><i class="ft-file"></i></h2>
										</div>
										<div class="col-11">
											<h3 style="margin-bottom: 12px">Materi Presentasi</h3>

											<a href="<?= base_url('assets/dokumen/' . $item['dokumen_ppt']) ?>" >
												<div class="media" style="border:1px #00000073 solid;border-radius: 12px">
													<div class="media-left" href="#" style="border-radius: 12px;background-color:#e64a19">
														<img src="<?= base_url('assets/images/portrait/small/ppt.png')?>" alt="Generic placeholder image" style="width: 80px;height: 80px;border-top-left-radius: 12px;border-bottom-left-radius: 12px">
													</div>
													<div class="media-body" style="box-sizing: border-box;padding: 12px;margin-left: 12px">
														<h4 class="media-heading"><?=$item['dokumen_ppt'] ?></h4>
														<h6>Excel</h6>
													</div>
												</div>
											</a>

										</div>
									</div>
								</div>
							</div>
						<?php
						endforeach;
					else:
						?>
						<div class="card">
							<div class="card-body">
								<h3 class="text-danger"><i class="ft ft-x"></i> belum ada submodul</h3>
							</div>
						</div>
					<?php endif;?>
				</div>

				<div class="col-4">
					<?php if ($submodul!== null):?>
						<div class="list-group">
							<h4 style="margin-bottom: 22px">Materi</h4>
							<?php foreach ($submodul as $k => $v):?>
								<a href="#<?= $k?>" class="list-group-item">
									<?= $v['nama_sub_modul']?>
								</a>
							<?php endforeach;?>
						</div>
					<?php endif;?>
				</div>
			</div>
		</div>

		<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
			<div class="row">
				<div class="col-8">
					<?php foreach ($tugas as $k=>$v):?>
						<div class="card ">
							<div class="card-body">
								<div class="row">
									<div class="col-8">
										<?php if ($this->session->userdata('level_pengguna') === 'dosen'):?>
										<h3><a href="<?= base_url('modul/hasilTugas/'.$v['id_tugas'])?>"><?=$v['judul_tugas']?></a></h3>
										<?php else:?>
										<h3><?=$v['judul_tugas']?></h3>
										<?php endif;?>
									</div>
									<div class="col-4">
										<?php if ($this->session->userdata('level_pengguna') === 'dosen'):?>
											<button class="btn btn-warning disabled" disabled>
												<h5><i class="ft ft-clock"></i>   tenggat</h5>
												<?php $date = new DateTime($v['tenggat_tugas']); echo $date->format('d/m/Y').'00'?>
											</button>
										<?php endif;?>

										<?php
											if ($this->session->userdata('level_pengguna') === 'mahasiswa'):
											$pengguna = $this->session->userdata('id_pengguna');
											$tugas = $v['id_tugas'];
											$mengerjakan = $this->modul->telah_mengerjakan_tugas($pengguna,$tugas)
										?>
											<?php if ($mengerjakan):?>
												<span class="text-success"><i class="ft ft-check-circle"></i> tugas telah dikirim</span>
											<?php else:?>
												<a href="<?= base_url('modul/kerjakanTugas/'.$v['id_tugas'])?>" class="btn bg-primary text-white" style="margin: 0px 5px;
    padding: 4px 12px;">
													<h6 class="text-white"> lihat tugas <i class="ft ft-arrow-right"></i></h6>
												</a>
											<?php endif;?>
										<?php
											endif;
										?>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				</div>


				<?php
				if ($this->session->userdata('level_pengguna') === 'dosen'):
					?>
						<div class="col-4">
							<h4 style="margin-bottom: 22px">Posting Tugas</h4>
							<div class="card">
								<div class="card-body" style="padding-bottom: 0px">
									<form action="<?= base_url('modul/insertTugas/'.$this->uri->segment(3))?>" class="form-row" method="post">
										<div class="form-group col-12">
											<label for="judulTugas">Uraian Tugas</label>
											<textarea class="form-control " name="judul_tugas" id="judulTugas" rows="3" placeholder="Tulis Deskripsi Tugas"></textarea>
										</div>
										<div class="form-group col-12">
											<label for="tenggat">Tenggat</label>
											<input type="date" class="form-control" id="tenggat" name="tenggat">
										</div>
										<div class="form-group col-12">
											<div class="d-flex justify-content-end mt-2">
												<button class="btn btn-primary" name="posting" type="submit" style="padding: 8px">
													<i class="ft ft-edit-2"></i> kirim
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
				<?php endif;?>


			</div>
		</div>

	</div>

</div>

