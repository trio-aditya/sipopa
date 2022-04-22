<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content-header">
    <h1>
        Profil
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Profile</a></li>
        <!-- <li><a href="#">Examples</a></li>
                    <li class="active">Blank page</li> -->
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Realisasi Penerimaan Pendapatan Asli Daerah</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            Selamat datang <?= session()->get('nama_lengkap'); ?> di Sistem Informasi Laporan Realisasi Penerimaan Pendapatan Asli Daerah Kabupaten Lampung Tengah
        </div>
        <!-- /.box-body -->
    </div>

    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <!-- <img class="profile-user-img img-responsive img-circle" src="/img/lampung_tengah.png" alt="User profile picture"> -->
                    <img src="<?= base_url('/img/foto/' . session()->get('foto')); ?>" class="profile-user-img img-responsive img-circle" alt="User Image">
                    <h3 class="profile-username text-center"><?= session()->get('nama_lengkap'); ?></h3>

                    <p class="text-muted text-center"><?= session()->get('email'); ?></p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Username</b> <a class="pull-right"><?= session()->get('username'); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Password</b> <a class="pull-right">***********</a>
                        </li>
                        <li class="list-group-item">
                            <b>Role</b>
                            <?php if (session()->get('role_id') == 1) : ?>
                                <a class="pull-right">Super Admin</a>
                            <?php endif; ?>
                            <?php if (session()->get('role_id') == 2) : ?>
                                <a class="pull-right">Admin</a>
                            <?php endif; ?>
                            <?php if (session()->get('role_id') == 3) : ?>
                                <a class="pull-right">OPD</a>
                            <?php endif; ?>
                            <?php if (session()->get('role_id') == 4) : ?>
                                <a class="pull-right">Verifikator</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-edit<?= session()->get('id_user'); ?>">
                        <i class="fa fa-pencil" aria-hidden="true"> Ubah Profil</i>
                    </button>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-3">
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</section>

<!-- Start Edit Data -->
<div class="modal fade" id="modal-edit<?= session()->get('id_user'); ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Profil</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/auth/update/' . session()->get('id_user')); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="box-body">
                        <input type="hidden" name="id_user" value="<?= session()->get('id_user'); ?>">
                        <input type="hidden" name="fotoLama" value="<?= session()->get('foto'); ?>">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" id="nama_lengkap" name="nama_lengkap" value="<?= (old('nama_lengkap')) ? old('nama_lengkap') : session()->get('nama_lengkap'); ?>" placeholder="Masukkan nama lengkap" autofocus>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('nama_lengkap'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= (old('email')) ? old('email') : session()->get('email'); ?>" placeholder="Masukkan email">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?= (old('username')) ? old('username') : session()->get('username'); ?>" placeholder="Masukkan username">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="***************">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="foto" class="col-sm-2 col-form-label"><strong>Foto</strong></label>
                            <div class="col-sm-2">
                                <img src="<?= base_url('/img/foto/' . session()->get('foto')); ?>" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-sm-8">
                                <input type="file" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('foto'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- End Edit Data -->

<?= $this->endSection(); ?>