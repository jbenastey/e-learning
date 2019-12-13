<form class="needs-validation was-validated" novalidate="" action="<?=base_url('modul/insertSubModul/'.$idModul)?>" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTooltip">Nama Sub Materi</label>
            <input type="text" class="form-control position-relative" id="validationTooltip01" name="nama_sub_modul" placeholder="Nama Sub Modul"
                   value="" required="">
            <div class="">
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip">Keterangan</label>
            <input type="text" class="form-control position-relative" id="validationTooltip01" name="keterangan" placeholder="keterangan"
                   value="" required="">
            <div class="">
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip">Upload Materi Slide</label>
            <input type="file" class="form-control position-relative" id="validationTooltip01" name="dokumen_ppt" placeholder=""
                   value="" required="">
            <div class="">
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip">Upload Materi pdf</label>
            <input type="file" class="form-control position-relative" id="validationTooltip01" name="dokumen_pdf" placeholder=""
                   value="" required="">
            <div class="">
            </div>
        </div>

    </div>
    <div>
        <button class="btn btn-primary" type="submit" name="simpan">Simpan </button>
    </div>
    </div>

</form>
