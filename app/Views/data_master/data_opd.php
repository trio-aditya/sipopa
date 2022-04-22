<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content-header">
    <h1>
        Data OPD
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Data OPD</li>
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
            <h3 class="box-title">Data OPD</h3>
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
                        <th>Nama OPD</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data_opd as $value) : ?>
                        <tr>
                            <td align="center"><?= $no++ ?></td>
                            <td><?= $value['nama_opd']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-edit<?= $value['id_opd']; ?>">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>

                                <a href="<?= base_url('/data_opd/' . $value['id_opd']); ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
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
                <form action="<?= base_url('/dataOpd/save'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_opd">Nama OPD</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_opd')) ? 'is-invalid' : ''; ?>" id="nama_opd" name="nama_opd" placeholder="Masukkan nama opd" autofocus value="<?= old('nama_opd'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('nama_opd'); ?>
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
foreach ($data_opd as $value) : $no++ ?>
    <div class="modal fade" id="modal-edit<?= $value['id_opd']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Data</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/dataOpd/update/' . $value['id_opd']); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="box-body">
                            <input type="hidden" name="id_opd" value="<?= $value['id_opd']; ?>">
                            <div class="form-group">
                                <label for="nama_opd">Nama OPD</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_opd')) ? 'is-invalid' : ''; ?>" id="nama_opd" name="nama_opd" value="<?= (old('nama_opd')) ? old('nama_opd') : $value['nama_opd'] ?>" placeholder="Masukkan nama opd" autofocus>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('nama_opd'); ?>
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