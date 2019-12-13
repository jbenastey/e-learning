<form class="needs-validation was-validated" novalidate="" action="<?= base_url('Modul/insertModul/'.$matkul) ?>" method="post">
    <div class="form-row">

        <div class="col-md-12 mb-3">
            <label for="validationTooltip01">Nama Modul</label>
            <input type="text" class="form-control position-relative" id="validationTooltip01" name="nama_modul"
                   placeholder="modul"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>


        <div>
            <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
        </div>
    </div>

</form>