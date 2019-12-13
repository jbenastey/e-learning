<h2>nama sub modul : <?= $submodul['nama_sub_modul']?></h2>
<h2>download ppt <a href="<?= base_url('assets/dokumen/'.$submodul['dokumen_ppt'])?>">download</a></h2>
<h2>download pdf <a href="<?= base_url('assets/dokumen/'.$submodul['dokumen_pdf'])?>">download</a></h2>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= $submodul['nama_sub_modul']?></h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nama Materi</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Download ppt</td>
                                <td><a href="<?= base_url('assets/dokumen/'.$submodul['dokumen_ppt'])?>">download</a></td>
                            </tr>
                            <tr>
                                <td>download pdf</td>
                                <td><a href="<?= base_url('assets/dokumen/'.$submodul['dokumen_pdf'])?>">download</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>