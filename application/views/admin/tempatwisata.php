<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Daftar Tujuan Tempat Wisata</h1>



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
								<td>
									<h5 class="card-title"><?= $t['tujuan']; ?></h5>
									<hr />
									<p>Kode Trayek : <?= $t['kode'] ?></p>
									<p>Harga : Rp. <?= number_format($t['harga']) ?></p>
								</td>
								<a href="javascript:void(0)" onclick="coba('<?= $t['id_tempat'] ?>')" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">Edit</a>
								<a href="<?= base_url('Admin/hapusWisata/' . $t['id_tempat']); ?>" class="btn btn-danger">Hapus</a>
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

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newRoleModalLabel">Edit Tempat Wisata</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('Admin/editWisata'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="hidden" name="kode" id="kode">
						<input type="hidden" id="id_tempat" name="id_tempat">
						<label>Nama Tempat</label>
						<input type="text" class="form-control" id="nama_tempat" name="nama_tempat">
						<br />
						<label>Harga Tempat</label>
						<input type="text" class="form-control" id="harga_tempat" name="harga_tempat">
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