<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary float-right btn-sm mt-5" href="<?= base_url() ?>pengguna/tambah">Tambah</a>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration ">
                            <thead>
                            <tr>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Tanggal Buat</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- mulai perulangan PHP                                       -->
                            <?php foreach ($pengguna

                            as $row => $index): ?>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><?= $index['username_pengguna']; ?></td>
                                <td class="sorting_1"><?= $index['level_pengguna']; ?></td>
                                <td class="sorting_1"><?= $index['tgl_buat_pengguna']; ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="<?= base_url('pengguna/ubah/' . $index['id_pengguna']) ?> "
                                               class="btn btn-success bg-darken-4">
                                                <i class="ft-edit-2"> </i>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#modal-hapus-<?= $index['id_pengguna'] ?>" data-toggle="modal"
                                               class="btn btn-red">
                                                <i class="ft-trash-2"> </i>
                                            </a>
                                        </div>

                                    </div>
                                </td>
                            </tr>

                            <div class="modal " id="modal-hapus-<?= $index['id_pengguna'] ?>"
                            " tabindex="-1" role="dialog">
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
                                        <a href="<?= base_url('pengguna/hapus/' . $index['id_pengguna']) ?>"
                                           class="btn btn-danger">Lanjutkan</a>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan
                                        </button>
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

