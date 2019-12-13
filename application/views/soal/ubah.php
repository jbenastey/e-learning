<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="col-12">
                <form class="needs-validation was-validated" novalidate="" enctype="multipart/form-data"
                      action="<?= base_url('soal/editSoal/' . $soal['id_soal']) ?>" method="post">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationTooltip03">SOAL</label>
                            <textarea class="summernote" name="soal"
                            ><?= $soal['soal'] ?></textarea required value="">
							<button type="button" class="btn btn-secondary btn-sm" style="margin-top: -40px" title="Tambah Audio?" onclick="tampilkanAudio()"><i class="ft-mic"></i></button>
							<br>
							<div id="audio" style="display: none">
								<input type="file" name="audio">
								<button type="button" class="btn" title="batal" onclick="tutupAudio()">x</button>
							</div>
                        </div>
                    </div>
                    <input type="hidden" name="id_ujian" value="<?=$soal['id_ujian']?>">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">JAWABAN SOAL A</label>
                            <textarea class="summernotejawab" name="jawaban_soal_a"
                            ><?= $soal['jawaban_soal_a'] ?></textarea required value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">JAWABAN SOAL B</label>
                            <textarea class="summernotejawab" name="jawaban_soal_b"
                            ><?= $soal['jawaban_soal_b'] ?></textarea required value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">JAWABAN SOAL C</label>
                            <textarea class="summernotejawab" name="jawaban_soal_c"
                            ><?= $soal['jawaban_soal_c'] ?></textarea required value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">JAWABAN SOAL D</label>
                            <textarea class="summernotejawab" name="jawaban_soal_d"
                            ><?= $soal['jawaban_soal_d'] ?></textarea required value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">JAWABAN SOAL E</label>
                            <textarea class="summernotejawab" name="jawaban_soal_e"
                            ><?= $soal['jawaban_soal_e'] ?></textarea required value="">
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

<script>
	function tampilkanAudio() {
		document.getElementById('audio').style.display = 'block';
	}
	function tutupAudio() {
		document.getElementById('audio').style.display = 'none';
	}
</script>
