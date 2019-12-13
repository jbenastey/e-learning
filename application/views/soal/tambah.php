<div class="card">
    <div class="card-body">
        <div class="col-12">
            <form class="needs-validation was-validated" novalidate="" action="<?= base_url('soal/insertSoal') ?>"
                  method="post">
                <div class="form-row">
                    <input type="text" value="<?= $id_ujian ?>" hidden name="id_ujian">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">SOAL</label>
                        <textarea rows="5" class="form-control" name="soal"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
                        <!--                        <input class="form-control position-relative" id="validationTooltip03" name="soal"-->
                        <!--                               placeholder="SOAL"-->
                        <!--                               required="">-->
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">JAWABAN A</label>
                        <textarea rows="5" class="form-control" name="jawaban_soal_a"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
                        <!--                        <input class="form-control position-relative" id="validationTooltip03" name="jawaban_soal_a"-->
                        <!--                               placeholder="JAWABAN SOAL A"-->
                        <!--                               required="">-->
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">JAWABAN B</label>
                        <textarea rows="5" class="form-control" name="jawaban_soal_b"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
                        <!--                        <input class="form-control position-relative" id="validationTooltip03" name="jawaban_soal_b"-->
                        <!--                               placeholder="JAWABAN SOAL B"-->
                        <!--                               required="">-->
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">JAWABAN C</label>
                        <textarea rows="5" class="form-control" name="jawaban_soal_c"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
                        <!--                        <input class="form-control position-relative" id="validationTooltip03" name="jawaban_soal_a"-->
                        <!--                               placeholder="JAWABAN SOAL A"-->
                        <!--                               required="">-->
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">JAWABAN D</label>
                        <textarea rows="5" class="form-control" name="jawaban_soal_d"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
                        <!--                        <input class="form-control position-relative" id="validationTooltip03" name="jawaban_soal_b"-->
                        <!--                               placeholder="JAWABAN SOAL B"-->
                        <!--                               required="">-->
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">JAWABAN E</label>
                        <textarea rows="5" class="form-control" name="jawaban_soal_e"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
                        <!--                        <input class="form-control position-relative" id="validationTooltip03" name="jawaban_soal_e"-->
                        <!--                               placeholder="JAWABAN SOAL E"-->
                        <!--                               required="">-->
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip04">KUNCI JAWABAN</label>
                        <select class="custom-select" name="kunci_jawaban">
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                            <option value="e">E</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="simpan">SIMPAN</button>
            </form>
        </div>
    </div>