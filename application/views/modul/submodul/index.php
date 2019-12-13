<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary float-right btn-sm mt-5"
                   href="<?= base_url() ?>modul/submodul/tambah/<?= $idModul ?>">Tambah</a>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    <div class="table-responsive">

                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA SUB MODUL
                                </th>
                                <th>Aksi
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            <!-- mulai perulangan PHP                                       -->
                            <?php
                            $no = 1;
                            foreach ($submodul as $row => $index): ?>
                                <tr role="row" class="odd">
                                    <td class="sorting_1"><?= $no; ?></td>
                                    <td class="sorting_1"><?= $index['nama_sub_modul']; ?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="<?= base_url('ujian/detail/' . $index['id_sub_modul']) ?> "
                                                   class="btn btn-primary bg-darken-4" title="Lihat Ujian">
                                                    <i class="ft-search"> </i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="<?= base_url('modul/submodul/ubah/' . $index['id_sub_modul']) ?> "
                                                   class="btn btn-success bg-darken-4">
                                                    <i class="ft-edit-2"> </i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#modal-hapus-<?= $index['id_sub_modul'] ?>"
                                                   data-toggle="modal"
                                                   class="btn btn-red">
                                                    <i class="ft-trash-2"> </i>
                                                </a>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                <div class="modal " id="modal-hapus-<?= $index['id_sub_modul'] ?>"
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
                                            <a href="<?= base_url('modul/submodul/hapus/' . $index['id_sub_modul'] . '/' . $index['id_modul']) ?>"
                                               class="btn btn-danger">Lanjutkan</a>
                                            <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Batalkan
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                $no++;
                            endforeach; ?>
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
</div>