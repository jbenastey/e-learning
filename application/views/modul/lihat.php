<div class="col-lg-12 col-xl-12">
	<div class="mb-2 mt-2">
		<h5 class="mb-0 text-uppercase"><?= $detail['nama_modul'] ?></h5>
	</div>
	<div id="accordion1" class="card-accordion">
		<div class="card">

			<?php

			foreach ($submodul as $key => $item):
				?>
				<div class="card">

					<div class="card-header" id="headingEOne">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#accordionA<?= $key ?>"
									aria-expanded="true" aria-controls="accordionA1">
								<?= $item['nama_sub_modul'] ?>
							</button>
						</h5>
					</div>

					<div id="accordionA<?= $key ?>" class="collapse <?php if ($key == 0) echo 'show' ?>"
						 aria-labelledby="headingEOne" data-parent="#accordion1">
						<div class="card-body">
							<div class="row">
								<div class="col-1 text-right">
									<h2><i class="ft-book"></i></h2>
								</div>
								<div class="col-11 pl-0">
									<h3>Deskripsi</h3>
									<p><?= $item['keterangan'] ?></p>

								</div>

								<div class="col-1 text-right mt-2">
									<h2><i class="ft-download"></i></h2>
								</div>
								<div class="col-11 pl-0 mt-2">
									<h3>Materi Presentasi</h3>
									<h5>
										<a href="<?= base_url('assets/dokumen/' . $item['dokumen_ppt']) ?>"><?= $item['dokumen_ppt'] ?></a>
									</h5>

								</div>

								<div class="col-1 text-right mt-2">
									<h2><i class="ft-download-cloud"></i></h2>
								</div>
								<div class="col-11 pl-0 mt-2">
									<h3>Bahan Ajar</h3>
									<h5>
										<a href="<?= base_url('assets/dokumen/' . $item['dokumen_pdf']) ?>"><?= $item['dokumen_pdf'] ?></a>
									</h5>
								</div>

								<div class="col-1 text-right mt-2">
									<h2><i class="ft-download"></i></h2>
								</div>
								<div class="col-11 pl-0 mt-2">
									<?php
									$status = false;
									foreach ($nilai as $item2) {
										if ($item2['id_sub_modul'] == $item['id_sub_modul']) {
											if ($item2['id_pengguna'] == $this->session->userdata('id_pengguna')) {
												$status = true;
											}
										}
									}
									$statusUjian = false;
									foreach ($ujian as $item3) {
										if ($item['id_sub_modul'] == $item3['id_sub_modul']) {
											$statusUjian = true;
										}
									}
									?>
									<h3>Ujian</h3>
									<?php
									if ($this->session->userdata('level_pengguna') == 'mahasiswa'):
										if ($status == false):
											if ($statusUjian == true):?>
												<H4>
													<a href="<?= base_url('quiz/' . $item['id_sub_modul']) ?>" onclick="return confirm('Mulai Ujian? ')">Ikuti
														Ujian</a>
												</H4>
											<?php
											else:
												?>
												<H4 style="color: red">
													Belum ada ujian
												</H4>
											<?php
											endif;
										else:
											?>
											<H4>
												<a href="<?= base_url('quiz/lihat/' . $item['id_sub_modul']) ?>">Lihat
													Hasil</a>
											</H4>
										<?php

										endif;
									else:
										?>
										<H4>
											<a href="<?= base_url('nilai/hasilDosen/' . $item['id_sub_modul']) ?>">Lihat
												Hasil</a>
										</H4>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>

				</div>
			<?php
			endforeach;
			?>
		</div>
	</div>
</div>
