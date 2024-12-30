                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <div class="card shadow-lg mb-3 text-dark" style="width: 18rem;">
                        <div class="d-flex justify-content-center pt-3">
                            <img src="<?= base_url('assets/img/profile/') . $user['gambar'] ?>" class="card-img-top img-fluid w-50" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['name']; ?></h5><h5 class="card-title">
                            </h5>
                            <p class="card-text"><?= $user['email']; ?></p>
                            <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->