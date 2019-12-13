<div class="container-fluid">
    <form class="needs-validation was-validated" novalidate=""
          action="<?= base_url('Modul/editModul/' . $data['id_modul']) ?>"
          method="post">
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <input type="hidden" name="id_matkul" value="<?=$this->uri->segment('4')?>">
                <label for="validationTooltip01">Nama modul</label>
                <input type="text" class="form-control position-relative" id="validationTooltip01" name="nama_modul"
                       placeholder="Username"
                       value="<?= $data['nama_modul'] ?>" required="">
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