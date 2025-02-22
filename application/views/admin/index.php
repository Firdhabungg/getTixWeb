    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <div class="container-fluid">
            <?= $this->session->flashdata('message'); ?>
            <div class="row mt-4">
                <div class="col-md-6">
                    <a href="<?= base_url(); ?>admin/tambah" class="btn btn-primary mb-3"><i class="fas fa-plus"></i><small class="ml-2">Tambah</small></a>
                </div>
            </div>
            <caption>List event</caption>
            <table class="table table-hover rounded-lg shadow-lg striped" id="pagination">
                <thead class="bg-gradient-primary text-white">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Event</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($event as $e) : ?>
                    <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $e['nama_event']; ?></td>
                    <td><?= $e['kategori']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>admin/detail/<?= $e['id_event']; ?>" class="badge badge-info">Detail</a>
                        <a href="<?= base_url(); ?>admin/edit/<?= $e['id_event']; ?>" class="badge badge-warning">Edit</a>
                        <a href="<?= base_url(); ?>event/hapus/<?= $e['id_event']; ?>" class="badge badge-danger" data-toggle="modal" data-target="#modalHapus">Delete</a>
                        <a href="<?= base_url(); ?>event/harga/<?= $e['id_event']; ?>" class="badge badge-success">Tambah Harga</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- modal detail -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded">
        <div class="modal-header bg-primary">
            <h5 class="modal-title text-light" id="modalDetailLabel"><p><?= $event['nama_event']; ?></p></h5>
            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body ">
            <div class="card w-100">
                <img src="<?= base_url('assets/img/gambar/guton.jpg'); ?>" class="card-img-top" alt="...">
                <ul class="list-group list-group-flush">
                    <!-- lokasi -->
                    <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>
                    <small class="ms-3">Mandala</small>
                </li>
                    <!-- tanggal -->
                    <li class="list-group-item"><i class="fas fa-calendar-check"></i>
                    <small class="ms-3"><?= date('d F Y'); ?></small>
                </li>
                
                </ul>
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
        </div>
        </div>
    </div>
</div>
<!-- end modal detail -->
<!-- modal edit -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalEditLabel">Edit Event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_event">Nama Event</label>
                    <input type="text" class="form-control" id="nama_event" name="nama_event" value="">
                    <label for="waktu">Waktu Event</label>
                    <input type="text" class="form-control" id="waktu" name="waktu" value="">
                    <label for="lokasi">Lokasi Event</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="">
                    <label for="deskripsi">Deskripsi Event</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="">
                    <label for="kapasitas">Kapasitas Event</label>
                    <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="">
                    <label for="kategori">Kategori Event</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" value="">
                    <label for="gambar">Gambar Event</label>
                    <input type="file" class="form-control p-1" id="gambar" name="gambar" value="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Edit</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- end modal edit -->
<!-- modal hapus -->
<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus data ini?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="<?= base_url(); ?>event/hapus/<?= $e['id_event']; ?>" class="btn btn-danger">Hapus</a>
        </div>
        </div>
    </div>
</div>
<!-- end modal -->