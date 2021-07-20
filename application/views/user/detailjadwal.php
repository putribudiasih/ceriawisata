<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Paket Wisata</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Jadwal Kegiatan</h6>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="card-block">
                <div class="col-md-6 text-left">
                    <b style="font-weight: 800;">Identitas Pemesan</b><br>
                </div>
                <hr />
                <input type="hidden" name="id_pesanan" value="<?= $detail_pesanan['id_pesanan'] ?>">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Nama</label>
                            </div>
                            <div class="col-md-8">
                                <p>: <?= $detail_pesanan['nama_pemesan'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Email</label>
                            </div>
                            <div class="col-md-8">
                                <p>: <?= $detail_pesanan['email_pemesan'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>No. HP</label>
                            </div>
                            <div class="col-md-8">
                                <p>: <?= $detail_pesanan['telp_pemesan'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Lokasi Berangkat</label>
                            </div>
                            <div class="col-md-8">
                                <p>: <?= $detail_pesanan['lokasi_berangkat'] ?></p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Jumlah Tumpangan</label>
                            </div>
                            <div class="col-md-8">
                                <p>: <?= $detail_pesanan['jml_pax'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Tanggal Berangkat</label>
                            </div>
                            <div class="col-md-8">
                                <p>:
                                    <?php
                                    $orgDate = $detail_pesanan['tgl_mulai'];
                                    echo $newDate = date("d/m/Y", strtotime($orgDate));
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Tanggal Pulang</label>
                            </div>
                            <div class="col-md-8">
                                <p>: <?php
                                        $orgDate = $detail_pesanan['tgl_selesai'];
                                        echo $newDate = date("d/m/Y", strtotime($orgDate));
                                        ?>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="card-block">
                <div class="col-md-6 text-left">
                    <b style="font-weight: 800;">Daftar Kegiatan</b><br>
                    Destinasi Wisata : <b style="font-weight: 800;"><?= $detail_pesanan['lokasi'] ?></b><br>
                </div>
                <hr />
                <table class="table table-striped table-hover">
                    <p>Tujuan tempat wisata yang dipilih :</p>
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tempat Wisata</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu Kegiatan</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data_jadwal as $d) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $d['tujuan'] ?></td>
                                <td>
                                    <?php
                                    $orgDate = $d['tanggal'];
                                    echo $newDate = date("d/m/Y", strtotime($orgDate));
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $berangkat = $d['waktu_berangkat'];
                                    $pulang = $d['waktu_pulang'];
                                    echo ' ' . date('H:i', strtotime($berangkat)) . ' s/d ' . date('H:i', strtotime($pulang)) . ' ';
                                    ?>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>