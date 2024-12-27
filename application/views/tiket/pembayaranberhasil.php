<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .success-container {
            text-align: center;
            background: #fff;
            border-radius: 10px;
            box-shadow: box-shadow: 0 4px 6px #0000001A;
            padding: 30px;
            max-width: 400px;
            width: 100%;
        }
        .success-title {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0 10px;
        }
        .success-message {
            font-size: 16px;
            color: #6c757d;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">
            <i class="bi bi-check-circle-fill" style="font-size: 48px; color: #28A745BF;"></i>
        </div>
        <h1 class="success-title">Pembayaran Berhasil!</h1>
        <p class="success-message">Terima kasih atas pembayaran anda, pesanan telah berhasil diproses.</p>
        <a href="#" class="btn btn-primary btn-success">Kembali ke event</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
