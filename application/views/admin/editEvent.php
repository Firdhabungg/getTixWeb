<div class="container-fluid mb-3 ">
    <div class="card w-50 shadow-lg bg-primary p-4">
        <form action="<?= base_url('admin/edit/' . $event['id_event']); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_event" value="<?= $event['id_event']; ?>">
            <div class="form-group p-2">
                <input type="text" class="form-control" id="nama_event" name="nama_event" value="<?= $event['nama_event']; ?>" >
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $event['lokasi']; ?>">
            </div>
            <?php
            $waktu_acara = date('Y-m-d', strtotime($event['waktu_acara']));
            ?>
            <div class="form-group p-2">
                <input type="date" class="form-control" id="waktu" name="waktu" value="<?= $waktu_acara; ?>">
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="<?= $event['kapasitas']; ?>">
            </div>
            <div class="form-group p-2">
                <select class="form-select" id="kategori" name="kategori">
                    <?php foreach($kategori as $k) : ?>
                        <?php if($k == $event['kategori']) : ?>
                            <option value="<?= $k; ?>" selected><?= $k; ?></option>
                        <?php else: ?>
                            <option value="<?= $k; ?>" ><?= $k; ?></option>
                        <?php endif; ?>          
                    <?php endforeach;  ?>
                </select>
            </div>
            <div class="form-group p-2">
            <textarea class="form-control" id="deskripsi" name="deskripsi"><?= $event['deskripsi']; ?></textarea>
            </div>
            <div class="form-group p-2">
                <label for="gambar" class="text-light">Gambar</label>
            <input type="file" class="form-control p-1" id="gambar" name="gambar">
                <?php if ($event['gambar_event']) : ?>
                    <small><?= $event['gambar_event']; ?></small>
                <?php endif; ?>
            </div>
            <div class="card-body text-right">
            <button type="submit" class="btn btn-warning mt-2">Edit Event</button>
        </div>
        </form>
        
    </div>
</div>
</div>