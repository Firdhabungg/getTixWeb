<?= $this->session->flashdata('message'); ?>
<div class="container-fluid mb-3 ">
    <div class="card w-50 shadow-lg">
        <form action="<?= base_url('admin/tambah'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group p-2">
                <input type="text" class="form-control" id="nama_event" name="nama_event" placeholder="nama_event" >
                <?= form_error('nama_event', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="lokasi" >
                <?= form_error('lokasi', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group p-2">
                <input type="datetime-local" class="form-control" id="waktu" name="waktu" placeholder="waktu" >
                <?= form_error('waktu', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group p-2">
                <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="kapasitas" >
                <?= form_error('kapasitas', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group p-2">
                <select class="form-select" id="kategori" name="kategori">
                        <option value="konser" selected>Konser</option>
                        <option value="seminar" selected>Seminar</option>
                        <option value="sport" selected>Sport</option>
                    </select>
            </div>
            <div class="form-group p-2">
                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi"></textarea>
                <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group p-2">
                <input type="file" class="form-control p-1" id="gambar" name="gambar_event" placeholder="Gambar event" >
            </div>
            <!-- <div class="form-group p-2">
                <small for="harga_reguler">Harga Tiket Reguler</small>
                <input type="number" class="form-control" id="harga_reguler" name="harga_reguler">
                <?= form_error('harga_reguler', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group p-2">
                <small for="harga_vip">Harga Tiket VIP</small>
                <input type="number" class="form-control" id="harga_vip" name="harga_vip">
                <?= form_error('harga_vip', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group p-2">
                <small for="harga_vvip">Harga Tiket VVIP</small>
                <input type="number" class="form-control" id="harga_vvip" name="harga_vvip">
                <?= form_error('harga_vvip', '<small class="text-danger">', '</small>'); ?>
            </div> -->
            <div class="card-body text-right">
            <button type="submit" class="btn btn-primary mt-2">Tambah</button>
        </div>
        </form>
    </div>
</div>
</div>