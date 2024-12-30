<div class="container-fluid mb-3">
    <div class="row justify-content-start">
        <div class="col-md-4"> <!-- Atur ukuran card -->
            <div class="card shadow-lg p-1">
                <img src="<?= base_url('uploads/events/'.$event['gambar_event']); ?>" class="card-img-top" style="object-fit: cover;" alt="...">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h5 class="ms-3 font-weight-bolder"><?= $event['nama_event']; ?></h5>
                        <small class="ms-3 text-danger"><?= $event['kategori']; ?></small>
                    </li>
                    <li class="list-group-item">
                        <small class="ms-3"><?= $event['deskripsi']; ?></small>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-fw fa-map-marker-alt"></i>
                        <small class="ms-3"><?= $event['lokasi']; ?></small>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-fw fa-clock"></i>
                        <small class="ms-3"><?= $event['waktu_acara']; ?></small>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-fw fa-hourglass-start"></i>
                        <small class="ms-3"><?= $event['kapasitas']; ?></small>
                    </li>
                </ul>
                <div class="card-body text-right">
                    <a href="<?= base_url('admin'); ?>" class="badge badge-danger p-1">Back</a>
                </div>
            </div>
        </div>
        <!-- harga tiket -->
        <div class="col-md-8 shadow h-50 p-3">
            <h5 class="text-center mb-3">Daftar Harga Tiket</h5>
            <div class="row text-center text-light">
                <?php if (!empty($ticket_reguler)) : ?>
                    <div class="col-sm-4">
                        <div class="card shadow-sm p-3 bg-success">
                            <small class="font-weight-bold">Reguler</small>
                            <p class="mt-2">Rp <?= number_format($ticket_reguler['harga'], 0, ',', '.'); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($ticket_vip)) : ?>
                    <div class="col-sm-4">
                        <div class="card shadow-sm p-3 bg-warning">
                            <small class="font-weight-bold">VIP</small>
                            <p class="mt-2">Rp <?= number_format($ticket_vip['harga'], 0, ',', '.'); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($ticket_vvip)) : ?>
                    <div class="col-sm-4">
                        <div class="card shadow-sm p-3 bg-primary">
                            <small class="font-weight-bold">VVIP</small>
                            <p class="mt-2">Rp <?= number_format($ticket_vvip['harga'], 0, ',', '.'); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


