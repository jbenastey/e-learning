<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary float-right btn-sm mt-5"  href="<?= base_url() ?>dosen/tambah">Tambah</a>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration ">
                                        <thead>
                                        <tr>
                                            <th>ID Dosen</th>
                                            <th>Nama Dosen</th>
                                            <th>Kategori</th>
                                            <th>NIP/NIK</th>
                                            <th>NID/NUP</th>
                                            <th>Gol/Jabatan</th>
                                            <th>Jurusan</th>
                                            <th>Tugas Lain</th>
                                            <th>Nomor HP</th>
                                            <th>Status
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- mulai perulangan PHP                                       -->

                                        <tr role="row" class="odd">
                                            <?php foreach ($dosen as $row => $index): ?>
                                            <td class="sorting_1"><?= $index['dosen_id']; ?></td>
                                            <td class="sorting_1"><?= $index['dosen_nama']?></td>
                                            <td class="sorting_1"><?= $index['dosen_kategori']?></td>
                                            <td class="sorting_1"><?= $index['dosen_nip_nik']?></td>
                                            <td class="sorting_1"><?= $index['dosen_nid_nup']?></td>
                                            <td class="sorting_1"><?= $index['dosen_gol_jab']?></td>
                                            <td class="sorting_1"><?= $index['dosen_jurusan']?></td>
                                            <td class="sorting_1"><?= $index['dosen_tugas_lain']?></td>
                                            <td class="sorting_1"><?= $index['dosen_nomor_hp']?></td>
                                            <td class="sorting_1"><?= $index['dosen_status']?></td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a href="<?= base_url('dosen/ubahDosen/' . $index['dosen_id']) ?> "
                                                           class="btn btn-success bg-darken-4">
                                                            <i class="ft-edit-2"> </i>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="#modal-hapus-<?= $index['dosen_id']?>" data-toggle="modal"
                                                           class="btn btn-red">
                                                            <i class="ft-trash-2"> </i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </td>

                                        </tr>

                                        <div class="modal " id="modal-hapus-<?=$index['dosen_id']?>"" tabindex="-1" role="dialog">
                                        <div class="modal-dialog " role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Menghapus Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda ingin melanjutkan?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?=base_url('dosen/hapus/'.$index['dosen_id'])?>" class="btn btn-danger">Lanjutkan</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <?php endforeach; ?>
                                </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>