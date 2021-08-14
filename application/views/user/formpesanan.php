<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Pemesanan Paket Wisata</h1>

    <?= $this->session->flashdata('msg'); ?>


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
                    <input type="hidden" name="total" id="total">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nama">Nama</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-id-card"></i></span>
                                <input type="text" name="nama" class="form-control" aria-describedby="basic-addon1" placeholder="Masukkan Nama" value="<?= set_value('nama') ?>" required>
                                <?= form_error('Nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                                <input type="email" name="email" class="form-control" aria-describedby="basic-addon1" placeholder="Masukkan email" required>
                                <?= form_error('Email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <label for="no_telp">No Telp.</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-address-book"></i></span>
                                <input type="text" name="no_telp" class="form-control" aria-describedby="basic-addon1" placeholder="Masukkan No Telp." required>
                                <?= form_error('Nomor Telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                        </div>


                        <div class="col-md-6">
                            <label for="penjemputan">Titik Penjemputan</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-home"></i></span>
                                <input type="text" class="form-control" name="lokasi_berangkat" aria-describedby="basic-addon1" placeholder="Masukkan Titik Penjemputan" required>
                                <!-- <div class="error"><?= form_error('Lokasi Berangkat', '<small class="text-danger pl-3">', '</small>'); ?></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <label>Tujuan</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-map"></i></span>
                    <select class="form-control" aria-describedby="basic-addon1" name="trayek" id="trayek" required>
                        <option selected disabled>Pilih Daerah Tujuan</option>
                        <?php foreach ($trayek as $key) : ?>
                            <option value="<?= $key['kode']; ?>"><?= $key['lokasi']; ?></option>
                        <?php endforeach; ?>
                    </select>
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
                            <input type="text" class="form-control" name="jml_pax" id="jml_pax" aria-describedby="basic-addon1" placeholder="Masukkan Jumlah Penumpang" required>
                        </div>
                    </div>
                </div>
                <span class="text-danger">
                    <p>* Biaya berlaku untuk hitungan normal 3d2n, jika lebih akan ada tambahan biaya!</p>
                </span>
                <div id="bali">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Kendaraan</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-car"></i></span>
                                <select class="form-control" aria-describedby="basic-addon1" name="kendaraan" id="kendaraan">
                                    <option selected disabled>Pilih Kendaraan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Hotel</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-bed"></i></span>
                                <select class="form-control" aria-describedby="basic-addon1" name="hotel" id="hotel">
                                    <option selected disabled>Pilih Hotel</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Harga Per Orang</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-male"></i></span>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name="hargaperorang" id="hargaperorang" readonly>
                            </div>
                        </div>
                    </div>
                    <label>Total Harga</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>
                        <input type="text" class="form-control" name="total_harga" id="total_harga" aria-describedby="basic-addon1" readonly>
                    </div>
                </div>
                <div id="fasilitas">

                </div>
            </div>
        </div>


        <!-- Fasilitas -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <b style="font-weight: 800;">Fasilitas</b><br>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <p>1. Executive Bus Pariwisata AC, 2LCD, DVD, Karaoke, Reclining seat formasi 2 - 2</p>
                        <p>2. Menginap 2 malam di Hotel Area Kuta (sekamar berdua )</p>
                        <p>3. Makan disajikan sebanyak 8 (Delapan ) kali Full Buffet</p>
                        <p>4. Snack disajikan 1 (satu ) kali pada saat pemberangkatan dari Pasuruan</p>
                        <p>5. AQUA 600ml kami siapkan dalam bis</p>
                        <p>6. YOU-C 100 pada hari pertama saat di Bali dan POCARI SWEAT dihari kedua</p>
                        <p>7. Romantic Dinner Jimbaran ( Sea Food Menu + Kepiting & Kelapa Muda )</p>
                        <p>8. Entertainment ( Sound system, Electone dan 1 Singer )</p>
                    </div>
                    <div class="col-md-6">
                        <p>9. Surprise untuk peserta yang lagi merayakan Ultah / Ultah Perkawinan</p>
                        <p>10. Asuransi Jiwa dari Perusahaan Asuransi Jiwa Jasa Raharja</p>
                        <p>11. Tour Leader dan Guide Lokal Bali dari CERIA WISATA T&T</p>
                        <p>12. Spanduk wisata dari CERIA WISATA T&T.</p>
                        <p>13. Perlengkapan PPPK dan obat-obatan ringan.</p>
                        <p>14. Biaya Reseruasl ( Biaya konfirmasi pemesanan transportasi, hotel, restauran dil)</p>
                        <p>15. Donasi (Tips, makan & penginapan Crew Bus, Tips Guide, Parkir, Retribusi dl1)</p>
                    </div>
                </div>
                <hr />
                <label>Catatan Untuk Makanan</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-clipboard"></i></span>
                    <textarea class="form-control" name="catatan" id="catatan" aria-describedby="basic-addon1"></textarea>
                </div>
            </div>
        </div>

        <!-- Destinasi wisata -->

        <div class="card shadow mb-4" id="destinasi">
            <div class="card-body">
                <b style="font-weight: 800;">Checkout Harga</b><br>
                <hr>
                <span class="text-danger">
                    <p>* Maksimal 5 Destinasi Yang Dapat Dipilih!</p>
                </span>
                <div class="row">
                    <div class="col" style="max-width: 400px;">
                        <div class="card">

                            <div class="card-body">
                                <div class="" style=" box-shadow: 0 6px 6px -6px black;">
                                    <h5 class="card-title mx-0" style="padding-bottom: 0px;">Pilih Destinasi Anda :</h5>
                                    <hr>
                                </div>

                                <div id="destinasi_wrapper" style="overflow: scroll; height: 600px; ">
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="col">
                        <div class="card mt-5">
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <b style="font-weight: 800;">Detail Pemesanan Anda</b><br>
                                        </div>
                                    </div>

                                    <hr>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th colspan="3">Destinasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="detail_cart">

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- asdklsdlaldklasd -->




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
    // $('#hotel').hide();

    // function pilih(id) {
    //     $('#check' + id).html('<i class="fas fa-check"></i>');
    //     document.getElementById("tombol").setAttribute("disabled", "disabled");
    // }

    $(document).ready(function() {
        var wrapper = $("#destinasi_wrapper")
        $('#kendaraan').change(function() {
            var id = $(this).val();

            $.ajax({
                url: "<?php echo site_url('User/getHotel'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    html += "<option selected disabled>Pilih Hotel</option>"
                    for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].kode_hotel + '">' + data[i].nama_hotel;
                    }
                    $('#hotel').html(html);
                }
            });
        });

        $('#hotel').change(function() {
            var kode_hotel = $(this).val();

            $.ajax({
                url: "<?php echo site_url('User/getHarga'); ?>",
                method: "POST",
                data: {
                    kode_hotel: kode_hotel
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    var harga = data.harga;
                    var jml_pax = $('#jml_pax').val();
                    var total_harga = harga * jml_pax;
                    $('#hargaperorang').val(new Intl.NumberFormat("id-ID", {
                        style: "currency",
                        currency: "IDR"
                    }).format(harga));
                    $('#total').val(total_harga);
                    $('#total_harga').val(new Intl.NumberFormat("id-ID", {
                        style: "currency",
                        currency: "IDR"
                    }).format(total_harga));
                    console.log(data);
                }
            });
        });

        $('#jml_pax').change(function() {
            var kapasitas = $(this).val();
            $.ajax({
                url: "<?php echo site_url('User/getKendaraan'); ?>",
                method: "POST",
                data: {
                    kapasitas: kapasitas
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    html += "<option selected disabled>Pilih Kendaraan</option>"
                    for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].kode_kendaraan + '">' + data[i].nama_kendaraan + ' - ' + data[i].kapasitas + ' Orang</option>';
                    }
                    $('#kendaraan').html(html);
                }
            });
        });

        // function getKendaraan(kapasitas) {
        //     $.ajax({
        //         url: "<?php echo site_url('User/getKendaraan'); ?>",
        //         method: "POST",
        //         data: {
        //             kapasitas: kapasitas
        //         },
        //         async: true,
        //         dataType: 'json',
        //         success: function(data) {
        //             console.log(data);
        //         }
        //     })
        // }

        $('#trayek').change(function() {
            var id = $(this).val();
            // if (id == 'bl') {
            //     $('#bali').show();
            //     // $('#destinasi').hide();
            // } else {
            //     $('#bali').hide();
            // }

            $.ajax({
                url: "<?= base_url('User/resetCart'); ?>",
                success: function(data) {
                    $('#detail_cart').html(data);
                }
            });
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
                        html +=

                            '<div class="col">' +
                            '<div class="card my-2">' +
                            '<div class="card-body">' +

                            '<div class="row">' +

                            '<div class="col-md-6">' +
                            '<h5 class="card-title">' +
                            data[i].tujuan +
                            '</h5>' +
                            '</div>' +

                            '<div class="col-md-6">' +

                            '<a href="javascript:void(0)" onclick="addcart(' + data[i].id_tempat + ',' + "'" + data[i].tujuan + "'" + ',' + "'" + data[i].harga + "'" + ')" class="btn btn-outline-primary float-right">' + '<i class="fas fa-plus"></i>' + '</a>' +
                            '</div>' +

                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
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

    $(document).on('click', '.reset_cart', function() {
        $.ajax({
            url: "<?= base_url('User/resetCart'); ?>",
            success: function(data) {
                $('#detail_cart').html(data);
            }
        });
    });
</script>