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
?>

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content-header">
    <h1>
        Verifikasi
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Verifikasi</li>
        <!-- <li><a href="#">Examples</a></li>
                    <li class="active">Blank page</li> -->
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Verifikasi Penerimaan Pendapatan Asli Daerah</h3>

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

    <div class="row">
        <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Semua</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Diverifikasi</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Pending</a></li>
                    <li><a href="#tab_4" data-toggle="tab">Tolak</a></li>
                    <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Dropdown <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li> -->
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="box-header">
                            <!-- <div class="col-md-6">
                                <h3 class="box-title">Data Realisasi Penerimaan Pendapatan Asli Daerah</h3>
                            </div> -->
                            <form action="" id="dinas">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label>Filter Data</label> -->
                                        <select class="form-control" name="" id="pilihdinas">
                                            <option value="0">SHOW ALL</option>
                                            <?php foreach ($data_opd as $value) : ?>
                                                <option value="<?= $value['id_opd']; ?>"><?= $value['nama_opd']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Show Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>
                            <?php if (session()->getFlashdata('pesan')) : ?>
                            <?php endif; ?>

                            <div id="result"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        <div class="box-header">
                            <div class="col-md-6">
                                <h3 class="box-title">Data Realisasi Penerimaan Pendapatan Asli Daerah</h3>
                            </div>
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
                                        <th>Tanggal</th>
                                        <th>Jenis Pajak</th>
                                        <th>Jenis Pendapatan</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($verifikasi as $value) : ?>
                                        <tr>
                                            <td align="center"><?= $no++ ?></td>
                                            <td><?= tgl_indo($value['tanggal']); ?></td>
                                            <td><?= $value['jenis_pajak']; ?></td>
                                            <td><?= $value['keterangan']; ?></td>
                                            <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>
                                            <?php if ($value['status'] == 0) : ?>
                                                <td align="center"><span class="label label-warning">pending</span></td>
                                            <?php endif; ?>
                                            <?php if ($value['status'] == 1) : ?>
                                                <td align="center"><span class="label label-success">diverifikasi</span></td>
                                            <?php endif; ?>
                                            <?php if ($value['status'] == 2) : ?>
                                                <td align="center"><span class="label label-danger">tolak</span></td>
                                            <?php endif; ?>
                                            <td width="5%">
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit<?= $value['id_realisasi']; ?>">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Jenis Pajak</th>
                                        <th>Jenis Pendapatan</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                        <div class="box-header">
                            <h3 class="box-title">Data Realisasi Penerimaan Pendapatan Asli Daerah</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>
                            <?php if (session()->getFlashdata('pesan')) : ?>
                            <?php endif; ?>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Jenis Pajak</th>
                                        <th>Jenis Pendapatan</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($pending as $value) : ?>
                                        <tr>
                                            <td align="center"><?= $no++ ?></td>
                                            <td><?= tgl_indo($value['tanggal']); ?></td>
                                            <td><?= $value['jenis_pajak']; ?></td>
                                            <td><?= $value['keterangan']; ?></td>
                                            <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>
                                            <?php if ($value['status'] == 0) : ?>
                                                <td align="center"><span class="label label-warning">pending</span></td>
                                            <?php endif; ?>
                                            <?php if ($value['status'] == 1) : ?>
                                                <td align="center"><span class="label label-success">diverifikasi</span></td>
                                            <?php endif; ?>
                                            <?php if ($value['status'] == 2) : ?>
                                                <td align="center"><span class="label label-danger">tolak</span></td>
                                            <?php endif; ?>
                                            <td width="5%">
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit<?= $value['id_realisasi']; ?>">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Jenis Pajak</th>
                                        <th>Jenis Pendapatan</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_4">
                        <div class="box-header">
                            <h3 class="box-title">Data Realisasi Penerimaan Pendapatan Asli Daerah</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>
                            <?php if (session()->getFlashdata('pesan')) : ?>
                            <?php endif; ?>
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Jenis Pajak</th>
                                        <th>Jenis Pendapatan</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($tolak as $value) : ?>
                                        <tr>
                                            <td align="center"><?= $no++ ?></td>
                                            <td><?= tgl_indo($value['tanggal']); ?></td>
                                            <td><?= $value['jenis_pajak']; ?></td>
                                            <td><?= $value['keterangan']; ?></td>
                                            <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>
                                            <?php if ($value['status'] == 0) : ?>
                                                <td align="center"><span class="label label-warning">pending</span></td>
                                            <?php endif; ?>
                                            <?php if ($value['status'] == 1) : ?>
                                                <td align="center"><span class="label label-success">diverifikasi</span></td>
                                            <?php endif; ?>
                                            <?php if ($value['status'] == 2) : ?>
                                                <td align="center"><span class="label label-danger">tolak</span></td>
                                            <?php endif; ?>
                                            <td width="5%">
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit<?= $value['id_realisasi']; ?>">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Jenis Pajak</th>
                                        <th>Jenis Pendapatan</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>

</section>

<!-- Start Edit Data -->
<?php $no = 0;
foreach ($realisasi as $value) : $no++ ?>
    <div class="modal fade" id="modal-edit<?= $value['id_realisasi']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Detail Data</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/verifikasi/update/' . $value['id_realisasi']); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-xs-12">
                                <b><?= $value['nama_opd']; ?></b><br>
                                <p><?= $value['jenis_pajak']; ?> - <?= $value['keterangan']; ?></p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Tanggal</th>
                                            <td><?= tgl_indo($value['tanggal']); ?></td>
                                        </tr>
                                        <tr>
                                            <th style="width:50%">Target</th>
                                            <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Realisasi</th>
                                            <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                </div>
                <div class="modal-footer">
                    <?php if ($value['status'] == 0) : ?>
                        <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button> -->
                        <!-- <button type="submit" class="btn btn-primary pull-left">Verifikasi</button> -->
                        <a href="<?= base_url('/verifikasi/' . $value['id_realisasi']); ?>" class="btn btn-primary">Verifikasi</a>
                        </form>
                        <a href="<?= base_url('/verifikasi/tolak/' . $value['id_realisasi']); ?>" class="btn btn-danger pull-left">Tolak</a>
                    <?php endif; ?>
                    <?php if ($value['status'] == 1) : ?>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
                        <a href="<?= base_url('/verifikasi/unposting/' . $value['id_realisasi']); ?>" class="btn btn-danger">Unposting</a>
                    <?php endif; ?>
                    <?php if ($value['status'] == 2) : ?>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
                        <a href="<?= base_url('/verifikasi/' . $value['id_realisasi']); ?>" class="btn btn-primary">Verifikasi</a>
                    <?php endif; ?>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach; ?>
<!-- End Edit Data -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $("#dinas").submit(function(e) {
            e.preventDefault();
            var id = $("#pilihdinas").val();
            // console.log(id);
            var url = "<?= site_url("verifikasi/filter/"); ?>" + id;
            $("#result").load(url);
        })
    });
</script>

<!-- Verifikasi -->
<!-- <script>
    $(document).ready(function() {
        $("#dinas2").submit(function(e) {
            e.preventDefault();
            var id = $("#pilihdinas2").val();
            // console.log(id);
            var url = "<?= site_url("verifikasi/filter_verifikasi/"); ?>" + id;
            $("#result2").load(url);
        })
    });
</script> -->


<?= $this->endSection(); ?>