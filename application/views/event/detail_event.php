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
        }
        header {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
        <h2>Running + Music Concert</h2>
        <div class="card shadow-lg">
            <img src="<?= base_url('assets/img'); ?>/gambar/runevent.png" alt="Event Banner" class="rounded">
        </div>
        <h4 class="mt-4">Detail Event</h4>
        <p>Pureaaaa Life Night Run Fest is an event held by Nestle Pure Life on 18th January 2025 at Kodam XII Tanjungpura, Pontianak. Combining Night Run, Music Concert & Culinary Festival in one place.</p>
        <p>What’s on:
            <ul>
                <li>8K Night Run (Jl. Major Alianyang, Jl. Arteri Supadio, Jl. Jendral Ahmad Yani)</li>
                <li>30+ Unique Flavors of Pontianak F&B Tenants</li>
                <li>4 Confirmed Line Up: Juicy Luicy, Lomba Sihir, Nidji, & Vierratale</li>
            </ul>
        </p>
        <div class="container text-center mt-5">
            <div class="row gap-5 d-flex justify-content-center ">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 border badge-dark shadow-lg rounded py-3">
                    <h3>Regular</h3>
                    <p>Harga: 30.000</p>
                    <button class="btn btn-primary">Pilih</button>
                </div>
    
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 border badge-dark shadow-lg rounded py-3">
                    <h3>VIP</h3>
                    <p>Harga: 50.000</p>
                    <button class="btn btn-primary">Pilih</button>
                </div>
    
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 border badge-dark shadow-lg rounded py-3">
                    <h3>VVIP</h3>
                    <p>Harga: 80.000</p>
                    <button class="btn btn-primary">Pilih</button>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <button class="btn btn-warning shadow-lg">BUY NOW</button>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3">
        <img src="gambar/gettix.png" alt="Gettix Logo" style="width: 200px; height: 70px;">
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
    