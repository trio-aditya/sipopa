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

<!-- ================================================================================== -->
<!-- PAJAK DAERAH -->
<!-- Target Pajak Daerah -->
<?php foreach ($sum_target1 as $da) : ?>
<?php endforeach; ?>
<!-- Realisasi Pajak Daerah -->
<?php foreach ($sum_realisasi as $re) : ?>
<?php endforeach; ?>
<!-- ================================================================================== -->
<!-- Target Retribusi -->
<?php foreach ($sum_target2 as $data2) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target3 as $data3) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target4 as $data4) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target5 as $data5) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target6 as $data6) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target7 as $data7) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target8 as $data8) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target9 as $data9) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target10 as $data10) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target11 as $data11) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target12 as $data12) : ?>
<?php endforeach; ?>

<!-- Realisasi Retribusi -->
<?php foreach ($sum_realisasi3 as $re3) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi5 as $re5) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi7 as $re7) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi9 as $re9) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi11 as $re11) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi13 as $re13) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi15 as $re15) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi17 as $re17) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi19 as $re19) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi21 as $re21) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi23 as $re23) : ?>
<?php endforeach; ?>
<!-- ================================================================================== -->
<!-- Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan -->
<!-- Target HPKD -->
<?php foreach ($sum_target13 as $data13) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target14 as $data14) : ?>
<?php endforeach; ?>

<!-- Realisasi HKPD -->
<?php foreach ($sum_realisasi25 as $re25) : ?>
<?php endforeach; ?>

<?php foreach ($sum_realisasi27 as $re27) : ?>
<?php endforeach; ?>
<!-- ================================================================================== -->
<!-- LAIN-LAIN PAD YANG SAH -->
<!-- Target Lain-lain PAD -->
<?php foreach ($sum_target15 as $data15) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target16 as $data16) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target17 as $data17) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target18 as $data18) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target19 as $data19) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target20 as $data20) : ?>
<?php endforeach; ?>

<!-- Realisasi Lain-lain PAD -->
<?php foreach ($sum_realisasi29 as $re29) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi31 as $re31) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi33 as $re33) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi35 as $re35) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi37 as $re37) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi39 as $re39) : ?>
<?php endforeach; ?>
<!-- ================================================================================== -->
<!-- DANA TRANSFER -->
<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- Menampilkan target DBH -->
<!-- kode 0101 -->
<?php foreach ($sum_target5101 as $st5101) : ?>
<?php endforeach; ?>
<!-- Realisasi  DBH -->
<?php foreach ($sum_realisasi5101 as $re5101) : ?>
<?php endforeach; ?>

<!-- kode 0102 -->
<?php foreach ($sum_target5102 as $st5102) : ?>
<?php endforeach; ?>
<!-- Realisasi DAK Umum -->
<?php foreach ($sum_realisasi5102 as $re5102) : ?>
<?php endforeach; ?>


<!-- kode 0103 -->
<!-- kode 0104 -->
<!-- Menampilkan target DAK Fisik -->
<?php foreach ($sum_target5103 as $st5103) : ?>
<?php endforeach; ?>
<!-- Realisasi DAK Fisik -->
<?php foreach ($sum_realisasi5103 as $re5103) : ?>
<?php endforeach; ?>

<!-- Menampilkan DAK Non Fisik -->
<?php foreach ($sum_target5104 as $st5104) : ?>
<?php endforeach; ?>
<!-- Realisasi DAK Non Fisik -->
<?php foreach ($sum_realisasi5104 as $re5104) : ?>
<?php endforeach; ?>

<!-- kode 02 -->
<?php foreach ($sum_target512 as $st512) : ?>
<?php endforeach; ?>
<!-- Realisasi DID -->
<?php foreach ($sum_realisasi512 as $re512) : ?>
<?php endforeach; ?>

<!-- kode 05 -->
<?php foreach ($sum_target515 as $st515) : ?>
<?php endforeach; ?>
<!-- Realisasi Dana Desa -->
<?php foreach ($sum_realisasi515 as $re515) : ?>
<?php endforeach; ?>

<!-- Pendapatan Transfer Antar Daerah -->
<!-- kode 01 -->
<?php foreach ($sum_target601 as $st601) : ?>
<?php endforeach; ?>
<!-- Realisasi Pendapatan Transfer Antar Daerah -->
<?php foreach ($sum_realisasi601 as $re601) : ?>
<?php endforeach; ?>
<!-- ================================================================================== -->
<!-- Pendapatan Hibah -->
<!-- kode 01 -->
<?php foreach ($sum_target701 as $st701) : ?>
<?php endforeach; ?>
<!-- Realisasi Pendapatan Hibah -->
<?php foreach ($sum_realisasi701 as $re701) : ?>
<?php endforeach; ?>

<!-- Lain-Lain Pendapatan -->
<!-- kode 01 -->
<?php foreach ($sum_target801 as $st801) : ?>
<?php endforeach; ?>
<!-- Realisasi  Lain-lain Pendapatan -->
<?php foreach ($sum_realisasi801 as $re801) : ?>
<?php endforeach; ?>
<!-- ================================================================================== -->


<?php
// ==============================================
// PAJAK DAERAH
// Target Pajak Daerah
$pd = $da->target;
// Realisasi Pajak Daerah
$rd = $re->realisasi;
// ==============================================
// RETRIBUSI
// Target Retribusi
$target_retribusi = $data2->target2 + $data3->target3 + $data4->target4 + $data5->target5
    + $data6->target6 + $data7->target7 + $data8->target8 + $data9->target9 + $data10->target10
    + $data11->target11 + $data12->target12;
