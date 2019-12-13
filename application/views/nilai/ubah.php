<div class="container-fluid">
    <div>
        <div class="col-12">
            <form class="needs-validation was-validated" novalidate=""
                  action="<?= base_url('nilai/editNilai/' . $nilai['id_nilai']) ?>" method="post">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">ID UJIAN</label>
                        <input class="form-control position-relative" name="id_ujian"
                               placeholder="ID UJIAN"
                               required value="<?= $nilai['id_ujian']?>">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">ID PENGGUNA</label>
                        <input class="form-control position-relative" name="id_pengguna"
                               placeholder="ID PENGGUNA"
                               required value="<?= $nilai['id_pengguna']?>">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">NILAI</label>
                        <input class="form-control position-relative" name="nilai"
                               placeholder="NILAI"
                               required value="<?= $nilai['nilai']?>">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">JAWABAN DETAIL</label>
                        <input class="form-control position-relative" name="jawaban_detail"
                               placeholder="JAWABAN DETAIL"
                               required value="<?= $nilai['jawaban_detail']?>">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">NILAI DETAIL</label>
                        <input class="form-control position-relative" name="nilai_detail"
                               placeholder="NILAI DETAIL"
                               required value="<?= $nilai['nilai_detail']?>">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
            </form>
        </div>
    </div>