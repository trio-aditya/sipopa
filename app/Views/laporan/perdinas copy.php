<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
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

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    // return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>

<!-- Realisasi dengan jenis pajak 1 -->
<tr>
    <?php foreach ($laporan_perdinas1 as $value) : ?>
        <td><?= $value['realisasi']; ?></td>
    <?php endforeach; ?>
</tr>
<br>

<div class="row">
    <div class="col-sm-6">
        <table class="table table-hover">

            <tr>
                <?php foreach ($laporan_perdinas1 as $value) : ?>
                    <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                    <td><?= $value['keterangan']; ?></td>
                    <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
                    <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>


        </table>
    </div>
    <div class="col-sm-6">
        <table class="table table-hover">

            <tr>
                <?php foreach ($bulan_lalu as $va) : ?>
                    <td><?= number_format($va['realisasi'], 2, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>
</div>
<!-- Sum Target 1 -->
<!-- Pajak Daerah -->
<?php foreach ($sum_target1 as $da) : ?>
<?php endforeach; ?>

<!-- Sum Target 2 -->
<!-- Retribusi -->
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
<!-- Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan -->
<?php foreach ($sum_target13 as $data13) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target14 as $data14) : ?>
<?php endforeach; ?>


<!-- Pendapatan Asli Daerah-->
<?php
$pad = 0;
$pd = 0;
$retribusi = 0;
$hpkdd = 0;
$pendapatan_daerah = 0;
$realisasi = 0;

$pd = $da->target;
$retribusi = $data2->target2 + $data3->target3 + $data4->target4 + $data5->target5
    + $data6->target6 + $data7->target7 + $data8->target8 + $data9->target9 + $data10->target10
    + $data11->target11 + $data12->target12;
$hpkdd = $data13->target13 + $data14->target14;
$pad = $pd + $retribusi;
$pendapatan_daerah = $pad;

