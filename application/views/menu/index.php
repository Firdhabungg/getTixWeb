    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    
        <div class="row">
            <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">
                <i class="fas fa-user-plus"></i>
            </a>
            <table class="table table-hover table-bordered shadow-sm">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                    <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $m['menu']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>menu/edit/<?= $m['id']; ?>" class="badge badge-success" data-toggle="modal" data-target="#editMenu">edit</a>
                        <a href="<?= base_url(); ?>menu/hapus/<?= $m['id']; ?>" class="badge badge-danger"  data-toggle="modal" data-target="#hapusMenu">hapus</a>
                    </td>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="newMenuModalLabel">Tambah Menu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?= base_url('menu'); ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- modal hapus -->

<div class="modal fade" id="hapusMenu" tabindex="-1" aria-labelledby="hapusMenuLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="hapusMenuLabel">Konfirmasi Hapus</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php foreach ($menu as $m) : ?>
        <form action="<?= base_url(); ?>menu/hapus/<?= $m['id']; ?>" method="post">
        <?php endforeach; ?>
            <div class="modal-body">Apakah anda yakin ingin menghapus menu ini? </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- modal edit -->
<div class="modal fade" id="editMenu" tabindex="-1" aria-labelledby="editMenuLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editMenuLabel">Edit Menu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?= base_url('menu/edit'); ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id">
                    <input type="text" class="form-control" id="menu" name="menu">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary px-2" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">edit</button>
            </div>
        </form>
        </div>
    </div>
</div>