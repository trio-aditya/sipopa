<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
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
    // return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>

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
<?php foreach ($sum_target13 as $data13) : ?>
<?php endforeach; ?>
<?php foreach ($sum_target14 as $data14) : ?>
<?php endforeach; ?>
<!-- Lain-lain PAD yang Sah -->
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
<!-- Pendapatan Asli Daerah-->

<!-- Retribusi -->
<!-- Retrubusi Jasa Umum -->
<?php foreach ($sum_jasa_umum as $data_jum) : ?>
<?php endforeach; ?>

<!-- Realisasi dengan jenis pajak 2 -->
<?php foreach ($sum_realisasi201 as $re201) : ?>
<?php endforeach; ?>
<?php foreach ($bsum_realisasi201 as $bre201) : ?>
<?php endforeach; ?>

<!-- Retrubusi Jasa Usaha -->
<?php foreach ($sum_jasa_usaha as $data_ju) : ?>
<?php endforeach; ?>

<!-- Realisasi dengan jenis pajak 2 -->
<?php foreach ($sum_realisasi202 as $re202) : ?>
<?php endforeach; ?>
<?php foreach ($bsum_realisasi202 as $bre202) : ?>
<?php endforeach; ?>

<!-- Retrubusi Perizinan Tertentu -->
<?php foreach ($sum_perizinan_tertentu as $data) : ?>
<?php endforeach; ?>
<!-- Realisasi dengan jenis pajak 1 -->
<?php foreach ($sum_realisasi203 as $re203) : ?>
<?php endforeach; ?>
<!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
<!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
<?php foreach ($bsum_realisasi203 as $bre203) : ?>
<?php endforeach; ?>

<!-- HASIL KEKAYAAN DAERAH YANG DIPISAHKAN -->
<?php foreach ($sum_hpkdd as $data_hpkdd) : ?>
<?php endforeach; ?>
<!-- Realisasi dengan jenis pajak 3 -->
<?php foreach ($sum_realisasi413 as $re413) : ?>
<?php endforeach; ?>
<!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
<!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
<?php foreach ($bsum_realisasi413 as $bre413) : ?>
<?php endforeach; ?>

<!-- LAIN_LAIN PAD YANG SAH -->
<?php foreach ($sum_lain_lain as $data_lain) : ?>
<?php endforeach; ?>
<!-- Realisasi dengan jenis pajak 4 -->
<?php foreach ($sum_realisasi414 as $re414) : ?>
<?php endforeach; ?>
<!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
<!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
<?php foreach ($bsum_realisasi414 as $bre414) : ?>
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
$pad = 0;
$pd = 0;

// Retribusi Perizinan Tertentu
$retribusi = 0;
$retribusi_bulan_ini = 0;
$retribusi_bulan_lalu = 0;
$retribusi_sd_bulan_ini = 0;
$retribusi_persentase = 0;
$retribusi_lebih_kurang = 0;

// HASIL KEKAYAAN DAERAH YANG DIPISAHKAN
$hpkdd = 0;
$hpkdd_bulan_ini = 0;
$hpkdd_bulan_lalu = 0;
$hpkdd_sd_bulan_ini = 0;
$hpkdd_persentase = 0;
$hpkdd_lebih_kurang = 0;

//LAIN-LAIN PAD YANG SAH
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

$pd = $da->target;

//Retribusi
// Retribusi Jasa Umum
$jum_target = $data_jum['jasa_umum'];
$jum_bulan_ini = $re201->realisasi;
$jum_bulan_lalu = $bre201->realisasi;
$jum_sd_bulan_ini = $jum_bulan_ini + $jum_bulan_lalu;
$jum_persentase = $jum_sd_bulan_ini / $jum_target * 100;
$jum_lebih_kurang = $jum_sd_bulan_ini - $jum_target;
// Retribusi Jasa Usaha
$ju_target = $data_ju['jasa_usaha'];
$ju_bulan_ini = $re202->realisasi;
$ju_bulan_lalu = $bre202->realisasi;
$ju_sd_bulan_ini = $ju_bulan_ini + $ju_bulan_lalu;
$ju_persentase = $ju_sd_bulan_ini / $ju_target * 100;
$ju_lebih_kurang = $ju_sd_bulan_ini - $ju_target;
// Retribusi Perizinan Tertentu
$rpt_target = $data['target_perizinan_tertentu'];
$rpt_bulan_ini = $re203->realisasi;
$rpt_bulan_lalu = $bre203->realisasi;
$rpt_sd_bulan_ini = $rpt_bulan_ini + $rpt_bulan_lalu;
$rpt_persentase = $rpt_sd_bulan_ini / $rpt_target * 100;
$rpt_lebih_kurang = $rpt_sd_bulan_ini - $rpt_target;

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

// HASIL KEKAYAAN DAERAH YANG DIPISAHKAN
// Target Hasil Kekayaan Daerah yang Dipisahkan
$hpkdd = $data_hpkdd['hpkdd'];
// Bulan ini Hasil Kekayaan Daerah yang Dipisahkan
$hpkdd_bulan_ini = $re413->realisasi;
// Bulan lalu Hasil Kekayaan Daerah yang Dipisahkan
$hpkdd_bulan_lalu = $bre413->realisasi;
// SD Bulan ini Hasil Kekayaan Daerah yang Dipisahkan
$hpkdd_sd_bulan_ini = $hpkdd_bulan_ini + $hpkdd_bulan_lalu;
// Persentase Hasil Kekayaan Daerah yang Dipisahkan
$hpkdd_persentase = $hpkdd_sd_bulan_ini / $hpkdd * 100;
// Lebih Kurang Hasil Kekayaan Daerah yang Dipisahkan
$hpkdd_lebih_kurang = $hpkdd_sd_bulan_ini - $hpkdd;

