<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pesanan Paket Wisata</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Trayek</th>
                <th scope="col">Tanggal Kegiatan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_pesanan as $d) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['nama'] ?></td>
                    <td><?= $d['trayek'] ?></td>
                    <td><?= $d['tgl_mulai'] ?></td>
                    <td>
                        <a href="<?= base_url('User/detailjadwal/') . $d['id_pesanan'] ?>" class="badge badge-warning">Jadwal</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>



</div>


</div>
<!-- End of Main Content
 -->