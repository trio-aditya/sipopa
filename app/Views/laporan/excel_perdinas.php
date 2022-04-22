<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Perdinas.xls");
?>
<?php
error_reporting(0);
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
}
?>

<!-- Sum Target 1 -->
<!-- Pajak Daerah -->
<?php foreach ($sum_target1 as $da) : ?>
<?php endforeach; ?>
<!-- Bulan ini Pajak Daerah -->
<?php foreach ($sum_realisasi as $re) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Pajak Daerah -->
<?php foreach ($sum_realisasi2 as $re2) : ?>
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
<!-- Bulan ini Dinas Kesehatan -->
<?php foreach ($sum_realisasi3 as $re3) : ?>
<?php endforeach; ?>
<!-- Bulan Lalu Dinas Kesehatan -->
<?php foreach ($sum_realisasi4 as $re4) : ?>
<?php endforeach; ?>

<!-- Bulan ini Dinas Perdagangan -->
<?php foreach ($sum_realisasi5 as $re5) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Dinas Perdagangan -->
<?php foreach ($sum_realisasi6 as $re6) : ?>
<?php endforeach; ?>

<!-- Bulan ini Dinas Pemukiman -->
<?php foreach ($sum_realisasi7 as $re7) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Dinas Pemukiman -->
<?php foreach ($sum_realisasi8 as $re8) : ?>
<?php endforeach; ?>

<!-- Bulan ini Dinas Perhubungan -->
<?php foreach ($sum_realisasi9 as $re9) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Dinas Perhubungan -->
<?php foreach ($sum_realisasi10 as $re10) : ?>
<?php endforeach; ?>

<!-- Bulan ini BKPSDM -->
<?php foreach ($sum_realisasi11 as $re11) : ?>
<?php endforeach; ?>
<!-- Bulan lalu BKPSDM -->
<?php foreach ($sum_realisasi12 as $re12) : ?>
<?php endforeach; ?>

<!-- Bulan ini Dinas Bina Marga -->
<?php foreach ($sum_realisasi13 as $re13) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Dinas Bina Marga -->
<?php foreach ($sum_realisasi14 as $re14) : ?>
<?php endforeach; ?>

<!-- Bulan ini Dinas Komunikasi dan Informatika -->
<?php foreach ($sum_realisasi15 as $re15) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Dinas Komunikasi dan Informatika -->
<?php foreach ($sum_realisasi16 as $re16) : ?>
<?php endforeach; ?>

<!-- Bulan ini Dinas Pertanian -->
<?php foreach ($sum_realisasi17 as $re17) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Dinas Pertanian -->
<?php foreach ($sum_realisasi18 as $re18) : ?>
<?php endforeach; ?>

<!-- Bulan ini Dinas Perikanan -->
<?php foreach ($sum_realisasi19 as $re19) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Dinas Perikanan -->
<?php foreach ($sum_realisasi20 as $re20) : ?>
<?php endforeach; ?>

<!-- Bulan ini Bagian Umum -->
<?php foreach ($sum_realisasi21 as $re21) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Bagian Umum -->
<?php foreach ($sum_realisasi22 as $re22) : ?>
<?php endforeach; ?>

<!-- Bulan ini Bagian Perekonomian -->
<?php foreach ($sum_realisasi23 as $re23) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Bagian Perekonomian -->
<?php foreach ($sum_realisasi24 as $re24) : ?>
<?php endforeach; ?>

<!-- Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan -->
<!-- Target HPKD -->
<?php foreach ($sum_target13 as $data13) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target14 as $data14) : ?>
<?php endforeach; ?>

<!-- Bulan ini BPKAD -->
<?php foreach ($sum_realisasi25 as $re25) : ?>
<?php endforeach; ?>
<!-- Bulan lalu BPKAD -->
<?php foreach ($sum_realisasi26 as $re26) : ?>
<?php endforeach; ?>

<!-- Bulan ini Bagian Perekonomian -->
<?php foreach ($sum_realisasi27 as $re27) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Bagian Perekonomian -->
<?php foreach ($sum_realisasi28 as $re28) : ?>
<?php endforeach; ?>


<!-- Lain-lain PAD yang Sah -->
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

<!-- Bulan ini Badan Pendapatan Daerah -->
<?php foreach ($sum_realisasi29 as $re29) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Badan Pendapatan Daerah -->
<?php foreach ($sum_realisasi30 as $re30) : ?>
<?php endforeach; ?>

<!-- Bulan ini Dinas Perumahan dan Permukiman -->
<?php foreach ($sum_realisasi31 as $re31) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Dinas Perumahan dan Permukiman -->
<?php foreach ($sum_realisasi32 as $re32) : ?>
<?php endforeach; ?>

<!-- Bulan ini BPKAD -->
<?php foreach ($sum_realisasi39 as $re39) : ?>
<?php endforeach; ?>
<!-- Bulan lalu BPKAD -->
<?php foreach ($sum_realisasi40 as $re40) : ?>
<?php endforeach; ?>

<!-- Bulan ini RSU Demang -->
<?php foreach ($sum_realisasi33 as $re33) : ?>
<?php endforeach; ?>
<!-- Bulan lalu RSU Demang -->
<?php foreach ($sum_realisasi34 as $re34) : ?>
<?php endforeach; ?>

<!--Bulan ini Dinas Kesehatan -->
<?php foreach ($sum_realisasi35 as $re35) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Dinas Kesehatan -->
<?php foreach ($sum_realisasi36 as $re36) : ?>
<?php endforeach; ?>

<!-- Bulan ini Pelayanan Pasar -->
<?php foreach ($sum_realisasi37 as $re37) : ?>
<?php endforeach; ?>
<!-- Bulan lalu Pelayanan Pasar -->
<?php foreach ($sum_realisasi38 as $re38) : ?>
<?php endforeach; ?>

<!-- Pendapatan Asli Daerah-->

<!-- Lain-Lain pendapatan -->
<!-- Sum Target jenis pendapatan 8 opd 1 -->
<?php foreach ($sum_target801 as $data801) : ?>
<?php endforeach; ?>
<!-- Bulan ini -->
<?php foreach ($bsum_realisasi801 as $bdata801) : ?>
<?php endforeach; ?>

<!-- DANA TRANSFER -->
<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- Menampilkan target DBH -->
<!-- kode 0101 -->
<?php foreach ($sum_target5101 as $st5101) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan ini DBH -->
<?php foreach ($sum_realisasi5101 as $re5101) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan lalu DBH -->
<?php foreach ($bsum_realisasi5101 as $bre5101) : ?>
<?php endforeach; ?>

<!-- kode 0102 -->
<?php foreach ($sum_target5102 as $st5102) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan ini DAK Umum -->
<?php foreach ($sum_realisasi5102 as $re5102) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan lalu DAK Umum -->
<?php foreach ($bsum_realisasi5102 as $bre5102) : ?>
<?php endforeach; ?>


<!-- kode 0103 -->
<!-- kode 0104 -->
<!-- Menampilkan target DAK Fisik -->
<?php foreach ($sum_target5103 as $st5103) : ?>
<?php endforeach; ?>
<!-- Menampilkan DAK Non Fisik -->
<?php foreach ($sum_target5104 as $st5104) : ?>
<?php endforeach; ?>

<!-- Realisasi bulan ini DAK Fisik -->
<?php foreach ($sum_realisasi5103 as $re5103) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan lalu DAK Fisik -->
<?php foreach ($bsum_realisasi5103 as $bre5103) : ?>
<?php endforeach; ?>

<!-- Realisasi bulan ini DAK Non Fisik -->
<?php foreach ($sum_realisasi5104 as $re5104) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan lalu DAK Non Fisik -->
<?php foreach ($bsum_realisasi5104 as $bre5104) : ?>
<?php endforeach; ?>

