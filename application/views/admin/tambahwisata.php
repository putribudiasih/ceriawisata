<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Destinasi Wisata Baru</h1>




    <div class="col-md-6 mb-md-1">
        <form action="<?= base_url('Admin/prosesTambahWisata'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Daerah / trayek</label>
                <input type="text" name="lokasi" class="form-control" value="<?= set_value('lokasi') ?>">
                <div class="error"><?= form_error('Daerah / trayek', '<small class="text-danger pl-3">', '</small>'); ?></div>
            </div>
            <div class="form-group">
                <label>Kode</label>
                <input type="text" name="kode" class="form-control" value="<?= set_value('kode') ?>">
                <div class="error"><?= form_error('Kode', '<small class="text-danger pl-3">', '</small>'); ?></div>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" id="gambar" placeholder="Gambar" required>
                <div class="error"><?= form_error('Gambar', '<small class="text-danger pl-3">', '</small>'); ?></div>
            </div>
            <div class="form-group">
                <label>Destinasi 1</label>
                <input type="text" name="tujuan[]" class="form-control" value="<?= set_value('tujuan') ?>">
                <div class="error"><?= form_error('Destinasi 1', '<small class="text-danger pl-3">', '</small>'); ?></div>
            </div>
            <div class="form-group">
                <label>Destinasi 2</label>
                <input type="text" name="tujuan[]" class="form-control" value="<?= set_value('tujuan') ?>">
            </div>
            <div class="form-group">
                <label>Destinasi 3</label>
                <input type="text" name="tujuan[]" class="form-control" value="<?= set_value('tujuan') ?>">
            </div>
            <div class="form-group">
                <label>Destinasi 4</label>
                <input type="text" name="tujuan[]" class="form-control" value="<?= set_value('tujuan') ?>">
            </div>
            <div class="form-group">
                <label>Destinasi 5</label>
                <input type="text" name="tujuan[]" class="form-control" value="<?= set_value('tujuan') ?>">
            </div>


            <div class="mb-md-5">
                <center><button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </center>
            </div>

        </form>
    </div>


</div>


</div>
<!-- End of Main Content -->