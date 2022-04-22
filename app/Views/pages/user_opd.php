<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content-header">
    <h1>
        User OPD
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">User OPD</li>
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
            <h3 class="box-title">Data User OPD</h3>
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
                        <th>Nama Lengkap</th>
                        <th>Nama OPD</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($user_opd as $value) : ?>
                        <tr>
                            <td align="center" width="10%"><?= $no++ ?></td>
                            <td><?= $value['nama_lengkap']; ?></td>
                            <td><?= $value['nama_opd']; ?></td>
                            <td align="center">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-edit<?= $value['id_user_opd']; ?>">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>

                                <a href="<?= base_url('/user_opd/' . $value['id_user_opd']); ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Nama Lengkap</th>
                        <th>Nama OPD</th>
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
                <form action="<?= base_url('/userOpd/save'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="user_id">Nama User</label>
                            <select class="form-control <?= ($validation->hasError('user_id')) ? 'is-invalid' : ''; ?>" id="user_id" name="user_id" placeholder="Masukkan user" value="<?= old('user_id'); ?>">
                                <?php foreach ($users as $data) : ?>
                                    <option value="<?= $data['id_user']; ?>"><?= $data['nama_lengkap']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('user_id'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="opdd_id">Nama OPD</label>
                            <select class="form-control <?= ($validation->hasError('opdd_id')) ? 'is-invalid' : ''; ?>" id="opdd_id" name="opdd_id" placeholder="Masukkan nama opd" value="<?= old('opdd_id'); ?>">
                                <?php foreach ($data_opd as $data) : ?>
                                    <option value="<?= $data['id_opd']; ?>"><?= $data['nama_opd']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('opdd_id'); ?>
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
foreach ($user_opd as $value) : $no++ ?>
    <div class="modal fade" id="modal-edit<?= $value['id_user_opd']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Data</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/userOpd/update/' . $value['id_user_opd']); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="box-body">
                            <input type="hidden" name="id_user_opd" value="<?= $value['id_user_opd']; ?>">
                            <div class="form-group">
                                <label for="user_id">Nama User</label>
                                <select class="form-control <?= ($validation->hasError('user_id')) ? 'is-invalid' : ''; ?>" id="user_id" name="user_id" placeholder="Masukkan user" value="<?= old('user_id'); ?>">
                                    <option value="<?= $value['user_id']; ?>"><?= $value['nama_lengkap']; ?></option>
                                    <?php foreach ($users as $data) : ?>
                                        <option value="<?= $data['id_user']; ?>"><?= $data['nama_lengkap']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('user_id'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="opdd_id">Nama OPD</label>
                                <select class="form-control <?= ($validation->hasError('opdd_id')) ? 'is-invalid' : ''; ?>" id="opdd_id" name="opdd_id" placeholder="Masukkan nama opd" value="<?= old('opdd_id'); ?>">
                                    <option value="<?= $value['opdd_id']; ?>"><?= $value['nama_opd']; ?></option>
                                    <?php foreach ($data_opd as $data) : ?>
                                        <option value="<?= $data['id_opd']; ?>"><?= $data['nama_opd']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('opdd_id'); ?>
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