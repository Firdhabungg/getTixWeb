<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }
        header {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .footer {
            margin-top: auto; 
        }
 
        .card-context {
            display: flex;
            justify-content: space-between; 
            padding: 0 20px;
        }

        .text-context1,
        .text-context2,
        .text-context3 {
            flex: 1; 
            text-align: start; 
        }

        .card-isi {
            display: flex;
            justify-content: space-between; 
            padding: 0 20px;
        }

        .text-isi1,
        .text-isi2,
        .text-isi3 {
            flex: 1; 
            text-align: start; 
        }

    
        .qr-card {
            border-radius: 20px;
            box-shadow: 0 4px 12px #0000001A;
            background-color: #fff;
            padding: 20px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .qr-image img {
            width: 250px;
            height: 250px;
            border: 2px solid #007bff;
            border-radius: 10px;
            box-shadow: 0 0 10px #007bff;
        }
        .transaction-code {
            font-size: 1.2rem;
            font-weight: 600;
            margin-top: 20px;
            color: #28a745;
        }
        .qrtext {
            margin: 25px;
            text-align:left;
        }


        .event-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .event-details {
            width: 60%;
        }

        .qr-details {
            width: 35%;
        }

        .btn-custom {
            margin-top: 20px;
            background-color: #ffffff;
            color: #48cae4;
            border-color: #48cae4;
            padding: 12px 30px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #48cae4;
            color: #ffffff;
        }

        
        .button.tutup {
            display: flex;
            justify-content: center;
            align-items: center; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 pb-2 shadow-lg">
        <div class="container-fluid">
            <a href="<?= base_url('event'); ?>">
                <img src="<?= base_url('assets/img/gettix.png'); ?>" alt="gambarget" class="img-fluid" width="180px" height="70px">
            </a>
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto justify-content-between">
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
                <form class="d-flex">
                <img src="<?= base_url(); ?>/assets/img/gambar/profile.png" class="img-fluid" width="40px" style="margin-right: 8px;">
                </form>
            </div>
        </div>
    </nav>

    <div class="event-container">
        <div class="event-details">
            <div class="card">
                <img src="<?= base_url('assets/img/gambar/guton.jpg'); ?>" class="card-img-top p-1 rounded bg-light" alt="event" style="height: 300px;" />
                <div class="card-body">
                    <h5 class="card-title">WJNC</h5>
                    <div class="card-context">
                        <p class="text-context1 fw-bold">Tanggal:</p>
                        <p class="text-context2 fw-bold">Waktu:</p>
                    </div>
                    <div class="card-isi">
                        <p class="text-isi1 "><?= date('l, d F Y'); ?></p>
                        <p class="text-isi2"><?= date('h:i'); ?> WIB</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="qr-details">
            <div class="qr-card w-20">
                <h2>Scan QR Code</h2>
                <div class="qr-image">
                    <img src="<?= base_url('assets/img/gambar/qrcode.png'); ?>" alt="QR Code">
                </div>
                <div class="qrtext">
                        <small class="text-qr1">Nama :</small>
                        <small class="text-qr2"><?= $user['name']; ?></small><br>
                        <small class="text-qr1">Email :</small>
                        <small class="text-qr2"><?= $user['email']; ?></small>
                </div>
                <div class="button tutup">
                    <a href="#" class="btn btn-custom">Tutup</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 footer fixed-bottom">
        <img src="<?= base_url('assets/img/gettix.png'); ?>" alt="Gettix Logo" style="width: 200px; height: 70px;">
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
