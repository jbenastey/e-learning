<div class="container-fluid">
    <div class="col-12">
        <form class="needs-validation was-validated" novalidate=""
              action="<?= base_url('jawaban/editJawaban/' . $jawaban['id_jawaban']) ?>" method="post">
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="validationTooltipUsername">Pertanyaan Jawaban</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control position-relative" id="validationTooltipUsername"
                               name="pertanyaan_jawaban"
                               placeholder="pertanyaan_jawaban" aria-describedby="validationTooltipUsernamePrepend" required value="<?= $jawaban['pertanyaan_jawaban'] ?>">
                        <div class="invalid-tooltip">
                            Please choose a unique and valid question.
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip04">Format Jawaban</label>
                    <input class="form-control position-relative" id="validationTooltip03" name="format_jawaban"
                           required value="<?= $jawaban['format_jawaban'] ?>">
                    <div class="invalid-tooltip">
                        Please provide a valid format.
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip03">Nilai</label>
                    <input class="form-control position-relative" id="validationTooltip03" name="nilai"
                           required value="<?= $jawaban['nilai'] ?>">
                    <div class="invalid-tooltip">
                        Please provide a valid jawaban.
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip03">Tanggal Menjawab</label>
                    <input class="form-control position-relative" id="validationTooltip03" name="tanggal_menjawab"
                           required value="<?= $jawaban['tanggal_menjawab'] ?>">
                    <div class="invalid-tooltip">
                        Please provide a valid answer.
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip03">ID Soal</label>
                    <input class="form-control position-relative" id="validationTooltip03" name="id_soal"
                           required value="<?= $jawaban['id_soal'] ?>">
                    <div class="invalid-tooltip">
                        Please provide a valid answer.
                    </div>
                </div>
            </div>
    </div>
    <button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
    </form>
</div>