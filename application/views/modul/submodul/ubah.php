

<div class="container-fluid">
    <form class="needs-validation was-validated" novalidate=""
          action="<?= base_url('modul/editSubModul/' . $submodul['id_sub_modul']) ?>"
          method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Nama Sub modul</label>
                <input type="hidden" value="<?= $submodul['id_modul'] ?>" name="id_modul">
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="nama_sub_modul"
                       placeholder="Username"
                       value="<?= $submodul['nama_sub_modul'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Keterangan</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="keterangan"
                       placeholder="keterangan"
                       value="<?= $submodul['keterangan'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Dokumen ppt</label>
                <input type="file" class="form-control position-relative" id="validationTooltip01" name="dokumen_ppt"
                        required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Dokumen pdf</label>
                <input type="file" class="form-control position-relative" id="validationTooltip01" name="dokumen_pdf"
                        required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div>
                <button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
            </div>
        </div>

    </form>

</div>