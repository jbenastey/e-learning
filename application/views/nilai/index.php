<?php
function kelas($angka)
{
	$huruf = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M');
	return $huruf[$angka];
}

?>
<style>
	.benar {
		color: white;
		background-color: #6967ce;
		padding: 0 5px 0 5px;
		border-radius: 3px;
		/*margin-left: -20px;*/
	}

	.betul {
		color: white;
		background-color: #5ed84f;
		padding: 0 5px 0 5px;
		border-radius: 3px;
		/*margin-left: -20px;*/
	}

	.salah {
		color: white;
		background-color: #fa626b;
		padding: 0 5px 0 5px;
		border-radius: 3px;
		/*margin-left: -20px;*/
	}
</style>
<div class="card">
	<div class="card-body">
		<a href="<?= base_url('modul/lihat/' . $ujian['id_modul']) ?>" class="btn btn-sm btn-outline-secondary float-left"
		   style="position: absolute"><i
				class="ft-arrow-left"></i> Kembali Ke Modul</a>
		<h2 class="text-center"> Data Quiz </h2>
		<?php
		//                                echo '<pre>';
		//                                var_dump($ujian);
		//                                var_dump($this->session->userdata('id_pengguna'));
		?>
		<?php
		$jumlah = 0;
		$jumlahBenar = 0;
		$status = json_decode($hasil['nilai_detail'], true);
		//                var_dump($hasil);
		$jawab = json_decode($hasil['jawaban_detail'], true);
		//                var_dump($jawab);
		foreach ($soal as $keys => $hitung) {
			$jumlah++;
			if ($status[$keys] == 'benar') {
				$jumlahBenar++;
			}
		}
		?>
<!--				<table class="table table-bordered">-->
<!--					<tr>-->
<!--						<td>Nama Dosen</td>-->
<!--						<td>:</td>-->
<!--						<td>--><?//= $ujian['nama_dosen'] ?><!--</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Submodul</td>-->
<!--						<td>:</td>-->
<!--						<td>--><?//= $ujian['nama_sub_modul'] ?><!--</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Kelas</td>-->
<!--						<td>:</td>-->
<!--						<td>--><?//= kelas($ujian['kelas_ujian']) ?><!--</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Nilai Minimal</td>-->
<!--						<td>:</td>-->
<!--						<td>--><?//= $ujian['nilai_minimal_ujian'] ?><!--</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Durasi</td>-->
<!--						<td>:</td>-->
<!--						<td> --><?//= $ujian['durasi_ujian'] ?><!-- menit</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Jumlah Soal</td>-->
<!--						<td>:</td>-->
<!--						<td>--><?//= $jumlah ?><!--</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Jumlah Benar</td>-->
<!--						<td>:</td>-->
<!--						<td>--><?//= $jumlahBenar ?><!--</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Nilai</td>-->
<!--						<td>:</td>-->
<!--						<td>--><?//= round($ujian['nilai'], 2) ?><!--</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Nama Dosen : --><?//= $ujian['nama_dosen'] ?><!--</td>-->
<!--						<td>Sub Modul : --><?//= $ujian['nama_sub_modul'] ?><!--</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Kelas : --><?//= kelas($ujian['kelas_ujian']) ?><!--</td>-->
<!--						<td>Nilai Minimal :--><?//= $ujian['nilai_minimal_ujian'] ?><!--</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Durasi Quiz : --><?//= $ujian['durasi_ujian'] ?><!-- menit</td>-->
<!--						<td>Jumlah Soal : --><?//=$jumlah?><!--</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td>Jumlah Benar :--><?//=$jumlahBenar?><!--</td>-->
<!--						<td><b>Nilai : --><?//= round($ujian['nilai'],2) ?><!--</b></td>-->
<!--				</table>-->
		<dl class="row">
			<dt class="col-sm-4 text-right">Nama Dosen</dt>
			<dd class="col-sm-8"> <?= $ujian['nama_dosen'] ?></dd>
		</dl>
		<dl class="row">
			<dt class="col-sm-4 text-right">Submodul</dt>
			<dd class="col-sm-8"> <?= $ujian['nama_sub_modul'] ?></dd>
		</dl>
		<dl class="row">
			<dt class="col-sm-4 text-right">Kelas</dt>
			<dd class="col-sm-8"> <?= kelas($ujian['kelas_ujian']) ?></dd>
		</dl>
		<dl class="row">
			<dt class="col-sm-4 text-right">Nilai Minimal</dt>
			<dd class="col-sm-8"> <?= $ujian['nilai_minimal_ujian'] ?></dd>
		</dl>
		<dl class="row">
			<dt class="col-sm-4 text-right">Durasi Quiz</dt>
			<dd class="col-sm-8"> <?= $ujian['durasi_ujian'] ?> menit</dd>
		</dl>
		<dl class="row">
			<dt class="col-sm-4 text-right">Jumlah Soal</dt>
			<dd class="col-sm-8"> <?= $jumlah ?></dd>
		</dl>
		<dl class="row">
			<dt class="col-sm-4 text-right">Jumlah Benar</dt>
			<dd class="col-sm-8"> <?=$jumlahBenar?></dd>
		</dl>
		<dl class="row">
			<dt class="col-sm-4 text-right">Nilai</dt>
			<dd class="col-sm-8"> <b><u><?= round($ujian['nilai'],2) ?></u></b></dd>
		</dl>
		<dl class="row">
			<dt class="col-sm-4 text-right">Status</dt>
			<dd class="col-sm-8"> <?php
				if ($ujian['nilai'] >= $ujian['nilai_minimal_ujian'] ):
					?>
					<a class="btn btn-success btn-sm text-white"><i class="ft-check"></i> Tuntas</a>
				<?php
				else: ?>
					<a class="btn btn-danger btn-sm text-white" ><i class="ft-x"></i> Tidak Tuntas</a>
				<?php endif;?>
			</dd>
		</dl>
	</div>
