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
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="<?= base_url('assets/img/Destinasi/') . $ty['gambar'] ?>" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?= $ty['lokasi'] ?></h5>
                    <hr />
                    <p class="card-text"><?= $ty['deskripsi'] ?></p>
                    <p class="card-text">
                      <a href="<?= base_url('User/tempatwisata/') . $ty['kode']; ?>" class="btn btn-sm btn-primary">Lihat</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php
        endforeach;
        ?>

      </div>

    </div>
  </section>



</div>


</div>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newRoleModalLabel">Edit Tempat Wisata</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Admin/editLokasi'); ?>" enctype="multipart/form-data" method="post">
        <div class="modal-body">
          <div class="row mx-auto">
            <div class="col-md-4 my-auto" id="preview">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7">
              <div class="form-group">
                <!-- <input type="hidden" name="kode" id="kode"> -->
                <input type="hidden" id="id_trayek" name="id_trayek">
                <label>Kode Lokasi</label>
                <input type="text" class="form-control" id="kode_lokasi" name="kode_lokasi">
                <br />
                <label>Nama Lokasi</label>
                <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi">
                <br />
                <label>Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                <br />
                <label>Gambar</label>
                <input type="hidden" name="image1" id="image1">
                <input type="file" class="form-control" id="image" name="image">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
  function coba(id) {
    $('#Modal').modal('show');
    $.ajax({
      url: "<?= site_url('Admin/getDetailLokasi') ?>/" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data) {
        var i;
        for (i = 0; i < data.length; i++) {
          $('#id_trayek').val(data[i].id);
          $('#kode_lokasi').val(data[i].kode);
          $('#nama_lokasi').val(data[i].lokasi);
          $('#deskripsi').val(data[i].deskripsi);
          $('#old_file').val(data[i].image1);
          $("#preview").html("<img src='<?= base_url(); ?>/assets/img/Destinasi" + data[i].gambar + "' style='width: 250px;'>");
          // $('#nama_tempat').val(data[i].gambar);
        }
      }
    });
  }
</script>

<!-- End of Main Content -->