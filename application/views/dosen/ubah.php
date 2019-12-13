<div class="container-fluid">
    <form class="needs-validation was-validated" novalidate="" action="<?= base_url('Dosen/editDosen/'.$dosen['dosen_id']) ?>"
          method="post">
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Nama dosen</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="nama_dosen"
                       placeholder="Username"
                       value="<?= $dosen['dosen_nama'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Kategori</label>
                <div class="input-group">
                    <select class="custom-select" name="kategori_dosen">
                        <?php if ($dosen['dosen_kategori'] == 'Tetap'): ?>
                            <option value="Tetap" selected>Tetap</option>
                            <option value="LB">lB</option>
                        <?php else :?>
                            <option value="Tetap">Tetap</option>
                            <option value="LB" selected>lB</option>>
                        <?php endif ;?>
                    </select>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">NIP/NIK</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="nip_nik_dosen"
                       placeholder="Username"
                       value="<?= $dosen['dosen_nip_nik'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">NID/NUP</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="nid_nup_dosen"
                       placeholder="Username"
                       value="<?= $dosen['dosen_nid_nup'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Gol/Jabatam</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="gol_jab_dosen"
                       placeholder="Username"
                       value="<?= $dosen['dosen_gol_jab'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Jurusan</label>
                <div class="input-group">
                    <select class="custom-select" name="jurusan_dosen">
                        <?php if ($dosen['dosen_jurusan'] == 'MPI'): ?>
                            <option value="MPI" selected>MPI</option>
                            <option value="PAI">PAI</option>
                            <option value="PBA">PBA</option>
                            <option value="PBIDN">PBIDN</option>
                            <option value="PGEO">PGEO</option>
                            <option value="PGMI">PGMI</option>
                            <option value="PGMIS2">PGMIS2</option>
                            <option value="PKA">PKA</option>
                            <option value="PMT">PMT</option>
                            <option value="PIAUD">PIAUD</option>
                            <option value="PE">PE</option>
                            <option value="TIPA">TIPA</option>
                            <option value="TIPS">TIPS</option>
                        <?php elseif ($dosen['dosen_jurusan'] == 'PAI'): ?>
                            <option value="MPI">MPI</option>
                            <option value="PAI"  selected>PAI</option>
                            <option value="PBA">PBA</option>
                            <option value="PBIDN">PBIDN</option>
                            <option value="PGEO">PGEO</option>
                            <option value="PGMI">PGMI</option>
                            <option value="PGMIS2">PGMIS2</option>
                            <option value="PKA">PKA</option>
                            <option value="PMT">PMT</option>
                            <option value="PIAUD">PIAUD</option>
                            <option value="PE">PE</option>
                            <option value="TIPA">TIPA</option>
                            <option value="TIPS">TIPS</option>
                        <?php elseif ($dosen['dosen_jurusan'] == 'PBA'): ?>
                            <option value="MPI">MPI</option>
                            <option value="PAI">PAI</option>
                            <option value="PBA" selected>PBA</option>
                            <option value="PBIDN">PBIDN</option>
                            <option value="PGEO">PGEO</option>
                            <option value="PGMI">PGMI</option>
                            <option value="PGMIS2">PGMIS2</option>
                            <option value="PKA">PKA</option>
                            <option value="PMT">PMT</option>
                            <option value="PIAUD">PIAUD</option>
                            <option value="PE">PE</option>
                            <option value="TIPA">TIPA</option>
                            <option value="TIPS">TIPS</option>
                        <?php elseif ($dosen['dosen_jurusan'] == 'PBIDN'): ?>
                            <option value="MPI">MPI</option>
                            <option value="PAI">PAI</option>
                            <option value="PBA" >PBA</option>
                            <option value="PBIDN" selected>PBIDN</option>
                            <option value="PGEO">PGEO</option>
                            <option value="PGMI">PGMI</option>
                            <option value="PGMIS2">PGMIS2</option>
                            <option value="PKA">PKA</option>
                            <option value="PMT">PMT</option>
                            <option value="PIAUD">PIAUD</option>
                            <option value="PE">PE</option>
                            <option value="TIPA">TIPA</option>
                            <option value="TIPS">TIPS</option>
                        <?php elseif ($dosen['dosen_jurusan'] == 'PGEO'): ?>
                            <option value="MPI">MPI</option>
                            <option value="PAI">PAI</option>
                            <option value="PBA" >PBA</option>
                            <option value="PBIDN" >PBIDN</option>
                            <option value="PGEO" selected>PGEO</option>
                            <option value="PGMI">PGMI</option>
                            <option value="PGMIS2">PGMIS2</option>
                            <option value="PKA">PKA</option>
                            <option value="PMT">PMT</option>
                            <option value="PIAUD">PIAUD</option>
                            <option value="PE">PE</option>
                            <option value="TIPA">TIPA</option>
                            <option value="TIPS">TIPS</option>
                        <?php elseif ($dosen['dosen_jurusan'] == 'PGMI'): ?>
                            <option value="MPI">MPI</option>
                            <option value="PAI">PAI</option>
                            <option value="PBA" >PBA</option>
                            <option value="PBIDN" >PBIDN</option>
                            <option value="PGEO">PGEO</option>
                            <option value="PGMI" selected>PGMI</option>
                            <option value="PGMIS2">PGMIS2</option>
                            <option value="PKA">PKA</option>
                            <option value="PMT">PMT</option>
                            <option value="PIAUD">PIAUD</option>
                            <option value="PE">PE</option>
                            <option value="TIPA">TIPA</option>
                            <option value="TIPS">TIPS</option>
                        <?php elseif ($dosen['dosen_jurusan'] == 'PGMIS2'): ?>
                            <option value="MPI">MPI</option>
                            <option value="PAI">PAI</option>
                            <option value="PBA" >PBA</option>
                            <option value="PBIDN" >PBIDN</option>
                            <option value="PGEO">PGEO</option>
                            <option value="PGMI" >PGMI</option>
                            <option value="PGMIS2" selected>PGMIS2</option>
                            <option value="PKA">PKA</option>
                            <option value="PMT">PMT</option>
                            <option value="PIAUD">PIAUD</option>
                            <option value="PE">PE</option>
                            <option value="TIPA">TIPA</option>
                            <option value="TIPS">TIPS</option>
                        <?php elseif ($dosen['dosen_jurusan'] == 'PKA'): ?>
                            <option value="MPI">MPI</option>
                            <option value="PAI">PAI</option>
                            <option value="PBA" >PBA</option>
                            <option value="PBIDN" >PBIDN</option>
                            <option value="PGEO">PGEO</option>
                            <option value="PGMI" >PGMI</option>
                            <option value="PGMIS2">PGMIS2</option>
                            <option value="PKA"  selected>PKA</option>
                            <option value="PMT">PMT</option>
                            <option value="PIAUD">PIAUD</option>
                            <option value="PE">PE</option>
                            <option value="TIPA">TIPA</option>
                            <option value="TIPS">TIPS</option>
                        <?php elseif ($dosen['dosen_jurusan'] == 'PMT'): ?>
                            <option value="MPI">MPI</option>
                            <option value="PAI">PAI</option>
                            <option value="PBA" >PBA</option>
                            <option value="PBIDN" >PBIDN</option>
                            <option value="PGEO">PGEO</option>
                            <option value="PGMI" >PGMI</option>
                            <option value="PGMIS2">PGMIS2</option>
                            <option value="PKA">PKA</option>
                            <option value="PMT" selected>PMT</option>
                            <option value="PIAUD">PIAUD</option>
                            <option value="PE">PE</option>
                            <option value="TIPA">TIPA</option>
                            <option value="TIPS">TIPS</option>
                        <?php elseif ($dosen['dosen_jurusan'] == 'PIAUD'): ?>
                            <option value="MPI">MPI</option>
                            <option value="PAI">PAI</option>
                            <option value="PBA" >PBA</option>
                            <option value="PBIDN" >PBIDN</option>
                            <option value="PGEO">PGEO</option>
                            <option value="PGMI" >PGMI</option>
                            <option value="PGMIS2">PGMIS2</option>
                            <option value="PKA">PKA</option>
                            <option value="PMT">PMT</option>
                            <option value="PIAUD " selected>PIAUD</option>
                            <option value="PE">PE</option>
                            <option value="TIPA">TIPA</option>
                            <option value="TIPS">TIPS</option>
                        <?php elseif ($dosen['dosen_jurusan'] == 'PE'): ?>
                            <option value="MPI">MPI</option>
                            <option value="PAI">PAI</option>
                            <option value="PBA" >PBA</option>
                            <option value="PBIDN" >PBIDN</option>
                            <option value="PGEO">PGEO</option>
                            <option value="PGMI" >PGMI</option>
                            <option value="PGMIS2">PGMIS2</option>
                            <option value="PKA">PKA</option>
                            <option value="PMT">PMT</option>
                            <option value="PIAUD">PIAUD</option>
                            <option value="PE" selected>PE</option>
                            <option value="TIPA">TIPA</option>
                            <option value="TIPS">TIPS</option>
                        <?php elseif ($dosen['dosen_jurusan'] == 'TIPA'): ?>
                            <option value="MPI">MPI</option>
                            <option value="PAI">PAI</option>
                            <option value="PBA" >PBA</option>
                            <option value="PBIDN" >PBIDN</option>
                            <option value="PGEO">PGEO</option>
                            <option value="PGMI" >PGMI</option>
                            <option value="PGMIS2">PGMIS2</option>
                            <option value="PKA">PKA</option>
                            <option value="PMT">PMT</option>
                            <option value="PIAUD">PIAUD</option>
                            <option value="PE">PE</option>
                            <option value="TIPA"  selected>TIPA</option>
                            <option value="TIPS">TIPS</option>
                        <?php else :?>
                            <<option value="MPI">MPI</option>
                            <option value="PAI">PAI</option>
                            <option value="PBA" >PBA</option>
                            <option value="PBIDN" >PBIDN</option>
                            <option value="PGEO">PGEO</option>
                            <option value="PGMI" >PGMI</option>
                            <option value="PGMIS2">PGMIS2</option>
                            <option value="PKA">PKA</option>
                            <option value="PMT">PMT</option>
                            <option value="PIAUD">PIAUD</option>
                            <option value="PE">PE</option>
                            <option value="TIPA"  >TIPA</option>
                            <option value="TIPS"selected>TIPS</option>
                        <?php endif ;?>
                    </select>
                </div>
            </div><div class="col-md-12 mb-3">
                <label for="validationTooltip01">Tugas Lain</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="tugas_lain_dosen"
                       placeholder="Username"
                       value="<?= $dosen['dosen_tugas_lain'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Nomor HP</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="nomor_hp_dosen"
                       placeholder="Username"
                       value="<?= $dosen['dosen_nomor_hp'] ?>" required="">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Status</label>
                <div class="input-group">
                    <select class="custom-select" name="status_dosen">
                        <?php if ($dosen['dosen_status'] == 'Aktif'): ?>
                            <option value="Aktif" selected>Aktif</option>
                            <option value="NonAktif">NonAktif</option>
                        <?php else :?>
                            <option value="Aktif">Aktif</option>
                            <option value="NonAktif"  selected>NonAktif</option>
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