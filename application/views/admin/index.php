<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Pesanan Paket Wisata</h1>

	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">No.</th>
				<th scope="col">Nama</th>
				<th scope="col">Trayek</th>
				<th scope="col">Tanggal Kegiatan</th>
				<th scope="col">Action</th>
				<th scope="col">Keterangan</th>
			</tr>
		</thead>

		<tbody>
			<?php $no = 1; ?>
			<?php foreach ($data_pesanan as $d) { ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $d['nama_pemesan'] ?></td>
					<td><?= $d['trayek'] ?></td>
					<td><?= $d['tgl_mulai'] ?></td>
					<td>
						<a href="<?= base_url('admin/detailpesanan/') . $d['id_pesanan'] ?>" class="badge badge-warning"><i class="fas fa-search-plus"></i></a>
						<a href="<?= base_url('Admin/hapusPesanan/' . $d['id_pesanan']); ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
						<a href="javascript:void(0)" onclick="edit('<?= $d['id_pesanan'] ?>')" data-bs-toggle="modal" data-bs-target="#Modal" class="badge badge-success"><i class="fas fa-edit"></i></a>
					</td>
					<td>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="status" name="status" <?= $d['keterangan'] == '1' ? 'checked' : '' ?> onchange="if(this.checked){setStatusDatPesanan(1,'<?= $d['id_pesanan'] ?>')}else{setStatusDatPesanan(0,'<?= $d['id_pesanan'] ?>')}">
						</div>
					</td>
				</tr>
			<?php } ?>
		</tbody>

	</table>



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
			<form action="<?= base_url('Admin/editPesanan'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="hidden" name="id_pesanan" id="id_pesanan">
						<label>Nama Pemesan</label>
						<input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
						<br />
						<label>Email Pemesan</label>
						<input type="text" class="form-control" id="email_pemesan" name="email_pemesan">
						<br />
						<label>No. HP Pemesan</label>
						<input type="text" class="form-control" id="telp_pemesan" name="telp_pemesan">
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

<!-- <script src="<?= base_url('vendor_temp/sbadmin2/js/sb-admin-2.min.js') ?>"></script> -->
<script src="<?= base_url('vendor_temp/jquery/jquery.min.js') ?>"></script>
<script type="text/javascript">
	function setStatusDatPesanan(status, id) {
		$.ajax({
			url: 'admin/updateStatus',
			method: 'POST',
			data: {
				id_pesanan: id,
				status: status
			},
			cache: false,
			dataType: 'html',
			success: function(data) {

			},
		});
	}

	function edit(id) {
		$('#Modal').modal('show');
		$.ajax({
			url: "<?= site_url('Admin/ambilPesanan') ?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data) {
				var i;
				for (i = 0; i < data.length; i++) {
					$('#id_pesanan').val(data[i].id_pesanan);
					$('#nama_pemesan').val(data[i].nama_pemesan);
					$('#email_pemesan').val(data[i].email_pemesan);
					$('#telp_pemesan').val(data[i].telp_pemesan);
				}
			}
		});
	}
</script>