// Realisasi
// $realisasi = $re->realisasi;
?>

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
            <h3 class="box-title">Realisasi Penerimaan Pendapatan Asli Daerah</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            Selamat datang Admin di Sistem Informasi Laporan Realisasi Penerimaan Pendapatan Asli Daerah Kabupaten Lampung Tengah
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <div class="box">
        <div class="box-header">

            <a href="/laporanPerdinas/excel" class="btn btn-success" role="button" aria-disabled="true"><i class="fa fa-file-excel-o"></i> EXCEL</a>
            <!-- <a href="/laporanPerdinas/pdf" class="btn btn-info" role="button" aria-disabled="true"><i class="fa fa-file-pdf-o"></i> PDF</a> -->

            <!-- <?= tgl_indo(date('Y-m-d')); ?> -->
            <!-- <h3 class="box-title">LAPORAN REALISASI PENERIMAAN PENDAPATAN ASLI DAERAH<br>
                BERDASARKAN TARGET APBD SAMPAI DENGAN TANGGAL : <?= tgl_indo(date('Y-m-')); ?>
            </h3> -->

            <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">KODE REKENING</th>
                    <th rowspan="2">JENIS PENERIMAAN</th>
                    <th rowspan="2">TARGET APBD</th>
                    <th colspan="3">
                        <center>REALISASI</center>
                    </th>
                    <th rowspan="2">%</th>
                    <th rowspan="2">LEBIH/KURANG</th>
                </tr>
                <tr>
                    <th>BULAN INI</th>
                    <th>BULAN LALU</th>
                    <th>S/D BLN INI</th>
                </tr>
                <tr>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                    <th bgcolor='#FFFF00' style='color:#000000'>PENDAPATAN DAERAH</th>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pendapatan_daerah, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                </tr>
                <tr>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                    <th bgcolor='#FFFF00' style='color:#000000'>PENDAPATAN ASLI DAERAH</th>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pad, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                    <th bgcolor='#FFFF00' style='color:#000000'></th>
                </tr>
                <?php foreach ($jenis_pendapatan1 as $value) : ?>
                    <tr>
                        <th bgcolor='#0000FF' style='color:#000000'></th>
                        <th bgcolor='#0000FF' style='color:#000000'><?= $value['jenis_pajak']; ?></th>
                        <th bgcolor='#0000FF' style='color:#000000'></th>
                        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($pd, 2, ',', '.'); ?></th>
                        <th bgcolor='#0000FF' style='color:#000000'></th>
                        <th bgcolor='#0000FF' style='color:#000000'></th>
                        <th bgcolor='#0000FF' style='color:#000000'></th>
                        <th bgcolor='#0000FF' style='color:#000000'></th>
                        <th bgcolor='#0000FF' style='color:#000000'></th>
                    <tr>
                        <th bgcolor='#00FF00' style='color:000000'></th>
                        <th bgcolor='#00FF00' style='color:000000'></th>
                        <th bgcolor='#00FF00' style='color:000000'><?= $value['nama_opd']; ?></th>
                        <?php foreach ($sum_target1 as $value) : ?>
                            <th bgcolor='#00FF00' style='color:000000'><?= number_format($value->target, 2, ',', '.'); ?></th>
                        <?php endforeach; ?>
                        <!-- Realisasi dengan jenis pajak 1 -->
                        <?php foreach ($sum_realisasi as $re) : ?>
                            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re->realisasi, 2, ',', '.'); ?></th>
                        <?php endforeach; ?>
                        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
                        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
                        <?php foreach ($sum_realisasi as $re) : ?>
                            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re->realisasi, 2, ',', '.'); ?></th>
                        <?php endforeach; ?>
                        <th bgcolor='#00FF00' style='color:000000'></th>
                        <th bgcolor='#00FF00' style='color:000000'></th>
                        <th bgcolor='#00FF00' style='color:000000'></th>
                    </tr>
                    </tr>

                <?php endforeach; ?>
                <tr>
                    <?php $no = 1; ?>
                    <?php foreach ($laporan_perdinas1 as $value) : ?>
                        <td align="center"><?= $no++ ?></td>
                        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                        <td><?= $value['keterangan']; ?></td>
                        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
                        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>
                        <?php foreach ($bulan_lalu as $va) : ?>
                            <td><?= $va['realisasi']; ?></td>
                        <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
            <!-- 2 -->
            <?php foreach ($jenis_pendapatan2 as $value) : ?>
                <tr>
                    <th style="background-color: blue;"></th>
                    <th style="background-color: blue;"><?= $value['jenis_pajak']; ?></th>
                    <th style="background-color: blue;"></th>
                    <th style="background-color: blue;"><?= number_format($retribusi, 2, ',', '.'); ?></th>
                    <th style="background-color: blue;"></th>
                    <th style="background-color: blue;"></th>
                    <th style="background-color: blue;"></th>
                    <th style="background-color: blue;"></th>
                    <th style="background-color: blue;"></th>
                <tr>
                    <th style="background-color: green;"></th>
                    <th style="background-color: green;"></th>
                    <th style="background-color: green;">I. <?= $value['nama_opd']; ?></th>
                    <?php foreach ($sum_target2 as $data) : ?>
                        <th style="background-color: green;"><?= number_format($data->target2, 2, ',', '.'); ?></th>
                    <?php endforeach; ?>
                    <th style="background-color: green;"></th>
                    <th style="background-color: green;"></th>
                    <th style="background-color: green;"></th>
                    <th style="background-color: green;"></th>
                    <th style="background-color: green;"></th>
                </tr>
                </tr>

            <?php endforeach; ?>
            <tr>

                <?php $no = 1; ?>
                <?php foreach ($laporan_perdinas2 as $value) : ?>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                    <td><?= $value['keterangan']; ?></td>
                    <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

            </tr>
        <?php endforeach; ?>

        <!-- Retribusi 2 -->
        <?php foreach ($jenis_pendapatan3 as $value) : ?>
            <tr>
                <th style="background-color: green;"></th>
                <th style="background-color: green;"></th>
                <th style="background-color: green;">II. <?= $value['nama_opd']; ?></th>
                <?php foreach ($sum_target3 as $data) : ?>
                    <th style="background-color: green;"><?= number_format($data->target3, 2, ',', '.'); ?></th>
                <?php endforeach; ?>
                <th style="background-color: green;"></th>
                <th style="background-color: green;"></th>
                <th style="background-color: green;"></th>
                <th style="background-color: green;"></th>
                <th style="background-color: green;"></th>
            </tr>
        <?php endforeach; ?>
        <tr>

            <?php $no = 1; ?>
            <?php foreach ($laporan_perdinas3 as $value) : ?>
                <td align="center"><?= $no++ ?></td>
                <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                <td><?= $value['keterangan']; ?></td>
                <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        </tr>
    <?php endforeach; ?>

    <!-- Retribusi 4 -->
    <?php foreach ($jenis_pendapatan4 as $value) : ?>
        <tr>
            <th style="background-color: green;"></th>
            <th style="background-color: green;"></th>
            <th style="background-color: green;">III. <?= $value['nama_opd']; ?></th>
            <?php foreach ($sum_target4 as $data) : ?>
                <th style="background-color: green;"><?= number_format($data->target4, 2, ',', '.'); ?></th>
            <?php endforeach; ?>
            <th style="background-color: green;"></th>
            <th style="background-color: green;"></th>
            <th style="background-color: green;"></th>
            <th style="background-color: green;"></th>
            <th style="background-color: green;"></th>
        </tr>
    <?php endforeach; ?>
    <tr>

        <?php $no = 1; ?>
        <?php foreach ($laporan_perdinas4 as $value) : ?>
            <td align="center"><?= $no++ ?></td>
            <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
            <td><?= $value['keterangan']; ?></td>
            <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

    </tr>
