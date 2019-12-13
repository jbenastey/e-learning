
    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <?php
            $bgNumber = rand(1,8);
            ?>
            <div class="card  bg-img" style='background-image: url("<?= base_url()?>assets/images/portfolio/portfolio-<?=$bgNumber?>.jpg");height: 250px;'>
                <div class="card-body bg-black-transparent" style="height: 450px">

                    <div class="card mt-5" >
                        <div class="card-header">
                            <h1 class="mb-0 text-uppercase">Tugas <?= $tugas['nama_modul']?></h1>
							<h5 class="mt-1 badge badge-info"> <i class="ft ft-clock"></i> <?php $tenggat = new DateTime($tugas['tenggat_tugas']);echo $tenggat->format('d/m/Y')?></h5>
                        	<p class="mt-1">
								<?= $tugas['judul_tugas']?>
							</p>
						</div>
                        <div class="card-body">
							<h2 class="border-bottom pb-1 mb-1">
								<i class="ft ft-edit-2"></i> Kerjakan Tugas Anda
							</h2>
                            <form action="<?= base_url('modul/serahkanTugas/'.$tugas['id_tugas'])?>" method="post" class="form-row" enctype="multipart/form-data">
                                <div class="form-group col-12">
                                    <textarea class="form-control " name="deskripsi" id="judulTugas" rows="3" placeholder="Tulis Deskripsi Tugas"></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="dokumen">
                                        <label class="custom-file-label" for="customFile">Pilih Berkas</label>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <div class="d-flex justify-content-end">
										<a class="btn btn-secondary mr-2" href="<?= base_url('modul/lihat/'.$tugas['id_modul'])?>">batalkan</a>
                                        <button class="btn btn-primary" type="submit">
                                            serahkan <i class="ft ft-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
