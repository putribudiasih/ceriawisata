<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Daftar Tujuan Tempat Wisata</h1>



	<div class="card" style="width: 18rem;">
		<img src="<?= base_url('assets/img/') . $trayek['gambar']; ?>" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title"><?= $trayek['lokasi']; ?></h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		</div>
		<ul class="list-group list-group-flush">
			<?php foreach ($tempat as $t) : ?>
				<li class="list-group-item"><?= $t['tujuan'] ?></li>
			<?php endforeach; ?>
		</ul>
	</div>

</div>


</div>
<!-- End of Main Content -->