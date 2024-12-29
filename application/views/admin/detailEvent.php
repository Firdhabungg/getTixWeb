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
    </div>
</div>


