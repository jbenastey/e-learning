<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h5>Hasil Ujian Mahasiswa</h5>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered zero-configuration">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nilai</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($nilai as $key => $value):
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $value['nama_pengguna'] ?></td>
                        <td><?= round($value['nilai'],2) ?></td>
                        <td>
                            <?php
                            if ($value['nilai'] >= $value['nilai_minimal_ujian']):
                                ?>
                                <a class="btn btn-success btn-sm float-right text-white">Tuntas</a>
                            <?php
                            else: ?>
                                <a class="btn btn-danger btn-sm float-right text-white">Tidak Tuntas</a>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="col-md-3">
                                <a href="<?= base_url('nilai/detailhasilDosen/' . $value['id_hasil']) ?> "
                                   class="btn btn-primary bg-darken-4 btn-sm" title="Lihat Detail Hasil">
                                    <i class="ft-search"> </i>
                                </a>
                            </div>
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
