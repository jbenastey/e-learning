 <div class="card">
        <div class="card-body">
            <div class="col-12">
                <form class="needs-validation was-validated" novalidate=""
                      action="<?= base_url('ujian/editUjian/' . $ujian['id_sub_modul']) ?>" method="post">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">NILAI MINIMAL</label>
                            <input type="text" class="form-control position-relative" id="validationTooltip03" name="nilai_minimal_ujian"
                                   required="" value="<?=$ujian['nilai_minimal_ujian']?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">DURASI  UJIAN</label>
                            <input type="text"  class="form-control position-relative" id="validationTooltip03" name="durasi_ujian"
                                   required=""  value="<?=$ujian['durasi_ujian']?>">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
            </div>
            </div>
        </div>
    </div>
</div>