<!-- kode 02 -->
<?php foreach ($sum_target512 as $st512) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan ini DID -->
<?php foreach ($sum_realisasi512 as $re512) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan lalu DID -->
<?php foreach ($bsum_realisasi512 as $bre512) : ?>
<?php endforeach; ?>

<!-- kode 05 -->
<?php foreach ($sum_target515 as $st515) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan ini Dana Desa -->
<?php foreach ($sum_realisasi515 as $re515) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan lalu Dana Desa -->
<?php foreach ($bsum_realisasi515 as $bre515) : ?>
<?php endforeach; ?>

<!-- Pendapatan Transfer Antar Daerah -->
<!-- kode 01 -->
<?php foreach ($sum_target601 as $st601) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan ini Pendapatan Transfer Antar Daerah -->
<?php foreach ($sum_realisasi601 as $re601) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan lalu Pendapatan Transfer Antar Daerah -->
<?php foreach ($bsum_realisasi601 as $bre601) : ?>
<?php endforeach; ?>

<!-- Pendapatan Hibah -->
<!-- kode 01 -->
<?php foreach ($sum_target701 as $st701) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan ini Pendapatan Hibah -->
<?php foreach ($sum_realisasi701 as $re701) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan lalu Pendapatan Hibah -->
<?php foreach ($bsum_realisasi701 as $bre701) : ?>
<?php endforeach; ?>

<!-- Lain-Lain Pendapatan -->
<!-- kode 01 -->
<?php foreach ($sum_target801 as $st801) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan ini Lain-lain Pendapatan -->
<?php foreach ($sum_realisasi801 as $re801) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan lalu Lain-lain Pendapatan -->
<?php foreach ($bsum_realisasi801 as $bre801) : ?>
<?php endforeach; ?>

<?php
// Pajak Daerah
$pd = 0;
$pd_bulan_ini = 0;
$pd_bulan_lalu = 0;
$pd_sd_bulan_ini = 0;
$pd_persentase = 0;
$pd_lebih_kurang = 0;

// Retribusi
$retribusi = 0;
$retribusi_bulan_ini = 0;
$retribusi_bulan_lalu = 0;
$retribusi_sd_bulan_ini = 0;
$retribusi_persentase = 0;
$retribusi_lebih_kurang = 0;

// Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan
$hpkdd = 0;
$hpkd_bulan_ini = 0;
$hpkd_bulan_lalu = 0;
$hpkd_sd_bulan_ini = 0;
$hpkd_persentase = 0;
$hpkd_lebih_kurang = 0;

// Lain-lain PAD yang Sah
$lain_lain = 0;
$lain_lain_bulan_ini = 0;
$lain_lain_bulan_lalu = 0;
$lain_lain_sd_bulan_ini = 0;
$lain_lain_persentase = 0;
$lain_lain_lebih_kurang = 0;

// Pajak Asli Daerah
$pad = 0;
$pad_bulan_ini = 0;
$pad_bulan_lalu = 0;
$pad_sd_bulan_ini = 0;
$pad_persentase = 0;
$pad_lebih_kurang = 0;

// PENDAPATAN TRANSFER
// Dana Alokasi Khusus (DAK)
$dak_target = 0;
$dak_bulan_ini = 0;
$dak_bulan_lalu = 0;
$dak_sd_bulan_ini = 0;
$dak_persentase = 0;
$dak_kurang_lebih = 0;

// Dana Perimbangan
$dp_target = 0;
$dp_bulan_ini = 0;
$dp_bulan_lalu = 0;
$dp_sd_bulan_ini = 0;
$dp_persentase = 0;
$dp_kurang_lebih = 0;

// Pendapatan Transfer Pemerintah Pusat
$ptpp_target = 0;
$ptpp_bulan_ini = 0;
$ptpp_bulan_lalu = 0;
$ptpp_sd_bulan_ini = 0;
$ptpp_persentase = 0;
$ptpp_kurang_lebih = 0;

// PENDAPATAN TRANSFER
$pt_target = 0;
$pt_bulan_ini = 0;
$pt_bulan_lalu = 0;
$pt_sd_bulan_ini = 0;
$pt_persentase = 0;
$pt_lebih_kurang = 0;

// LAIN-LAIN PENDAPATAN DAERAH YANG SAH
// Pendapatan Hibah
$ph_target = 0;
$ph_bulan_ini = 0;
$ph_bulan_lalu = 0;
$ph_sd_bulan_ini = 0;
$ph_persentase = 0;
$ph_lebih_kurang = 0;

// LAIN-LAIN PENDAPATAN DAERAH YANG SAH
// Lain-Lain Pendapatan
$llp_target = 0;
$llp_bulan_ini = 0;
$llp_bulan_lalu = 0;
$llp_sd_bulan_ini = 0;
$llp_persentase = 0;
$llp_lebih_kurang = 0;

// LAIN-LAIN PENDAPATAN DAERAH YANG SAH
$llpd_target = 0;
$llpd_bulan_ini = 0;
$llpd_bulan_lalu = 0;
$llpd_sd_bulan_ini = 0;
$llpd_persentase = 0;
$llpd_lebih_kurang = 0;

// JUMLAH
$jumlah_target = 0;
$jumlah_bulan_ini = 0;
$jumlah_bulan_lalu = 0;
$jumlah_sd_bulan_ini = 0;
$jumlah_persentase = 0;
$jumlah_lebih_kurang = 0;

$pendapatan_daerah = 0;
$realisasi = 0;

//Pajak Daerah
// Target Pajak Daerah
$pd = $da->target;
// Bulan ini Pajak Daerah
$pd_bulan_ini = $pad_bulan_ini + $retribusi_bulan_ini;
// Bulan lalu Pajak Daerah
$pd_bulan_lalu = $pad_bulan_lalu + $retribusi_bulan_lalu;
// SD Bulan ini Pajak Daerah
$pd_sd_bulan_ini = $pd_bulan_ini + $pd_bulan_lalu;
// Persentase Pajak Daerah
$pd_persentase = $pd_sd_bulan_ini / $pd * 100;
// Lebih Kurang Pajak Daerah
$pd_lebih_kurang = $pd_sd_bulan_ini - $pd;

// Retribusi
// Target Retribusi
$retribusi = $data2->target2 + $data3->target3 + $data4->target4 + $data5->target5
    + $data6->target6 + $data7->target7 + $data8->target8 + $data9->target9 + $data10->target10
    + $data11->target11 + $data12->target12;
// Bulan ini Retribusi
$retribusi_bulan_ini = $re3->realisasi + $re5->realisasi + $re7->realisasi + $re9->realisasi + $re11->realisasi + $re13->realisasi
    + $re15->realisasi + $re17->realisasi + $re19->realisasi + $re21->realisasi + $re23->realisasi;
// Bulan lalu Retribusi
$retribusi_bulan_lalu = $re4->realisasi + $re6->realisasi + $re8->realisasi + $re10->realisasi + $re12->realisasi + $re14->realisasi
    + $re16->realisasi + $re18->realisasi + $re20->realisasi + $re22->realisasi + $re24->realisasi;
// SD Bulan ini Retribusi
$retribusi_sd_bulan_ini = $retribusi_bulan_ini + $retribusi_bulan_lalu;
// Persentase Retribusi
$retribusi_persentase = $retribusi_sd_bulan_ini / $retribusi * 100;
// Lebih Kurang Retribusi
$retribusi_lebih_kurang = $retribusi_sd_bulan_ini - $retribusi;

// Target HPKDD
$hpkdd = $data13->target13 + $data14->target14;
// Bulan ini HKPDD
$hpkd_bulan_ini = $re25->realisasi + $re27->realisasi;
// Bulan lalu HKPDD
$hpkd_bulan_lalu = $re26->realisasi + $re28->realisasi;
// SD Bulan ini HKPDD
$hpkd_sd_bulan_ini = $hpkd_bulan_ini + $hpkd_bulan_lalu;
// Persentase HKPDD
$hpkd_persentase = $hpkd_sd_bulan_ini / $hpkdd * 100;
// Lebih Kurang HKPDD
$hpkd_lebih_kurang = $hpkd_sd_bulan_ini - $hpkdd;

