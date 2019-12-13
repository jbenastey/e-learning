<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <?php
                    $totalSoal = 0;
                    foreach ($soal as $item) {
                        $totalSoal++;
                    }
                    ?>
                    <form action="<?= base_url('Quiz/jawaban/' . $idSubmodul) ?>" role="form" method="post" id="formSoal">
                        <input type="hidden" value="<?= $quiz['durasi_ujian'] ?>" id="durasi">
                        <div class="tab-content">
                            <?php
                            foreach ($soal as $key => $value) :
                                ?>
                                <div id="step<?= $key ?>" class="tab-pane <?php if ($key == 0) {
                                    echo 'active';
                                } ?>" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Soal Nomor <?= $key + 1 ?></p>
                                            <br>
                                            <p><?= $value['soal'] ?></p>
                                        </div>
                                        <div class="col-12">
                                            <div class="funkyradio">
                                                <div class="funkyradio-primary">
                                                    <input type="radio" name="jawaban-<?= ($key ) ?>"
                                                           id="<?= $key ?>-a" value="a" required/>
                                                    <label for="<?= $key ?>-a">
                                                        <div class="huruf_opsi">A</div>
                                                        <p class="text-opsi"><?= $value['jawaban_soal_a'] ?></p>

                                                    </label>
                                                </div>
                                                <div class="funkyradio-primary">
                                                    <input type="radio" name="jawaban-<?= ($key ) ?>"
                                                           id="<?= $key ?>-b" value="b" required/>
                                                    <label for="<?= $key ?>-b">
                                                        <div class="huruf_opsi">B</div>
                                                        <p class="text-opsi"><?= $value['jawaban_soal_b'] ?></p>
                                                    </label>
                                                </div>
                                                <div class="funkyradio-primary">
                                                    <input type="radio" name="jawaban-<?= ($key ) ?>"
                                                           id="<?= $key ?>-c" value="c" required/>
                                                    <label for="<?= $key ?>-c">
                                                        <div class="huruf_opsi">C</div>
                                                        <p class="text-opsi"><?= $value['jawaban_soal_c'] ?></p>
                                                    </label>
                                                </div>
                                                <div class="funkyradio-primary">
                                                    <input type="radio" name="jawaban-<?= ($key ) ?>"
                                                           id="<?= $key ?>-d" value="d" required/>
                                                    <label for="<?= $key ?>-d">
                                                        <div class="huruf_opsi">D</div>
                                                        <p class="text-opsi"><?= $value['jawaban_soal_d'] ?> </p>
                                                    </label>
                                                </div>
                                                <div class="funkyradio-primary">
                                                    <input type="radio" name="jawaban-<?= ($key ) ?>"
                                                           id="<?= $key ?>-e" value="e" required/>
                                                    <label for="<?= $key ?>-e">
                                                        <div class="huruf_opsi">E</div>
                                                        <p class="text-opsi"><?= $value['jawaban_soal_e'] ?></p>
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
                        <span>03 : 30</span>
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
                                        <div class="btn btn-outline-primary">
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
                        <button class="btn btn-primary form-control" id="btn-submit-soal">Serahkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>