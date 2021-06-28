<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Jadwal Kegiatan Wisata</h1>
    <div class="text-right">
        <button class="btn btn-sm btn-primary add_field_button"><i class="fas fa-plus"></i> Tambah Jadwal</button>
    </div>
    <br />

    <form method="POST" action="<?= base_url('Admin/submitJadwal') ?>">
        <input type="hidden" id="#jumlah" value="<?= $jumlah_wisata ?>">
        <input type="hidden" id="#id_pesanan" name="id_pesanan" value="<?= $detail_pesanan['id_pesanan'] ?>">
        <div class="input_jam">
            <div class="row">
                <div class="col-md-3">
                    <label>Pilih Destinasi</label>
                    <select name="wisata[]" id="wisata" class="form-control" required="">
                        <option selected disabled>Pilih Wisata 1</option>
                        <?php foreach ($daftarWisata as $dw) { ?>
                            <option value="<?= $dw['id_tempat'] ?>"><?= $dw['tujuan'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Waktu Berangkat</label>
                    <input type="time" name="berangkat[]" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Waktu Pulang</label>
                    <input type="time" name="pulang[]" class="form-control">
                </div>
            </div>
        </div>
        <button class="btn btn-primary mt-5" type="submit">Submit</button>
    </form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    var jumlah = document.getElementById('#jumlah').value;
    // console.log(jumlah);

    // console.log(jumlah_wisata('<?= $detail_pesanan['id_pesanan'] ?>'));

    // function jumlah_wisata(id) {
    // $.ajax({
    //     url: "<?= site_url('Admin/jumlah_wisata/') ?>/" + id,
    //     type: "GET",
    //     dataType: "JSON",
    //     success: function(data) {
    //         alert('success');
    //     },
    //     error: function(jqXHR, textStatus, errorThrown) {
    //         alert('Error get data from ajax');
    //     }
    // });
    // }

    $(document).ready(function() {
        var id_pesanan = document.getElementById('#id_pesanan').value;
        // console.log(id);
        var max_fields = jumlah; //maximum input boxes allowed
        var wrapper = $(".input_jam"); //Fields wrapper
        var add_button = $(".add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box incrementno
                $(wrapper).append('<div class="row mt-5">' + '<div class = "col-md-3">' +
                    '<select name="wisata[]" class="form-control" required="" id="wisata' + x + '">' + '<option selected disabled>Pilih Wisata ' + x + '</option>' + '' + '</select>' + '</div>' + '<div class = "col-md-3">' + '<input type="time" name="berangkat[]" class="form-control">' + '</div>' + '<div class = "col-md-3">' + '<input type="time" name="pulang[]" class="form-control">' + '</div>' +
                    '<a href="#" class="remove_field">Hapus</a>' + '</div>'); //add input box

                var html = '';
                $.ajax({
                    url: "<?= site_url('Admin/getWisata/') ?>/" + id_pesanan,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        // $.each(data, function(index, value) {
                        var html = '';
                        var i;
                        html += '<option value="" selected>Pilih Wisata ' + x + '</option>';
                        for (i = 0; i < data.length; i++) {
                            html += "<option value=" + data[i].id_tempat + '>' + data[i].tujuan + "</option>'+'";
                        }
                        console.log(html);
                        $('#wisata' + x).html(html);
                        // console.log('wisata' + x);
                        // });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error get data from ajax');
                    }
                });


            }
        });
        $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
</script>