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
					<td><?= $d['nama'] ?></td>
					<td><?= $d['trayek'] ?></td>
					<td><?= $d['tgl_mulai'] ?></td>
					<td>
						<a href="<?= base_url('admin/detailpesanan/') . $d['id_pesanan'] ?>" class="badge badge-warning"><i class="fas fa-search-plus"></i></a>
						<a href="<?= base_url('Admin/hapusPesanan/' . $d['id_pesanan']); ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
						<a href="" class="badge badge-success"><i class="fas fa-edit"></i></a>
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
</script>