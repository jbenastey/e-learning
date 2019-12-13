<div>
    <div class="col-12">
        <form class="needs-validation was-validated" novalidate="" action="<?= base_url('nilai/insertNilai') ?>"
              method="post">
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip03">ID UJIAN</label>
                    <input class="form-control position-relative" id="validationTooltip03" name="id_ujian"
                           placeholder="ID UJIAN"
                           required="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip03">ID PENGGUNA</label>
                    <input class="form-control position-relative" id="validationTooltip03" name="id_pengguna"
                           placeholder="ID PENGGUNA"
                           required="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip03">NILAI</label>
                    <input class="form-control position-relative" id="validationTooltip03" name="nilai"
                           placeholder="NILAI"
                           required="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip03">JAWABAN DETAIL</label>
                    <input class="form-control position-relative" id="validationTooltip03" name="jawaban_detail"
                           placeholder="JAWABAN DETAIL"
                           required="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="validationTooltip03">NILAI DETAIL</label>
                    <input class="form-control position-relative" id="validationTooltip03" name="nilai_detail"
                           placeholder="NILAI DETAIL"
                           required="">
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="simpan">SIMPAN</button>
        </form>
    </div>
</div>