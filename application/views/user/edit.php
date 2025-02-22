<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="card mb-3 shadow-sm p-2 mb-5 bg-white rounded" style="max-width: 540px;">
        <div class="row gutters">
            <div class="col-md-4 d-flex align-items-center">
            <img src="<?= base_url('assets/img/profile/') . $user['gambar'] ?>" width="200" class="card-img" alt="<?= $user['name']; ?>">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $user['name']; ?></h5>
                <p class="card-text"><?= $user['email']; ?></p>
                <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->