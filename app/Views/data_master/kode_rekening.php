<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content-header">
    <h1>
        Kode Rekening
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Kode Rekening</li>
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
            <h3 class="box-title">Kode Rekening</h3>
            <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#modal-default">
                Tambah Data
            </button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>
            <?php if (session()->getFlashdata('pesan')) : ?><?php endif; ?>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama OPD</th>
                        <th>Jenis Pendapatan</th>
                        <th>Kode Rekening</th>
                        <th>Keterangan</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($kode_rekening as $value) : ?>
                        <tr>
                            <td align="center"><?= $no++ ?></td>
                            <td><?= $value['nama_opd']; ?></td>
                            <td><?= $value['jenis_pajak']; ?></td>
                            <td><?= $value['kode_rekening']; ?></td>
                            <td><?= $value['keterangan']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-edit<?= $value['id_kode_rekening']; ?>">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>

                                <a href="<?= base_url('/kode_rekening/' . $value['id_kode_rekening']); ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Nama OPD</th>
                        <th>Jenis Pendapatan</th>
                        <th>Kode Rekening</th>
                        <th>Keterangan</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>

<!-- Start Modals Tambah Data -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/kodeRekening/save'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="opd_id">Nama OPD</label>
                            <select class="form-control <?= ($validation->hasError('opd_id')) ? 'is-invalid' : ''; ?>" id="opd_id" name="opd_id" placeholder="Masukkan nama opd" autofocus value="<?= old('opd_id'); ?>">
                                <?php foreach ($opd as $data) : ?>
                                    <option value="<?= $data['id_opd']; ?>"><?= $data['nama_opd']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('opd_id'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="opd_id">Jenis Pendapatan</label>
                            <select class="form-control <?= ($validation->hasError('jenis_pajak_id')) ? 'is-invalid' : ''; ?>" id="jenis_pajak_id" name="jenis_pajak_id" placeholder="Masukkan jenis pendapatan" autofocus value="<?= old('jenis_pajak_id'); ?>">
                                <?php foreach ($jenis_pajak as $data) : ?>
                                    <option value="<?= $data['id_jenis_pajak']; ?>"><?= $data['jenis_pajak']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('jenis_pajak_id'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_opd">Kode Rekening</label>
                            <input type="text" class="form-control <?= ($validation->hasError('kode_rekening')) ? 'is-invalid' : ''; ?>" id="kode_rekening" name="kode_rekening" placeholder="Masukkan kode rekening" autofocus value="<?= old('kode_rekening'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('kode_rekening'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_opd">Keterangan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id="keterangan" name="keterangan" placeholder="Masukkan keterangan" autofocus value="<?= old('keterangan'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('keterangan'); ?>
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
<!-- End Modals Tambah Data -->

<!-- Start Modals Edit Data -->
<?php $no = 0;
foreach ($kode_rekening as $value) : $no++ ?>
    <div class="modal fade" id="modal-edit<?= $value['id_kode_rekening']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Data</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/kodeRekening/update/' . $value['id_kode_rekening']); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="box-body">
                            <input type="hidden" name="id_opd" value="<?= $value['id_kode_rekening']; ?>">
                            <div class="form-group">
                                <label for="opd_id">Nama OPD</label>
                                <select class="form-control <?= ($validation->hasError('opd_id')) ? 'is-invalid' : ''; ?>" id="opd_id" name="opd_id" value="<?= (old('opd_id')) ? old('opd_id') : $value['opd_id'] ?>" placeholder="Masukkan nama opd" autofocus">
                                    <option value="<?= $value['opd_id']; ?>"><?= $value['nama_opd']; ?></option>
                                    <?php foreach ($opd as $data) : ?>
                                        <option value="<?= $data['id_opd']; ?>"> <?= $data['nama_opd']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('opd_id'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="opd_id">Jenis Pendapatan</label>
                                <select class="form-control <?= ($validation->hasError('jenis_pajak_id')) ? 'is-invalid' : ''; ?>" id="jenis_pajak_id" name="jenis_pajak_id" value="<?= (old('jenis_pajak_id')) ? old('jenis_pajak_id') : $value['jenis_pajak_id'] ?>" placeholder="Masukkan jenis pajak" autofocus">
                                    <option value="<?= $value['jenis_pajak_id']; ?>"><?= $value['jenis_pajak']; ?></option>
                                    <?php foreach ($jenis_pajak as $data) : ?>
                                        <option value="<?= $data['id_jenis_pajak']; ?>"> <?= $data['jenis_pajak']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('jenis_pajak_id'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_opd">Kode Rekening</label>
                                <input type="text" class="form-control <?= ($validation->hasError('kode_rekening')) ? 'is-invalid' : ''; ?>" id="kode_rekening" name="kode_rekening" value="<?= (old('kode_rekening')) ? old('kode_rekening') : $value['kode_rekening'] ?>" placeholder="Masukkan kode rekening" autofocus>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('kode_rekening'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_opd">Keterangan</label>
                                <input type="text" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id="keterangan" name="keterangan" value="<?= (old('keterangan')) ? old('keterangan') : $value['keterangan'] ?>" placeholder="Masukkan keterangan" autofocus>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('keterangan'); ?>
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
<!-- End Modals Edit Data -->

<?= $this->endSection(); ?>