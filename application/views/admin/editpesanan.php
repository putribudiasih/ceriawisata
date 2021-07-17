<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Pesanan Paket Wisata</h1>


	<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newRoleModalLabel">Edit Pesanan Paket wisata</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('Admin/editPesanan'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="hidden" name="id_pesanan" id="id_pesanan">
						<input type="hidden" id="id_user" name="id_user">
						<label>Nama Pemesan</label>
						<input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
						<br />
						<label>No. HP</label>
						<input type="text" class="form-control" id="telp_pemesan" name="telp_pemesan">
						<br />
						<label>Email</label>
						<input type="text" class="form-control" id="email_pemesan" name="email_pemesan">
						<br />
						<label>Titik Penjemputan</label>
						<input type="text" class="form-control" id="lokasi_berangkat" name="lokasi_berangkat">
						<br />
						<label>Tujuan</label>
						<input type="text" class="form-control" id="trayek" name="trayek">
						<br />
						<label>Tanggal Mulai</label>
						<input type="text" class="form-control" id="tgl_mulai" name="tgl_mulai">
						<br />
						<label>Tanggal Selesai</label>
						<input type="text" class="form-control" id="tgl_selesai" name="tgl_selesai">
						<br />
						<label>Jumlah Pax</label>
						<input type="text" class="form-control" id="jml_pax" name="jml_pax">
						
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
			url: "<?= site_url('Admin/getDetailWisata') ?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data) {
				var i;
				for (i = 0; i < data.length; i++) {
					$('#kode').val(data[i].kode);
					$('#id_tempat').val(data[i].id_tempat);
					$('#nama_tempat').val(data[i].tujuan);
					$('#harga_tempat').val(data[i].harga);
				}
			}
		});
	}
</script>