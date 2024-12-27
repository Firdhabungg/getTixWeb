<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto ">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg">
                    <div class="p-4">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Create an Account</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Username" value="<?= set_value('username') ?>">
                                    <div class="small mt-1 text-danger ml-2"><?= form_error('username') ?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="email" id="email" placeholder="Email Address" value="<?= set_value('email') ?>">
                                <div class="small mt-1 text-danger ml-2"><?= form_error('email') ?></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="telepon" id="telepon" placeholder="No Telp. Aktif" value="<?= set_value('telepon') ?>">
                                <div class="small mt-1 text-danger ml-2"><?= form_error('telepon') ?></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" name="password1" id="password1" placeholder="Password">
                                    <div class="small mt-1 text-danger ml-2"><?= form_error('password1') ?></div>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" name="password2" id="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?>">Sudah punya akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