// Target Lain-lain PAD yang Sah
$lain_lain = $data15->target15 + $data16->target16 + $data17->target17 + $data18->target18 + $data19->target19 + $data20->target20;
// Bulan ini Lain-lain PAD yang Sah
$lain_lain_bulan_ini = $re29->realisasi + $re31->realisasi + $re39->realisasi + $re33->realisasi + $re35->realisasi + $re37->realisasi;
// Bulan lalu Lain-lain PAD yang Sah
$lain_lain_bulan_lalu = $re30->realisasi + $re32->realisasi + $re40->realisasi + $re34->realisasi + $re36->realisasi + $re38->realisasi;
// SD Bulan ini Lain-lain PAD yang Sah
$lain_lain_sd_bulan_ini = $lain_lain_bulan_ini + $lain_lain_bulan_lalu;
// Persentase Lain-lain PAD yang Sah
$lain_lain_persentase = $lain_lain_sd_bulan_ini / $lain_lain * 100;
// Lebih Kurang Lain-lain PAD yang Sah
$lain_lain_lebih_kurang = $lain_lain_sd_bulan_ini - $lain_lain;

// Pajak Asli Daerah
// Target PAD
$pad = $pd + $retribusi + $hkpdd + $lain_lain;
// Bulan ini PAD
$pad_bulan_ini = $pd_bulan_ini + $retribusi_bulan_ini + $hpkd_bulan_ini + $lain_lain_bulan_ini;
// Bulan lalu PAD
$pad_bulan_lalu = $pd_bulan_lalu + $retribusi_bulan_lalu + $hpkd_bulan_lalu + $lain_lain_bulan_lalu;
// SD Bulan ini PAD
$pad_sd_bulan_ini = $pad_bulan_ini + $pad_bulan_lalu;
// Persentase PAD
$pad_persentase = $pad_sd_bulan_ini / $pad * 100;
// Lebih Kurang PAD
$pad_lebih_kurang = $pad_sd_bulan_ini - $pad;

// PENDAPATAN TRANSFER
// Dana Alokasi Khusus (DAK)
$dak_target = $st5103->target5103 + $st5104->target5104;
$dak_bulan_ini = $re5103->realisasi + $re5104->realisasi;
$dak_bulan_lalu = $bre5103->realisasi + $bre5104->realisasi;
$dak_sd_bulan_ini = $dak_bulan_ini + $dak_bulan_lalu;
$dak_persentase = $dak_sd_bulan_ini / $dak_target * 100;
$dak_kurang_lebih = $dak_sd_bulan_ini / $dak_target;

// Dana Perimbangan
$dp_target = $st5101->target5101 + $st5102->target5102 + $dak_target;
$dp_bulan_ini = $re5101->realisasi + $re5102->realisasi + $dak_bulan_ini;
$dp_bulan_lalu = $bre5101->realisasi + $bre5102->realisasi + $dak_bulan_lalu;
$dp_sd_bulan_ini = $dp_bulan_ini + $dp_bulan_lalu;
$dp_persentase = $dp_sd_bulan_ini / $dp_target * 100;
$dp_kurang_lebih = $dp_sd_bulan_ini - $dp_target;

// Pendapatan Transfer Pemerintah Pusat
$ptpp_target = $dp_target + $st512->target512 + $st515->target515;
$ptpp_bulan_ini = $dp_bulan_ini + $re512->realisasi + $re515->realisasi;
$ptpp_bulan_lalu = $dp_bulan_lalu + $bre512->realisasi + $bre515->realisasi;
$ptpp_sd_bulan_ini = $ptpp_bulan_ini + $ptpp_bulan_lalu;
$ptpp_persentase = $ptpp_sd_bulan_ini / $ptpp_target * 100;
$ptpp_kurang_lebih = $ptpp_sd_bulan_ini - $ptpp_target;

//PENDAPATAN TRANSFER
$pt_target = $ptpp_target + $st601->target601;
$pt_bulan_ini = $ptpp_bulan_ini + $re601->realisasi;
$pt_bulan_lalu = $ptpp_bulan_lalu + $bre601->realisasi;
$pt_sd_bulan_ini = $pt_bulan_ini + $pt_bulan_lalu;
$pt_persentase = $pt_sd_bulan_ini / $pt_target * 100;
$pt_lebih_kurang = $pt_sd_bulan_ini - $pt_target;

//Lain-Lain Pendapatan Daerah yang Sah
//Pendapatan Hibah
$ph_target = $st701->target701;
$ph_bulan_ini = $re701->realisasi;
$ph_bulan_lalu = $bre701->realisasi;
$ph_sd_bulan_ini = $ph_bulan_ini + $ph_bulan_lalu;
$ph_persentase = $ph_sd_bulan_ini / $ph_target * 100;
$ph_lebih_kurang = $ph_sd_bulan_ini - $ph_target;

//Lain-Lain Pendapatan Daerah yang Sah
//Lain-lain pendapatan
$llp_target = $st801->target801;
$llp_bulan_ini = $re801->realisasi;
$llp_bulan_lalu = $bre801->realisasi;
$llp_sd_bulan_ini = $llp_bulan_ini + $llp_bulan_lalu;
$llp_persentase = $llp_sd_bulan_ini / $llp_target * 100;
$llp_lebih_kurang = $llp_sd_bulan_ini - $llp_target;

//Lain-Lain Pendapatan Daerah yang Sah
$llpd_target = $st701->target701 + $st801->target801;
$llpd_bulan_ini = $re701->realisasi + $re801->realisasi;
$llpd_bulan_lalu = $bre701->realisasi + $bre801->realisasi;
$llpd_sd_bulan_ini = $llpd_bulan_ini + $llpd_bulan_lalu;
$llpd_persentase = $llpd_sd_bulan_ini / $llpd_target * 100;
$llpd_lebih_kurang = $llpd_sd_bulan_ini - $llpd_target;

//JUMLAH
$jumlah_target = $pad + $pt_target + $llpd_target;
$jumlah_bulan_ini = $pad_bulan_ini + $pt_bulan_ini + $llpd_bulan_ini;
$jumlah_bulan_lalu = $pad_bulan_lalu + $pt_bulan_lalu + $llpd_bulan_lalu;
$jumlah_sd_bulan_ini = $jumlah_bulan_ini + $jumlah_bulan_lalu;
$jumlah_persentase = $jumlah_sd_bulan_ini / $jumlah_target * 100;
$jumlah_lebih_kurang = $jumlah_sd_bulan_ini - $jumlah_target;

$pendapatan_daerah = $pad;


// lain-lain pendapatan sesuai dengan peraturan perundang-undangan

$llp = $data801->target801;
// bulan ini
$bllp = $bdata801->brealisasi801;

// Realisasi
// $realisasi = $re->realisasi;

$bulan = date('m');
$bulan_lalu = (date('m') - 1);

use App\Models\LaporanModel;

$this->laporanModel = new LaporanModel();
?>
<html>

