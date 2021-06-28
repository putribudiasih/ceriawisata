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
                    <div class="col-md-2">
                        <label>Nama</label>
                    </div>
                    <div class="col-md-8">
                        <p>: <?= $detail_pesanan['nama'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label>Tanggal</label>
                    </div>
                    <div class="col-md-8">
                        <p>: <?= $detail_pesanan['tgl_mulai'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label>Destinasi</label>
                    </div>
                    <div class="col-md-8">
                        <p>: <?= $detail_pesanan['lokasi'] ?></p>
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
                </div>
                <hr />
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tempat Wisata</th>
                            <th scope="col">Waktu Kegiatan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data_jadwal as $d) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $d['tujuan'] ?></td>
                                <td><?= $d['waktu_berangkat'] ?> - <?= $d['waktu_pulang'] ?></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success" title="Edit"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('User/hapusJadwal/' . $d['id_jadwal']); ?>" class="btn btn-sm btn-danger" title="Hapus"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
</div>