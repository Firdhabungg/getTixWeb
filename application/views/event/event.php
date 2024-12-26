<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Event</title>
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
					</ul>
					<form class="d-flex">
						<a href="<?= base_url('user'); ?>" class="text-light me-2 btn btn-outline-light hover-dark" type="submit"><i class="fa-solid fa-user"></i></a>
					</form>
				</div>
			</div>
		</nav>

		<div id="carouselExampleControls" class="carousel slide mb-5" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?= base_url('assets/img'); ?>/gambar/guton.jpg" class="d-block img-fluid p-1 rounded bg-light" alt="gambar1" style="object-fit: cover; margin: 0 auto;">
				</div>
				<div class="carousel-item">
				<img src="<?= base_url('assets/img'); ?>/gambar/romansa.jpg" class="d-block img-fluid p-1 rounded bg-light" alt="gambar2" style="object-fit: cover; margin: 0 auto;">
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('assets/img'); ?>/gambar/fbs.jpg" class="d-block img-fluid p-1 rounded bg-light" alt="gambar3" style="object-fit: cover; margin: 0 auto;">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>


		<div class="container-fluid mb-3">
			<form class="d-flex justify-content-center">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 1000px;" />
				<button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
			</form>
		</div>

		<div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel" >
			<div class="carousel-inner p-3">
				<!-- batas -->
				<div class="carousel-item active">
					<div class="row row-cols-1 row-cols-md-3 g-4">
						<div class="col-4">
							<div class="card h-100">
								<img src="<?= base_url('assets/img'); ?>/gambar/guton.jpg" class="card-img-top p-1 rounded bg-light" alt="event1" />
								<div class="card-body">
									<h5 class="card-title">Nama Event</h5>
									<p class="card-text"> This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								</div>
								<div class="card-footer">
									<button class="btn btn-warning">Beli Sekarang</button>
								</div>
							</div>
						</div>

						<div class="col-4">
							<div class="card h-100"  >
								<img src="<?= base_url('assets/img'); ?>/gambar/fbs.jpg" class="card-img-top p-1 rounded bg-light" alt="event4" />
								<div class="card-body">
									<h5 class="card-title">Nama Event</h5>
									<p class="card-text">
										This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer
										content than the first to show that equal height action.
									</p>
								</div>
								<div class="card-footer">
									<button class="btn btn-warning">Beli Sekarang</button>
								</div>
							</div>
						</div>

						<div class="col-4">
							<div class="card h-100" >
								<img src="<?= base_url('assets/img'); ?>/gambar/romansa.jpg" class="card-img-top p-1 rounded bg-light" alt="event2" />
								<div class="card-body">
									<h5 class="card-title">Nama Event</h5>
									<p class="card-text">
										This card has supporting text below as a natural lead-in to
										additional content.
									</p>
								</div>
								<div class="card-footer">
									<button class="btn btn-warning">Beli Sekarang</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row row-cols-1 row-cols-md-3 g-4">
						<div class="col-4">
							<div class="card h-100" >
								<img src="<?= base_url('assets/img'); ?>/gambar/djarum.png" class="card-img-top p-1 rounded bg-light" alt="event5" />
								<div class="card-body">
									<h5 class="card-title">Nama Event</h5>
									<p class="card-text">
										This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer
										content than the first to show that equal height action.
									</p>
								</div>
								<div class="card-footer">
									<button class="btn btn-warning">Beli Sekarang</button>
								</div>
							</div>
						</div>

						<div class="col-4">
							<div class="card h-100" >
								<img src="<?= base_url('assets/img'); ?>/gambar/runevent.png" class="card-img-top p-1 rounded bg-light" alt="event3" />
								<div class="card-body">
									<h5 class="card-title">Nama Event</h5>
									<p class="card-text">
										This is a wider card with supporting text below as a natural
										lead-in to additional content. This content is a little bit
										longer.
									</p>
								</div>
								<div class="card-footer">
									<button class="btn btn-warning" type="submit"><a href="<?= base_url('event/detail_event') ?>">Beli Sekarang</a></button>
								</div>
							</div>
						</div>

						<div class="col-4">
							<div class="card h-100" >
								<img src="<?= base_url('assets/img'); ?>/gambar/florest.jpg" class="card-img-top p-1 rounded bg-light" alt="event6" />
								<div class="card-body">
									<h5 class="card-title">Nama Event</h5>
									<p class="card-text">
										This is a wider card with supporting text below as a natural
										lead-in to additional content. This card has even longer
										content than the first to show that equal height action.
									</p>
								</div>
								<div class="card-footer">
									<button class="btn btn-warning">Beli Sekarang</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- button next and prev -->
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev" >
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next" >
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

		<div class="container text-center my-3">
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
