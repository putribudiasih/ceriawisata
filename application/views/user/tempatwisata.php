<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Tujuan Tempat Wisata</h1>

    <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Paket Wisata <?= $trayek['lokasi'] ?></h6>
        </div>
    </div>

    <div class="row">
        <?php foreach ($tempat as $t) { ?>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?= base_url('assets/img/Destinasi/') . $t['gambar'] ?>" class="img-fluid rounded-start">
                                    </div>
                                    <div class="col-md-8">
                                        <td>
                                            <h5 class="card-title"><?= $t['tujuan']; ?></h5>
                                            <hr />
                                            <p><?= $t['deskripsi'] ?></p>
                                        </td>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>

</div>


</div>
<!-- End of Main Content -->