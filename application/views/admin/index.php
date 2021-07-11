<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Pesanan Paket Wisata</h1>

	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">No.</th>
				<th scope="col">Nama</th>
				<th scope="col">Kode Trayek</th>
				<th scope="col">Tanggal Mulai</th>
				<th scope="col">Tanggal Selesai</th>
				<th scope="col">Aksi</th>
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
					<td><?php $orgDate = $d['tgl_mulai'];
						echo $newDate = date("d/m/Y", strtotime($orgDate)); ?></td>
					<td><?php $orgDate = $d['tgl_selesai'];
						echo $newDate = date("d/m/Y", strtotime($orgDate)); ?></td>
					<td>
						<abbr title="Lihat Selengkapnya"> <a href="<?= base_url('admin/detailpesanan/') . $d['id_pesanan'] ?>" class="btn btn-primary"><i class="fas fa-search-plus"></i></a> </abbr>
						<abbr title="Edit"> <a href="" class="btn btn-success"><i class="fas fa-edit"></i></a></abbr>
						<abbr title="Hapus"><a href="<?= base_url('Admin/hapusPesanan/' . $d['id_pesanan']); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></abbr>

					</td>
					<td>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="status" name="status" onclick="myFunction()" <?= $d['keterangan'] == '1' ? 'checked' : '' ?> onchange=" if(this.checked){setStatusDatPesanan(1,'<?= $d['id_pesanan'] ?>')}else{setStatusDatPesanan(0,'<?= $d['id_pesanan'] ?>')}">
							<p id="online" style="display:none">Aktif</p>
							<p id="offline" style="display:block">Tidak Aktif</p>

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
	function myFunction() {
		var checkBox = document.getElementById("status");
		var online = document.getElementById("online");
		var offline = document.getElementById("offline");

		if (checkBox.checked == true) {
			online.style.display = "block";
			offline.style.display = "none";
		} else {
			online.style.display = "none";
			offline.style.display = "block";
		}
	}

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