<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
        }
        .qr {
        border-radius: 12px;
        transition: transform 0.3s ease;
        }
        .qr:hover {
            transform: scale(1.1);
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 pb-2 shadow-lg">
        <div class="container-fluid">
            <a href="<?= base_url('event'); ?>">
                <img src="<?= base_url('assets/img/gettix.png'); ?>" alt="gambarget" class="img-fluid" width="180px" height="70px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto justify-content-between">
                </ul>
                <a href="<?= base_url('user'); ?>" type="button" data-bs-toggle="modal" data-bs-target="#menuModal">
                    <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" style="width: 40px; margin-right: 8px;">
                </a>
            </div>
        </div>
    </nav>
<!-- body -->
<div class="container-fluid d-flex justify-content-center p-2">
        <div class="row row-cols-1 row-cols-md-2 g-2">
            <div class="col-8 d-flex justify-content-center p-2 qr">
                <div class="card shadow">
                    <img src="<?= base_url('uploads/events/' . $tiket['gambar_event']); ?>" class="card-img-top p-1 rounded bg-light" alt="event" style="height: 300px;" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-warning"><?= $tiket['nama_event']; ?></h5>
                        <div class="card-context">
                            <small class="text-context1 fw-bold">Tanggal: <?= $tiket['waktu_acara']; ?></small><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center p-2 qr">
                <div class="qr-card text-center border shadow-lg p-4">
                    <h4>Scan QR Code</h4>
                    <div class="qr-image">
                        <img src="<?= base_url('assets/img/gambar/qrcode.png'); ?>" alt="QR Code" class="img-fluid" style="max-width: 300px;">
                    </div>
                    <div class="qrtext mt-3">
                        <small class="text-primary"><?= $user['name']; ?></small><br>
                        <small class="text-primary"><?= $user['email']; ?></small>
                    </div>
                    <div class="button tutup mt-3">
                        <a href="assets/img/gambar/qrcode.png" download="qrcode.png" class="btn btn-danger" type="png">Download QR Code</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- end body -->
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
    <footer class="bg-dark text-white text-center py-3">
        <img src="<?= base_url('assets/img/gettix.png'); ?>" alt="Gettix Logo" style="width: 200px; height: 70px;">
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
