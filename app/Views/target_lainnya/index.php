<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content-header">
    <h1>
        Target Lain-Lain PAD yang Sah
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Target PAD Lainnya</li>
        <!-- <li><a href="#">Examples</a></li>
                    <li class="active">Blank page</li> -->
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Target Lain-Lain Penerimaan Pendapatan Asli Daerah yang Sah</h3>

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
    <!-- /.box -->

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Target Lain-Lain PAD yang Sah</h3>
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
                        <th>Kode Rekening</th>
                        <th>Target</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($target_lainnya as $value) : ?>
                        <tr>
                            <td align="center"><?= $no++ ?></td>
                            <td><?= $value['kode_rekening']; ?> - <?= $value['keterangan']; ?></td>
                            <td><?= number_format($value['target_lainnya'], 2, ',', '.'); ?></td>
                            <td><?= $value['tahun_target']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-edit<?= $value['id_target_lainnya']; ?>">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>

                                <a href="/target_lainnya/<?= $value['id_target_lainnya']; ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Kode Rekening</th>
                        <th>Target</th>
                        <th>Tahun</th>
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
                <form action="/targetLainnya/save" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="kode_rekening_id">Kode Rekening</label>
                            <select class="form-control <?= ($validation->hasError('kode_rekening_id')) ? 'is-invalid' : ''; ?>" id="kode_rekening_id" name="kode_rekening_id" placeholder="Masukkan kode rekening" autofocus value="<?= old('kode_rekening_id'); ?>">
                                <?php foreach ($kode_rekening as $data) : ?>
                                    <option value="<?= $data['id_kode_rekening']; ?>"><?= $data['kode_rekening']; ?>-<?= $data['keterangan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('kode_rekening_id'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="target_lainnya">Target</label>
                            <input type="text" class="form-control <?= ($validation->hasError('target_lainnya')) ? 'is-invalid' : ''; ?>" id="target_lainnya" name="target_lainnya" placeholder="Masukkan target" value="<?= old('target_lainnya'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('target_lainnya'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tahun_target">Tahun</label>
                            <input type="text" class="form-control <?= ($validation->hasError('tahun_target')) ? 'is-invalid' : ''; ?>" id="tahun_target" name="tahun_target" placeholder="Masukkan tahun" value="<?= old('tahun_target'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('tahun_target'); ?>
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
foreach ($target_lainnya as $value) : $no++ ?>
    <div class="modal fade" id="modal-edit<?= $value['id_target_lainnya']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Data</h4>
                </div>
                <div class="modal-body">
                    <form action="/targetLainnya/update/<?= $value['id_target_lainnya']; ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="box-body">
                            <input type="hidden" name="id_target_lainnya" value="<?= $value['id_target_lainnya']; ?>">
                            <div class="form-group">
                                <label for="kode_rekening_id">Kode Rekening</label>
                                <select class="form-control <?= ($validation->hasError('kode_rekening_id')) ? 'is-invalid' : ''; ?>" id="kode_rekening_id" name="kode_rekening_id" placeholder="Masukkan kode rekening" value="<?= old('kode_rekening_id'); ?>" autofocus>
                                    <option value="<?= $value['kode_rekening_id']; ?>" selected><?= $value['kode_rekening']; ?> - <?= $value['keterangan']; ?></option>
                                    <?php foreach ($kode_rekening as $data) : ?>
                                        <option value="<?= $data['id_kode_rekening']; ?>"><?= $data['kode_rekening']; ?> - <?= $data['keterangan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('kode_rekening_id'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="target_lainnya">Target</label>
                                <input type="text" class="form-control <?= ($validation->hasError('target_lainnya')) ? 'is-invalid' : ''; ?>" id="target_lainnya" name="target_lainnya" value="<?= (old('target_lainnya')) ? old('target_lainnya') : $value['target_lainnya'] ?>" placeholder="Masukkan target">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('target_lainnya'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tahun_target">Tahun</label>
                                <input type="text" class="form-control <?= ($validation->hasError('tahun_target')) ? 'is-invalid' : ''; ?>" id="tahun_target" name="tahun_target" value="<?= (old('tahun_target')) ? old('tahun_target') : $value['tahun_target'] ?>" placeholder="Masukkan tahun">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('tahun_target'); ?>
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