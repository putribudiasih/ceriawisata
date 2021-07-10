<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Paket Wisata</h1>


  <section class="ftco-section">
    <div class="container">

      <div class="row">
        <?php
        foreach ($trayek as $ty) :
        ?>
          <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <td>
                    <img src="<?= base_url('assets/img/') . $ty['gambar']; ?>" class="card-img">
                  </td>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <td>
                      <h5 class="card-title"><?= $ty['lokasi']; ?></h5>
                    </td>
                    <a href="<?= base_url('admin/tempatwisata/') . $ty['kode']; ?>" class="btn btn-primary">Lihat</a>
                    <a href="<?= base_url('Admin/hapusPaket/' . $ty['id']); ?>" class="btn btn-danger">Hapus</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        <?php
        endforeach;
        ?>

      </div>


      <left>
        <div class="form-group">
          <a href="<?= base_url('admin/tambahwisata/') ?>" class="btn btn-secondary py-2 px-4">Tambah Baru</a>
        </div>
      </left>

    </div>
  </section>



</div>


</div>
<!-- End of Main Content -->