<body>
    <table>
        <tr>
            <th colspan="9">
                <center>LAPORAN REALISASI PENERIMAAN PENDAPATAN ASLI DAERAH</center>
            </th>
        </tr>
        <tr>
            <th colspan="9">
                <center>BERDASARKAN TARGET APBD SAMPAI DENGAN TANGGAL : <?= tgl_indo(date('Y-m')); ?></center>
            </th>
        </tr>
        <tr>
            <th></th>
        </tr>
    </table>
    <table class="table table-hover" border="1">
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
            <th bgcolor='#FFFF00' style='color:#000000'>4</th>
            <th bgcolor='#FFFF00' style='color:#000000' colspan="2">PENDAPATAN DAERAH</th>
            <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($jumlah_target, 2, ',', '.'); ?></th>
            <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($jumlah_bulan_ini, 2, ',', '.'); ?></th>
            <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($jumlah_bulan_lalu, 2, ',', '.'); ?></th>
            <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($jumlah_sd_bulan_ini, 2, ',', '.'); ?></th>
            <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($jumlah_persentase, 3, ',', '.'); ?></th>
            <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($jumlah_lebih_kurang, 2, ',', '.'); ?></th>
        </tr>
        <tr>
            <th bgcolor='#FFFF00' style='color:#000000'>41</th>
            <th bgcolor='#FFFF00' style='color:#000000' colspan="2">PENDAPATAN ASLI DAERAH</th>
            <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pad, 2, ',', '.'); ?></th>
            <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pad_bulan_ini, 2, ',', '.'); ?></th>
            <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pad_bulan_lalu, 2, ',', '.'); ?></th>
            <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pad_sd_bulan_ini, 2, ',', '.'); ?></th>
            <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pad_persentase, 3, ',', '.'); ?></th>
            <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pad_lebih_kurang, 2, ',', '.'); ?></th>

        </tr>
        <?php foreach ($jenis_pendapatan1 as $value) : ?>
            <tr>
                <th bgcolor='#0000FF' style='color:#000000'><?= $value['kode']; ?></th>
                <th bgcolor='#0000FF' style='color:#000000' colspan="2"><?= $value['jenis_pajak']; ?></th>
                <th bgcolor='#0000FF' style='color:#000000'><?= number_format($pd, 2, ',', '.'); ?></th>
                <!-- Realisasi dengan jenis pajak 1 -->
                <!-- Bulan ini Pajak Daerah -->
                <?php foreach ($sum_realisasi as $re) : ?>
                    <th bgcolor='#0000FF' style='color:000000'><?= number_format($re->realisasi, 2, ',', '.'); ?></th>
                <?php endforeach; ?>
                <!-- Bulan lalu Pajak Daerah -->
                <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
                <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
                <?php foreach ($sum_realisasi2 as $re2) : ?>
                    <th bgcolor='#0000FF' style='color:000000'><?= number_format($re2->realisasi, 2, ',', '.'); ?></th>
                <?php endforeach; ?>

                <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
                <?php $sd_bulan_ini = $re->realisasi + $re2->realisasi ?>
                <th bgcolor='#0000FF' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
                <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
                <?php $persentase = $sd_bulan_ini / $pd * 100 ?>
                <th bgcolor='#0000FF' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
                <?php $lebih_kurang = $sd_bulan_ini - $pd ?>
                <th bgcolor='#0000FF' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
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
                <?php foreach ($sum_realisasi2 as $re2) : ?>
                    <th bgcolor='#00FF00' style='color:000000'><?= number_format($re2->realisasi, 2, ',', '.'); ?></th>
                <?php endforeach; ?>
                <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
                <?php $sd_bulan_ini = $re->realisasi + $re2->realisasi ?>
                <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
                <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
                <?php $persentase = $sd_bulan_ini / $value->target * 100 ?>
                <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
                <?php $lebih_kurang = $sd_bulan_ini - $value->target ?>
                <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
            </tr>
            </tr>

        <?php endforeach; ?>
        <tr>
            <?php $no = 1;
            $i = 0;

            ?>

            <?php foreach ($laporan_perdinas1 as $value) : ?>
                <td align="center"><?= $no++ ?></td>

                <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                <td><?= $value['keterangan']; ?></td>
                <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
                <!-- Menampilkan data bulan sekarang -->
                <?php $bln = !empty($this->laporanModel->getData1($bulan)[$i]) ? number_format($this->laporanModel->getData1($bulan)[$i]['realisasi'], 2, ',', '.') : '0'; ?>
                <!-- Menampilkan data bulan lalu -->
                <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu($bulan_lalu)[$i]) ? number_format($this->laporanModel->bulan_lalu($bulan_lalu)[$i]['realisasi'], 2, ',', '.') : '0'; ?>
                <td><?= $bln  ?></td>
                <td><?= $bln_lalu; ?></td>
                <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
                <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
                <td><?= number_format($sampai_dengan, 2, ',', '.'); ?></td>
                <!--Persentase didapat dari S/D bulan ini / target * 100 -->
                <?php $persen = $sampai_dengan / $value['target'] * 100;
                $lk = $sampai_dengan - $value['target'];
                ?>
                <td><?= number_format($persen, 3, ',', '.'); ?></td>
                <td><?= number_format($lk, 2, ',', '.'); ?></td>
                <?php $i++ ?>
        </tr>
    <?php endforeach; ?>


    <!-- 2 -->
    <!-- Retribusi -->
    <?php foreach ($jenis_pendapatan2 as $value) : ?>
        <tr>
            <th bgcolor='#0000FF' style='color:#000000'><?= $value['kode']; ?></th>
            <th th bgcolor='#0000FF' style='color:#000000' colspan="2"><?= $value['jenis_pajak']; ?></th>
            <th bgcolor='#0000FF' style='color:#000000'><?= number_format($retribusi, 2, ',', '.'); ?></th>
            <th bgcolor='#0000FF' style='color:#000000'><?= number_format($retribusi_bulan_ini, 2, ',', '.'); ?></th>
            <th bgcolor='#0000FF' style='color:#000000'><?= number_format($retribusi_bulan_lalu, 2, ',', '.'); ?></th>
            <th bgcolor='#0000FF' style='color:#000000'><?= number_format($retribusi_sd_bulan_ini, 2, ',', '.'); ?></th>
            <th bgcolor='#0000FF' style='color:#000000'><?= number_format($retribusi_persentase, 3, ',', '.'); ?></th>
            <th bgcolor='#0000FF' style='color:#000000'><?= number_format($retribusi_lebih_kurang, 2, ',', '.'); ?></th>

        <tr>
            <th bgcolor='#00FF00' style='color:000000'></th>
            <th bgcolor='#00FF00' style='color:000000'></th>
            <th bgcolor='#00FF00' style='color:000000'>I. <?= $value['nama_opd']; ?></th>
            <?php foreach ($sum_target2 as $data) : ?>
                <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target2, 2, ',', '.'); ?></th>
            <?php endforeach; ?>

            <!-- Realisasi dengan jenis pajak 1 -->
            <?php foreach ($sum_realisasi3 as $re3) : ?>
                <th bgcolor='#00FF00' style='color:000000'><?= number_format($re3->realisasi, 2, ',', '.'); ?></th>
            <?php endforeach; ?>
            <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
            <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
            <?php foreach ($sum_realisasi4 as $re4) : ?>
                <th bgcolor='#00FF00' style='color:000000'><?= number_format($re4->realisasi, 2, ',', '.'); ?></th>
            <?php endforeach; ?>
            <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
            <?php $sd_bulan_ini = $re3->realisasi + $re4->realisasi ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
            <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
            <?php $persentase = ($sd_bulan_ini / $data->target2) * 100 ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
            <?php $lebih_kurang = $sd_bulan_ini - $data->target2 ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
        </tr>
        </tr>

    <?php endforeach; ?>
    <tr>

        <?php $no = 1;
        $i2 = 0; ?>
        <?php foreach ($laporan_perdinas2 as $value) : ?>
            <td align="center"><?= $no++ ?></td>
            <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
            <td><?= $value['keterangan']; ?></td>
            <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

            <!-- Menampilkan data bulan sekarang -->
            <?php $bln = !empty($this->laporanModel->getData2($bulan)[$i2]) ? number_format($this->laporanModel->getData2($bulan)[$i2]['realisasi'], 2, ',', '.') : '0'; ?>
            <!-- Menampilkan data bulan lalu -->
            <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu2($bulan_lalu)[$i2]) ? number_format($this->laporanModel->bulan_lalu2($bulan_lalu)[$i2]['realisasi'], 2, ',', '.') : '0'; ?>
            <td><?= $bln  ?></td>
            <td><?= $bln_lalu; ?></td>
            <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
            <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
            <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
            <!--Persentase didapat dari S/D bulan ini / target * 100 -->
            <?php $persen = $sampai_dengan / $value['target'] * 100;

            $lk = $sampai_dengan - $value['target'];
            ?>
            <td><?= number_format($persen, 3, ',', '.'); ?></td>
            <td><?= number_format($lk, 2, ',', '.'); ?></td>
            <?php $i2++ ?>
    </tr>
