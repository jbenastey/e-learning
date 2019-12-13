<div class="card">
    <div class="card-body">
    <form  action="<?= base_url('ujian/insertUjian')?>" method="post">
    <div class="col-12">
    <div class="needs-validation was-validated" novalidate="">
    <div class="form-row">
            <input type="hidden" min="0" class="form-control position-relative" id="validationTooltip03" name="id_dosen"
                   required="" value="<?=$this->session->userdata('id_dosen') ?>">
    </div>
        <div class="form-row">
            <input type="hidden" class="form-control position-relative" id="validationTooltip03" name="kelas_ujian"
                   required="" value="<?=$sub_modul['paket_rombel_index'] ?>">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">NILAI MINIMAL</label>
            <input class="form-control position-relative" id="validationTooltip03" name="nilai_minimal_ujian"
                   required="">
        </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">DURASI UJIAN</label>
                <input class="form-control position-relative" id="validationTooltip03" name="durasi_ujian"
                       required="">
            </div>
            <input type="hidden" class="form-control position-relative" id="validationTooltip03" name="id_sub_modul"
                   required="" value="<?=$sub_modul['id_sub_modul'] ?>">
        </div>
    </div>

        <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
    </div>
</form>
</div>
</div>