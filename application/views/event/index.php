<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Event</title>
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<style>
			body {
				font-family: 'Poppins', Arial, sans-serif;
			}
		</style>
	</head>
	<body style="background-color: #343a40">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 pb-2">
			<div class="container-fluid">
				<img src="<?= base_url('assets/img'); ?>/gambar/gettix.png" alt="gambarget" width="180px" height="70px">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto justify-content-between">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?= base_url('event'); ?>">Beranda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Event</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
					</ul>
					<form class="d-flex">
						<a href="<?= base_url('user'); ?>" class="text-light me-2 btn btn-outline-light hover-dark" type="submit"><i class="fa-solid fa-user"></i></a>
					</form>
				</div>
			</div>
		</nav>
			
		<!-- start carousel -->
		<div id="carouselExampleIndicators" class="carousel slide mb-4">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active p-1 bg-gradient-light">
				<img src="<?= base_url('assets/img/gambar/guton.jpg'); ?>" class="d-block img-fluid rounded bg-light shadow-lg " style="object-fit: cover; margin: 0 auto;" alt="..." >
				</div>
				<div class="carousel-item">
				<img src="<?= base_url('assets/img/gambar/guton.jpg'); ?>" class="d-block img-fluid rounded bg-light shadow-lg " style="object-fit: cover; margin: 0 auto;" alt="..." >
				</div>
				<div class="carousel-item">
				<img src="<?= base_url('assets/img/gambar/guton.jpg'); ?>" class="d-block img-fluid rounded bg-light shadow-lg " style="object-fit: cover; margin: 0 auto;" alt="..." >
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<!-- end carousel -->
		<!-- Search  -->
		<div class="container-fluid mb-3">
			<form class="d-flex justify-content-center">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 1000px;" />
				<button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
			</form>
		</div>
<!-- end search -->
		<div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner p-3">
				<?php
				$active = true; // Menentukan slide pertama sebagai aktif
				foreach ($event as $e) { // Loop melalui array data event
					$gambar = $e['gambar_event']; // Kolom gambar
					$nama = $e['nama_event']; // Kolom nama event
					$deskripsi = $e['deskripsi']; // Kolom deskripsi
				?>
					<div class="carousel-item <?= $active ? 'active' : '' ?>">
						<div class="row row-cols-1 row-cols-md-3 g-4">
							<div class="col-4 col-md-4 col-sm-3">
								<div class="card h-100">
									<img src="<?= base_url('uploads/events/' . $gambar); ?>" class="card-img-top p-1 rounded bg-light" alt="<?= $nama ?>" />
									<div class="card-body">
										<h5 class="card-title"><?= $nama ?></h5>
										<p class="card-text"><?= $deskripsi ?></p>
									</div>
									<div class="card-footer">
										<button class="btn btn-warning col-sm-12">Beli Sekarang</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
					$active = false; // Slide berikutnya tidak aktif
				}
				?>
			</div>

			<!-- Button Next and Prev -->
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

<!-- cara beli tiket -->
		<div class="container text-center my-5">
			<h2 class="fw-bold text-light ">Cara Beli Tiket</h2>
			<p class="text-light">Sekarang beli tiket online gak perlu ribet</p>
			<div class="row text-center mt-5">
				<div class="col-md-3 ">
					<i class="fas fa-user-plus fa-2x text-primary"></i>
					<h5 class="mt-3 text-light">Registrasi Akun</h5>
					<p class="text-light">Daftarkan akun anda untuk pembelian tiket</p>
				</div>
				<div class="col-md-3">
					<i class="fas fa-calendar-alt fa-2x text-primary"></i>
					<h5 class="mt-3 text-light">Pilih Event</h5>
					<p class="text-light">Pilih event dan tiket yang akan kamu beli</p>
				</div>
				<div class="col-md-3">
					<i class="fas fa-credit-card fa-2x text-primary"></i>
					<h5 class="mt-3 text-light">Pembayaran</h5>
					<p class="text-light">Pilih tipe pembayaran yang telah kami sediakan</p>
				</div>
				<div class="col-md-3">
					<i class="fas fa-envelope fa-2x text-primary"></i>
					<h5 class="mt-3 text-light">Pembelian Selesai</h5>
					<p class="text-light">E-Tiket telah dikirimkan ke email & akun event kamu</p>
				</div>
			</div>
		</div>

		<footer class="bg-dark d-flex justify-content-center p-10">
			<div>
				<img src="<?= base_url('assets/img'); ?>/gambar/gettix.png" alt="Gettix Logo" style="width: 200px;
				height: 70px;">
			</div>
		</footer>

		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
			integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
			crossorigin="anonymous" >
		</script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
			integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
			crossorigin="anonymous"
		></script>
	</body>
</html>