<?php endforeach; ?>

<!-- Retribusi 2 -->
<?php foreach ($jenis_pendapatan3 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>II. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target3 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target3, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 2 dan opd 3 -->
        <?php foreach ($sum_realisasi5 as $re5) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re5->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi6 as $re6) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re6->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re5->realisasi + $re6->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target3) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target3 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i3 = 0; ?>
    <?php foreach ($laporan_perdinas3 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData3($bulan)[$i3]) ? number_format($this->laporanModel->getData3($bulan)[$i3]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu3($bulan_lalu)[$i3]) ? number_format($this->laporanModel->bulan_lalu3($bulan_lalu)[$i3]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i3++ ?>
</tr>
<?php endforeach; ?>

<!-- Retribusi 4 -->
<?php foreach ($jenis_pendapatan4 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>III. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target4 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target4, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 1 -->
        <?php foreach ($sum_realisasi7 as $re7) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re7->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi8 as $re8) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re8->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re7->realisasi + $re8->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target4) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target4 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i4 = 0; ?>
    <?php foreach ($laporan_perdinas4 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData4($bulan)[$i4]) ? number_format($this->laporanModel->getData4($bulan)[$i4]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu4($bulan_lalu)[$i4]) ? number_format($this->laporanModel->bulan_lalu4($bulan_lalu)[$i4]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i4++ ?>

</tr>
<?php endforeach; ?>

<!-- Retribusi 5 -->
<?php foreach ($jenis_pendapatan5 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>IV. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target5 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target5, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 1 -->
        <?php foreach ($sum_realisasi9 as $re9) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re9->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi10 as $re10) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re10->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re9->realisasi + $re10->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target5) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target5 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i5 = 0; ?>
    <?php foreach ($laporan_perdinas5 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData5($bulan)[$i5]) ? number_format($this->laporanModel->getData5($bulan)[$i5]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu5($bulan_lalu)[$i5]) ? number_format($this->laporanModel->bulan_lalu5($bulan_lalu)[$i5]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i5++ ?>

</tr>
<?php endforeach; ?>

<!-- Retribusi 6 -->
<?php foreach ($jenis_pendapatan6 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>V. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target6 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target6, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi11 as $re11) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re11->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi12 as $re12) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re12->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re11->realisasi + $re12->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target6) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target6 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i6 = 0; ?>
    <?php foreach ($laporan_perdinas6 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData6($bulan)[$i6]) ? number_format($this->laporanModel->getData6($bulan)[$i6]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu6($bulan_lalu)[$i6]) ? number_format($this->laporanModel->bulan_lalu6($bulan_lalu)[$i6]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i6++ ?>

</tr>
<?php endforeach; ?>

<!-- Retribusi 7 -->
<?php foreach ($jenis_pendapatan7 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>VI. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target7 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target7, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi13 as $re13) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re13->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi14 as $re14) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re14->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re13->realisasi + $re14->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target7) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target7 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i7 = 0; ?>
    <?php foreach ($laporan_perdinas7 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData7($bulan)[$i7]) ? number_format($this->laporanModel->getData7($bulan)[$i7]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu7($bulan_lalu)[$i7]) ? number_format($this->laporanModel->bulan_lalu7($bulan_lalu)[$i7]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i7++ ?>
</tr>
<?php endforeach; ?>

<!-- Retribusi 8 -->
<?php foreach ($jenis_pendapatan8 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>VII. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target8 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target8, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi15 as $re15) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re15->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi16 as $re16) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re16->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re15->realisasi + $re16->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target8) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target8 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i8 = 0; ?>
    <?php foreach ($laporan_perdinas8 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData8($bulan)[$i8]) ? number_format($this->laporanModel->getData8($bulan)[$i8]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu8($bulan_lalu)[$i8]) ? number_format($this->laporanModel->bulan_lalu8($bulan_lalu)[$i8]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i8++ ?>

</tr>
<?php endforeach; ?>

<!-- Retribusi 9 -->
<?php foreach ($jenis_pendapatan9 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>VIII. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target9 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target9, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi17 as $re17) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re17->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi18 as $re18) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re18->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re17->realisasi + $re18->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target9) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target9 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i9 = 0; ?>
    <?php foreach ($laporan_perdinas9 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData9($bulan)[$i9]) ? number_format($this->laporanModel->getData9($bulan)[$i9]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu9($bulan_lalu)[$i9]) ? number_format($this->laporanModel->bulan_lalu9($bulan_lalu)[$i9]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i9++ ?>

</tr>
<?php endforeach; ?>

<!-- Retribusi 10 -->
<?php foreach ($jenis_pendapatan10 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>IX. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target10 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target10, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi19 as $re19) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re19->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi20 as $re20) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re20->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re19->realisasi + $re20->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target10) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target10 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i10 = 0; ?>
    <?php foreach ($laporan_perdinas10 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData10($bulan)[$i10]) ? number_format($this->laporanModel->getData10($bulan)[$i10]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu10($bulan_lalu)[$i10]) ? number_format($this->laporanModel->bulan_lalu10($bulan_lalu)[$i10]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i10++ ?>

</tr>
<?php endforeach; ?>

<!-- Retribusi 11 -->
<?php foreach ($jenis_pendapatan11 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>X. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target11 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target11, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi21 as $re21) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re21->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi22 as $re22) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re22->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re21->realisasi + $re22->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target11) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target11 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i11 = 0; ?>
    <?php foreach ($laporan_perdinas11 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData11($bulan)[$i11]) ? number_format($this->laporanModel->getData11($bulan)[$i11]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu11($bulan_lalu)[$i11]) ? number_format($this->laporanModel->bulan_lalu11($bulan_lalu)[$i11]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i11++ ?>
</tr>
<?php endforeach; ?>

<!-- Retribusi 12 -->
<?php foreach ($jenis_pendapatan12 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>XI. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target12 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target12, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi23 as $re23) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re23->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi24 as $re24) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re24->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re23->realisasi + $re24->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target12) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target12 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i12 = 0; ?>
    <?php foreach ($laporan_perdinas12 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData12($bulan)[$i12]) ? number_format($this->laporanModel->getData12($bulan)[$i12]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu12($bulan_lalu)[$i12]) ? number_format($this->laporanModel->bulan_lalu12($bulan_lalu)[$i12]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i12++ ?>
</tr>
<?php endforeach; ?>
<!-- 2 -->

<!-- 3. HASIL PENGELOLAAN KEKAYAAN DAERAH -->
<?php foreach ($jenis_pendapatan13 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#000000'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#000000' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($hpkdd, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($hpkd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($hpkd_bulan_lalu, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($hpkd_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($hpkd_persentase, 3, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($hpkd_lebih_kurang, 2, ',', '.'); ?></th>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>I. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target13 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target13, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi25 as $re25) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re25->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi26 as $re26) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re26->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re25->realisasi + $re26->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target13) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target13 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
    </tr>

<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i13 = 0; ?>
    <?php foreach ($laporan_perdinas13 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData13($bulan)[$i13]) ? number_format($this->laporanModel->getData13($bulan)[$i13]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu13($bulan_lalu)[$i13]) ? number_format($this->laporanModel->bulan_lalu13($bulan_lalu)[$i13]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i13++ ?>
</tr>
<?php endforeach; ?>

<?php foreach ($jenis_pendapatan14 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>II. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target14 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target14, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 3 -->
        <?php foreach ($sum_realisasi27 as $re27) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re27->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi28 as $re28) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re28->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re27->realisasi + $re28->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target14) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target14 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i14 = 0; ?>
    <?php foreach ($laporan_perdinas14 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData14($bulan)[$i14]) ? number_format($this->laporanModel->getData14($bulan)[$i14]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu14($bulan_lalu)[$i14]) ? number_format($this->laporanModel->bulan_lalu14($bulan_lalu)[$i14]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i14++ ?>
</tr>
<?php endforeach; ?>
<!-- 3 -->

<!-- 4. LAIN-LAIN PENDAPATAN ASLI DAERAH YANG SAH  -->
<?php foreach ($jenis_pendapatan15 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#000000'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#000000' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($lain_lain, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($lain_lain_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($lain_lain_bulan_lalu, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($lain_lain_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($lain_lain_persentase, 3, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($lain_lain_lebih_kurang, 2, ',', '.'); ?></th>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>I. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target15 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target15, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi29 as $re29) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re29->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi30 as $re30) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re30->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re29->realisasi + $re30->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target15) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target15 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
    </tr>

<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i15 = 0; ?>
    <?php foreach ($laporan_perdinas15 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData15($bulan)[$i15]) ? number_format($this->laporanModel->getData15($bulan)[$i15]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu15($bulan_lalu)[$i15]) ? number_format($this->laporanModel->bulan_lalu15($bulan_lalu)[$i15]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i15++ ?>
</tr>
<?php endforeach; ?>

<!-- jenis pajak 4 opd 14 -->
<?php foreach ($jenis_pendapatan16 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>II. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target16 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target16, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi31 as $re31) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re31->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi32 as $re32) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re32->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re31->realisasi + $re32->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target16) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target16 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>

<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i16 = 0; ?>
    <?php foreach ($laporan_perdinas16 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData16($bulan)[$i16]) ? number_format($this->laporanModel->getData16($bulan)[$i16]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu16($bulan_lalu)[$i16]) ? number_format($this->laporanModel->bulan_lalu16($bulan_lalu)[$i16]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i16++ ?>
</tr>
<?php endforeach; ?>

<!-- jenis pajak 4 opd 13 -->
<?php foreach ($jenis_pendapatan20 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>III. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target20 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target20, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi39 as $re39) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re39->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi40 as $re40) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re40->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re39->realisasi + $re40->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target20) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target20 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>

<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i20 = 0; ?>
    <?php foreach ($laporan_perdinas20 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData20($bulan)[$i20]) ? number_format($this->laporanModel->getData20($bulan)[$i20]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu20($bulan_lalu)[$i20]) ? number_format($this->laporanModel->bulan_lalu20($bulan_lalu)[$i20]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i20++ ?>
</tr>
<?php endforeach; ?>

<!-- jenis pajak 4 opd 15 -->
<?php foreach ($jenis_pendapatan17 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>IV. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target17 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target17, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi33 as $re33) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re33->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi34 as $re34) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re34->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re33->realisasi + $re34->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target17) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target17 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>

<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i17 = 0; ?>
    <?php foreach ($laporan_perdinas17 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData17($bulan)[$i17]) ? number_format($this->laporanModel->getData17($bulan)[$i17]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu17($bulan_lalu)[$i17]) ? number_format($this->laporanModel->bulan_lalu17($bulan_lalu)[$i17]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i17++ ?>
</tr>
<?php endforeach; ?>

<!-- jenis pajak 4 opd 2 -->
<?php foreach ($jenis_pendapatan18 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>V. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target18 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target18, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi35 as $re35) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re35->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi36 as $re36) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re36->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re35->realisasi + $re36->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target18) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target18 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>

