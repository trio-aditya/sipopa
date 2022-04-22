<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?><?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<section class="content-header">
    <h1>
        Laporan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Upload</li>
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
            <h3 class="box-title">Data Laporan</h3>
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
                        <th>Judul Laporan</th>
                        <th>Tanggal Upload</th>
                        <th>Download</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($upload as $value) : ?>
                        <?php if (session()->get('id_user') == $value['users_id']) : ?>
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td><?= $value['judul_laporan']; ?></td>
                                <td><?= tgl_indo($value['created_at']); ?></td>
                                <td align="center"><a href="<?= base_url('/upload/download/' . $value['id_laporan']); ?>"><i class="fa fa-download"></i></a></td>
                                <td align="center">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-edit<?= $value['id_laporan']; ?>">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>

                                    <a href="<?= base_url('/upload/' . $value['id_laporan']); ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Judul Laporan</th>
                        <th>Tanggal Upload</th>
                        <th>Download</th>
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
                <form action="<?= base_url('/upload/save'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="box-body">
                        <input type="hidden" class="form-control" id="users_id" name="users_id" value="<?= session()->get('id_user'); ?>">
                        <div class="form-group">
                            <label for="role">Judul Laporan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('judul_laporan')) ? 'is-invalid' : ''; ?>" id="judul_laporan" name="judul_laporan" placeholder="Masukkan judul laporan" autofocus value="<?= old('judul_laporan'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('judul_laporan'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Laporan</label>
                            <input type="file" id="laporan" name="laporan">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('laporan'); ?>
                            </div>
                            <p class="help-block">Maksimum ukuran laporan 2MB</p>
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
foreach ($upload as $value) : $no++ ?>
    <div class="modal fade" id="modal-edit<?= $value['id_laporan']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Data</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/upload/update/' . $value['id_laporan']); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="box-body">
                            <input type="hidden" name="id_laporan" value="<?= $value['id_laporan']; ?>">
                            <div class="form-group">
                                <label for="role">Judul Laporan</label>
                                <input type="text" class="form-control <?= ($validation->hasError('judul_laporan')) ? 'is-invalid' : ''; ?>" id="judul_laporan" name="judul_laporan" value="<?= (old('judul_laporan')) ? old('judul_laporan') : $value['judul_laporan'] ?>" placeholder="Masukkan judul laporan" autofocus>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('judul_laporan'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Laporan</label>
                                <input type="file" id="laporan" name="laporan">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('laporan'); ?>
                                </div>
                                <b>File : <?= $value['laporan']; ?></b>
                                <p class="help-block">Maksimum ukuran laporan 2MB</p>
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