<?php endforeach; ?>

<!-- Retribusi 5 -->
<?php foreach ($jenis_pendapatan5 as $value) : ?>
    <tr>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;">IV. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target5 as $data) : ?>
            <th style="background-color: green;"><?= number_format($data->target5, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas5 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

</tr>
<?php endforeach; ?>

<!-- Retribusi 6 -->
<?php foreach ($jenis_pendapatan6 as $value) : ?>
    <tr>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;">V. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target6 as $data) : ?>
            <th style="background-color: green;"><?= number_format($data->target6, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas6 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

</tr>
<?php endforeach; ?>

<!-- Retribusi 7 -->
<?php foreach ($jenis_pendapatan7 as $value) : ?>
    <tr>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;">VI. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target7 as $data) : ?>
            <th style="background-color: green;"><?= number_format($data->target7, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas7 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

</tr>
<?php endforeach; ?>

<!-- Retribusi 8 -->
<?php foreach ($jenis_pendapatan8 as $value) : ?>
    <tr>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;">VII. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target8 as $data) : ?>
            <th style="background-color: green;"><?= number_format($data->target8, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas8 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

</tr>
<?php endforeach; ?>

<!-- Retribusi 9 -->
<?php foreach ($jenis_pendapatan9 as $value) : ?>
    <tr>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;">VIII. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target9 as $data) : ?>
            <th style="background-color: green;"><?= number_format($data->target9, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas9 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

</tr>
<?php endforeach; ?>

<!-- Retribusi 10 -->
<?php foreach ($jenis_pendapatan10 as $value) : ?>
    <tr>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;">IX. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target10 as $data) : ?>
            <th style="background-color: green;"><?= number_format($data->target10, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas10 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

</tr>
<?php endforeach; ?>

<!-- Retribusi 11 -->
<?php foreach ($jenis_pendapatan11 as $value) : ?>
    <tr>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;">X. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target11 as $data) : ?>
            <th style="background-color: green;"><?= number_format($data->target11, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas11 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

</tr>
<?php endforeach; ?>

<!-- Retribusi 12 -->
<?php foreach ($jenis_pendapatan12 as $value) : ?>
    <tr>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;">X. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target12 as $data) : ?>
            <th style="background-color: green;"><?= number_format($data->target12, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas12 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

</tr>
<?php endforeach; ?>

<!-- 2 -->

<!-- 3 -->
<?php foreach ($jenis_pendapatan13 as $value) : ?>
    <tr>
        <th style="background-color: blue;"></th>
        <th style="background-color: blue;"><?= $value['jenis_pajak']; ?></th>
        <th style="background-color: blue;"></th>
        <th style="background-color: blue;"><?= number_format($hpkdd, 2, ',', '.'); ?></th>
        <th style="background-color: blue;"></th>
        <th style="background-color: blue;"></th>
        <th style="background-color: blue;"></th>
        <th style="background-color: blue;"></th>
        <th style="background-color: blue;"></th>
    <tr>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;">I. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target13 as $data) : ?>
            <th style="background-color: green;"><?= number_format($data->target13, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
    </tr>
    </tr>

<?php endforeach; ?>
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas13 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

</tr>
<?php endforeach; ?>

<!-- HPKDD  -->
<?php foreach ($jenis_pendapatan14 as $value) : ?>
    <tr>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;">II. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target14 as $data) : ?>
            <th style="background-color: green;"><?= number_format($data->target14, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
        <th style="background-color: green;"></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1; ?>
    <?php foreach ($laporan_perdinas14 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

</tr>
<?php endforeach; ?>
<!-- 3 -->

            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>
<?= $this->endSection(); ?>