</div>

<div class="card">

	<div class="card-header">

		<h2 class="text-center">Data Hasil</h2>

	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered zero-configuration">
				<thead>
				<tr>
					<th>No</th>
					<th>Soal</th>
					<th>Jawaban</th>
					<th>Status</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$no = 1;
				foreach ($soal as $key => $value):
//					echo "<pre>";
//					print_r ($jawab[$key]);
//					print_r ($value['kunci_jawaban']);
//					echo "</pre>";

					?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $value['soal'] ?></td>
						<td>
							<ol type="A">
								<li>
									<div class="<?php
									if ($value['kunci_jawaban'] == $value['jawaban_soal_a']){
										echo 'betul';
									}
									elseif ($jawab[$key] == $value['jawaban_soal_a']){
										echo 'salah';
									}
									?>">
										<?= $value['jawaban_soal_a'] ?></div>
								</li>
								<li>
									<div class=" <?php
									if ($value['kunci_jawaban'] == $value['jawaban_soal_b']){
										echo 'betul';
									}
									elseif ($jawab[$key] == $value['jawaban_soal_b']){
										echo 'salah';
									}
									?>"><?= $value['jawaban_soal_b'] ?></div>
								</li>
								<li>
									<div class=" <?php

									if ($value['kunci_jawaban'] == $value['jawaban_soal_c']){
										echo 'betul';
									}
									elseif ($jawab[$key] == $value['jawaban_soal_c']){
										echo 'salah';
									}
									?>"><?= $value['jawaban_soal_c'] ?></div>
								</li>
								<li>
									<div class=" <?php
									if ($value['kunci_jawaban'] == $value['jawaban_soal_d']){
										echo 'betul';
									}
									elseif ($jawab[$key] == $value['jawaban_soal_d']){
										echo 'salah';
									}
									?>"><?= $value['jawaban_soal_d'] ?></div>
								</li>
								<li>
									<div class=" <?php
									if ($value['kunci_jawaban'] == $value['jawaban_soal_e']){
										echo 'betul';
									}
									elseif ($jawab[$key] == $value['jawaban_soal_e']){
										echo 'salah';
									}
									?>"><?= $value['jawaban_soal_e'] ?></div>
								</li>
							</ol>
						</td>
						<td>
							<?php
							if ($status[$key] == 'salah'):
								if ($jawab[$key] == null):
									?>
									<label class="btn btn-warning btn-sm" style="cursor: context-menu">Belum
										menjawab</label>
								<?php
								else:
									?>
									<label class="btn btn-danger btn-sm" style="cursor: context-menu">Salah</label><?php
								endif;
							elseif ($status[$key] == 'benar'):
								?>
								<label class="btn btn-success btn-sm" style="cursor: context-menu">Benar</label>
							<?php
							endif;
							?>
						</td>
					</tr>
					<?php
					$no++;
				endforeach;
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>
