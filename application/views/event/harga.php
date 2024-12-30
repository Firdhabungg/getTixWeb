<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color: #343a40;">
  <?= $this->session->flashdata('message'); ?>
<div class="container-fluid mb-3">
    <div class="card shadow-lg" style="width: 80%; height: auto; justify-content: center; margin: 0 auto; margin-top: 100px;">
        <h4 style="margin-top: 15px; text-align: center; color: blue;">ID Event: <?= $event['id_event']; ?></h4>
        <form action="<?= base_url('tiket/hargaEvent'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_event" value="<?= $event['id_event']; ?>">
            <div class="form-group p-2">
                <input type="text" class="form-control mb-3" id="reguler" name="reguler" placeholder="Harga Reguler">
                <input type="text" class="form-control mb-3" id="vip" name="vip" placeholder="Harga VIP">
                <input type="text" class="form-control mb-3" id="vvip" name="vvip" placeholder="Harga VVIP">
            </div>
            <div class="card-body text-right">
            <button type="submit" class="btn btn-primary mt-2">Tambah</button>
        </div>
        </form>
        
    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
