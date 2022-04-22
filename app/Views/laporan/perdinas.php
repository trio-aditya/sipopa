<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content-header">
    <h1>
        Laporan Perdinas
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Perdinas</li>
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
            <form action="<?= base_url('/laporanPerdinas/filter2'); ?>" method="post">
                <h4>Bulan Lalu</h4>
                <div class="row">
                    <div class="col-lg-4">
                        <label>Tanggal Awal</label>
                        <input type="date" class="form-control" name="bl_tanggal_awal" required>
                        <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-3 -->
                    <div class="col-lg-4">
                        <label>Tanggal Akhir</label>
                        <input type="date" class="form-control" name="bl_tanggal_akhir" required>
                        <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <div class="col-lg-12">
                    <hr>
                </div>
                <h4>Bulan Ini</h4>
                <div class="row">
                    <div class="col-lg-4">
                        <label>Tanggal Awal</label>
                        <input type="date" class="form-control" name="tanggal_awal">
                    </div>
                    <div class="col-lg-4">
                        <label>Tanggal Akhir</label>
                        <input type="date" class="form-control" name="tanggal_akhir">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-primary">Show Data</button>
                    </div>
                </div>
            </form>
            
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>
<?= $this->endSection(); ?>