<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="col-12">
            <div class="card-header">
                <a class="btn btn-primary"
                   href="<?= base_url() ?>ujian/tambah">Tambah</a>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                            <tr>
                                <th>NAMA DOSEN</th>
                                <th>NAMA SUB MODUL</th>
                                <th>KELAS</th>
                                <th>DURASI</th>
                                <th class="sorting text-center" >AKSI
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($ujian as $row => $index): ?>
                            <tr>
                                <td><?= $index['nama_dosen']; ?></td>
                                <td><?= $index['nama_sub_modul']; ?></td>
                                <td><?= $index['kelas_ujian']; ?></td>
<!--                                <td>--><?//= $index['nilai_minimal_ujian']; ?><!--</td>-->
                                <td><?= $index['durasi_ujian']; ?></td>
<!--                                <td>--><?//= $index['tgl_buat_ujian']; ?><!--</td>-->
<!--                                <td>--><?//= $index['nama_sub_modul']; ?><!--</td>-->

                                <td class="text-center">

<!--                                        <div class="col-md-6">-->
<!--                                            <a href="--><?//= base_url('ujian/ubah/' . $index['id_ujian']) ?><!--"-->
<!--                                               class="btn btn-sm btn-success bg-darken-4">-->
<!--                                                <i class="ft-edit-2"></i>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                        <div class="col-md-4">-->
<!--                                            <a href="#modal-hapus---><?//= $index['id_ujian'] ?><!--"-->
<!--                                               data-toggle="modal"-->
<!--                                               class="btn btn-sm btn-red">-->
<!--                                                <i class="ft-trash-2"></i>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                        <div class="col-md-2">-->
<!--                                            <a href="#modal-hapus---><?//= $index['id_ujian'] ?><!--"-->
<!--                                               data-toggle="modal"-->
<!--                                               class="btn btn-sm btn-blue">-->
<!--                                                <i class="ft-eye"></i>-->
<!--                                            </a>-->
<!--                                        </div>-->
                                        <a href="<?= base_url() ?>ujian/detail/<?= $index['id_ujian'] ?>" class="btn btn-info btn-sm"><i class="ft-eye"></i></a>

                                </td>
                            </tr>
                                <div class="modal" id="modal-hapus-<?= $index['id_ujian'] ?>"
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
                                                <a href="<?= base_url('ujian/hapus/' . $index['id_ujian']) ?>"
                                                   class="btn btn-danger">Lanjutkan
                                                </a>
                                                <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Batalkan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>