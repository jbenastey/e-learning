<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <?php
//					echo "<pre>";
//					print_r ($this->session->userdata());
//					echo "</pre>";

                    $totalSoal = 0;
                    foreach ($soal as $item) {
                        $totalSoal++;
                    }
                    ?>
					<input type="hidden" id="totalSoal" value="<?= $totalSoal ?>">
                    <form action="<?= base_url('Quiz/jawaban/' . $idSubmodul) ?>" role="form" method="post" id="formSoal">
                        <div class="tab-content">
                            <?php
							$ini_soalnya = json_decode($soalnya,true);
//							var_dump($ini_soalnya);die;
                            foreach ($ini_soalnya as $key => $value) :
                                ?>
                                <input type="hidden" value="<?= $value['id_soal'] ?>" name="id-<?= $key?>">
                                <div id="step<?= $key ?>" class="tab-pane <?php if ($key == 0) {
                                    echo 'active';
                                } ?>" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Soal Nomor <?= $key + 1 ?></p>
                                            <br>
                                            <p><?= $value['soal'] ?></p>
											<?php
											if($value['audio'] == null):
												?>
											<?php
											else:
												?>
												<audio controls>
													<source src="<?= base_url('assets/dokumen/audio/'.$value['audio']) ?>" type="audio/mpeg">
													Your browser does not support the audio element.
												</audio>
											<?php
											endif
											?>
                                        </div>
                                        <?php
                                        $jawaban = array(
                                                $value['jawaban_soal_a'],
                                                $value['jawaban_soal_b'],
                                                $value['jawaban_soal_c'],
                                                $value['jawaban_soal_d'],
                                                $value['jawaban_soal_e'],
                                        );
                                        shuffle($jawaban);
                                        ?>
                                        <div class="col-12">
                                            <div class="funkyradio">
                                                <div class="funkyradio-primary">
                                                    <input type="radio" name="jawaban-<?= ($key ) ?>"
                                                           id="<?= $key ?>-a" required value='<?= $jawaban[0] ?>' onclick="jawaban(this.value,<?=$key?>)"/>
                                                    <label for="<?= $key ?>-a">
                                                        <div class="huruf_opsi">A</div>
                                                        <p class="text-opsi"><?= $jawaban[0] ?></p>

                                                    </label>
                                                </div>
                                                <div class="funkyradio-primary">
                                                    <input type="radio" name="jawaban-<?= ($key ) ?>"
                                                           id="<?= $key ?>-b" value='<?= $jawaban[1] ?>' onclick="jawaban(this.value,<?=$key?>)"/>
                                                    <label for="<?= $key ?>-b">
                                                        <div class="huruf_opsi">B</div>
                                                        <p class="text-opsi"><?= $jawaban[1] ?></p>
                                                    </label>
                                                </div>
                                                <div class="funkyradio-primary">
                                                    <input type="radio" name="jawaban-<?= ($key ) ?>"
                                                           id="<?= $key ?>-c" value='<?= $jawaban[2] ?>' onclick="jawaban(this.value,<?=$key?>)"/>
                                                    <label for="<?= $key ?>-c">
                                                        <div class="huruf_opsi">C</div>
                                                        <p class="text-opsi"><?= $jawaban[2] ?></p>
                                                    </label>
                                                </div>
                                                <div class="funkyradio-primary">
                                                    <input type="radio" name="jawaban-<?= ($key ) ?>"
                                                           id="<?= $key ?>-d" value='<?= $jawaban[3] ?>' onclick="jawaban(this.value,<?=$key?>)"/>
                                                    <label for="<?= $key ?>-d">
                                                        <div class="huruf_opsi">D</div>
                                                        <p class="text-opsi"><?= $jawaban[3] ?> </p>
                                                    </label>
                                                </div>
                                                <div class="funkyradio-primary">
                                                    <input type="radio" name="jawaban-<?= ($key ) ?>"
                                                           id="<?= $key ?>-e" value='<?= $jawaban[4] ?>' onclick="jawaban(this.value,<?=$key?>)"/>
                                                    <label for="<?= $key ?>-e">
                                                        <div class="huruf_opsi">E</div>
                                                        <p class="text-opsi"><?= $jawaban[4] ?></p>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <?php
                                        if ($key == 0):
                                            ?>
                                            <div class="col-6">

                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-primary btn-block next-step"
                                                        value="<?= $key ?>">
                                                    Selanjutnya
                                                </button>
                                            </div>
                                        <?php
                                        elseif ($key+1 == $totalSoal):
                                            ?>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-secondary btn-block prev-step"
                                                        value="<?= $key ?>">
                                                    Sebelumnya
                                                </button>
                                            </div>
                                        <?php
                                        else:
                                            ?>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-secondary btn-block prev-step"
                                                        value="<?= $key ?>">
                                                    Sebelumnya
                                                </button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-primary btn-block next-step"
                                                        value="<?= $key ?>">
                                                    Selanjutnya
                                                </button>
                                            </div>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            <?php
                            endforeach;

                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h6>Waktu Pengerjaan</h6>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
						<input type="hidden" id="durasi" value="<?=$waktu_habis?>">
                        <span id="waktu"></span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <h6>Navigasi Soal</h6>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <?php
                            foreach ($soal as $key => $value) :
                                ?>
                                <li role="presentation">
                                    <a href="#step<?= $key ?>" data-toggle="tab" aria-controls="step<?= $key ?>" role="tab"
                                       title="Soal ke <?= $key + 1 ?>">
                                        <div class="btn btn-outline-primary btn-sm mb-1" id="soalKe<?= $key ?>" >
                                            <?= $key + 1 ?>
                                        </div>
                                    </a>
                                </li>&nbsp;
                                <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <button class="btn btn-primary form-control" id="btn-submit-soal" onclick="hapusSession()">Serahkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	// sessionStorage.clear();
	function jawaban(jawaban,nomorSoal){
		// alert(jawaban+nomorSoal);
		sessionStorage.setItem('jawaban'+nomorSoal,jawaban);
		document.getElementById('soalKe'+nomorSoal).classList.add('class','active');
	};

	var totalSoal = document.getElementById('totalSoal').value;
	console.log(totalSoal);

	for (var i = 0; i < totalSoal ; i++) {
		var pilih = sessionStorage.getItem('jawaban'+i);
		console.log(pilih);
		// console.log(document.getElementById(i+'-a').value);
		if (document.getElementById(i+'-a').value === pilih){
			document.getElementById(i+'-a').setAttribute('checked','true');
		}else if (document.getElementById(i+'-b').value === pilih){
			document.getElementById(i+'-b').setAttribute('checked','true');
		}else if (document.getElementById(i+'-c').value === pilih){
			document.getElementById(i+'-c').setAttribute('checked','true');
		}else if (document.getElementById(i+'-d').value === pilih){
			document.getElementById(i+'-d').setAttribute('checked','true');
		}else if (document.getElementById(i+'-e').value === pilih){
			document.getElementById(i+'-e').setAttribute('checked','true');
		}

		if (pilih != null){
			document.getElementById('soalKe'+i).classList.add('class','active');
		}
	}
	
	function hapusSession() {
		sessionStorage.clear();
	}
</script>