// Realisasi Retribusi
$realisasi_retribusi = $re3->realisasi + $re5->realisasi + $re7->realisasi + $re9->realisasi + $re11->realisasi + $re13->realisasi
    + $re15->realisasi + $re17->realisasi + $re19->realisasi + $re21->realisasi + $re23->realisasi;
// ==============================================
// HASIL PENGELOLAAN KEKAYAAN DAERAH YANG DIPISAHKAN
// Target HPKDD
$target_hpkdd = $data13->target13 + $data14->target14;
// Realisasi HKPDD
$realisasi_hpkdd = $re25->realisasi + $re27->realisasi;
// ==============================================
// LAIN-LAIN PAD YANG SAH
// Target Lain-lain PAD yang Sah
$target_lain_lain = $data15->target15 + $data16->target16 + $data17->target17 + $data18->target18 + $data19->target19 + $data20->target20;
// Bulan ini Lain-lain PAD yang Sah
$realisasi_lain_lain = $re29->realisasi + $re31->realisasi + $re39->realisasi + $re33->realisasi + $re35->realisasi + $re37->realisasi;
// ==============================================
// PENDAPATAN TRANSFER
// Dana Alokasi Khusus (DAK)
$target_dak = $st5103->target5103 + $st5104->target5104;
$realisasi_dak = $re5103->realisasi + $re5104->realisasi;
// Dana Perimbangan
$target_dp = $st5101->target5101 + $st5102->target5102 + $target_dak;
$realisasi_dp = $re5101->realisasi + $re5102->realisasi + $realisasi_dak;

// Pendapatan Transfer Pemerintah Pusat
$target_ptpp = $target_dp + $st512->target512 + $st515->target515;
$realisasi_ptpp = $realisasi_dp + $re512->realisasi + $re515->realisasi;

// Pajak Asli Daerah
// Target PAD
$target_pad = $pd + $target_retribusi + $target_hpkdd + $target_lain_lain;
// Realisasi PAD
$realisasi_pad = $rd + $realisasi_retribusi + $realisasi_hpkdd + $realisasi_lain_lain;

//PENDAPATAN TRANSFER
$target_pt = $target_ptpp + $st601->target601;
$realisasi_pt = $realisasi_ptpp + $re601->realisasi;
// ==============================================
//LAIN-LAIN PENDAPATAN DAERAH YANG SAH
//Lain-Lain Pendapatan Daerah yang Sah
//Pendapatan Hibah
$target_ph = $st701->target701;
$realisasi_ph = $re701->realisasi;

//Lain-Lain Pendapatan Daerah yang Sah
//Lain-lain pendapatan
$target_llp = $st801->target801;
$realisasi_llp = $re801->realisasi;

$target_llpd = $st701->target701 + $st801->target801;
$realisasi_llpd = $re701->realisasi + $re801->realisasi;
// ==============================================

//JUMLAH
$target_jumlah = $target_pad + $target_pt + $target_llpd;
$realisasi_jumlah = $realisasi_pad + $realisasi_pt + $realisasi_llpd;
// ==============================================

