<?= $this->session->flashdata('message'); ?>
<div class="container-fluid mb-3 ">
    <div class="card w-50 shadow-lg">
        <form action="<?= base_url('admin/tambah'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group p-2">
            <input type="text" class="form-control" id="nama_event" name="nama_event" placeholder="nama_event" >
            </div>
            <div class="form-group p-2">
            <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="lokasi" >
            </div>
            <div class="form-group p-2">
            <input type="date" class="form-control" id="waktu" name="waktu" placeholder="waktu" >
            </div>
            <div class="form-group p-2">
            <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="kapasitas" >
            </div>
            <div class="form-group p-2">
            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="kategori" >
            </div>
            <div class="form-group p-2">
            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi"></textarea>
            </div>
            <div class="form-group p-2">
            <input type="file" class="form-control p-1" id="gambar" name="gambar_event" placeholder="Gambar event" >
            </div>
            <div class="card-body text-right">
            <button type="submit" class="btn btn-primary mt-2">Tambah</button>
        </div>
        </form>
        
    </div>
</div>
</div>