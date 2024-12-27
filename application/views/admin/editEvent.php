<div class="container-fluid mb-3 ">
    <div class="card w-50 shadow-lg">
        <form action="<?= base_url('admin/editEvent/'.$event['id_event']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group p-2">
            <input type="text" class="form-control" id="nama_event" name="nama_event" value="<?= $event['nama_event']; ?>" >
            </div>
            <div class="form-group p-2">
            <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $event['lokasi']; ?>">
            </div>
            <div class="form-group p-2">
            <input type="date" class="form-control" id="waktu" name="waktu" value="<?= $event['waktu_acara']; ?>" >
            </div>
            <div class="form-group p-2">
            <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="<?= $event['kapasitas']; ?>">
            </div>
            <div class="form-group p-2">
            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $event['kategori']; ?>">
            </div>
            <div class="form-group p-2">
            <textarea class="form-control" id="deskripsi" name="deskripsi"><?= $event['deskripsi']; ?></textarea>
            </div>
            <div class="form-group p-2">
            <input type="file" class="form-control p-1" id="gambar" name="gambar" value="<?= $event['gambar_event']; ?>">
            </div>
            <div class="card-body text-right">
            <button type="submit" class="btn btn-primary mt-2">Edit</button>
        </div>
        </form>
        
    </div>
</div>
</div>