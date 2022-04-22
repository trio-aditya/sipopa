<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content-header">
    <h1>
        Users
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Users</li>
        <!-- <li><a href="#">Examples</a></li>
                    <li class="active">Blank page</li> -->
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">SIPOPA (Sistem Informasi Pengelolaan Pendapatan Daerah)</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            Selamat datang <?= session()->get('nama_lengkap'); ?> di SIPOPA (Sistem Informasi Pengelolaan Pendapatan Daerah) Kabupaten Lampung Tengah
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Users</h3>
            <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#modal-default">
                Tambah Data
            </button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <?php endif; ?>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Foto</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($users as $value) : ?>
                        <tr>
                            <td align="center"><?= $no++ ?></td>
                            <td><img src="<?= base_url('/img/foto/' . $value['foto']); ?>" class="img-thumbnail img-preview" width="70" height="70"></td>
                            <td><?= $value['nama_lengkap']; ?></td>
                            <td><?= $value['email']; ?></td>
                            <td><?= $value['username']; ?></td>
                            <td><?= $value['role']; ?></td>
                            <td align="center" width="10%">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-edit<?= $value['id_user']; ?>">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>

                                <a href="<?= base_url('/users/' . $value['id_user']); ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Foto</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>

<!-- Start Tambah Data -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/users/save'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                            <p class="help-block">Maksimum ukuran foto 1MB</p>
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" autofocus value="<?= old('nama_lengkap'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('nama_lengkap'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Masukkan email" value="<?= old('email'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" placeholder="Masukkan username" value="<?= old('username'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Masukkan password" value="<?= old('password'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="role_id">Role</label>
                            <select class="form-control <?= ($validation->hasError('role_id')) ? 'is-invalid' : ''; ?>" id="role_id" name="role_id" placeholder="Masukkan role" value="<?= old('role_id'); ?>">
                                <?php foreach ($role as $data) : ?>
                                    <option value="<?= $data['id_role']; ?>"><?= $data['role']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('role_id'); ?>
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
<!-- End Tambah Data -->

<!-- Start Edit Data -->
<?php $no = 0;
foreach ($users as $value) : $no++ ?>
    <div class="modal fade" id="modal-edit<?= $value['id_user']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Data</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/users/update/' . $value['id_user']); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="box-body">
                            <input type="hidden" name="id_user" value="<?= $value['id_user']; ?>">
                            <input type="hidden" name="fotoLama" value="<?= $value['foto']; ?>">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" id="nama_lengkap" name="nama_lengkap" value="<?= (old('nama_lengkap')) ? old('nama_lengkap') : $value['nama_lengkap'] ?>" placeholder="Masukkan nama lengkap" autofocus>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('nama_lengkap'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= (old('email')) ? old('email') : $value['email'] ?>" placeholder="Masukkan email">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?= (old('username')) ? old('username') : $value['username'] ?>" placeholder="Masukkan username">
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
                            <div class="form-group">
                                <label for="role_id">Role</label>
                                <select class="form-control <?= ($validation->hasError('role_id')) ? 'is-invalid' : ''; ?>" id="role_id" name="role_id" placeholder="Masukkan role" value="<?= old('role_id'); ?>">
                                    <option value="<?= $value['role_id']; ?>"><?= $value['role']; ?></option>
                                    <?php foreach ($role as $data) : ?>
                                        <option value="<?= $data['id_role']; ?>"><?= $data['role']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('role_id'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="foto" class="col-sm-2 col-form-label"><strong>Foto</strong></label>
                                <div class="col-sm-2">
                                    <img src="/img/foto/<?= $value['foto']; ?>" class="img-thumbnail img-preview">
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
<?php endforeach; ?>
<!-- End Edit Data -->

<?= $this->endSection(); ?>