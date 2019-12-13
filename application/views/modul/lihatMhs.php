<div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
        <div class="content-header-left col-md-2 col-12 mb-2">
            <?php if ($this->session->userdata('level_pengguna') == 'mahasiswa'): ?>
                <?php endif ?>
        </div>
    </div>
    <div class="content-body"><!-- Zero configuration table -->
        <section id="configuration">
            <div class="row">
                <div class="col-12 mt-1">
                    <!--                    <div class="card-deck">-->
                    <div class="row">
                        <?php if ($this->session->userdata('level_pengguna') == 'mahasiswa'): ?>
                            <?php foreach ($modul as $value): ?>
                                <div class="col-4 mb-3">
                                    <div class="card">
                                        <img class="card-img-top img-fluid"
                                             src="<?= base_url() ?>assets/images/gallery/14.jpg"
                                             alt="Card image cap"/>
                                        <div class="card-body ">
                                            <h4 class="card-title"><?= $value['nama_modul'] ?></h4>
                                            <a href="<?= base_url('modul/lihat/' . $value['id_modul']) ?>"
                                               class="btn btn-info col-12 mt-1">Lihat
                                                Modul</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                    <!--                    </div>-->

                </div>
            </div>


        </section>

    </div>
</div>
<div class="modal " id="modal-ikuti-kelas" tabindex="-1" role="dialog">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Enter your code Class</h5>
                <button type="button" class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="form-horizontal" method="post"
                  action="<?= base_url('welcome/ikutiKelas') ?>"
                  novalidate>

                <div class="modal-body">
                    <fieldset
                        class="form-group position-relative has-icon-left">
                        <input type="text"
                               class="form-control round"
                               id="user-name"
                               placeholder="Enter Code Class"
                               required name="kode_kelas">
                        <div class="form-control-position">
                            <i class="ft-user"></i>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="submit"
                            class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue "
                            name="simpan">gabung
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>