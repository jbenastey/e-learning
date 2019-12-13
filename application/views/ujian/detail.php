<div class="card">
        <div class="card-body">
			<div class="float-left">
				<?php
				if ($ujian == null):?>
					<a class="btn btn-primary btn-sm"
					   href="<?= base_url('ujian/tambah/' . $this->uri->segment(3)) ?>"><i class="ft-plus"></i> Tambah</a>
				<?php else: ?>
					<a class="btn btn-success btn-sm"
					   href="<?= base_url('ujian/ubah/' . $this->uri->segment(3)) ?>"><i class="ft-edit"></i> Ubah</a>
				<?php endif; ?>
			</div>
			<h2 class="text-center pr-5">  Detail Quiz </h2>
			<dl class="row">
				<dt class="col-sm-3 text-right">Nama Dosen</dt>
				<dd class="col-sm-9"> <?= $ujian['nama_dosen'] ?></dd>
			</dl>
			<dl class="row">
				<dt class="col-sm-3 text-right">Sub Modul</dt>
				<dd class="col-sm-9"><?= $ujian['nama_sub_modul'] ?></dd>
			</dl>
			<dl class="row">
				<dt class="col-sm-3 text-right">Kelas</dt>
				<dd class="col-sm-9"> <?= kelas($ujian['kelas_ujian']) ?></dd>
			</dl>
			<dl class="row">
				<dt class="col-sm-3 text-right">Nilai Minimal</dt>
				<dd class="col-sm-9"><?= $ujian['nilai_minimal_ujian'] ?></dd>
			</dl>
			<dl class="row">
				<dt class="col-sm-3 text-right">Durasi quiz</dt>
				<dd class="col-sm-9"><?= $ujian['durasi_ujian'] ?> menit</dd>
			</dl>

		</div>
</div>
<?php
if ($ujian != null):?>
    <div class="card">
    <div class="card-body">
		<a class="btn btn-primary btn-sm float-left"
		   href="<?= base_url() ?>soal/tambah/<?= $ujian['id_sub_modul'] ?>"><i class="ft-plus"></i> Tambah</a>
		<h2 class="text-center pr-5">Soal</h2>
        <div class="">
            <table class="table table-striped table-bordered zero-configuration table-responsive">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>SOAL</th>
					<th>JAWABAN</th>
                    <th>KUNCI JAWABAN</th>
                    <th class="sorting text-center" style="width:80%">AKSI
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php
                $nomor = 1;
                foreach ($soal as $row => $index): ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td>
							<?= $index['soal'] ?>
							<br><br>
							<?php
							if($index['audio'] == null):
								?>
								<button class="btn btn-sm btn-primary">Tidak ada audio </button>
							<?php
							else:
								?>
								<audio controls>
									<source src="<?= base_url('assets/dokumen/audio/'.$index['audio']) ?>" type="audio/mpeg">
									Your browser does not support the audio element.
								</audio>
							<?php
							endif
							?>
						</td>
                        <td>
							<ol type="A">
								<li>
									<?= $index['jawaban_soal_a'] ?>
								</li>
								<li>
									<?= $index['jawaban_soal_b'] ?>
								</li>
								<li>
									<?= $index['jawaban_soal_c'] ?>
								</li>
								<li>
									<?= $index['jawaban_soal_d'] ?>
								</li>
								<li>
									<?= $index['jawaban_soal_e'] ?>
								</li>
							</ol>
						</td>
                        <td><?= $index['kunci_jawaban'] ?></td>
                        <td width="110" class="text-center row justify-content-center">
                            <a href="<?= base_url('soal/ubah/' . $index['id_soal']) ?>"
                               class="btn btn-sm btn-success bg-darken-4">
                                <i class="ft-edit-2"></i>
                            </a>
                            <a href="#modal-hapus-<?= $index['id_soal'] ?>"
                               data-toggle="modal"
                               class="btn btn-sm btn-red">
                                <i class="ft-trash-2"></i>
                            </a>
                        </td>
                    </tr>
                    <div class="modal" id="modal-hapus-<?= $index['id_soal'] ?>"
                         tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Menghapus Data</h5>
                                    <button type="button" class="close"
                                            data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah anda ingin melanjutkan?</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?= base_url('soal/hapus/' . $index['id_soal']) ?>"
                                       class="btn btn-danger">Lanjutkan
                                    </a>
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Batalkan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $nomor++;
                endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div><?php endif; ?>