// LAIN-LAIN PAD YANG SAH
// Target Lain-lain PAD yang Sah
$lain_lain = $data_lain['lain_lain'];
// Bulan ini Lain-lain PAD yang Sah
$lain_lain_bulan_ini = $re414->realisasi;
// Bulan lalu Lain-lain PAD yang Sah
$lain_lain_bulan_lalu = $bre414->realisasi;
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

$pad = $pd + $retribusi + $hkpdd + $lain_lain;
$pendapatan_daerah = $pad;

// Realisasi
// $realisasi = $re->realisasi;


use App\Models\LaporanPadModel;

$this->laporanPadModel = new LaporanPadModel();
?>



<section class="content-header">
    <h1>
        Laporan PAD
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">PAD</li>
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
            <form action="<?= base_url('/laporanPad/filter'); ?>" method="post">
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


            <form action="<?= base_url('/laporanPad/excel'); ?>" method="post" target="_blank">
                <input type="hidden" class="form-control" name="bl_tanggal_awal" value="<?= $bl_tanggal_awal; ?>" required>
                <input type="hidden" class="form-control" name="bl_tanggal_akhir" value="<?= $bl_tanggal_akhir; ?>" required>
                <input type="hidden" class="form-control" name="tanggal_awal" value="<?= $tanggal_awal; ?>">
                <input type="hidden" class="form-control" name="tanggal_akhir" value="<?= $tanggal_akhir; ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-file-excel-o"></i> EXCEL</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <center>
                <p class="box-title">Bulan Lalu : <b><?= tgl_indo($bl_tanggal_awal) . " s/d " . tgl_indo($bl_tanggal_akhir) ?></b></p>
                <p class="box-title">Bulan Ini : <b><?= tgl_indo($tanggal_awal) . " s/d " . tgl_indo($tanggal_akhir) ?></b></p>
            </center>
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
                    <th bgcolor='#FFA500' style='color:#FFFFFF'></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'>PENDAPATAN DAERAH</th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($jumlah_target, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($jumlah_bulan_ini, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($jumlah_bulan_lalu, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($jumlah_sd_bulan_ini, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($jumlah_persentase, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($jumlah_lebih_kurang, 2, ',', '.'); ?></th>
                </tr>
                <tr>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'>PENDAPATAN ASLI DAERAH</th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($pad, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($pad_bulan_ini, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($pad_bulan_lalu, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($pad_sd_bulan_ini, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($pad_persentase, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($pad_lebih_kurang, 2, ',', '.'); ?></th>
                </tr>
                <?php foreach ($jenis_pendapatan1 as $value) : ?>
                    <tr>
                        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="3">1. PENDAPATAN <?= $value['jenis_pajak']; ?></th>
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($pd, 2, ',', '.'); ?></th>
                        <!-- Realisasi dengan jenis pajak 1 -->
                        <!-- Bulan ini Pajak Daerah -->
                        <?php foreach ($sum_realisasi as $re) : ?>
                            <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($re->realisasi, 2, ',', '.'); ?></th>
                        <?php endforeach; ?>
                        <!-- Bulan lalu Pajak Daerah -->
                        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
                        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
                        <?php foreach ($sum_realisasi2 as $re2) : ?>
                            <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($re2->realisasi, 2, ',', '.'); ?></th>
                        <?php endforeach; ?>

                        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
                        <?php $sd_bulan_ini = $re->realisasi + $re2->realisasi ?>
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
                        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100% -->
                        <?php $persentase = $sd_bulan_ini / $pd * 100 ?>
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
                        <?php $lebih_kurang = $sd_bulan_ini - $pd ?>
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>I. <?= $value['nama_opd']; ?></th>
                        <?php foreach ($sum_target1 as $value) : ?>
                            <th><?= number_format($value->target, 2, ',', '.'); ?></th>
                        <?php endforeach; ?>

                        <!-- Realisasi dengan jenis pajak 1 -->
                        <?php foreach ($sum_realisasi as $re) : ?>
                            <th><?= number_format($re->realisasi, 2, ',', '.'); ?></th>
                        <?php endforeach; ?>
                        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
                        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
                        <?php foreach ($sum_realisasi2 as $re2) : ?>
                            <th><?= number_format($re2->realisasi, 2, ',', '.'); ?></th>
                        <?php endforeach; ?>
                        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
                        <?php $sd_bulan_ini = $re->realisasi + $re2->realisasi ?>
                        <th><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
                        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100% -->
                        <?php $persentase = $sd_bulan_ini / $value->target * 100 ?>
                        <th><?= number_format($persentase, 2, ',', '.'); ?></th>
                        <?php $lebih_kurang = $sd_bulan_ini - $value->target ?>
                        <th><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
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
                        <!-- Menampilkan data bulan ini -->
                        <?php $bln_ini = !empty($this->laporanPadModel->bulan_ini($tanggal_awal, $tanggal_akhir)[$i]) ? $this->laporanPadModel->bulan_ini($tanggal_awal, $tanggal_akhir)[$i]['realisasi'] : '0'; ?>
                        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

                        <!-- Menampilkan data bulan lalu -->
                        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

                        <!-- S/D Bulan Ini -->
                        <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
                        <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
                        <!--Persentase didapat dari sd bulan ini / target * 100 -->
                        <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
                            $persen = $sd_bulan_ini / $value['target'] * 100;
                        } else {
                            $persen = 0;
                        }
                        $lk = $sd_bulan_ini - $value['target'];
                        ?>
                        <td><?= number_format($persen, 2, ',', '.'); ?></td>
                        <td><?= number_format($lk, 2, ',', '.'); ?></td>
                        <?php $i++; ?>
                </tr>
            <?php endforeach; ?>


            <!-- 2 -->
            <?php foreach ($jenis_pendapatan2 as $value) : ?>
                <tr>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'></th>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'>HASIL <?= $value['jenis_pajak']; ?></th>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($retribusi, 2, ',', '.'); ?></th>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($retribusi_bulan_ini, 2, ',', '.'); ?></th>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($retribusi_bulan_lalu, 2, ',', '.'); ?></th>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($retribusi_sd_bulan_ini, 2, ',', '.'); ?></th>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($retribusi_persentase, 2, ',', '.'); ?></th>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($retribusi_lebih_kurang, 2, ',', '.'); ?></th>
                </tr>
                <tr>
                    <th bgcolor='#008000' style='color:#FFFFFF'></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['kode']; ?> 01</th>
                    <th bgcolor='#008000' style='color:#FFFFFF'>Retribusi Jasa Umum</th>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($jum_target, 2, ',', '.'); ?></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($jum_bulan_ini, 2, ',', '.'); ?></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($jum_bulan_lalu, 2, ',', '.'); ?></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($jum_sd_bulan_ini, 2, ',', '.'); ?></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($jum_persentase, 2, ',', '.'); ?></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($jum_lebih_kurang, 2, ',', '.'); ?></th>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td align="center">1</td>
                <td><?= $value['kode']; ?>0101</td>
                <td>Retribusi Pelayanan Kesehatan</td>
                <?php foreach ($sum_target2 as $data) : ?>
                    <td><?= number_format($data->target2, 2, ',', '.'); ?></td>
                <?php endforeach; ?>

                <!-- Realisasi dengan jenis pajak 1 -->
                <?php foreach ($sum_realisasi3 as $re3) : ?>
                    <td><?= number_format($re3->realisasi, 2, ',', '.'); ?></td>
                <?php endforeach; ?>
                <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
                <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
                <?php foreach ($sum_realisasi4 as $re4) : ?>
                    <td><?= number_format($re4->realisasi, 2, ',', '.'); ?></td>
                <?php endforeach; ?>
                <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
                <?php $sd_bulan_ini = $re3->realisasi + $re4->realisasi ?>
                <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
                <!-- Persentase didapat dari S/D bulan ini / target PAD * 100% -->
                <?php $persentase = ($sd_bulan_ini / $data->target2) * 100 ?>
                <td><?= number_format($persentase, 2, ',', '.'); ?></td>
                <?php $lebih_kurang = $sd_bulan_ini - $data->target2 ?>
                <td><?= number_format($lebih_kurang, 2, ',', '.'); ?></td>
            </tr>
            <!-- Menampilkan data Retibusi Jasa Umum
            Dinas Perdagangan -->
            <tr>
                <?php $no = 2;
                $i3 = 0; ?>
                <?php foreach ($jasa_umum as $value) : ?>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                    <td><?= $value['keterangan']; ?></td>
                    <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

                    <!-- Menampilkan data bulan sekarang -->
                    <?php $bln_ini = !empty($this->laporanPadModel->retribusi_bulan_ini($tanggal_awal, $tanggal_akhir)[$i3]) ? $this->laporanPadModel->retribusi_bulan_ini($tanggal_awal, $tanggal_akhir)[$i3]['realisasi'] : '0'; ?>
                    <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>
                    <!-- Menampilkan data bulan lalu -->
                    <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

                    <!-- S/D Bulan Ini -->
                    <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
                    <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
                    <!--Persentase didapat dari sd bulan ini / target * 100 -->
                    <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
                        $persen = $sd_bulan_ini / $value['target'] * 100;
                    } else {
                        $persen = 0;
                    }
                    $lk = $sd_bulan_ini - $value['target'];
                    ?>
                    <td><?= number_format($persen, 2, ',', '.'); ?></td>
                    <td><?= number_format($lk, 2, ',', '.'); ?></td>
                    <?php $i3++ ?>
            </tr>
        <?php endforeach; ?>

        <!-- Menampilkan data Retibusi Jasa Umum
            Dinas Perhubungan -->
        <tr>

            <?php $no = 6;
            $rju5 = 0; ?>
            <?php foreach ($b_rju5 as $value) : ?>
                <td align="center"><?= $no++ ?></td>
                <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                <td><?= $value['keterangan']; ?></td>
                <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

                <!-- Menampilkan data bulan sekarang -->
                <?php $bln_ini = !empty($this->laporanPadModel->bl_rju5($tanggal_awal, $tanggal_akhir)[$rju5]) ? $this->laporanPadModel->bl_rju5($tanggal_awal, $tanggal_akhir)[$rju5]['realisasi'] : '0'; ?>
                <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>
                <!-- Menampilkan data bulan lalu -->
                <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

                <!-- S/D Bulan Ini -->
                <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
                <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
                <!--Persentase didapat dari sd bulan ini / target * 100 -->
                <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
                    $persen = $sd_bulan_ini / $value['target'] * 100;
                } else {
                    $persen = 0;
                }
                $lk = $sd_bulan_ini - $value['target'];
                ?>
                <td><?= number_format($persen, 2, ',', '.'); ?></td>
                <td><?= number_format($lk, 2, ',', '.'); ?></td>
                <?php $rju5++ ?>
        </tr>
    <?php endforeach; ?>


    <!-- Menampilkan data Retibusi Jasa Umum
            Dinas Perhubungan -->
    <tr>

        <?php $no = 8;
        $rju8 = 0; ?>
        <?php foreach ($b_rju8 as $value) : ?>
            <td align="center"><?= $no++ ?></td>
            <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
            <td><?= $value['keterangan']; ?></td>
            <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

            <!-- Menampilkan data bulan sekarang -->
            <?php $bln_ini = !empty($this->laporanPadModel->bl_rju8($tanggal_awal, $tanggal_akhir)[$rju8]) ? $this->laporanPadModel->bl_rju8($tanggal_awal, $tanggal_akhir)[$rju8]['realisasi'] : '0'; ?>
            <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>
            <!-- Menampilkan data bulan lalu -->
            <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

            <!-- S/D Bulan Ini -->
            <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
            <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
            <!--Persentase didapat dari sd bulan ini / target * 100 -->
            <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
                $persen = $sd_bulan_ini / $value['target'] * 100;
            } else {
                $persen = 0;
            }
            $lk = $sd_bulan_ini - $value['target'];
            ?>
            <td><?= number_format($persen, 2, ',', '.'); ?></td>
            <td><?= number_format($lk, 2, ',', '.'); ?></td>
            <?php $rju8++ ?>
    </tr>
