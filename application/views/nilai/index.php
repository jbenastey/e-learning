<div class="card">
    <div class="card-header">
        <h5 class="float-left"> Hasil Quiz </h5>
        <div class="card-body">
            <table class="table table-bordered">
<!--                                --><?php
//                                echo '<pre>';
//                                var_dump($ujian);
//                                var_dump($this->session->userdata('id_pengguna'));
//                                ?>
                <?php
                $jumlah = 0;
                $jumlahBenar = 0;
                $status = json_decode($hasil['nilai_detail'], true);
                //                var_dump($hasil);
                $jawab = json_decode($hasil['jawaban_detail'], true);
                //                var_dump($jawab);
                foreach ($soal as $keys=> $hitung){
                    $jumlah++;
                    if ($status[$keys] == 'benar'){
                        $jumlahBenar++;
                    }
                }
                ?>
                <tr>
                    <td>Nama Dosen : <?= $ujian['nama_dosen'] ?></td>
                    <td>Sub Modul : <?= $ujian['nama_sub_modul'] ?></td>
                </tr>
                <tr>
                    <td>Kelas : <?= $ujian['kelas_ujian'] ?></td>
                    <td>Nilai Minimal :<?= $ujian['nilai_minimal_ujian'] ?></td>
                </tr>
                <tr>
                    <td>Durasi Quiz : <?= $ujian['durasi_ujian'] ?> menit</td>
                    <td>Jumlah Soal : <?=$jumlah?></td>
                </tr>
                <tr>
                    <td>Jumlah Benar :<?=$jumlahBenar?></td>
                    <td>Nilai : <?= $ujian['nilai'] ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h5>Data Hasil</h5>
            </div>
            <div class="col-6">
                <a class="btn btn-success float-right">Tuntas</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered zero-configuration">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Soal</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($soal as $key => $value):
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $value['soal'] ?></td>
                        <td>
                            <?php
                            if ($status[$key] == 'salah'):
                                ?>
                                <label class="btn btn-danger btn-sm" style="cursor: context-menu">Salah</label>
                            <?php
                            elseif ($status[$key] == 'benar'):
                                ?>
                                <label class="btn btn-success btn-sm" style="cursor: context-menu">Benar</label>
                            <?php
                            endif;
                            ?>
                        </td>
                    </tr>
                    <?php
                    $no++;
                endforeach;
                ?>
                </tbody>
            </table>
        </div>
    </div>