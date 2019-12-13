<div class="card">
    <div class="card-body">
        <div class="col-12">
            <form class="needs-validation was-validated" novalidate="" action="<?= base_url('soal/insertSoal') ?>"  enctype="multipart/form-data"
                  method="post">
                <div class="form-row">
                    <input type="text" value="<?= $id_ujian ?>" hidden name="id_ujian">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">SOAL</label>
                        <textarea class="summernote" name="soal"
                                  ></textarea>
						<button type="button" class="btn btn-secondary btn-sm" style="margin-top: -40px" title="Tambah Audio?" onclick="tampilkanAudio()"><i class="ft-mic"></i></button>
						<br>
						<div id="audio" style="display: none">
							<input type="file" name="audio">
							<button type="button" class="btn" title="batal" onclick="tutupAudio()">x</button>
						</div>
                    </div>
                </div>
				<div class="form-row">
					<div class="col-md-12 mb-3">

					</div>
				</div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">JAWABAN A</label>
                        <textarea class="summernotejawab" name="jawaban_soal_a"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">JAWABAN B</label>
                        <textarea class="summernotejawab" name="jawaban_soal_b"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">JAWABAN C</label>
                        <textarea class="summernotejawab" name="jawaban_soal_c"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">JAWABAN D</label>
                        <textarea  class="summernotejawab" name="jawaban_soal_d"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">JAWABAN E</label>
                        <textarea  class="summernotejawab" name="jawaban_soal_e"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
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

	<script>
		function tampilkanAudio() {
			document.getElementById('audio').style.display = 'block';
		}
		function tutupAudio() {
			document.getElementById('audio').style.display = 'none';
		}
	</script>