?>
<!-- ================================================================================== -->

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
            <form action="<?= base_url('/laporanPerdinas/filter'); ?>" method="post">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tanggal_awal">Tanggal Awal</label>
                        <input type="date" class="form-control" name="tanggal_awal" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tanggal_akhir">Tanggal Akhir</label>
                        <input type="date" class="form-control" name="tanggal_akhir" required>
                    </div>
                </div>
                <br>
                <div class="col-md-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Show Data</button>
                    </div>
                </div>
            </form>

            <form action="<?= base_url('/laporanPerdinas/excel_filter'); ?>" method="post" target="_black">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tanggal_awal">Tanggal Awal</label>
                        <input type="date" class="form-control" name="tanggall_awal" value="<?= $tanggal_awal; ?>" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tanggal_akhir">Tanggal Akhir</label>
                        <input type="date" class="form-control" name="tanggall_akhir" value="<?= $tanggal_akhir; ?>" required>
                    </div>
                </div>
                <br>
                <div class="col-md-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" target="_blank">Excel</button>
                    </div>
                </div>
            </form>
            <a href="<?= base_url('/laporanPerdinas/excel_filter'); ?>" class="btn btn-success pull-right" target="_blank" role="button" aria-disabled="true"><i class="fa fa-file-excel-o"></i> EXCEL</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <center>
                <h3 class="box-title">Periode : <b><?= tgl_indo($tanggal_awal) . " s/d " . tgl_indo($tanggal_akhir) ?></b></h3>
            </center>
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <?php endif; ?>
            <table class="table table-hover">
                <tr>
                    <th>NO</th>
                    <th>KODE REKENING</th>
                    <th>JENIS PENERIMAAN</th>
                    <th>TARGET APBD</th>
                    <th>REALISASI</th>
                    <th>%</th>
                    <th>LEBIH/KURANG</th>
                </tr>
                <tr>
                    <th bgcolor='#FFFF00' style='color:#FFFFFF'>4</th>
                    <th bgcolor='#FFFF00' style='color:#FFFFFF' colspan="2">PENDAPATAN DAERAH</th>
                    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($target_jumlah, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($realisasi_jumlah, 2, ',', '.'); ?></th>
                    <!--Persentase didapat dari realisasi / target * 100 -->
                    <?php if ($realisasi_jumlah > 0 && $target_jumlah > 0) {
                        $persentase = $realisasi_jumlah / $target_jumlah * 100;
                    } else {
                        $persentase = 0;
                    }
                    $lebih_kurang = $realisasi_jumlah - $target_jumlah;
                    ?>
                    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
                    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                </tr>
                <tr>
                    <th bgcolor='#FFFF00' style='color:#FFFFFF'>41</th>
                    <th bgcolor='#FFFF00' style='color:#FFFFFF' colspan="2">PENDAPATAN ASLI DAERAH</th>
                    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($target_pad, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($realisasi_pad, 2, ',', '.'); ?></th>
                    <!--Persentase didapat dari realisasi / target * 100 -->
                    <?php if ($realisasi_pad > 0 && $target_pad > 0) {
                        $persentase = $realisasi_pad / $target_pad * 100;
                    } else {
                        $persentase = 0;
                    }
                    $lebih_kurang = $realisasi_pad - $target_pad;
                    ?>
                    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
                    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                </tr>
                <!-- ============================================================================================================================== -->
                <!-- PAJAK DAERAH -->
                <?php foreach ($jenis_pendapatan1 as $value) : ?>
                    <tr>
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
                        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
                        <!-- Menampilkan Target -->
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($pd, 2, ',', '.'); ?></th>
                        <!-- Realisasi dengan jenis pajak 1 -->
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($rd, 2, ',', '.'); ?></th>

                        <!--Persentase didapat dari realisasi / target * 100 -->
                        <?php if ($rd > 0 && $pd > 0) {
                            $persentase = $rd / $pd * 100;
                        } else {
                            $persentase = 0;
                        }
                        ?>
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
                        <?php $lebih_kurang = $rd - $pd ?>
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                    <tr>
                        <!-- Start Menampilkan Data OPD Badan Pendapatan Daerah -->
                        <th bgcolor='#008000' style='color:#FFFFFF'></th>
                        <th bgcolor='#008000' style='color:#FFFFFF'></th>
                        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['nama_opd']; ?></th>
                        <!-- Menampilkan Target -->
                        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($pd, 2, ',', '.'); ?></th>
                        <!-- Realisasi dengan jenis pajak 1 -->
                        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($rd, 2, ',', '.'); ?></th>

                        <!--Persentase didapat dari realisasi / target * 100 -->
                        <?php if ($rd > 0 && $pd > 0) {
                            $persentase = $rd / $pd * 100;
                        } else {
                            $persentase = 0;
                        }
                        ?>
                        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
                        <?php $lebih_kurang = $rd - $pd ?>
                        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                        <!-- End Menampilkan Data OPD Badan Pendapatan Daerah -->
                    </tr>
                    </tr>
                <?php endforeach; ?>
                <!-- Start Menampilkan data OPD Bapenda -->
                <tr>
                    <?php $no = 1;
                    $i = 0;

                    ?>
                    <?php foreach ($laporan_perdinas1 as $value) : ?>
                        <td align="center"><?= $no++ ?></td>

                        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                        <td><?= $value['keterangan']; ?></td>
                        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
                        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

                        <!--Persentase didapat dari realisasi / target * 100 -->
                        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
                            $persen = $value['realisasi'] / $value['target'] * 100;
                        } else {
                            $persen = 0;
                        }
                        $lk = $value['realisasi'] - $value['target'];
                        ?>
                        <td><?= number_format($persen, 3, ',', '.'); ?></td>
                        <td><?= number_format($lk, 2, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
            <!-- End Menampilkan data OPD Bapenda -->

            <!-- ============================================================================================================================== -->

            <!-- 2 -->
            <!-- Start Retribusi -->
            <?php foreach ($jenis_pendapatan2 as $value) : ?>
                <tr>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
                    <th th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
                    <th th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($target_retribusi, 2, ',', '.'); ?></th>
                    <th th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_retribusi, 2, ',', '.'); ?></th>
                    <!-- Persentase didapat dari Realisasi / target PAD * 100 -->
                    <?php if ($realisasi_retribusi > 0 && $target_retribusi > 0) {
                        $persentase = $realisasi_retribusi / $target_retribusi * 100;
                    } else {
                        $persentase = 0;
                    }
                    ?>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
                    <?php $lebih_kurang = $realisasi_retribusi - $target_retribusi ?>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                <tr>
                    <!-- Start Dinas Kesehatan -->
                    <th bgcolor='#008000' style='color:#FFFFFF'></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'>I. <?= $value['nama_opd']; ?></th>
                    <!-- Menampilkan Target -->
                    <?php foreach ($sum_target2 as $data) : ?>
                        <?php $target_dinkes = $data->target2; ?></th>
                    <?php endforeach; ?>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_dinkes, 2, ',', '.'); ?></th>

                    <!-- Realisasi dengan jenis pajak 1 -->
                    <?php foreach ($sum_realisasi3 as $re3) : ?>
                        <?php $realisasi_dinkes = $re3->realisasi; ?></th>
                    <?php endforeach; ?>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_dinkes, 2, ',', '.'); ?></th>

                    <!-- Persentase didapat dari Realisasi / target PAD * 100 -->
                    <?php if ($realisasi_dinkes > 0 && $target_dinkes > 0) {
                        $persentase = $realisasi_dinkes / $target_dinkes * 100;
                    } else {
                        $persentase = 0;
                    }
                    ?>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
                    <?php $lebih_kurang = $realisasi_dinkes - $target_dinkes ?>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                </tr>
                </tr>
            <?php endforeach; ?>

            <!-- Start menampilkan data Dinas Kesehatan -->
            <tr>
                <?php $no = 1; ?>
                <?php foreach ($laporan_perdinas2 as $value) : ?>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                    <td><?= $value['keterangan']; ?></td>
                    <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
                    <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

                    <!--Persentase didapat dari realisasi / target * 100 -->
                    <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
                        $persen = $value['realisasi'] / $value['target'] * 100;
                    } else {
                        $persen = 0;
                    }

                    $lk = $value['realisasi'] - $value['target'];
                    ?>
                    <td><?= number_format($persen, 3, ',', '.'); ?></td>
                    <td><?= number_format($lk, 2, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
        <!-- End menampilkan data Dinas Kesehatan -->

        <!-- Start Dinas Perdagangan -->
        <!-- Retribusi 2 -->
        <?php foreach ($jenis_pendapatan3 as $value) : ?>
            <tr>
                <th bgcolor='#008000' style='color:#FFFFFF'></th>
                <th bgcolor='#008000' style='color:#FFFFFF'></th>
                <th bgcolor='#008000' style='color:#FFFFFF'>II. <?= $value['nama_opd']; ?></th>
                <?php foreach ($sum_target3 as $data) : ?>
                    <?php $target_perdagangan = $data->target3; ?>
                <?php endforeach; ?>
                <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_perdagangan, 2, ',', '.'); ?></th>

                <!-- Realisasi dengan jenis pajak 2 dan opd 3 -->
                <?php foreach ($sum_realisasi5 as $re5) : ?>
                    <?php $realisasi_perdagangan = $re5->realisasi; ?></th>
                <?php endforeach; ?>
                <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_perdagangan, 2, ',', '.'); ?></th>

                <!-- Persentase didapat dari realisasi / target PAD * 100 -->
                <?php if ($realisasi_perdagangan > 0 && $target_perdagangan > 0) {
                    $persentase = $realisasi_perdagangan / $target_perdagangan * 100;
                } else {
                    $persentase = 0;
                }
                ?>
                <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
                <?php $lebih_kurang = $realisasi_perdagangan - $target_perdagangan ?>
                <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
            </tr>
        <?php endforeach; ?>

        <!-- Start menampilkan data Dinas Perdagangan -->
        <tr>
            <?php $no = 1; ?>
            <?php foreach ($laporan_perdinas3 as $value) : ?>
                <td align="center"><?= $no++ ?></td>
                <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                <td><?= $value['keterangan']; ?></td>
                <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
                <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

                <!--Persentase didapat dari realisasi / target * 100 -->
                <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
                    $persen = $value['realisasi'] / $value['target'] * 100;
                } else {
                    $persen = 0;
                }
                $lk = $value['realisasi'] - $value['target'];
                ?>
                <td><?= number_format($persen, 3, ',', '.'); ?></td>
                <td><?= number_format($lk, 2, ',', '.'); ?></td>
        </tr>
    <?php endforeach; ?>
    <!-- End menampilkan data Dinas Perdagangan -->
    <!-- End Dinas Perdagangan -->

    <!-- Retribusi 4 -->
    <?php foreach ($jenis_pendapatan4 as $value) : ?>
        <tr>
            <th bgcolor='#008000' style='color:#FFFFFF'></th>
            <th bgcolor='#008000' style='color:#FFFFFF'></th>
            <th bgcolor='#008000' style='color:#FFFFFF'>III. <?= $value['nama_opd']; ?></th>

            <?php foreach ($sum_target4 as $data) : ?>
                <?php $target_pemukiman = $data->target4; ?>
            <?php endforeach; ?>
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_pemukiman, 2, ',', '.'); ?></th>

            <?php foreach ($sum_realisasi7 as $re7) : ?>
                <?php $realisasi_pemukiman = $re7->realisasi; ?>
            <?php endforeach; ?>
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_pemukiman, 2, ',', '.'); ?></th>

            <!-- Persentase didapat dari realisasi / target PAD * 100 -->
            <?php if ($realisasi_pemukiman > 0 && $target_pemukiman > 0) {
                $persentase = $realisasi_pemukiman / $target_pemukiman * 100;
            } else {
                $persentase = 0;
            }
            ?>
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
            <?php $lebih_kurang = $realisasi_pemukiman - $target_pemukiman ?>
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
        </tr>
    <?php endforeach; ?>

    <!-- Start menampilkan data Dinas Pemukiman -->
    <tr>
        <?php $no = 1; ?>
        <?php foreach ($laporan_perdinas4 as $value) : ?>
            <td align="center"><?= $no++ ?></td>
            <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
            <td><?= $value['keterangan']; ?></td>
            <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
            <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

            <!--Persentase didapat dari realisasi / target * 100 -->
            <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
                $persen = $value['realisasi'] / $value['target'] * 100;
            } else {
                $persen = 0;
            }
            $lk = $value['realisasi'] - $value['target'];
            ?>
            <td><?= number_format($persen, 3, ',', '.'); ?></td>
            <td><?= number_format($lk, 2, ',', '.'); ?></td>

    </tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Pemukiman -->

