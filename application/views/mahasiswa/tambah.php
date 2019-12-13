<form class="needs-validation was-validated" novalidate="" action="<?=base_url('Mahasiswa/insertMahasiswa')?>" method="post">
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTooltip01">Nama Mahasiswa</label>
            <input type="text" class="form-control position-relative" id="validationTooltip01" name="nama_mahasiswa" placeholder="Username"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip01">NIM</label>
            <input type="text" class="form-control position-relative" id="validationTooltip01" name="nim_mahasiswa" placeholder="Username"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip01">No HP</label>
            <input type="text" class="form-control position-relative" id="validationTooltip01" name="no_hp_mahasiswa" placeholder="Username"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">EMAIL</label>
            <input type="password" class="form-control position-relative" id="validationTooltip02" name="email_mahasiswa" placeholder="Password"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
    </div>
    <div>
        <button class="btn btn-primary" type="submit" name="simpan">Simpan </button>
    </div>
    </div>

</form>