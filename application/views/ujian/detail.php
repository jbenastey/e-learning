<div class="card">
    <div class="card-header">
        <h5 class="float-left"> Detail Quiz </h5>
        <div class="row">
            <div class="col-6">
                <?php
                if ($ujian == null):?>
                    <a class="btn btn-primary"
                       href="<?= base_url('ujian/tambah/' . $this->uri->segment(3)) ?>">Tambah</a>
                <?php else: ?>
                    <a class="btn btn-primary"
                       href="<?= base_url('ujian/ubah/' . $this->uri->segment(3)) ?>">Ubah</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-responsive">
                <tr>
                    <td>Nama Dosen : <?= $ujian['nama_dosen'] ?></td>
                    <td>Sub Modul : <?= $ujian['nama_sub_modul'] ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Kelas : <?= $ujian['kelas_ujian'] ?></td>
                    <td>Nilai Minimal : <?= $ujian['nilai_minimal_ujian'] ?></td>
                    <td>Durasi Quiz : <?= $ujian['durasi_ujian'] ?> menit</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php
if ($ujian != null):?>
    <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h5>Soal</h5>
            </div>
            <div class="col-6">
                <a class="btn btn-primary float-right"
                   href="<?= base_url() ?>soal/tambah/<?= $ujian['id_sub_modul'] ?>">Tambah</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered zero-configuration">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>SOAL</th>
                    <th>JAWABAN A</th>
                    <th>JAWABAN B</th>
                    <th>JAWABAN C</th>
                    <th>JAWABAN D</th>
                    <th>JAWABAN E</th>
                    <th>KUNCI JAWABAN</th>
                    <th>TANGGAL BUAT</th>
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
                        <td><?= $index['soal'] ?></td>
                        <td><?= $index['jawaban_soal_a'] ?></td>
                        <td><?= $index['jawaban_soal_b'] ?></td>
                        <td><?= $index['jawaban_soal_c'] ?></td>
                        <td><?= $index['jawaban_soal_d'] ?></td>
                        <td><?= $index['jawaban_soal_e'] ?></td>
                        <td><?= $index['kunci_jawaban'] ?></td>
                        <td><?= $index['tgl_buat_soal'] ?></td>
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