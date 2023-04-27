<!DOCTYPE html>
<html>
<head>
	<title>Website Gereja</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg  fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Gereja XYZ</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav me-auto">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/layanan">Layanan</a>
					</li>
				</ul>
				
			</div>
		</div>
	</nav>

	<!-- Konten -->
	<div class="container mt-5" style="padding-top: 60px;">
		<?= $this->renderSection('content') ?>
	</div>

	<!-- Load Bootstrap JS -->
	<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('js/styles.js') ?>"></script>
</body>
</html>