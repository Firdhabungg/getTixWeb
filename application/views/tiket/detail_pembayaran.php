<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title; ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', Arial, sans-serif;
    }
    .riwayat {
        border-radius: 12px;
        transition: transform 0.3s ease;
    }
    .riwayat:hover {
        transform: scale(1.1);
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 pb-2 shadow-lg">
    <div class="container-fluid">
        <img src="<?= base_url('assets/img'); ?>/gambar/gettix.png" alt="gambarget" class="img-fluid" width="180px" height="70px">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto justify-content-between ">
                <li class="nav-item">
                    <a class="nav-link hover-light" aria-current="page" href="<?= base_url('event'); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('event'); ?>">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <a href="<?= base_url('user'); ?>" type="button" data-bs-toggle="modal" data-bs-target="#menuModal">
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" style="width: 40px; margin-right: 8px;">
            </a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="mb-4">Riwayat</h2>
    <div class="card mb-3 shadow-lg riwayat">
        <div class="card-body d-flex flex-wrap align-items-left justify-content-between">
            <div>
                <p class="mb-2"><strong>Kode Transaksi:</strong> #GET65342AF5B401</p>
                <p class="mb-2"><strong>Dibeli Pada:</strong> <?= date('d F Y'); ?></p>
                <p class="mb-2"><strong>Metode Pembayaran:</strong> QRIS</p>
            </div>
            <div>
                <p class="mb-2 text-warning "><strong>Total: </strong>Rp <?= number_format($tiket['harga'], 0, ',', '.'); ?></p>
            </div>
            <div>
                <a href="<?= base_url('tiket/qrcode/' . $tiket['id_ticket'] . '/' . $tiket['id_event']); ?>" class="btn btn-dark mt-4">Lihat QR Code</a>
            </div>
        </div>
    </div>
</div>
    <!-- modal profile -->
    <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable position-absolute end-0 pt-5">
            <div class="modal-content">
                <div class="modal-header">
                    <small type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></small>
                </div>
                <div class="modal-body">
                    <div class="d-grid gap-2">
                        <a href="<?= base_url('user'); ?>" class="btn btn-primary">Profile</a>
                        <a href="<?= base_url('auth/logout'); ?>" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
<footer class="bg-dark text-white text-center py-3 mt-auto fixed-bottom">
    <img src="<?= base_url('assets/img/'); ?>/gambar/gettix.png" alt="Gettix Logo" style="width: 200px; height: 70px;">
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>