<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="col-12">
                <form class="needs-validation was-validated" novalidate=""
                      action="<?= base_url('soal/editSoal/' . $soal['id_soal']) ?>" method="post">
                    <div class="form-row">
                        <!--                    <div class="col-md-12 mb-3">-->
                        <!--                        <label for="validationTooltip03">ID UJIAN</label>-->
                        <!--                        <input class="form-control position-relative" name="id_ujian"-->
                        <!--                               placeholder="ID SOAL"-->
                        <!--                               required value="--><? //= $soal['id_ujian']?><!--">-->
                        <!--                    </div>-->
                        <div class="col-md-12 mb-3">
                            <label for="validationTooltip03">SOAL</label>
                            <input class="form-control position-relative" name="soal"
                                   placeholder="SOAL"
                                   required value="<?= $soal['soal'] ?>">
                        </div>
                    </div>
                    <input type="hidden" name="id_ujian" value="<?=$soal['id_ujian']?>">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">JAWABAN SOAL A</label>
                            <input class="form-control position-relative" name="jawaban_soal_a"
                                   placeholder="JAWABAN SOAL A"
                                   required value="<?= $soal['jawaban_soal_a'] ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">JAWABAN SOAL B</label>
                            <input class="form-control position-relative" name="jawaban_soal_b"
                                   placeholder="JAWABAN SOAL B"
                                   required value="<?= $soal['jawaban_soal_b'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">JAWABAN SOAL C</label>
                            <input class="form-control position-relative" name="jawaban_soal_c"
                                   placeholder="JAWABAN SOAL C"
                                   required value="<?= $soal['jawaban_soal_c'] ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">JAWABAN SOAL D</label>
                            <input class="form-control position-relative" name="jawaban_soal_d"
                                   placeholder="JAWABAN SOAL D"
                                   required value="<?= $soal['jawaban_soal_d'] ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">JAWABAN SOAL E</label>
                            <input class="form-control position-relative" name="jawaban_soal_e"
                                   placeholder="JAWABAN SOAL E"
                                   required value="<?= $soal['jawaban_soal_e'] ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip04">KUNCI JAWABAN</label>
                            <select class="custom-select" name="kunci_jawaban">
                                <?php if ($soal['kunci_jawaban'] === 'a'): ?>
                                    <option value="a" selected>A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                    <option value="d">D</option>
                                    <option value="e">E</option>

                                <?php elseif ($soal['kunci_jawaban'] === 'b'): ?>
                                    <option value="a">A</option>
                                    <option value="b" selected>B</option>
                                    <option value="c">C</option>
                                    <option value="d">D</option>
                                    <option value="e">E</option>

                                <?php elseif ($soal['kunci_jawaban'] === 'c'): ?>
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c" selected>C</option>
                                    <option value="d">D</option>
                                    <option value="e">E</option>

                                <?php elseif ($soal['kunci_jawaban'] === 'd'): ?>
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                    <option value="d" selected>D</option>
                                    <option value="e">E</option>

                                <?php else: ?>
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                    <option value="d">D</option>
                                    <option value="e" selected>E</option>

                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
                </form>
            </div>
        </div>
    </div>