<div class="container-fluid">
    <form class="needs-validation was-validated" novalidate="" action="<?= base_url('Pengguna/editPengguna/'.$pengguna['id_pengguna']) ?>"
          method="post">
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Username</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="username"
                       placeholder="Username"
                       value="<?= $pengguna['username_pengguna'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip02">Password</label>
                <input type="password" class="form-control position-relative" id="validationTooltip02" name="password"
                       placeholder="Password"
                       value="" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip02">Level Pengguna</label>
                <div class="input-group">
                    <select class="custom-select" name="level">
                        <?php if ($pengguna['level_pengguna'] == 'admin'): ?>
                            <option value="admin" selected>Admin</option>
                            <option value="superAdmin">Super Admin</option>
                            <option value="mahasiswa">Mahasiswa</option>
                            <option value="dosen">Dosen</option>
                        <?php elseif ($pengguna['level_pengguna'] == 'superAdmin'): ?>
                            <option value="admin" >Admin</option>
                            <option value="superAdmin" selected>Super Admin</option>
                            <option value="mahasiswa">Mahasiswa</option>
                            <option value="dosen">Dosen</option>
                        <?php elseif ($pengguna['level_pengguna'] == 'dosen'): ?>
                            <option value="admin" >Admin</option>
                            <option value="superAdmin" >Super Admin</option>
                            <option value="mahasiswa" >Mahasiswa</option>
                            <option value="dosen" selected>Dosen</option>
                        <?php else :?>
                            <option value="admin" >Admin</option>
                            <option value="superAdmin" >Super Admin</option>
                            <option value="mahasiswa" selected >Mahasiswa</option>
                            <option value="dosen" >Dosen</option>
                        <?php endif ;?>


                    </select>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
        </div>
</div>

</form>

</div>