<?php endforeach; ?>
<tr>
    <th bgcolor='#008000' style='color:#FFFFFF'></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['kode']; ?> 02</th>
    <th bgcolor='#008000' style='color:#FFFFFF'>Retribusi Jasa Usaha</th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($ju_target, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($ju_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($ju_bulan_lalu, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($ju_sd_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($ju_persentase, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($ju_lebih_kurang, 2, ',', '.'); ?></th>
<tr>
    <?php foreach ($sum_pkd as $rpkd) : ?>
    <?php endforeach; ?>
    <?php foreach ($sum_realisasi20201 as $re20201) : ?>
    <?php endforeach; ?>
    <?php foreach ($bsum_realisasi20201 as $bre20201) : ?>
    <?php endforeach; ?>

    <?php
    $rpkd_target = $rpkd['target_pkd'];
    $rpkd_bulan_ini = $re20201->realisasi;
    $rpkd_bulan_lalu = $bre20201->realisasi;
    $rpkd_sd_bulan_ini = $rpkd_bulan_ini + $rpkd_bulan_lalu;
    $rpkd_persentase = $rpkd_sd_bulan_ini / $rpkd_target * 100;
    $rpkd_lebih_kurang = $rpkd_sd_bulan_ini - $rpkd_target;
    ?>
    <td align="center">1</td>
    <td><?= $value['kode']; ?>0201</td>
    <td>Retribusi Pemakaian Kekayaan Daerah</td>
    <td><?= number_format($rpkd_target, 2, ',', '.'); ?></td>
    <td><?= number_format($rpkd_bulan_ini, 2, ',', '.'); ?></td>
    <td><?= number_format($rpkd_bulan_lalu, 2, ',', '.'); ?></td>
    <td><?= number_format($rpkd_sd_bulan_ini, 2, ',', '.'); ?></td>
    <td><?= number_format($rpkd_persentase, 2, ',', '.'); ?></td>
    <td><?= number_format($rpkd_lebih_kurang, 2, ',', '.'); ?></td>
</tr>
</tr>
<!-- Menampilkan data Retibusi Jasa Usaha
            Dinas Perhubungan -->
<tr>
    <?php $no = 2;
    $ia = 0;

    ?>
    <?php foreach ($jasa_usaha as $value) : ?>
        <?php if ($value['kode_rekening'] != '0201' && $value['kode_rekening'] != '0211') : ?>
            <td align="center"><?= $no++ ?></td>
            <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
            <td><?= $value['keterangan']; ?></td>
            <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
            <!-- Menampilkan data bulan sekarang -->
            <?php $bln_ini = !empty($this->laporanPadModel->retribusi_bulan_ini2($tanggal_awal, $tanggal_akhir)[$ia]) ? $this->laporanPadModel->retribusi_bulan_ini2($tanggal_awal, $tanggal_akhir)[$ia]['realisasi'] : '0'; ?>
            <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>
            <!-- Menampilkan data bulan lalu -->
            <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

            <!-- S/D Bulan Ini -->
            <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
            <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
            <!--Persentase didapat dari sd bulan ini / target * 100 -->
            <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
                $persen = $sd_bulan_ini / $value['target'] * 100;
            } else {
                $persen = 0;
            }
            $lk = $sd_bulan_ini - $value['target'];
            ?>
            <td><?= number_format($persen, 2, ',', '.'); ?></td>
            <td><?= number_format($lk, 2, ',', '.'); ?></td>
            <?php $ia++ ?>
        <?php endif; ?>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data Retibusi Jasa Usaha
            Dinas Perdagangan -->
<tr>

    <?php $no = 5;
    $rjus3 = 0; ?>
    <?php foreach ($b_rjus3 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln_ini = !empty($this->laporanPadModel->bl_rjus3($tanggal_awal, $tanggal_akhir)[$rjus3]) ? $this->laporanPadModel->bl_rjus3($tanggal_awal, $tanggal_akhir)[$rjus3]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan lalu -->
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!-- S/D Bulan Ini -->
        <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
        <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
            $persen = $sd_bulan_ini / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $sd_bulan_ini - $value['target'];
        ?>
        <td><?= number_format($persen, 2, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $rjus3++ ?>
</tr>
<?php endforeach; ?>

<tr>
    <?php foreach ($sum_ppud as $ppud) : ?>
    <?php endforeach; ?>
    <?php foreach ($sum_realisasi20211 as $re20211) : ?>
    <?php endforeach; ?>
    <?php foreach ($bsum_realisasi20211 as $bre20211) : ?>
    <?php endforeach; ?>

    <?php
    $ppud_target = $ppud['target_ppud'];
    $ppud_bulan_ini = $re20211->realisasi;
    $ppud_bulan_lalu = $bre20211->realisasi;
    $ppud_sd_bulan_ini = $ppud_bulan_ini + $ppud_bulan_lalu;
    $ppud_persentase = $ppud_sd_bulan_ini / $ppud_target * 100;
    $ppud_lebih_kurang = $ppud_sd_bulan_ini - $ppud_target;
    ?>
    <td align="center"><?= $no ?></td>
    <td><?= $value['kode']; ?>0211</td>
    <td>Retribusi Penjualan Produksi Usaha Daerah</td>
    <td><?= number_format($ppud_target, 2, ',', '.'); ?></td>
    <td><?= number_format($ppud_bulan_ini, 2, ',', '.'); ?></td>
    <td><?= number_format($ppud_bulan_lalu, 2, ',', '.'); ?></td>
    <td><?= number_format($ppud_sd_bulan_ini, 2, ',', '.'); ?></td>
    <td><?= number_format($ppud_persentase, 2, ',', '.'); ?></td>
    <td><?= number_format($ppud_lebih_kurang, 2, ',', '.'); ?></td>
</tr>

<tr>
    <th bgcolor='#008000' style='color:#FFFFFF'></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['kode']; ?> 03</th>
    <th bgcolor='#008000' style='color:#FFFFFF'>Retribusi Perizinan Tertentu</th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($rpt_target, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($rpt_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($rpt_bulan_lalu, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($rpt_sd_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($rpt_persentase, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($rpt_lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <?php $no = 1;
    $i = 0;
    ?>
    <?php foreach ($perizinan_tertentu as $value) : ?>
        <?php if ($value['kode_rekening'] != '01010001') : ?>
            <td align="center"><?= $no++ ?></td>
            <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
            <td><?= $value['keterangan']; ?></td>
            <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
            <!-- Menampilkan data bulan sekarang -->
            <?php $bln_ini = !empty($this->laporanPadModel->retribusi_bulan_ini3($tanggal_awal, $tanggal_akhir)[$i]) ? $this->laporanPadModel->retribusi_bulan_ini3($tanggal_awal, $tanggal_akhir)[$i]['realisasi'] : '0'; ?>
            <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>
            <!-- Menampilkan data bulan lalu -->
            <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

            <!-- S/D Bulan Ini -->
            <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
            <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
            <!--Persentase didapat dari sd bulan ini / target * 100 -->
            <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
                $persen = $sd_bulan_ini / $value['target'] * 100;
            } else {
                $persen = 0;
            }
            $lk = $sd_bulan_ini - $value['target'];
            ?>
            <td><?= number_format($persen, 2, ',', '.'); ?></td>
            <td><?= number_format($lk, 2, ',', '.'); ?></td>
            <?php $i++ ?>
        <?php endif; ?>
</tr>
<?php endforeach; ?>
<!-- 2 -->

<!-- 3 -->
<?php foreach ($jenis_pendapatan13 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($hpkdd, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($hpkdd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($hpkdd_bulan_lalu, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($hpkdd_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($hpkdd_persentase, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($hpkdd_lebih_kurang, 2, ',', '.'); ?></th>
    <tr>
        <td align="center">1</td>
        <td><?= $value['kode']; ?></td>
        <td>Bagian Laba atas Penyertaan Modal pada Perusahaan Milik Daerah/BUMD</td>
        <td><?= number_format($hpkdd, 2, ',', '.'); ?></td>
        <td><?= number_format($hpkdd_bulan_ini, 2, ',', '.'); ?></td>
        <td><?= number_format($hpkdd_bulan_lalu, 2, ',', '.'); ?></td>
        <td><?= number_format($hpkdd_sd_bulan_ini, 2, ',', '.'); ?></td>
        <td><?= number_format($hpkdd_persentase, 2, ',', '.'); ?></td>
        <td><?= number_format($hpkdd_lebih_kurang, 2, ',', '.'); ?></td>
    </tr>
    </tr>

<?php endforeach; ?>

<!-- 3 -->

<!-- 4 -->
<?php foreach ($jenis_pendapatan15 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lain_lain, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lain_lain_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lain_lain_bulan_lalu, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lain_lain_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lain_lain_persentase, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lain_lain_lebih_kurang, 2, ',', '.'); ?></th>
    <tr>

        <?php $no = 1;
        $i20 = 0; ?>
        <?php foreach ($laporan_perdinas20 as $value) : ?>
            <td align="center"><?= $no++ ?></td>
            <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
            <td><?= $value['keterangan']; ?></td>
            <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

            <!-- Menampilkan data bulan sekarang -->
            <?php $bln_ini = !empty($this->laporanPadModel->bulan_ini20($tanggal_awal, $tanggal_akhir)[$i20]) ? $this->laporanPadModel->bulan_ini20($tanggal_awal, $tanggal_akhir)[$i20]['realisasi'] : '0'; ?>
            <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>
            <!-- Menampilkan data bulan lalu -->
            <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

            <!-- S/D Bulan Ini -->
            <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
            <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
            <!--Persentase didapat dari sd bulan ini / target * 100 -->
            <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
                $persen = $sd_bulan_ini / $value['target'] * 100;
            } else {
                $persen = 0;
            }
            $lk = $sd_bulan_ini - $value['target'];
            ?>
            <td><?= number_format($persen, 2, ',', '.'); ?></td>
            <td><?= number_format($lk, 2, ',', '.'); ?></td>
            <?php $i20++ ?>
    </tr>
<?php endforeach; ?>
</tr>
<?php endforeach; ?>

<!-- jenis pajak 4 opd 15 -->
<?php foreach ($jenis_pendapatan17 as $value) : ?>
    <tr>
        <td align="center">3</td>
        <td><?= $value['kode']; ?></td>
        <td>Sumbangan Pihak Ketiga BLUD/RSUDSR</td>
        <?php foreach ($sum_target17 as $data) : ?>
            <td><?= number_format($data->target17, 2, ',', '.'); ?></td>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi33 as $re33) : ?>
            <td><?= number_format($re33->realisasi, 2, ',', '.'); ?></td>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi34 as $re34) : ?>
            <td><?= number_format($re34->realisasi, 2, ',', '.'); ?></td>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re33->realisasi + $re34->realisasi ?>
        <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100% -->
        <?php $persentase = ($sd_bulan_ini / $data->target17) * 100 ?>
        <td><?= number_format($persentase, 2, ',', '.'); ?></td>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target17 ?>
        <td><?= number_format($lebih_kurang, 2, ',', '.'); ?></td>
    </tr>
<?php endforeach; ?>

<?php foreach ($jenis_pendapatan15 as $value) : ?>
    <tr>
        <td align="center">4</td>
        <td><?= $value['kode']; ?></td>
        <td>Pendapatan Setoran Denda Pajak</td>
        <?php foreach ($sum_target15 as $data) : ?>
            <td><?= number_format($data->target15, 2, ',', '.'); ?></td>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 2 -->
        <?php foreach ($sum_realisasi29 as $re29) : ?>
            <td><?= number_format($re29->realisasi, 2, ',', '.'); ?></td>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi30 as $re30) : ?>
            <td><?= number_format($re30->realisasi, 2, ',', '.'); ?></td>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re29->realisasi + $re30->realisasi ?>
        <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100% -->
        <?php $persentase = ($sd_bulan_ini / $data->target15) * 100 ?>
        <td><?= number_format($persentase, 2, ',', '.'); ?></td>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target15 ?>
        <td><?= number_format($lebih_kurang, 2, ',', '.'); ?></td>
    </tr>

<?php endforeach; ?>

<!-- jenis pajak 4 opd 14 -->
<?php foreach ($jenis_pendapatan16 as $value) : ?>
    <tr>
        <td align="center">5</td>
        <td><?= $value['kode']; ?></td>
        <td><?= $value['nama_opd']; ?></td>
        <?php foreach ($sum_target16 as $data) : ?>
            <td><?= number_format($data->target16, 2, ',', '.'); ?></td>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi31 as $re31) : ?>
            <td><?= number_format($re31->realisasi, 2, ',', '.'); ?></td>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi32 as $re32) : ?>
            <td><?= number_format($re32->realisasi, 2, ',', '.'); ?></td>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re31->realisasi + $re32->realisasi ?>
        <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100% -->
        <?php $persentase = ($sd_bulan_ini / $data->target16) * 100 ?>
        <td><?= number_format($persentase, 2, ',', '.'); ?></td>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target16 ?>
        <td><?= number_format($lebih_kurang, 2, ',', '.'); ?></td>
    </tr>

<?php endforeach; ?>

<!-- jenis pajak 4 opd 2 -->
<tr>
    <?php $no = 6;
    $i18 = 0; ?>
    <?php foreach ($laporan_perdinas18 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>

        <!-- Menampilkan data bulan sekarang -->
        <?php $bln_ini = !empty($this->laporanPadModel->bulan_ini18($tanggal_awal, $tanggal_akhir)[$i18]) ? $this->laporanPadModel->bulan_ini18($tanggal_awal, $tanggal_akhir)[$i18]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan lalu -->
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!-- S/D Bulan Ini -->
        <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
        <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
            $persen = $sd_bulan_ini / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $sd_bulan_ini - $value['target'];
        ?>
        <td><?= number_format($persen, 2, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i18++ ?>
</tr>
<?php endforeach; ?>

<!-- jenis pajak 4 opd 16 -->
<?php foreach ($jenis_pendapatan19 as $value) : ?>
    <tr>
        <td align="center">8</td>
        <td><?= $value['kode']; ?></td>
        <td><?= $value['nama_opd']; ?></td>
        <?php foreach ($sum_target19 as $data) : ?>
            <td><?= number_format($data->target19, 2, ',', '.'); ?></td>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 4 -->
        <?php foreach ($sum_realisasi37 as $re37) : ?>
            <td><?= number_format($re37->realisasi, 2, ',', '.'); ?></td>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($sum_realisasi38 as $re38) : ?>
            <td><?= number_format($re38->realisasi, 2, ',', '.'); ?></td>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re37->realisasi + $re38->realisasi ?>
        <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100% -->
        <?php $persentase = ($sd_bulan_ini / $data->target19) * 100 ?>
        <td><?= number_format($persentase, 2, ',', '.'); ?></td>
        <?php $lebih_kurang = $sd_bulan_ini - $data->target19 ?>
        <td><?= number_format($lebih_kurang, 2, ',', '.'); ?></td>
    </tr>

<?php endforeach; ?>
<!-- 4 -->

<!-- 5 -->
<!-- PENDAPATAN TRANSFER -->
<tr>
    <th bgcolor='#FFA500' style='color:#FFFFFF'>42</th>
    <th bgcolor='#FFA500' style='color:#FFFFFF' colspan="2">PENDAPATAN TRANSFER</th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($pt_target, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($pt_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($pt_bulan_lalu, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($pt_sd_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($pt_persentase, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($pt_lebih_kurang, 2, ',', '.'); ?></th>

</tr>

<?php foreach ($jenis_pendapatan5101 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ptpp_target, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ptpp_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ptpp_bulan_lalu, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ptpp_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ptpp_persentase, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ptpp_kurang_lebih, 2, ',', '.'); ?></th>

    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'>421.01</th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>Dana Perimbangan</th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($dp_target, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($dp_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($dp_bulan_lalu, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($dp_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($dp_persentase, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($dp_kurang_lebih, 2, ',', '.'); ?></th>

    </tr>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'>421.01.01</th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>Dana Transfer Umum dan Bagi Hasil (DBH)</th>
        <?php foreach ($sum_target5101 as $value) : ?>
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($value->target5101, 2, ',', '.'); ?></th>
        <?php endforeach; ?>

        <!-- Realisasi dengan jenis pajak 5 -->
        <?php foreach ($sum_realisasi5101 as $re5101) : ?>
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($re5101->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
        <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
        <?php foreach ($bsum_realisasi5101 as $bre5101) : ?>
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($bre5101->realisasi, 2, ',', '.'); ?></th>
        <?php endforeach; ?>
        <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
        <?php $sd_bulan_ini = $re5101->realisasi + $bre5101->realisasi ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php $persentase = $sd_bulan_ini / $value->target5101 * 100 ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini - $value->target5101 ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
    </tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 0102 -->
<tr>
    <th bgcolor='#008000' style='color:#FFFFFF'>421.01.02</th>
    <th bgcolor='#008000' style='color:#FFFFFF'></th>
    <th bgcolor='#008000' style='color:#FFFFFF'>Dana Alokasi Umum (DAU)</th>
    <?php foreach ($sum_target5102 as $value) : ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($value->target5102, 2, ',', '.'); ?></th>
    <?php endforeach; ?>

    <!-- Realisasi dengan jenis pajak 1 -->
    <?php foreach ($sum_realisasi5102 as $re5102) : ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($re5102->realisasi, 2, ',', '.'); ?></th>
    <?php endforeach; ?>
    <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
    <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
    <?php foreach ($bsum_realisasi5102 as $bre5102) : ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($bre5102->realisasi, 2, ',', '.'); ?></th>
    <?php endforeach; ?>
    <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
    <?php $sd_bulan_ini = $re5102->realisasi + $bre5102->realisasi ?>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
    <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
    <?php $persentase = $sd_bulan_ini / $value->target5102 * 100 ?>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
    <?php $lebih_kurang = $sd_bulan_ini - $value->target5102 ?>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>

<tr>
    <th bgcolor='#008000' style='color:#FFFFFF'>421.01.03</th>
    <th bgcolor='#008000' style='color:#FFFFFF'></th>
    <th bgcolor='#008000' style='color:#FFFFFF'>Dana Alokasi Khusus (DAK)</th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($dak_target, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($dak_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($dak_bulan_lalu, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($dak_sd_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($dak_persentase, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($dak_lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <th bgcolor='#708090' style='color:#FFFFFF'></th>
    <th bgcolor='#708090' style='color:#FFFFFF'></th>
    <th bgcolor='#708090' style='color:#FFFFFF'>DAK FISIK</th>
    <?php foreach ($sum_target5103 as $value) : ?>
        <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($value->target5103, 2, ',', '.'); ?></th>
    <?php endforeach; ?>

    <!-- Realisasi dengan jenis pajak 1 -->
    <?php foreach ($sum_realisasi5103 as $re5103) : ?>
        <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($re5103->realisasi, 2, ',', '.'); ?></th>
    <?php endforeach; ?>
    <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
    <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
    <?php foreach ($bsum_realisasi5103 as $bre5103) : ?>
        <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($bre5103->realisasi, 2, ',', '.'); ?></th>
    <?php endforeach; ?>
    <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
    <?php $sd_bulan_ini = $re5103->realisasi + $bre5103->realisasi ?>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
    <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
    <?php $persentase = $sd_bulan_ini / $value->target5103 * 100 ?>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
    <?php $lebih_kurang = $sd_bulan_ini - $value->target5103 ?>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 0104 -->
<tr>
    <th bgcolor='#708090' style='color:#FFFFFF'>421.01.04</th>
    <th bgcolor='#708090' style='color:#FFFFFF'></th>
    <th bgcolor='#708090' style='color:#FFFFFF'>DAK NON FISIK</th>
    <?php foreach ($sum_target5104 as $value) : ?>
        <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($value->target5104, 2, ',', '.'); ?></th>
    <?php endforeach; ?>

    <!-- Realisasi dengan jenis pajak 1 -->
    <?php foreach ($sum_realisasi5104 as $re5104) : ?>
        <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($re5104->realisasi, 2, ',', '.'); ?></th>
    <?php endforeach; ?>
    <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
    <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
    <?php foreach ($bsum_realisasi5104 as $bre5104) : ?>
        <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($bre5104->realisasi, 2, ',', '.'); ?></th>
    <?php endforeach; ?>
    <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
    <?php $sd_bulan_ini = $re5104->realisasi + $bre5104->realisasi ?>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
    <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
    <?php $persentase = $sd_bulan_ini / $value->target5104 * 100 ?>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
    <?php $lebih_kurang = $sd_bulan_ini - $value->target5104 ?>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 02 -->
<tr>
    <?php
    $i512 = 0;
    ?>
    <?php foreach ($laporan_perdinas512 as $value) : ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['kode']; ?><?= $value['kode_rekening']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['keterangan']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln_ini = !empty($this->laporanPadModel->bulan_ini512($tanggal_awal, $tanggal_akhir)[$i512]) ? $this->laporanPadModel->bulan_ini512($tanggal_awal, $tanggal_akhir)[$i512]['realisasi'] : '0'; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($bln_ini, 2, ',', '.'); ?></th>
        <!-- Menampilkan data bulan lalu -->
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($value['realisasi'], 2, ',', '.'); ?></th>

        <!-- S/D Bulan Ini -->
        <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
            $persen = $sd_bulan_ini / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $sd_bulan_ini - $value['target'];
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persen, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lk, 2, ',', '.'); ?></th>
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
        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['kode']; ?><?= $value['kode_rekening']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['keterangan']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln_ini = !empty($this->laporanPadModel->bulan_ini515($tanggal_awal, $tanggal_akhir)[$i515]) ? $this->laporanPadModel->bulan_ini515($tanggal_awal, $tanggal_akhir)[$i515]['realisasi'] : '0'; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($bln_ini, 2, ',', '.'); ?></th>
        <!-- Menampilkan data bulan lalu -->
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($value['realisasi'], 2, ',', '.'); ?></th>

        <!-- S/D Bulan Ini -->
        <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
            $persen = $sd_bulan_ini / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $sd_bulan_ini - $value['target'];
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persen, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lk, 2, ',', '.'); ?></th>
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
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($st601->target601, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($re601->realisasi, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($bre601->realisasi, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ptad_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ptad_persentase, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ptad_lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>


<!-- LAIN-LAIN PENDAPATAN DAERAH YANG SAH -->
<tr>
    <th bgcolor='#FFA500' style='color:#FFFFFF'>43</th>
    <th bgcolor='#FFA500' style='color:#FFFFFF' colspan="2">LAIN-LAIN PENDAPATAN DAERAH YANG SAH</th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($llpd_target, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($llpd_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($llpd_bulan_lalu, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($llpd_sd_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($llpd_persentase, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($llpd_lebih_kurang, 2, ',', '.'); ?></th>
</tr>

<?php foreach ($jenis_pendapatan701 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ph_target, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ph_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ph_bulan_lalu, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ph_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ph_persentase, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($ph_lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Menampilkan data jenis pajak 7 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php
    $i701 = 0;
    ?>
    <?php foreach ($laporan_perdinas701 as $value) : ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['kode']; ?><?= $value['kode_rekening']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['keterangan']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln_ini = !empty($this->laporanPadModel->bulan_ini701($tanggal_awal, $tanggal_akhir)[$i701]) ? $this->laporanPadModel->bulan_ini701($tanggal_awal, $tanggal_akhir)[$i701]['realisasi'] : '0'; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($bln_ini, 2, ',', '.'); ?></th>
        <!-- Menampilkan data bulan lalu -->
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($value['realisasi'], 2, ',', '.'); ?></th>

        <!-- S/D Bulan Ini -->
        <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
            $persen = $sd_bulan_ini / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $sd_bulan_ini - $value['target'];
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persen, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lk, 2, ',', '.'); ?></th>
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
        <?php $bln_ini = !empty($this->laporanPadModel->bulan_ini701($tanggal_awal, $tanggal_akhir)[$i701]) ? $this->laporanPadModel->bulan_ini701($tanggal_awal, $tanggal_akhir)[$i701]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan lalu -->
        <td><?= number_format($value['realisais'], 2, ',', '.'); ?></td>

        <!-- S/D Bulan Ini -->
        <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
        <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
            $persen = $sd_bulan_ini / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $sd_bulan_ini - $value['target'];
        ?>
        <td><?= number_format($persen, 2, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>
        <?php $i701++ ?>
</tr>
<?php endforeach; ?>

<!-- menampilkan jenis pajak 8 -->
<!-- 433 -->
<?php foreach ($jenis_pendapatan801 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($llp_target, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($llp_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($llp_bulan_lalu, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($llp_sd_bulan_ini, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($llp_persentase, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($llp_lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Menampilkan data jenis pajak 8 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php
    $i801 = 0;
    ?>
    <?php foreach ($laporan_perdinas801 as $value) : ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['kode']; ?>01</th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>LAIN-LAIN PENDAPATAN</th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <!-- Menampilkan data bulan sekarang -->
        <?php $bln_lalu = !empty($this->laporanPadModel->bulan_ini801($tanggal_awal, $tanggal_akhir)[$i801]) ? $this->laporanPadModel->bulan_ini801($tanggal_awal, $tanggal_akhir)[$i801]['realisasi'] : '0'; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($bln_ini, 2, ',', '.'); ?></th>
        <!-- Menampilkan data bulan lalu -->
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($value['realisasi'], 2, ',', '.'); ?></th>

        <!-- S/D Bulan Ini -->
        <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
            $persen = $sd_bulan_ini / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $sd_bulan_ini - $value['target'];
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persen, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lk, 2, ',', '.'); ?></th>
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
        <?php $bln_ini = !empty($this->laporanPadModel->bulan_ini801($tanggal_awal, $tanggal_akhir)[$i801]) ? $this->laporanPadModel->bulan_ini801($tanggal_awal, $tanggal_akhir)[$i801]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>
        <!-- Menampilkan data bulan lalu -->
        <td><?= number_format($value['realisasi'], 2, ',', '.'); ?></td>

        <!-- S/D Bulan Ini -->
        <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
        <td><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></td>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
            $persen = $sd_bulan_ini / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $sd_bulan_ini - $value['target'];
        ?>
        <td><?= number_format($persen, 2, ',', '.'); ?></td>
        <td><?= number_format($lk, 2, ',', '.'); ?></td>

        <?php $i801++ ?>
</tr>
<?php endforeach; ?>

<!-- JUMLAH -->
<tr>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'>JUMLAH</th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'><?= number_format($jumlah_target, 2, ',', '.'); ?></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'><?= number_format($jumlah_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'><?= number_format($jumlah_bulan_lalu, 2, ',', '.'); ?></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'><?= number_format($jumlah_sd_bulan_ini, 2, ',', '.'); ?></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'><?= number_format($jumlah_persentase, 2, ',', '.'); ?></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'><?= number_format($jumlah_lebih_kurang, 2, ',', '.'); ?></th>
</tr>


            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>
<?= $this->endSection(); ?>