<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i18 = 0; ?>
    <?php foreach ($laporan_perdinas18 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData18($bulan)[$i18]) ? number_format($this->laporanModel->getData18($bulan)[$i18]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu18($bulan_lalu)[$i18]) ? number_format($this->laporanModel->bulan_lalu18($bulan_lalu)[$i18]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i18++ ?>
</tr>
<?php endforeach; ?>

<!-- jenis pajak 4 opd 16 -->
<?php foreach ($jenis_pendapatan19 as $value) : ?>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>VI. <?= $value['nama_opd']; ?></th>
        <?php foreach ($sum_target19 as $data) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($data->target19, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi37 as $re37) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re37->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi38 as $re38) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re38->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re37->realisasi + $re38->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = ($sd_bulan_ini / $data->target19) * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target19 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>

<?php endforeach; ?>
<tr>

    <?php $no = 1;
    $i19 = 0; ?>
    <?php foreach ($laporan_perdinas19 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData19($bulan)[$i19]) ? number_format($this->laporanModel->getData19($bulan)[$i19]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu19($bulan_lalu)[$i19]) ? number_format($this->laporanModel->bulan_lalu19($bulan_lalu)[$i19]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.') ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;

        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i19++ ?>
</tr>
<?php endforeach; ?>
<!-- 4 -->


<!-- PENDAPATAN TRANSFER -->
<tr>
    <th bgcolor='#FFFF00' style='color:#000000'>42</th>
    <th bgcolor='#FFFF00' style='color:#000000' colspan="2">PENDAPATAN TRANSFER</th>
    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pt_target, 2, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pt_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pt_bulan_lalu, 2, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pt_sd_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pt_persentase, 3, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($pt_lebih_kurang, 2, ',', '.'); ?></th>

</tr>
<?php foreach ($jenis_pendapatan5101 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#000000'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#000000' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ptpp_target, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ptpp_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ptpp_bulan_lalu, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ptpp_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ptpp_persentase, 3, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ptpp_kurang_lebih, 2, ',', '.'); ?></th>

    <tr>
        <th bgcolor='#00FF00' style='color:000000'>421.01</th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>Dana Perimbangan</th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($dp_target, 2, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($dp_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($dp_bulan_lalu, 2, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($dp_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($dp_persentase, 3, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($dp_kurang_lebih, 2, ',', '.'); ?></th>

    </tr>
    <tr>
        <th bgcolor='#00FF00' style='color:000000'>421.01.01</th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>Dana Transfer Umum dan Bagi Hasil (DBH)</th>
        <?php foreach ($sum_target5101 as $value) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($value->target5101, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 5 -->
        <?php foreach ($sum_realisasi5101 as $re5101) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($re5101->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($bsum_realisasi5101 as $bre5101) : ?>
            <th bgcolor='#00FF00' style='color:000000'><?= number_format($bre5101->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re5101->realisasi + $bre5101->realisasi ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = $sd_bulan_ini / $value->target5101 * 100 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $value->target5101 ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
    </tr>
<?php endforeach; ?>
<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php $no = 1;
    $i5101 = 0;
    ?>
    <?php foreach ($laporan_perdinas5101 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData5101($bulan)[$i5101]) ? number_format($this->laporanModel->getData5101($bulan)[$i5101]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu5101($bulan_lalu)[$i5101]) ? number_format($this->laporanModel->bulan_lalu5101($bulan_lalu)[$i5101]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i5101++ ?>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 0102 -->
<tr>
    <th bgcolor='#00FF00' style='color:000000'>421.01.02</th>
    <th bgcolor='#00FF00' style='color:000000'></th>
    <th bgcolor='#00FF00' style='color:000000'>Dana Alokasi Umum (DAU)</th>
    <?php foreach ($sum_target5102 as $value) : ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($value->target5102, 2, ',', '.'); ?></th>
    <?php endforeach; ?>

    <!-- Realisasi dengan jenis pajak 1 -->
    <?php foreach ($sum_realisasi5102 as $re5102) : ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($re5102->realisasi, 2, ',', '.'); ?></th>
    <?php endforeach; ?>
    <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
    <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
    <?php foreach ($bsum_realisasi5102 as $bre5102) : ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($bre5102->realisasi, 2, ',', '.'); ?></th>
    <?php endforeach; ?>
    <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
    <?php $sd_bulan_ini = $re5102->realisasi + $bre5102->realisasi ?>
    <th bgcolor='#00FF00' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
    <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
    <?php $persentase = $sd_bulan_ini / $value->target5102 * 100 ?>
    <th bgcolor='#00FF00' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
    <?php $lebih_kurang = $sd_bulan_ini - $value->target5102 ?>
    <th bgcolor='#00FF00' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <?php $no = 1;
    $i5102 = 0;
    ?>
    <?php foreach ($laporan_perdinas5102 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData5102($bulan)[$i5102]) ? number_format($this->laporanModel->getData5102($bulan)[$i5102]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu5102($bulan_lalu)[$i5102]) ? number_format($this->laporanModel->bulan_lalu5102($bulan_lalu)[$i5102]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i5102++ ?>
</tr>
<?php endforeach; ?>

<tr>
    <th bgcolor='#00FF00' style='color:000000'>421.01.03</th>
    <th bgcolor='#00FF00' style='color:000000'></th>
    <th bgcolor='#00FF00' style='color:000000'>Dana Alokasi Khusus (DAK)</th>
    <th bgcolor='#00FF00' style='color:000000'><?= number_format($dak_target, 2, ',', '.'); ?></th>
    <th bgcolor='#00FF00' style='color:000000'><?= number_format($dak_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#00FF00' style='color:000000'><?= number_format($dak_bulan_lalu, 2, ',', '.'); ?></th>
    <th bgcolor='#00FF00' style='color:000000'><?= number_format($dak_sd_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#00FF00' style='color:000000'><?= number_format($dak_persentase, 3, ',', '.'); ?></th>
    <th bgcolor='#00FF00' style='color:000000'><?= number_format($dak_lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <th bgcolor='#FFD700' style='color:000000'></th>
    <th bgcolor='#FFD700' style='color:000000'></th>
    <th bgcolor='#FFD700' style='color:000000'>DAK FISIK</th>
    <?php foreach ($sum_target5103 as $value) : ?>
        <th bgcolor='#FFD700' style='color:000000'><?= number_format($value->target5103, 2, ',', '.'); ?></th>
    <?php endforeach; ?>

    <!-- Realisasi dengan jenis pajak 1 -->
    <?php foreach ($sum_realisasi5103 as $re5103) : ?>
        <th bgcolor='#FFD700' style='color:000000'><?= number_format($re5103->realisasi, 2, ',', '.'); ?></th>
    <?php endforeach; ?>
    <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
    <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
    <?php foreach ($bsum_realisasi5103 as $bre5103) : ?>
        <th bgcolor='#FFD700' style='color:000000'><?= number_format($bre5103->realisasi, 2, ',', '.'); ?></th>
    <?php endforeach; ?>
    <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
    <?php $sd_bulan_ini = $re5103->realisasi + $bre5103->realisasi ?>
    <th bgcolor='#FFD700' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
    <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
    <?php $persentase = $sd_bulan_ini / $value->target5103 * 100 ?>
    <th bgcolor='#FFD700' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
    <?php $lebih_kurang = $sd_bulan_ini - $value->target5103 ?>
    <th bgcolor='#FFD700' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <?php $no = 1;
    $i5103 = 0;
    ?>
    <?php foreach ($laporan_perdinas5103 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData5103($bulan)[$i5103]) ? number_format($this->laporanModel->getData5103($bulan)[$i5103]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu5103($bulan_lalu)[$i5103]) ? number_format($this->laporanModel->bulan_lalu5103($bulan_lalu)[$i5103]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i5103++ ?>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 0104 -->
<tr>
    <th bgcolor='#FFD700' style='color:000000'>421.01.04</th>
    <th bgcolor='#FFD700' style='color:000000'></th>
    <th bgcolor='#FFD700' style='color:000000'>DAK NON FISIK</th>
    <?php foreach ($sum_target5104 as $value) : ?>
        <th bgcolor='#FFD700' style='color:000000'><?= number_format($value->target5104, 2, ',', '.'); ?></th>
    <?php endforeach; ?>

    <!-- Realisasi dengan jenis pajak 1 -->
    <?php foreach ($sum_realisasi5104 as $re5104) : ?>
        <th bgcolor='#FFD700' style='color:000000'><?= number_format($re5104->realisasi, 2, ',', '.'); ?></th>
    <?php endforeach; ?>
    <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
    <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
    <?php foreach ($bsum_realisasi5104 as $bre5104) : ?>
        <th bgcolor='#FFD700' style='color:000000'><?= number_format($bre5104->realisasi, 2, ',', '.'); ?></th>
    <?php endforeach; ?>
    <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
    <?php $sd_bulan_ini = $re5104->realisasi + $bre5104->realisasi ?>
    <th bgcolor='#FFD700' style='color:000000'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
    <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
    <?php $persentase = $sd_bulan_ini / $value->target5104 * 100 ?>
    <th bgcolor='#FFD700' style='color:000000'><?= number_format($persentase, 3, ',', '.'); ?></th>
    <?php $lebih_kurang = $sd_bulan_ini - $value->target5104 ?>
    <th bgcolor='#FFD700' style='color:000000'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <?php $no = 1;
    $i5104 = 0;
    ?>
    <?php foreach ($laporan_perdinas5104 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData5104($bulan)[$i5104]) ? number_format($this->laporanModel->getData5104($bulan)[$i5104]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu5104($bulan_lalu)[$i5104]) ? number_format($this->laporanModel->bulan_lalu5104($bulan_lalu)[$i5104]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i5104++ ?>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 02 -->
<tr>
    <?php
    $i512 = 0;
    ?>
    <?php foreach ($laporan_perdinas512 as $value) : ?>
        <th bgcolor='#00FF00' style='color:000000'><?= $value['kode']; ?><?= $value['kode_rekening']; ?></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'><?= $value['keterangan']; ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData512($bulan)[$i512]) ? number_format($this->laporanModel->getData512($bulan)[$i512]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu512($bulan_lalu)[$i512]) ? number_format($this->laporanModel->bulan_lalu512($bulan_lalu)[$i512]['realisasi'], 2, ',', '.') : '0'; ?>
        <th bgcolor='#00FF00' style='color:000000'><?= $bln  ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= $bln_lalu; ?></th>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sampai_dengan, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persen, 3, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lk, 2, ',', '.'); ?></th>
        <?php $i512++ ?>
</tr>
<?php endforeach; ?>
<tr>
    <?php
    $i512 = 0;
    ?>
    <?php foreach ($laporan_perdinas512 as $value) : ?>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData512($bulan)[$i512]) ? number_format($this->laporanModel->getData512($bulan)[$i512]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu512($bulan_lalu)[$i512]) ? number_format($this->laporanModel->bulan_lalu512($bulan_lalu)[$i512]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i512++ ?>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 05 -->
<tr>
    <?php
    $i515 = 0;
    ?>
    <?php foreach ($laporan_perdinas515 as $value) : ?>
        <th bgcolor='#00FF00' style='color:000000'><?= $value['kode']; ?><?= $value['kode_rekening']; ?></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'><?= $value['keterangan']; ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData515($bulan)[$i515]) ? number_format($this->laporanModel->getData515($bulan)[$i515]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu515($bulan_lalu)[$i515]) ? number_format($this->laporanModel->bulan_lalu515($bulan_lalu)[$i515]['realisasi'], 2, ',', '.') : '0'; ?>
        <th bgcolor='#00FF00' style='color:000000'><?= $bln  ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= $bln_lalu; ?></th>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sampai_dengan, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persen, 3, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lk, 2, ',', '.'); ?></th>
        <?php $i515++ ?>
</tr>
<?php endforeach; ?>
<tr>
    <?php
    $i515 = 0;
    ?>
    <?php foreach ($laporan_perdinas515 as $value) : ?>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData515($bulan)[$i515]) ? number_format($this->laporanModel->getData515($bulan)[$i515]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu515($bulan_lalu)[$i515]) ? number_format($this->laporanModel->bulan_lalu515($bulan_lalu)[$i515]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i515++ ?>
</tr>
<?php endforeach; ?>

<!-- Pendapatan Transfer Antar Daerah -->
<?php foreach ($jenis_pendapatan601 as $value) : ?>
    <?php
    $ptad_sd_bulan_ini = 0;
    $ptad_persentase = 0;
    $ptad_lebih_kurang = 0;

    $ptad_sd_bulan_ini =  $re601->realisasi + $bre601->realisasi;
    $ptad_persentase =  $ptad_sd_bulan_ini / $st601->target601 * 100;
    $ptad_lebih_kurang = $ptad_sd_bulan_ini - $st601->target601;
    ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#000000'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#000000' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($st601->target601, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($re601->realisasi, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($bre601->realisasi, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ptad_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ptad_persentase, 3, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ptad_lebih_kurang, 2, ',', '.'); ?></th>

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
    $i601 = 0;
    ?>
    <?php foreach ($laporan_perdinas601 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData601($bulan)[$i601]) ? number_format($this->laporanModel->getData601($bulan)[$i601]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu601($bulan_lalu)[$i601]) ? number_format($this->laporanModel->bulan_lalu601($bulan_lalu)[$i601]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 2, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i601++ ?>
</tr>
<?php endforeach; ?>

<!-- LAIN-LAIN PENDAPATAN DAERAH YANG SAH -->
<tr>
    <th bgcolor='#FFFF00' style='color:#000000'>43</th>
    <th bgcolor='#FFFF00' style='color:#000000' colspan="2">LAIN-LAIN PENDAPATAN DAERAH YANG SAH</th>
    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($llpd_target, 2, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($llpd_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($llpd_bulan_lalu, 2, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($llpd_sd_bulan_lalu, 2, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($llpd_persentase, 2, ',', '.'); ?></th>
    <th bgcolor='#FFFF00' style='color:#000000'><?= number_format($llpd_lebih_kurang, 2, ',', '.'); ?></th>
</tr>

<?php foreach ($jenis_pendapatan701 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#000000'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#000000' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ph_target, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ph_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ph_bulan_lalu, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ph_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ph_persentase, 3, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($ph_lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Menampilkan data jenis pajak 7 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php
    $i701 = 0;
    ?>
    <?php foreach ($laporan_perdinas701 as $value) : ?>
        <th bgcolor='#00FF00' style='color:000000'><?= $value['kode']; ?><?= $value['kode_rekening']; ?></th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'><?= $value['keterangan']; ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData701($bulan)[$i701]) ? number_format($this->laporanModel->getData701($bulan)[$i701]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu701($bulan_lalu)[$i701]) ? number_format($this->laporanModel->bulan_lalu701($bulan_lalu)[$i701]['realisasi'], 2, ',', '.') : '0'; ?>
        <th bgcolor='#00FF00' style='color:000000'><?= $bln  ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= $bln_lalu; ?></th>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sampai_dengan, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persen, 3, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lk, 2, ',', '.'); ?></th>
        <?php $i701++ ?>
</tr>
<?php endforeach; ?>
<tr>
    <?php $no = 1;
    $i701 = 0;
    ?>
    <?php foreach ($laporan_perdinas701 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData701($bulan)[$i701]) ? number_format($this->laporanModel->getData701($bulan)[$i701]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu701($bulan_lalu)[$i701]) ? number_format($this->laporanModel->bulan_lalu701($bulan_lalu)[$i701]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i701++ ?>
</tr>
<?php endforeach; ?>

<!-- menampilkan jenis pajak 8 -->
<!-- 433 -->
<?php foreach ($jenis_pendapatan801 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#000000'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#000000' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($llp_target, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($llp_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($llp_bulan_lalu, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($llp_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($llp_persentase, 3, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#000000'><?= number_format($llp_lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Menampilkan data jenis pajak 8 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php
    $i801 = 0;
    ?>
    <?php foreach ($laporan_perdinas801 as $value) : ?>
        <th bgcolor='#00FF00' style='color:000000'><?= $value['kode']; ?>01</th>
        <th bgcolor='#00FF00' style='color:000000'></th>
        <th bgcolor='#00FF00' style='color:000000'>LAIN-LAIN PENDAPATAN</th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData801($bulan)[$i801]) ? number_format($this->laporanModel->getData801($bulan)[$i801]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu801($bulan_lalu)[$i801]) ? number_format($this->laporanModel->bulan_lalu801($bulan_lalu)[$i801]['realisasi'], 2, ',', '.') : '0'; ?>
        <th bgcolor='#00FF00' style='color:000000'><?= $bln  ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= $bln_lalu; ?></th>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($sampai_dengan, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($persen, 3, ',', '.'); ?></th>
        <th bgcolor='#00FF00' style='color:000000'><?= number_format($lk, 2, ',', '.'); ?></th>
        <?php $i801++ ?>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 8 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php $no = 1;
    $i801 = 0;
    ?>
    <?php foreach ($laporan_perdinas801 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln = !empty($this->laporanModel->getData801($bulan)[$i801]) ? number_format($this->laporanModel->getData801($bulan)[$i801]['realisasi'], 2, ',', '.') : '0'; ?>
        <!-- Menampilkan data bulan lalu -->
        <?php $bln_lalu = !empty($this->laporanModel->bulan_lalu801($bulan_lalu)[$i801]) ? number_format($this->laporanModel->bulan_lalu801($bulan_lalu)[$i801]['realisasi'], 2, ',', '.') : '0'; ?>
        <td><?= $bln  ?></td>
        <td><?= $bln_lalu; ?></td>
        <!-- S/D Bulan ini didapat dari penjumlahan Bulan ini + Bulan lalu -->
        <?php $sampai_dengan = ($bln + $bln_lalu) * 1000; ?>
        <td><?= number_format($sampai_dengan, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari S/D bulan ini / target * 100 -->
        <?php $persen = $sampai_dengan / $value['target'] * 100;
        $lk = $sampai_dengan - $value['target'];
        ?>
        <td><?= number_format($persen, 3, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i801++ ?>
</tr>
<?php endforeach; ?>

<!-- JUMLAH -->
<tr>
    <th bgcolor='#00FF00' style='color:#000000'></th>
    <th bgcolor='#00FF00' style='color:#000000'></th>
    <th bgcolor='#00FF00' style='color:#000000'>JUMLAH</th>
    <th bgcolor='#00FF00' style='color:#000000'><?= number_format($jumlah_target, 2, ',', '.'); ?></th>
    <th bgcolor='#00FF00' style='color:#000000'><?= number_format($jumlah_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#00FF00' style='color:#000000'><?= number_format($jumlah_bulan_lalu, 2, ',', '.'); ?></th>
    <th bgcolor='#00FF00' style='color:#000000'><?= number_format($jumlah_sd_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#00FF00' style='color:#000000'><?= number_format($jumlah_persentase, 3, ',', '.'); ?></th>
    <th bgcolor='#00FF00' style='color:#000000'><?= number_format($jumlah_lebih_kurang, 2, ',', '.'); ?></th>
</tr>
    </table>

    <table>
        <tr></tr>
        <tr></tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
                <center>KEPALA BADAN</center>
            </th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
                <center>PENDAPATAN DAERAH</center>
            </th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
                <center>KABUPATEN LAMPUNG TENGAH</center>
            </th>
            <th></th>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
                <center>Drs. ASRUL SANI</center>
            </th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th colspan="4">
                <center>NIP. 196606211986031002</center>
            </th>
            <th></th>
        </tr>
    </table>
</body>

</html>