<form class="needs-validation was-validated" novalidate="" action="<?=base_url('Pengguna/insertPengguna')?>" method="post">
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationTooltip01">Username</label>
            <input type="text" class="form-control position-relative" id="validationTooltip01" name="username" placeholder="Username"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Password</label>
            <input type="password" class="form-control position-relative" id="validationTooltip02" name="password" placeholder="Password"
                   value="" required="">
            <div class="valid-tooltip">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTooltip02">Level Pengguna</label>
            <div class="input-group">
                <select class="custom-select" name="level">
                    <option value="admin">Admin</option>
                    <option value="superAdmin">Super Admin</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="dosen">Dosen</option>
                </select>
                    Please choose a unique and valid username.
                </div>
            </div>
        </div>
    <div>
        <button class="btn btn-primary" type="submit" name="simpan">Simpan </button>
    </div>
    </div>

</form>