<!-- Retribusi 5 -->
<?php foreach ($jenis_pendapatan5 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>IV. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target5 as $data) : ?>
            <?php $target_perhubungan  = $data->target5; ?>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_perhubungan, 2, ',', '.'); ?></th>

        <?php foreach ($sum_realisasi9 as $re9) : ?>
            <?php $realisasi_perhubungan = $re9->realisasi; ?>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_perhubungan, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($realisasi_perhubungan > 0 && $target_perhubungan > 0) {
            $persentase = $realisasi_perhubungan / $target_perhubungan * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_perhubungan - $target_perhubungan ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Perhubungan -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas5 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>

</tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Perhubungan -->

<!-- Retribusi 6 -->
<?php foreach ($jenis_pendapatan6 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>V. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target6 as $data) : ?>
            <?php $target_bkpsdm = $data->target6; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_bkpsdm, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi11 as $re11) : ?>
            <?php $realisasi_bkpsdm = $re11->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_bkpsdm, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($realisasi_bkpsdm > 0 && $target_bkpsdm > 0) {
            $persentase = $realisasi_bkpsdm / $target_bkpsdm * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_bkpsdm - $target_bkpsdm ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data BKPSDM -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas6 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>

</tr>
<?php endforeach; ?>
<!-- End menampilkan data BKPSDM -->

<!-- Retribusi 7 -->
<?php foreach ($jenis_pendapatan7 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>VI. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target7 as $data) : ?>
            <?php $target_binamarga = $data->target7; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_binamarga, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi13 as $re13) : ?>
            <?php $realisasi_binamarga = $re13->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_binamarga, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($realisasi_binamarga > 0 && $target_binamarga > 0) {
            $persentase = $realisasi_binamarga / $target_binamarga * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_binamarga - $target_binamarga ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Bina Marga -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas7 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Bina Marga -->

<!-- Retribusi 8 -->
<?php foreach ($jenis_pendapatan8 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>VII. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target8 as $data) : ?>
            <?php $target_kominfo = $data->target8; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_kominfo, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi15 as $re15) : ?>
            <?php $realisasi_kominfo = $re15->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_kominfo, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($realisasi_kominfo > 0 && $target_kominfo > 0) {
            $persentase = $realisasi_kominfo / $target_kominfo * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_kominfo - $target_kominfo ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Komunikasi dan Informatika -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas8 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Komunikasi dan Informatika -->

<!-- Retribusi 9 -->
<?php foreach ($jenis_pendapatan9 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>VIII. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target9 as $data) : ?>
            <?php $target_pertanian = $data->target9; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_pertanian, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi17 as $re17) : ?>
            <?php $realisasi_pertanian = $re17->realisasi; ?>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_pertanian, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($realisasi_pertanian > 0 && $target_pertanian > 0) {
            $persentase = $realisasi_pertanian / $target_pertanian * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_pertanian - $target_pertanian ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Pertanian -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas9 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Pertanian -->

<!-- Retribusi 10 -->
<?php foreach ($jenis_pendapatan10 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>IX. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target10 as $data) : ?>
            <?php $target_perikanan = $data->target10; ?>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_perikanan, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi19 as $re19) : ?>
            <?php $realisasi_perikanan = $re19->realisasi; ?>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_perikanan, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($realisasi_perikanan > 0 && $target_perikanan > 0) {
            $persentase = $realisasi_perikanan / $target_perikanan * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_perikanan - $target_perikanan ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Pertikanan -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas10 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Perikanan -->

<!-- Retribusi 11 -->
<?php foreach ($jenis_pendapatan11 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>X. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target11 as $data) : ?>
            <?php $target_umum = $data->target11; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_umum, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi21 as $re21) : ?>
            <?php $realisasi_umum = $re21->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_umum, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($realisasi_umum > 0 && $target_umum > 0) {
            $persentase = $realisasi_umum / $target_umum * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_umum - $target_umum ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Bagian Umum -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas11 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Bagian Umum -->

<!-- Retribusi 12 -->
<?php foreach ($jenis_pendapatan12 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>XI. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target12 as $data) : ?>
            <?php $target_perekonomian = $data->target12; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_perekonomian, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi23 as $re23) : ?>
            <?php $realisasi_perekonomian = $re23->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_perekonomian, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($realisasi_perekonomian > 0 && $target_perekonomian > 0) {
            $persentase = $realisasi_perekonomian / $target_perekonomian * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_perekonomian - $target_perekonomian ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Bagian Perekonomian -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas12 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Bagian Perekonomian -->
<!-- 2 -->
<!-- ============================================================================================================================== -->

<!-- 3. HASIL PENGELOLAAN KEKAYAAN DAERAH -->
<?php foreach ($jenis_pendapatan13 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($target_hpkdd, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_hpkdd, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($realisasi_hpkdd > 0 && $target_hpkdd > 0) {
            $persentase = $realisasi_hpkdd / $target_hpkdd * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_hpkdd - $target_hpkdd ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>

    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>I. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target13 as $data) : ?>
            <?php $target_bpkad = $data->target13; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_bpkad, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 3 opd 13-->
        <?php foreach ($sum_realisasi25 as $re25) : ?>
            <?php $realisasi_bpkad = $re25->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_bpkad, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($realisasi_bpkad > 0 && $target_bpkad > 0) {
            $persentase = ($realisasi_bpkad / $target_bpkad) * 100;
        } else {
            $persen = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_bpkad - $target_bpkad ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data BPKAD -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas13 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data BPKAD -->
<?php foreach ($jenis_pendapatan14 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>II. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target14 as $data) : ?>
            <?php $target_perekonomian2 = $data->target14; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_perekonomian2, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 3 opd 13-->
        <?php foreach ($sum_realisasi27 as $re27) : ?>
            <?php $realisasi_perekonomian2 = $re27->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_perekonomian2, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($realisasi_perekonomian2 > 0 && $target_perekonomian2 > 0) {
            $persentase = $realisasi_perekonomian2 / $target_perekonomian2 * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_perekonomian2 - $target_perekonomian2 ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Bagian Perekonomian -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas14 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Bagian Perekonomian -->
<!-- 3 -->
<!-- ============================================================================================================================== -->
<!-- 4. LAIN-LAIN PENDAPATAN ASLI DAERAH YANG SAH  -->
<?php foreach ($jenis_pendapatan15 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($target_lain_lain, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_lain_lain, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($target_lain_lain > 0 && $realisasi_lain_lain > 0) {
            $persentase = $target_lain_lain / $realisasi_lain_lain * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $target_lain_lain - $realisasi_lain_lain ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>

    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>I. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target15 as $data) : ?>
            <?php $target_bapenda4 =  $data->target15; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_bapenda4, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 4 dan opd 1 -->
        <?php foreach ($sum_realisasi29 as $re29) : ?>
            <?php $realisasi_bapenda4 = $re29->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_bapenda4, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php if ($realisasi_bapenda4 > 0 && $target_bapenda4 > 0) {
            $persentase = $realisasi_bapenda4 / $target_bapenda4 * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_bapenda4 - $target_bapenda4 ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Badan Pendapatan Daerah -->
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas15 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Badan Pendapatan Daerah -->

<!-- jenis pajak 4 opd 4 -->
<?php foreach ($jenis_pendapatan16 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>II. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target16 as $data) : ?>
            <?php $target_perkim = $data->target16; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_perkim, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi31 as $re31) : ?>
            <?php $realisasi_perkim = $re31->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_perkim, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($realisasi_perkim > 0 && $target_perkim > 0) {
            $persentase = $realisasi_perkim / $target_perkim * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_perkim - $target_perkim ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Badan Perkim-->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas16 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Badan Perkim-->

<!-- jenis pajak 4 opd 13 -->
<?php foreach ($jenis_pendapatan20 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>III. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target20 as $data) : ?>
            <?php $target_bpkad2 = $data->target20; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_bpkad2, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi39 as $re39) : ?>
            <?php $realisasi_bpkad2 = $re39->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_bpkad2, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($realisasi_bpkad2 > 0 && $target_bpkad2 > 0) {
            $persentase = $realisasi_bpkad2 / $target_bpkad2 * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_bpkad2 - $target_bpkad2 ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data BPKAD-->
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas20 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data BPKAD-->

<!-- jenis pajak 4 opd 15 -->
<?php foreach ($jenis_pendapatan17 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>IV. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target17 as $data) : ?>
            <?php $target_rsu = $data->target17; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_rsu, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi33 as $re33) : ?>
            <?php $realisasi_rsu = $re33->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_rsu, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($realisasi_rsu > 0 && $target_rsu > 0) {
            $persentase = $realisasi_rsu / $target_rsu * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_rsu - $target_rsu ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data RSU Demang Sepulau Raya-->
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas17 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data RSU Demang Sepulau Raya-->

<!-- jenis pajak 4 opd 2 -->
<?php foreach ($jenis_pendapatan18 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>V. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target18 as $data) : ?>
            <?php $target_dinkes2 = $data->target18; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_dinkes2, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi35 as $re35) : ?>
            <?php $realisasi_dinkes2 = $re35->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_dinkes2, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($realisasi_dinkes2 > 0 && $target_dinkes2 > 0) {
            $persentase = $realisasi_dinkes2 / $target_dinkes2 * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_dinkes2 - $target_dinkes2 ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Kesehatan -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas18 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Kesehatan -->

<!-- jenis pajak 4 opd 16 -->
<?php foreach ($jenis_pendapatan19 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>VI. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target19 as $data) : ?>
            <?php $target_pasar = $data->target19; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_pasar, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi37 as $re37) : ?>
            <?php $realisasi_pasar = $re37->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_pasar, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($realisasi_pasar > 0 && $target_pasar > 0) {
            $persen = $realisasi_pasar / $target_pasar * 100;
        } else {
            $persen = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_pasar - $target_pasar ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Pelayanan Pasar -->
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas19 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Pelayanan Pasar -->
<!-- 4 -->
<!-- ============================================================================================================================== -->

<!-- PENDAPATAN TRANSFER -->
<tr>
    <th bgcolor='#FFFF00' style='color:#FFFFFF'>42</th>
    <th bgcolor='#FFFF00' style='color:#FFFFFF' colspan="2">PENDAPATAN TRANSFER</th>
    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($target_pt, 2, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($realisasi_pt, 2, ',', '.'); ?></th>
    <!--Persentase didapat dari realisasi / target * 100 -->
    <?php if ($realisasi_pt > 0 && $target_pt > 0) {
        $persentase = $realisasi_pt / $target_pt * 100;
    } else {
        $persentase = 0;
    }
    $lebih_kurang = $realisasi_pt - $target_pt;
    ?>
    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<?php foreach ($jenis_pendapatan5101 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($target_ptpp, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_ptpp, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($realisasi_ptpp > 0 && $target_ptpp > 0) {
            $persentase = $realisasi_ptpp / $target_ptpp * 100;
        } else {
            $persentase = 0;
        }
        $lebih_kurang = $realisasi_ptpp - $target_ptpp;
        ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'>421.01</th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>Dana Perimbangan</th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_dp, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_dp, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($realisasi_dp > 0 && $target_dp > 0) {
            $persentase = $realisasi_dp / $target_dp * 100;
        } else {
            $persentase = 0;
        }
        $lebih_kurang = $realisasi_dp - $target_dp;
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'>421.01.01</th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>Dana Transfer Umum dan Bagi Hasil (DBH)</th>
        <?php foreach ($sum_target5101 as $value) : ?>
            <?php $target_dbh = $value->target5101; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_dbh, 2, ',', '.'); ?></th>

        <!-- Realisasi dengan jenis pajak 5 -->
        <?php foreach ($sum_realisasi5101 as $re5101) : ?>
            <?php $realisasi_dbh = $re5101->realisasi; ?></th>
        <?php endforeach; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_dbh, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($realisasi_dbh > 0 && $target_dbh > 0) {
            $persentase = $realisasi_dbh / $target_dbh * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $realisasi_dbh - $target_dbh ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
    </tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas5101 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 0102 -->
<tr>
    <th bgcolor='#008000' style='color:#FFFFFF'>421.01.02</th>
    <th bgcolor='#008000' style='color:#FFFFFF'></th>
    <th bgcolor='#008000' style='color:#FFFFFF'>Dana Alokasi Umum (DAU)</th>
    <?php foreach ($sum_target5102 as $value) : ?>
        <?php $target_dau = $value->target5102; ?></th>
    <?php endforeach; ?>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_dau, 2, ',', '.'); ?></th>

    <!-- Realisasi dengan jenis pajak 5 -->
    <?php foreach ($sum_realisasi5102 as $re5102) : ?>
        <?php $realisasi_dau = $re5102->realisasi; ?></th>
    <?php endforeach; ?>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_dau, 2, ',', '.'); ?></th>

    <!--Persentase didapat dari realisasi / target * 100 -->
    <?php if ($realisasi_dau > 0 && $target_dau > 0) {
        $persentase = $realisasi_dau / $target_dau * 100;
    } else {
        $persentase = 0;
    }
    ?>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
    <?php $lebih_kurang = $realisasi_dau - $target_dau ?>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas5102 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>

<tr>
    <th bgcolor='#008000' style='color:#FFFFFF'>421.01.03</th>
    <th bgcolor='#008000' style='color:#FFFFFF'></th>
    <th bgcolor='#008000' style='color:#FFFFFF'>Dana Alokasi Khusus (DAK)</th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_dak, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_dak, 2, ',', '.'); ?></th>
    <!--Persentase didapat dari realisasi / target * 100 -->
    <?php if ($realisasi_dak > 0 && $target_dak > 0) {
        $persentase = $realisasi_dak / $target_dak * 100;
    } else {
        $persentase = 0;
    }
    $lebih_kurang = $realisasi_dak - $target_dak;
    ?>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <th bgcolor='#FFD700' style='color:#FFFFFF'></th>
    <th bgcolor='#FFD700' style='color:#FFFFFF'></th>
    <th bgcolor='#FFD700' style='color:#FFFFFF'>DAK FISIK</th>
    <?php foreach ($sum_target5103 as $value) : ?>
        <?php $target_dak_fisik = $value->target5103; ?></th>
    <?php endforeach; ?>
    <th bgcolor='#FFD700' style='color:#FFFFFF'><?= number_format($target_dak_fisik, 2, ',', '.'); ?></th>

    <!-- Realisasi dengan jenis pajak 1 -->
    <?php foreach ($sum_realisasi5103 as $re5103) : ?>
        <?php $realisasi_dak_fisik = $re5103->realisasi; ?></th>
    <?php endforeach; ?>
    <th bgcolor='#FFD700' style='color:#FFFFFF'><?= number_format($realisasi_dak_fisik, 2, ',', '.'); ?></th>

    <!--Persentase didapat dari realisasi / target * 100 -->
    <?php if ($realisasi_dak_fisik > 0 && $target_dak_fisik > 0) {
        $persentase = $realisasi_dak_fisik / $target_dak_fisik * 100;
    } else {
        $persentase = 0;
    }
    ?>
    <th bgcolor='#FFD700' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
    <?php $lebih_kurang = $realisasi_dak_fisik - $target_dak_fisik ?>
    <th bgcolor='#FFD700' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas5103 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 0104 -->
<tr>
    <th bgcolor='#FFD700' style='color:#FFFFFF'>421.01.04</th>
    <th bgcolor='#FFD700' style='color:#FFFFFF'></th>
    <th bgcolor='#FFD700' style='color:#FFFFFF'>DAK NON FISIK</th>
    <?php foreach ($sum_target5104 as $value) : ?>
        <?php $target_dak_nonfisik = $value->target5104; ?></th>
    <?php endforeach; ?>
    <th bgcolor='#FFD700' style='color:#FFFFFF'><?= number_format($target_dak_nonfisik, 2, ',', '.'); ?></th>


    <!-- Realisasi dengan jenis pajak 1 -->
    <?php foreach ($sum_realisasi5104 as $re5104) : ?>
        <?php $realisasi_dak_nonfisik = $re5104->realisasi; ?></th>
    <?php endforeach; ?>
    <th bgcolor='#FFD700' style='color:#FFFFFF'><?= number_format($realisasi_dak_nonfisik, 2, ',', '.'); ?></th>

    <!--Persentase didapat dari realisasi / target * 100 -->
    <?php if ($realisasi_dak_nonfisik > 0 && $target_dak_nonfisik > 0) {
        $persentase = $realisasi_dak_nonfisik / $target_dak_nonfisik * 100;
    } else {
        $persentase = 0;
    }
    ?>
    <th bgcolor='#FFD700' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
    <?php $lebih_kurang = $realisasi_dak_nonfisik - $target_dak_nonfisik ?>
    <th bgcolor='#FFD700' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas5104 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 02 -->
<tr>
    <?php foreach ($laporan_perdinas512 as $value) : ?>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= $value['kode']; ?><?= $value['kode_rekening']; ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= $value['keterangan']; ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($value['realisasi'], 2, ',', '.'); ?></th>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($persen, 3, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($lk, 2, ',', '.'); ?></th>
</tr>
<?php endforeach; ?>
<tr>
    <?php foreach ($laporan_perdinas512 as $value) : ?>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 05 -->
<tr>
    <?php foreach ($laporan_perdinas515 as $value) : ?>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= $value['kode']; ?><?= $value['kode_rekening']; ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= $value['keterangan']; ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($value['realisasi'], 2, ',', '.'); ?></th>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($persen, 3, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($lk, 2, ',', '.'); ?></th>
</tr>
<?php endforeach; ?>
<tr>
    <?php foreach ($laporan_perdinas515 as $value) : ?>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- ============================================================================================================================== -->
<!-- PENDAPATAN TRANSFER ANTAR DAERAH -->
<?php foreach ($jenis_pendapatan601 as $value) : ?>

    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($st601->target601, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($re601->realisasi, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($re601->realisasi > 0 && $st601->target601 > 0) {
            $persentase = $re601->realisasi / $st601->target601 * 100;
        } else {
            $persentase = 0;
        }
        $lebih_kurang = $re601->realisasi - $st601->target601;
        ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    <tr>
        <td></td>
        <td>422.01.01</td>
        <td>Pendapatan Bagi Hasil Pajak</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 6 dan opd 1 -->
<!-- kode 01 -->
<tr>
    <?php $no = 1;
    ?>
    <?php foreach ($laporan_perdinas601 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- ============================================================================================================================== -->
<!-- LAIN-LAIN PENDAPATAN DAERAH YANG SAH -->
<tr>
    <th bgcolor='#FFFF00' style='color:#FFFFFF'>43</th>
    <th bgcolor='#FFFF00' style='color:#FFFFFF' colspan="2">LAIN-LAIN PENDAPATAN DAERAH YANG SAH</th>
    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($target_llpd, 2, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($realisasi_llpd, 2, ',', '.'); ?></th>
    <!--Persentase didapat dari realisasi / target * 100 -->
    <?php if ($realisasi_llpd > 0 && $realisasi_llpd > 0) {
        $persentase = $realisasi_llpd / $realisasi_llpd * 100;
    } else {
        $persentase = 0;
    }
    $lebih_kurang = $realisasi_llpd - $realisasi_llpd;
    ?>
    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>

<?php foreach ($jenis_pendapatan701 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($target_ph, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_ph, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($realisasi_ph > 0 && $target_ph > 0) {
            $persentase = $realisasi_ph / $target_ph * 100;
        } else {
            $persentase = 0;
        }
        $lebih_kurang = $realisasi_ph - $target_ph;
        ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Menampilkan data jenis pajak 7 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php foreach ($laporan_perdinas701 as $value) : ?>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= $value['kode']; ?><?= $value['kode_rekening']; ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= $value['keterangan']; ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($value['realisasi'], 2, ',', '.'); ?></th>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persentase = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persentase = 0;
        }
        $lebih_kurang = $value['realisasi'] - $value['target'];
        ?>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<?php endforeach; ?>
<tr>
    <?php $no = 1;
    ?>
    <?php foreach ($laporan_perdinas701 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>

<!-- menampilkan jenis pajak 8 -->
<!-- 433 -->
<?php foreach ($jenis_pendapatan801 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($target_llp, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_llp, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($realisasi_llp > 0 && $target_llp > 0) {
            $persentase = $realisasi_llp / $target_llp * 100;
        } else {
            $persentase = 0;
        }
        $lebih_kurang = $realisasi_llp - $target_llp;
        ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Menampilkan data jenis pajak 8 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php
    $i801 = 0;
    ?>
    <?php foreach ($laporan_perdinas801 as $value) : ?>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= $value['kode']; ?>01</th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'>LAIN-LAIN PENDAPATAN</th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($value['realisasi'], 2, ',', '.'); ?></th>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($persen, 3, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($lk, 2, ',', '.'); ?></th>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 8 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas801 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!--Persentase didapat dari realisasi / target * 100 -->
        <?php if ($value['realisasi'] > 0 && $value['target'] > 0) {
            $persen = $value['realisasi'] / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $value['realisasi'] - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
</tr>
<?php endforeach; ?>
<!-- ============================================================================================================================== -->
<!-- JUMLAH -->
<tr>
    <th bgcolor='#00FF00' style='color:#FFFFFF'></th>
    <th bgcolor='#00FF00' style='color:#FFFFFF'></th>
    <th bgcolor='#00FF00' style='color:#FFFFFF'>JUMLAH</th>
    <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($target_jumlah, 2, ',', '.'); ?></th>
    <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($realisasi_jumlah, 2, ',', '.'); ?></th>
    <!--Persentase didapat dari realisasi / target * 100 -->
    <?php if ($realisasi_jumlah > 0 && $target_jumlah > 0) {
        $persentase = $realisasi_jumlah / $target_jumlah * 100;
    } else {
        $persentase = 0;
    }
    $lebih_kurang = $realisasi_jumlah - $target_jumlah;
    ?>
    <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($persentase, 3, ',', '.'); ?></th>
    <th bgcolor='#00FF00' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<!-- ============================================================================================================================== -->

            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>


<?= $this->endSection(); ?>