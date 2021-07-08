<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Pemesanan Paket Wisata</h1>




    <form action="<?= base_url('User/inputpesanan'); ?>" method="post">
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
                    <hr />
                    <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="penjemputan">Titik Penjemputan</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-home"></i></span>
                                <input type="text" class="form-control" name="lokasi_berangkat" aria-describedby="basic-addon1" placeholder="Masukkan Titik Penjemputan" required>
                                <!-- <div class="error"><?= form_error('Lokasi Berangkat', '<small class="text-danger pl-3">', '</small>'); ?></div> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Tujuan</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-car"></i></span>
                                <select class="form-control" aria-describedby="basic-addon1" name="trayek" id="trayek" required>
                                    <option selected disabled>Pilih Daerah Tujuan</option>
                                    <?php foreach ($trayek as $key) : ?>
                                        <option value="<?= $key['kode']; ?>"><?= $key['lokasi']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Tanggal Mulai</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-plus"></i></span>
                            <input type="date" class="form-control" name="tgl_mulai" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Tanggal Selesai</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-check"></i></span>
                            <input type="date" class="form-control" name="tgl_selesai" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Jumlah Pax</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" name="jml_pax" aria-describedby="basic-addon1" placeholder="Masukkan Jumlah Penumpang" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--    <div class="card shadow mb-4">
             <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Detail Pesanan</h6>
                </div> -->
    <!--        <div class="card-body">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <b style="font-weight: 800;">Catatan Pemesanan</b><br>
                        </div>
                    </div>

                    <hr>
                    <textarea class="form-control" name="catatan" placeholder="Masukkan Catatan Yang Mungkin Ingin Anda Masukkan"></textarea>
                </div>
            </div>
        </div> -->
        <div id="destinasi_wrapper" class="row">

        </div>
        <div class="card shadow mt-5">
            <!-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Detail Pesanan</h6>
                </div> -->
            <div class="card-body">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <b style="font-weight: 800;">Destinasi Yang Dipilih</b><br>
                        </div>
                    </div>

                    <hr>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Subtotal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="detail_cart">

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <center class="mt-5">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </center>
    </form>
</div>


</div>
<!-- End of Main Content -->

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var wrapper = $("#destinasi_wrapper")
        $('#trayek').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "<?php echo site_url('User/getDestinasi'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<div class = "col-md-6">' +
                            '<div class="card">' + '<div class="card-body">' + '<h5 class="card-title">' + data[i].tujuan + '</h5>' + '<hr/>' + '<div class="row">' + '<div class="col-md-10">' + '<p class="card-text">' + data[i].harga + '</p>' + '</div>' + '<div class="col-md-2">' + '<a href="javascript:void(0)" onclick="addcart(' + data[i].id_tempat + ',' + "'" + data[i].tujuan + "'" + ',' + "'" + data[i].harga + "'" + ')" class="btn btn-primary btn-sm">' + '<i class="fas fa-check"></i>' + '</a>' + '</div>' + '</div>' + '</div>' + '</div>' + '</div>';
                    }
                    $(wrapper).html(html);
                    // console.log(html);
                }
            });
        });
    });

    function addcart(id_tempat, nama_tempat, harga_tempat) {
        $.ajax({
            url: "<?= base_url('User/tambahCart') ?>",
            method: "POST",
            data: {
                id_tempat: id_tempat,
                nama_tempat: nama_tempat,
                harga_tempat: harga_tempat
            },
            success: function(data) {
                $('#detail_cart').html(data);
            }
        });
    }

    $('#detail_cart').load("<?= base_url('User/loadCart'); ?>");

    $(document).on('click', '.hapus_cart', function() {
        var row_id = $(this).attr("id"); //mengambil row_id dari artibut id
        $.ajax({
            url: "<?= base_url('User/hapusCart'); ?>",
            method: "POST",
            data: {
                row_id: row_id
            },
            success: function(data) {
                $('#detail_cart').html(data);
            }
        });
    });
</script>