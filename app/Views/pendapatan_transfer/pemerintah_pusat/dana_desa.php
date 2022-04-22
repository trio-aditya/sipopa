<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content-header">
    <h1>
        Dana Desa
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Dana Desa</li>
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
            <h3 class="box-title">Dana Desa</h3>
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
                        <th>Keterangan</th>
                        <th>Target PAD</th>
                        <th>Tanggal</th>
                        <th>Realisasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($dana_desa as $value) : ?>
                        <?php if (session()->get('id_user') == $value['user_id']) : ?>
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td><?= $value['keterangan']; ?></td>
                                <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
                                <td><?= date('d-m-Y', strtotime($value['tanggal'])); ?></td>
                                <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>
                                <?php if ($value['status'] == 0) : ?>
                                    <td align="center"><span class="label label-warning">pending</span></td>
                                <?php endif; ?>
                                <?php if ($value['status'] == 1) : ?>
                                    <td align="center"><span class="label label-success">diverifikasi</span></td>
                                <?php endif; ?>
                                <?php if ($value['status'] == 0) : ?>
                                    <td width="8%">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-edit<?= $value['id_realisasi']; ?>">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>

                                        <a href="<?= base_url('/realisasi/' . $value['id_realisasi']); ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Keterangan</th>
                        <th>Target PAD</th>
                        <th>Tanggal</th>
                        <th>Realisasi</th>
                        <th>Status</th>
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
                <form action="<?= base_url('/danaDesa/save'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="target_pad_id">Jenis Pendapatan</label>
                            <select class="form-control <?= ($validation->hasError('target_pad_id')) ? 'is-invalid' : ''; ?>" id="target_pad_id" name="target_pad_id" placeholder="Masukkan target PAD" autofocus value="<?= old('target_pad_id'); ?>">
                                <?php foreach ($target as $data) : ?>
                                    <?php if (session()->get('id_user') == $data['user_id']) : ?>
                                        <option value="<?= $data['id_target_pad']; ?>"><?= $data['kode_rekening']; ?> - <?= $data['keterangan']; ?> </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('target_pad_id'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" id="tanggal" name="tanggal" placeholder="Masukkan tanggal" value="<?= old('tanggal'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('tanggal'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="realisasi">Realisasi</label>
                            <input type="text" class="form-control <?= ($validation->hasError('realisasi')) ? 'is-invalid' : ''; ?>" id="realisasi" name="realisasi" placeholder="Masukkan realisasi" value="<?= old('realisasi'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('realisasi'); ?>
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
foreach ($dana_desa as $value) : $no++ ?>
    <div class="modal fade" id="modal-edit<?= $value['id_realisasi']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Data</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/danaDesa/update/' . $value['id_realisasi']); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="box-body">
                            <input type="hidden" name="id_realisasi" value="<?= $value['id_realisasi']; ?>">
                            <div class="form-group">
                                <label for="target_pad_id">Target PAD</label>
                                <select class="form-control <?= ($validation->hasError('target_pad_id')) ? 'is-invalid' : ''; ?>" id="target_pad_id" name="target_pad_id" placeholder="Masukkan target PAD" autofocus value="<?= old('target_pad_id'); ?>">
                                    <!-- <option value="<?= $value['target_pad_id']; ?>"><?= $value['kode_rekening']; ?> - <?= $data['keterangan']; ?></option> -->
                                    <?php foreach ($target as $data) : ?>
                                        <?php if (session()->get('id_user') == $data['user_id']) : ?>
                                            <option value="<?= $data['id_target_pad']; ?>"><?= $data['kode_rekening']; ?> - <?= $data['keterangan']; ?> </option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('target_pad_id'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" id="tanggal" name="tanggal" value="<?= (old('tanggal')) ? old('tanggal') : $value['tanggal'] ?>" placeholder="Masukkan tanggal">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('tanggal'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="realisasi">Realisasi</label>
                                <input type="text" class="form-control <?= ($validation->hasError('realisasi')) ? 'is-invalid' : ''; ?>" id="realisasi" name="realisasi" value="<?= (old('realisasi')) ? old('realisasi') : $value['realisasi'] ?>" placeholder="Masukkan realisasi">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('realisasi'); ?>
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