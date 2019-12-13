<form class="needs-validation was-validated" novalidate="" action="<?=base_url('Dosen/insertDosen')?>" method="post">
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTooltip01">Nama Dosen</label>
            <input type="text" class="form-control position-relative" id="validationTooltip01" name="nama_dosen" placeholder="Username"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Kategori</label>
            <div class="input-group">
                <select class="custom-select" name="kategori_dosen">
                    <option value="Tetap">Tetap</option>
                    <option value="LB">LB</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip01">NIP/NIK</label>
            <input type="text" class="form-control position-relative" id="validationTooltip01" name="nip_nik_dosen" placeholder="Username"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip01">NID/NUP</label>
            <input type="text" class="form-control position-relative" id="validationTooltip01" name="nid_nup_dosen" placeholder="Username"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Gol/Jabatan</label>
            <input type="password" class="form-control position-relative" id="validationTooltip02" name="gol_jab_dosen" placeholder="Password"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Jurusan</label>
            <div class="input-group">
                <select class="custom-select" name="jurusan_dosen">
                    <option value="MPI">MPI</option>
                    <option value="PAI">PAI</option>
                    <option value="PBA">PBA</option>
                    <option value="PBIDN">PBIDN</option>
                    <option value="PBGEO">PBGEO</option>
                    <option value="PGMI">PGMI</option>
                    <option value="PGMIS2">PGMIS2</option>
                    <option value="PKA">PKA</option>
                    <option value="PMT">PMT</option>
                    <option value="PIAUD">PIAUD</option>
                    <option value="PE">PE</option>
                    <option value="TIPA">TIPA</option>
                    <option value="TIPS">TIPS</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Tugas Lain</label>
            <input type="password" class="form-control position-relative" id="validationTooltip02" name="tugas_lain_dosen" placeholder="Password"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Nomor HP</label>
            <input type="password" class="form-control position-relative" id="validationTooltip02" name="nomor_hp_dosen" placeholder="Password"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Status</label>
            <div class="input-group">
                <select class="custom-select" name="status_dosen">
                    <option value="Aktif">Aktif</option>
                    <option value="Nonaktif">Nonaktif</option>
                </select>
            </div>
        </div>
    </div>
    <div>
        <button class="btn btn-primary" type="submit" name="simpan">Simpan </button>
    </div>
    </div>

</form>