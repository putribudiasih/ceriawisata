<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Pemesanan Paket Wisata</h1>




    <div class="col-md-6 mb-md-1">
        <form action="<?= base_url('User/inputpesanan'); ?>" method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
                <div class="error"><?= form_error('Nama', '<small class="text-danger pl-3">', '</small>'); ?></div>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
                <div class="error"><?= form_error('Email', '<small class="text-danger pl-3">', '</small>'); ?></div>
            </div>
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" name="no_telp" class="form-control">
                <div class="error"><?= form_error('Nomor Telepon', '<small class="text-danger pl-3">', '</small>'); ?></div>
            </div>
            <div class="form-group">
                <label>Berangkat dari</label>
                <input type="text" name="lokasi_berangkat" class="form-control">
                <div class="error"><?= form_error('Lokasi Berangkat', '<small class="text-danger pl-3">', '</small>'); ?></div>
            </div>
            <div class="form-group">
                <label>Jumlah rombongan</label>
                <input type="text" name="jml_pax" class="form-control">
                <div class="error"><?= form_error('Jumlah rombongan', '<small class="text-danger pl-3">', '</small>'); ?></div>
            </div>
            <div class="form-group">
                <label for="tempat">Tanggal berangkat</label>
                <div class="input-group">
                    <input id="tanggal" type="date" class="form-control" placeholder="tanggal" name="tgl_mulai" autocomplete="off">
                </div>
                <div style="margin-top: 5px" class="error"><?= form_error('Tanggal mulai', '<small class="text-danger">', '</small>'); ?></div>
            </div>
            <div class="form-group">
                <label for="tempat">Tanggal selesai</label>
                <div class="input-group">
                    <input id="tanggal" type="date" class="form-control" placeholder="tanggal" name="tgl_selesai" autocomplete="off">
                </div>
                <div style="margin-top: 5px" class="error"><?= form_error('Tanggal selesai', '<small class="text-danger">', '</small>'); ?></div>
            </div>
            <div class="form-group">
                <label>Trayek/Daerah Tujuan</label>
                <select name="lokasi" id="lokasi" class="form-control">
                        <option selected disabled>Pilih Daerah Tujuan</option>
                        <?php foreach ($datalokasi as $key): ?>
                        <option value="<?= $key['id']; ?><?= $key['lokasi']; ?>"></option>
                <?php endforeach; ?>
                    </select>
                <div class="error"><?= form_error('Trayek/Daerah Tujuan', '<small class="text-danger pl-3">', '</small>'); ?></div>
            </div>
            <div class="form-group">
                <label>Catatan... (bisa menambah atau mengurangi destinasi tempat wisata)</label>
                <input type="text" name="catatan" class="form-control">
            </div>


                <div class="form-group">
                    <center><button type="reset" class= "btn btn-danger">Reset</button>
                        <button type="submit" class= "btn btn-primary">Simpan</button>
                    </center>
                </div>

        </form>
    </div>


</div>


</div>
<!-- End of Main Content -->