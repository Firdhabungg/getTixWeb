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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
        }
        .level, .img-event {
            transition: transform 0.3s ease; 
        }
        .level:hover, .img-event:hover {
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
                        <a class="nav-link" href="#">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <img src="<?= base_url(); ?>/assets/img/gambar/profile.png" class="img-fluid" width="40px" style="margin-right: 8px;">
            </div>
        </div>
    </nav>
    <div class="container mt-3 p-3">
        <h2><?= $detail['nama_event']; ?></h2>
        <div class="img-event card w-50 shadow-lg" style="border-radius: 12px;">
            <img src="<?= base_url('uploads/events/' . $detail['gambar_event']); ?>" alt="Event Banner" class="card-img-top" style="border-radius: 12px;">
        </div>
        <h5 class="mt-4">Detail Event</h5>
        <p><?= $detail['deskripsi']; ?></p>
        <p class="text-warning"><?= $detail['kategori']; ?></p>
        <div>
            <i class="fa-solid fa-location-dot"></i><small class="ms-2"><?= $detail['lokasi']; ?></small>
        </div>
        <div>
            <i class="fa-solid fa-calendar"><small class="ms-2"><?= $detail['waktu_acara']; ?></small></i>
        </div>
        <div>
            <i class="fa-solid fa-hourglass-start"></i><small class="ms-2"><?= $detail['kapasitas']; ?></small></i>
        </div>
    </div>

    <div class="container-fluid text-center mt-5 mb-5">
        <div class="row gap-3 justify-content-around">
            <?php foreach ($tickets as $ticket) : ?>
            <div class="level col col-6 col-md-3 shadow-lg py-4" style="border-radius: 12px;">
                <h3><?= $ticket['jenis_ticket']; ?></h3>
                <p>Harga: <?= number_format($ticket['harga'], 0, ',', '.'); ?></p>
                <a href="<?= base_url('tiket/detail_tiket/'. $ticket['id_ticket']); ?>" class="btn btn-primary">Pilih</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3">
        <img src="<?= base_url('assets/img/gettix.png'); ?>" alt="Gettix Logo" style="width: 200px; height: 70px;">
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
    