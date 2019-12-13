<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="col-12">
                <div class="card-header">
                    <a class="btn btn-primary"
                       href="<?= base_url() ?>jawaban/tambah">Tambah</a>
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
                            <div class="table-responsive">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-bordered zero-configuration dataTable"
                                               id="DataTables_Table_0" role="grid"
                                               aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                            <tr role="row">
                                                <th style="width: 123px;">Jawaban</th>
                                                <th style="width: 201px;">Format Jawaban</th>
                                                <th style="width: 91px;">Nilai</th>
                                                <th style="width: 91px;">Tanggal Menjawab</th>
                                                <th style="width: 91px;">Pertanyaan</th>
                                                <th class="sorting text-center" tabindex="0" aria-controls="DataTables_Table_0"

                                                    aria-label="Aksi: activate to sort column ascending"
                                                    style="width: 190px;">Aksi
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!--mulai perulangan PHP-->
                                            <?php foreach ($jawaban as $row => $index): ?>
                                                <tr role="row" class="odd">
                                                    <td ><?= $index['pertanyaan_jawaban']; ?></td>
                                                    <td ><?= $index['format_jawaban']; ?></td>
                                                    <td ><?= $index['nilai']; ?></td>
                                                    <td ><?= $index['tanggal_menjawab']; ?></td>
                                                    <td ><?= $index['pertanyaan']; ?></td>
                                                    <td class="text-center">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="<?= base_url('soal/ubah/' . $index['id_soal']) ?>"
                                                                   class="btn btn-sm btn-success bg-darken-4">
                                                                    <i class="ft-edit-2"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <a href="#modal-hapus-<?= $index['id_soal'] ?>"
                                                                   data-toggle="modal"
                                                                   class="btn btn-sm btn-red">
                                                                    <i class="ft-trash-2"></i>
                                                                </a>
                                                            </div>
                                                        </div>
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
        </div>

