<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Pesanan Paket Wisata</h1>

    <!-- Detail Pesanan -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Detail Pesanan</h6>
        </div>
    </div>
    <!-- 
    <div class="row">
        <div class="col-md-6"> -->
    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Detail Pesanan</h6>
                </div> -->
        <div class="card-body">
            <div class="card-block">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <b style="font-weight: 800;">Identitas Pemesan</b><br>
                    </div>
                    <?php if ($detail_pesanan['keterangan'] == 1) { ?>
                        <div class="col-md-6 text-right">
                            Status Pemesanan : <b style="font-weight: 800; color:#2ecc71;">Aktif</b><br>
                        </div>
                    <?php } ?>
                    <?php if ($detail_pesanan['keterangan'] == 0) { ?>
                        <div class="col-md-6 text-right">
                            Status Pemesanan : <b style="font-weight: 800; color:#e74c3c;">Tidak Aktif</b><br>
                        </div>
                    <?php } ?>
                </div>

                <hr>
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
                        <label>No.HP</label>
                    </div>
                    <div class="col-md-8">
                        <p>: <?= $detail_pesanan['telp_pemesan'] ?></p>
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
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Detail Pesanan</h6>
                </div> -->
        <div class="card-body">
            <div class="card-block">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <b style="font-weight: 800;">Destinasi</b><br>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <label for="penjemputan">Titik Penjemputan</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-home"></i></span>
                            <input type="text" class="form-control" name="penjemputan" aria-describedby="basic-addon1" value="<?= $detail_pesanan['lokasi_berangkat'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Tujuan</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-car"></i></span>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?= $detail_pesanan['lokasi'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Total Harga</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?= number_format($detail_pesanan['total_harga']) ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label>Tanggal Mulai</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-plus"></i></span>
                            <input type="text" class="form-control" name="penjemputan" aria-describedby="basic-addon1" value="<?= $detail_pesanan['tgl_mulai'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Tanggal Selesai</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-check"></i></span>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?= $detail_pesanan['tgl_selesai'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Jumlah Pax</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?= $detail_pesanan['jml_pax'] ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Detail Pesanan</h6>
                </div> -->

    </div>

    <div class="mb-md-5">
        <center>
            <a href="<?= base_url('admin/tambahjadwal/') . $detail_pesanan['id_pesanan'] ?>" class="btn btn-primary py-2 px-4">Tambah Jadwal</a>
    </div>
    </center>



    <!-- </div>
    </div> -->

</div>
</div>