<div class="container-fluid">
    <form class="needs-validation was-validated" novalidate="" action="<?= base_url('Mahasiswa/editMahasiswa/'.$mahasiswa['mahasiswa_id']) ?>"
          method="post">
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Nama mahasiswa</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="nama_mahasiswa"
                       placeholder="Username"
                       value="<?= $mahasiswa['mahasiswa_nama'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">NIM</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="nim_mahasiswa"
                       placeholder="Username"
                       value="<?= $mahasiswa['mahasiswa_nim'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">No HP</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="no_hp_mahasiswa"
                       placeholder="Username"
                       value="<?= $mahasiswa['mahasiswa_no_hp'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">EMAIL</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="email_mahasiswa"
                       placeholder="Username"
                       value="<?= $mahasiswa['mahasiswa_email'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>

        </div>
        <div>
            <button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
        </div>
</div>

</form>

</div>