<form action="<?=base_url('dosen/cari')?>" method="post">
<div class="form-row">
    <div class="col-md-12 mb-3">

       <label for="nama-dosen">Cari Dosen</label>
        <input type="text" class="form-control position-relative" id="nama-dosen" name="nama_dosen"
               placeholder="Username"
               value="" required="">
        <input type="text" id="dosen" name="dosen" hidden>
    </div>
</div>
</form>