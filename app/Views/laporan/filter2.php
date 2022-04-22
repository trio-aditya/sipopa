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

use App\Models\LaporanFilterModel;

$this->laporanFilterModel = new LaporanFilterModel();
?>

<!-- ================================================================================== -->
<!-- PAJAK DAERAH -->
<!-- Target Pajak Daerah -->
<?php foreach ($sum_target1 as $da) : ?>
<?php endforeach; ?>
<!-- Realisasi Bulan lalu Pajak Daerah -->
<?php foreach ($sum_realisasi as $re) : ?>
<?php endforeach; ?>
<!-- Realisasi Bulan ini Pajak Daerah -->
<?php foreach ($sum_realisasi2 as $re2) : ?>
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
<?php foreach ($sum_realisasi4 as $re4) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi5 as $re5) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi6 as $re6) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi7 as $re7) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi8 as $re8) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi9 as $re9) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi10 as $re10) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi11 as $re11) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi12 as $re12) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi13 as $re13) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi14 as $re14) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi15 as $re15) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi16 as $re16) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi17 as $re17) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi18 as $re18) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi19 as $re19) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi20 as $re20) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi21 as $re21) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi22 as $re22) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi23 as $re23) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi24 as $re24) : ?>
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
<?php foreach ($sum_realisasi26 as $re26) : ?>
<?php endforeach; ?>

<?php foreach ($sum_realisasi27 as $re27) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi28 as $re28) : ?>
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
<?php foreach ($sum_realisasi30 as $re30) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi31 as $re31) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi32 as $re32) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi33 as $re33) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi34 as $re34) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi35 as $re35) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi36 as $re36) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi37 as $re37) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi38 as $re38) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi39 as $re39) : ?>
<?php endforeach; ?>
<?php foreach ($sum_realisasi40 as $re40) : ?>
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
<?php foreach ($bsum_realisasi5101 as $bre5101) : ?>
<?php endforeach; ?>

<!-- kode 0102 -->
<?php foreach ($sum_target5102 as $st5102) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan lalu DAU -->
<?php foreach ($sum_realisasi5102 as $re5102) : ?>
<?php endforeach; ?>
<!-- Realisasi bulan ini DAU -->
<?php foreach ($bsum_realisasi5102 as $bre5102) : ?>
<?php endforeach; ?>


<!-- kode 0103 -->
<!-- kode 0104 -->
<!-- Menampilkan target DAK Fisik -->
<?php foreach ($sum_target5103 as $st5103) : ?>
<?php endforeach; ?>
<!-- Realisasi DAK Fisik bulan lalu-->
<?php foreach ($sum_realisasi5103 as $re5103) : ?>
<?php endforeach; ?>
<!-- Realisasi DAK Fisik bulan ini-->
<?php foreach ($bsum_realisasi5103 as $bre5103) : ?>
<?php endforeach; ?>

<!-- Menampilkan DAK Non Fisik -->
<?php foreach ($sum_target5104 as $st5104) : ?>
<?php endforeach; ?>
<!-- Realisasi DAK Non Fisik bulan lalu-->
<?php foreach ($sum_realisasi5104 as $re5104) : ?>
<?php endforeach; ?>
<!-- Realisasi DAK Non Fisik bulan ini-->
<?php foreach ($bsum_realisasi5104 as $bre5104) : ?>
<?php endforeach; ?>

<!-- kode 02 -->
<?php foreach ($sum_target512 as $st512) : ?>
<?php endforeach; ?>
<!-- Realisasi DID bulan lalu-->
<?php foreach ($sum_realisasi512 as $re512) : ?>
<?php endforeach; ?>
<!-- Realisasi DID bulan ini-->
<?php foreach ($bsum_realisasi512 as $bre512) : ?>
<?php endforeach; ?>


<!-- kode 05 -->
<?php foreach ($sum_target515 as $st515) : ?>
<?php endforeach; ?>
<!-- Realisasi Dana Desa bulan lalu-->
<?php foreach ($sum_realisasi515 as $re515) : ?>
<?php endforeach; ?>
<!-- Realisasi Dana Desa bulan ini-->
<?php foreach ($bsum_realisasi515 as $bre515) : ?>
<?php endforeach; ?>

<!-- Pendapatan Transfer Antar Daerah -->
<!-- kode 01 -->
<?php foreach ($sum_target601 as $st601) : ?>
<?php endforeach; ?>
<!-- Realisasi Pendapatan Transfer Antar Daerah Bulan lalu -->
<?php foreach ($sum_realisasi601 as $re601) : ?>
<?php endforeach; ?>
<!-- Realisasi Pendapatan Transfer Antar Daerah Bulan ini -->
<?php foreach ($bsum_realisasi601 as $bre601) : ?>
<?php endforeach; ?>
<!-- ================================================================================== -->
<!-- Pendapatan Hibah -->
<!-- kode 01 -->
<?php foreach ($sum_target701 as $st701) : ?>
<?php endforeach; ?>
<!-- Realisasi Pendapatan Hibah bulan lalu -->
<?php foreach ($sum_realisasi701 as $re701) : ?>
<?php endforeach; ?>
<!-- Realisasi Pendapatan Hibah bulan ini-->
<?php foreach ($bsum_realisasi701 as $bre701) : ?>
<?php endforeach; ?>

<!-- Lain-Lain Pendapatan -->
<!-- kode 01 -->
<?php foreach ($sum_target801 as $st801) : ?>
<?php endforeach; ?>
<!-- Realisasi  Lain-lain Pendapatan bulan lalu -->
<?php foreach ($sum_realisasi801 as $re801) : ?>
<?php endforeach; ?>
<!-- Realisasi  Lain-lain Pendapatan bulan ini -->
<?php foreach ($bsum_realisasi801 as $bre801) : ?>
<?php endforeach; ?>
<!-- ================================================================================== -->


<?php
// ==============================================
// PAJAK DAERAH
// Target Pajak Daerah
$pd = $da->target;
// Realisasi Bulan lalu Pajak Daerah
$rd = $re->realisasi;
//Realisasi Bulan ini
$b_rd = $re2->realisasi;
// ==============================================
// RETRIBUSI
// ======DINAS KESEHATAN======
// Target
$target_dinkes = $data2->target2;
// Bulan Lalu
$realisasi_dinkes = $re3->realisasi;
// Bulan Ini
$b_realisasi_dinkes = $re4->realisasi;
// SD Bulan Ini
$sd_bulan_ini_dinkes = $realisasi_dinkes + $b_realisasi_dinkes;
// ======DINAS PERDAGANGAN======
// Target
$target_perdagangan = $data3->target3;
// Bulan Lalu
$realisasi_perdagangan = $re5->realisasi;
// Bulan Ini
$b_realisasi_perdagangan = $re6->realisasi;
// SD Bulan Ini
$sd_bulan_ini_perdagangan = $realisasi_perdagangan + $b_realisasi_perdagangan;
// ======DINAS PEMUKIMAN======
// Target
$target_pemukiman = $data4->target4;
// Bulan Lalu
$realisasi_pemukiman = $re7->realisasi;
// Bulan Ini
$b_realisasi_pemukiman = $re8->realisasi;
// SD Bulan Ini
$sd_bulan_ini_pemukiman = $realisasi_pemukiman + $b_realisasi_pemukiman;
// ======DINAS PERHUBUNGAN======
// Target
$target_perhubungan = $data5->target5;
// Bulan Lalu
$realisasi_perhubungan = $re9->realisasi;
// Bulan Ini
$b_realisasi_perhubungan = $re10->realisasi;
// SD Bulan Ini
$sd_bulan_ini_perhubungan = $realisasi_perhubungan + $b_realisasi_perhubungan;
// ======BKPSDM======
// Target
$target_bkpsdm = $data6->target6;
// Bulan Lalu
$realisasi_bkpsdm = $re11->realisasi;
// Bulan Ini
$b_realisasi_bkpsdm = $re12->realisasi;
// SD Bulan Ini
$sd_bulan_ini_bkpsdm = $realisasi_bkpsdm + $b_realisasi_bkpsdm;
// ======Dinas Bina Marga======
// Target
$target_binamarga = $data7->target7;
// Bulan Lalu
$realisasi_binamarga = $re13->realisasi;
// Bulan Ini
$b_realisasi_binamarga = $re14->realisasi;
// SD Bulan Ini
$sd_bulan_ini_binamarga = $realisasi_binamarga + $b_realisasi_binamarga;
// ======Dinas Kominfo======
// Target
$target_kominfo = $data8->target8;
// Bulan Lalu
$realisasi_kominfo = $re15->realisasi;
// Bulan Ini
$b_realisasi_kominfo = $re16->realisasi;
// SD Bulan Ini
$sd_bulan_ini_kominfo = $realisasi_kominfo + $b_realisasi_kominfo;
// ======Dinas Pertanian======
// Target
$target_pertanian = $data9->target9;
// Bulan Lalu
$realisasi_pertanian = $re17->realisasi;
// Bulan Ini
$b_realisasi_pertanian = $re18->realisasi;
// SD Bulan Ini
$sd_bulan_ini_pertanian = $realisasi_pertanian + $b_realisasi_pertanian;
// ======Dinas Perikanan======
// Target
$target_perikanan = $data10->target10;
// Bulan Lalu
$realisasi_perikanan = $re19->realisasi;
// Bulan Ini
$b_realisasi_perikanan = $re20->realisasi;
// SD Bulan Ini
$sd_bulan_ini_perikanan = $realisasi_perikanan + $b_realisasi_perikanan;
// ======Bagian Umum======
// Target
$target_umum = $data11->target11;
// Bulan Lalu
$realisasi_umum = $re21->realisasi;
// Bulan Ini
$b_realisasi_umum = $re22->realisasi;
// SD Bulan Ini
$sd_bulan_ini_umum = $realisasi_umum + $b_realisasi_umum;
// ======Bagian Perekonomian======
// Target
$target_perekonomian = $data11->target11;
// Bulan Lalu
$realisasi_perekonomian = $re21->realisasi;
// Bulan Ini
$b_realisasi_perekonomian = $re22->realisasi;
// SD Bulan Ini
$sd_bulan_ini_perekonomian = $realisasi_perekonomian + $b_realisasi_perekonomian;


// Target Retribusi
$target_retribusi = $target_dinkes + $target_perdagangan + $target_pemukiman + $target_perhubungan
    + $target_bkpsdm + $target_binamarga + $target_kominfo + $target_pertanian + $target_perikanan
    + $target_umum + $target_perekonomian;
// Realisasi Bulan Lalu
$realisasi_retribusi = $realisasi_dinkes + $realisasi_perdagangan + $realisasi_pemukiman + $realisasi_perhubungan + $realisasi_bkpsdm + $realisasi_binamarga
    + $realisasi_kominfo + $realisasi_pertanian + $realisasi_perikanan + $realisasi_umum + $realisasi_perekonomian;
// Realisasi Bulan Ini
$b_realisasi_retribusi = $b_realisasi_dinkes + $b_realisasi_perdagangan + $b_realisasi_pemukiman + $b_realisasi_perhubungan + $b_realisasi_bkpsdm + $b_realisasi_binamarga
    + $b_realisasi_kominfo + $b_realisasi_pertanian + $b_realisasi_perikanan + $b_realisasi_umum + $b_realisasi_perekonomian;
// SD Bulan Ini
$sd_bulan_ini_retribusi = $realisasi_retribusi + $b_realisasi_retribusi;
// ==============================================
// HASIL PENGELOLAAN KEKAYAAN DAERAH YANG DIPISAHKAN
// ======BPKAD======
// Target
$target_bpkad = $data13->target13;
// Bulan Lalu
$realisasi_bpkad = $re25->realisasi;
// Bulan Ini
$b_realisasi_bpkad = $re26->realisasi;
// SD Bulan Ini
$sd_bulan_ini_bpkad = $realisasi_bpkad + $b_realisasi_bpkad;
// ======Bagian Perekonomian======
// Target
$target_perekonomian2 = $data14->target14;
// Bulan Lalu
$realisasi_perekonomian2 = $re27->realisasi;
// Bulan Ini
$b_realisasi_perekonomian2 = $re28->realisasi;
// SD Bulan Ini
$sd_bulan_ini_perekonomian2 = $realisasi_perekonomian2 + $b_realisasi_perekonomian2;

// Target HPKDD
$target_hpkdd = $target_bpkad + $target_perekonomian2;
// Realisasi Bulan Lalu HKPDD
$realisasi_hpkdd = $realisasi_bpkad + $realisasi_perekonomian2;
// Realisasi Bulan Ini HKPDD
$b_realisasi_hpkdd = $b_realisasi_bpkad + $b_realisasi_perekonomian2;
// SD Bulan ini
$sd_bulan_ini_hpkdd = $realisasi_hpkdd + $b_realisasi_hpkdd;
// ==============================================
// LAIN-LAIN PAD YANG SAH
// ======Badan Pendapatan Daerah======
// Target
$target_bapenda4 = $data15->target15;
// Bulan Lalu
$realisasi_bapenda4 = $re29->realisasi;
// Bulan Ini
$b_realisasi_bapenda4 = $re30->realisasi;
// SD Bulan Ini
$sd_bulan_ini_bapenda4 = $realisasi_bapenda4 + $b_realisasi_bapenda4;
// ======Dinas Perkim======
// Target
$target_perkim = $data16->target16;
// Bulan Lalu
$realisasi_perkim = $re31->realisasi;
// Bulan Ini
$b_realisasi_perkim = $re32->realisasi;
// SD Bulan Ini
$sd_bulan_ini_perkim = $realisasi_perkim + $b_realisasi_perkim;
// ======BPKAD======
// Target
$target_bpkad2 = $data20->target20;
// Bulan Lalu
$realisasi_bpkad2 = $re39->realisasi;
// Bulan Ini
$b_realisasi_bpkad2 = $re40->realisasi;
// SD Bulan Ini
$sd_bulan_ini_bpkad2 = $realisasi_bpkad2 + $b_realisasi_bpkad2;
// ======RSU======
// Target
$target_rsu = $data17->target17;
// Bulan Lalu
$realisasi_rsu = $re33->realisasi;
// Bulan Ini
$b_realisasi_rsu = $re34->realisasi;
// SD Bulan Ini
$sd_bulan_ini_rsu = $realisasi_rsu + $b_realisasi_rsu;
// ======Dinas Kesehatan======
// Target
$target_dinkes2 = $data18->target18;
// Bulan Lalu
$realisasi_dinkes2 = $re35->realisasi;
// Bulan Ini
$b_realisasi_dinkes2 = $re36->realisasi;
// SD Bulan Ini
$sd_bulan_ini_dinkes2 = $realisasi_dinkes2 + $b_realisasi_dinkes2;
// ======Pelayanan Pasar======
// Target
$target_pasar = $data19->target19;
// Bulan Lalu
$realisasi_pasar = $re37->realisasi;
// Bulan Ini
$b_realisasi_pasar = $re38->realisasi;
// SD Bulan Ini
$sd_bulan_ini_pasar = $realisasi_pasar + $b_realisasi_pasar;

// Target Lain-lain PAD yang Sah
$target_lain_lain = $target_bapenda4 + $target_perkim + $target_bpkad2 + $target_rsu + $target_dinkes2 + $target_pasar;
// Bulan lalu Lain-lain PAD yang Sah
$realisasi_lain_lain = $realisasi_bapenda4 + $realisasi_perkim + $realisasi_bpkad2 + $realisasi_rsu + $realisasi_dinkes2 + $realisasi_pasar;
// Bulan ini Lain-lain PAD yang Sah
$b_realisasi_lain_lain = $b_realisasi_bapenda4 + $b_realisasi_perkim + $b_realisasi_bpkad2 + $b_realisasi_rsu + $b_realisasi_dinkes2 + $b_realisasi_pasar;
// SD bulan ini
$sd_bulan_ini_lain_lain = $realisasi_lain_lain + $b_realisasi_lain_lain;
// ==============================================
// PENDAPATAN TRANSFER
// ======Dana Transfer Umum dan Bagi Hasil (DBH)======
// Target
$target_dbh = $st5101->target5101;
// Bulan Lalu
$realisasi_dbh = $re5101->realisasi;
// Bulan Ini
$b_realisasi_dbh = $bre5101->realisasi;
// SD Bulan Ini
$sd_bulan_ini_dbh = $realisasi_dbh + $b_realisasi_dbh;

// ======Dana Alokasi Umum (DAU)======
// Target
$target_dau = $st5102->target5102;
// Bulan Lalu
$realisasi_dau = $re5102->realisasi;
// Bulan Ini
$b_realisasi_dau = $bre5102->realisasi;
// SD Bulan Ini
$sd_bulan_ini_dau = $realisasi_dau + $b_realisasi_dau;

// ======DAK FISIK======
// Target
$target_dak_fisik = $st5103->target5103;
// Bulan Lalu
$realisasi_dak_fisik = $re5103->realisasi;
// Bulan Ini
$b_realisasi_dak_fisik = $bre5103->realisasi;
// SD Bulan Ini
$sd_bulan_ini_dak_fisik = $realisasi_dak_fisik + $b_realisasi_dak_fisik;

// ======DAK NON FISIK======
// Target
$target_dak_nonfisik = $st5104->target5104;
// Bulan Lalu
$realisasi_dak_nonfisik = $re5104->realisasi;
// Bulan Ini
$b_realisasi_dak_nonfisik = $bre5104->realisasi;
// SD Bulan Ini
$sd_bulan_ini_dak_nonfisik = $realisasi_dak_nonfisik + $b_realisasi_dak_nonfisik;

// Dana Alokasi Khusus (DAK)
$target_dak = $target_dak_fisik + $target_dak_nonfisik;
$realisasi_dak = $realisasi_dak_fisik + $realisasi_dak_nonfisik;
$b_realisasi_dak = $b_realisasi_dak_fisik + $b_realisasi_dak_nonfisik;
$sd_bulan_ini_dak = $realisasi_dak + $b_realisasi_dak;

// Dana Perimbangan
$target_dp = $target_dbh + $st5102->target5102 + $target_dak;
$realisasi_dp = $realisasi_dbh + $re5102->realisasi + $realisasi_dak;
$b_realisasi_dp = $b_realisasi_dbh + $re5102->realisasi + $realisasi_dak;
$sd_bulan_ini_dp = $realisasi_dp + $b_realisasi_dp;

// Pendapatan Transfer Pemerintah Pusat
$target_ptpp = $target_dp + $st512->target512 + $st515->target515;
$b_realisasi_ptpp = $realisasi_dp + $bre512->realisasi + $bre515->realisasi;
$realisasi_ptpp = $realisasi_dp + $re512->realisasi + $re515->realisasi;
$sd_bulan_ini_ptpp = $b_realisasi_ptpp + $realisasi_ptpp;
// =================================================================================
// Pendapatan Transfer Antar Daerah
$target_ptad = $st601->target601;
$realisasi_ptad = $re601->realisasi;
$b_realisasi_ptad = $bre601->realisasi;
$sd_bulan_ini_ptad = $realisasi_ptad + $b_realisasi_ptad;

// Pajak Asli Daerah
// Target PAD
$target_pad = $pd + $target_retribusi + $target_hpkdd + $target_lain_lain;
// Realisasi bulan lalu PAD
$realisasi_pad = $rd + $realisasi_retribusi + $realisasi_hpkdd + $realisasi_lain_lain;
// Realisasi bulan ini PAD
$b_realisasi_pad = $b_rd  + $b_realisasi_retribusi + $b_realisasi_hpkdd + $b_realisasi_lain_lain;
// sd bulan ini
$sd_bulan_ini_pad = $realisasi_pad + $b_realisasi_pad;

//PENDAPATAN TRANSFER
$target_pt = $target_ptpp + $target_ptad;
$b_realisasi_pt = $b_realisasi_ptpp + $realisasi_ptad;
$realisasi_pt = $realisasi_ptpp + $b_realisasi_ptad;
$sd_bulan_ini_pt = $b_realisasi_pt + $realisasi_pt;
// ==============================================
//LAIN-LAIN PENDAPATAN DAERAH YANG SAH
//Pendapatan Hibah
$target_ph = $st701->target701;
$realisasi_ph = $re701->realisasi;
$b_realisasi_ph = $bre701->realisasi;
$sd_bulan_ini_ph = $realisasi_ph + $b_realisasi_ph;

//Lain-Lain Pendapatan Daerah yang Sah
//Lain-lain pendapatan
$target_llp = $st801->target801;
$realisasi_llp = $re801->realisasi;
$b_realisasi_llp = $bre801->realisasi;
$sd_bulan_ini_llp = $realisasi_llp + $b_realisasi_llp;

$target_llpd = $target_ph + $target_llp;
$realisasi_llpd = $realisasi_ph + $realisasi_llp;
$b_realisasi_llpd = $b_realisasi_ph + $b_realisasi_llp;
$sd_bulan_ini_llpd = $realisasi_llpd + $b_realisasi_llpd;
// ==============================================

//JUMLAH
$target_jumlah = $target_pad + $target_pt + $target_llpd;
$realisasi_jumlah = $realisasi_pad + $realisasi_ph + $realisasi_llpd;
$b_realisasi_jumlah = $b_realisasi_pad + $b_realisasi_ph + $b_realisasi_llpd;
$sd_bulan_ini_jumlah = $realisasi_jumlah + $b_realisasi_jumlah;
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


            <form action="<?= base_url('/laporanPerdinas/excel_filter'); ?>" method="post" target="_blank">
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
        <div class="box-body">
            <center>
                <p class="box-title">Bulan Lalu : <b><?= tgl_indo($bl_tanggal_awal) . " s/d " . tgl_indo($bl_tanggal_akhir) ?></b></p>
                <p class="box-title">Bulan Ini : <b><?= tgl_indo($tanggal_awal) . " s/d " . tgl_indo($tanggal_akhir) ?></b></p>
            </center>
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <?php endif; ?>
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
                    <th bgcolor='#FFA500' style='color:#FFFFFF'>4</th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF' colspan="2">PENDAPATAN DAERAH</th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($target_jumlah, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($b_realisasi_jumlah, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($realisasi_jumlah, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_jumlah, 2, ',', '.'); ?></th>
                    <!--Persentase didapat dari sd bulan ini / target * 100 -->
                    <?php if ($sd_bulan_ini_jumlah > 0 && $target_jumlah > 0) {
                        $persentase = $sd_bulan_ini_jumlah / $target_jumlah * 100;
                    } else {
                        $persentase = 0;
                    }
                    $lebih_kurang = $sd_bulan_ini_jumlah - $target_jumlah;
                    ?>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                </tr>
                <tr>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'>41</th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF' colspan="2">PENDAPATAN ASLI DAERAH</th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($target_pad, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($b_realisasi_pad, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($realisasi_pad, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_pad, 2, ',', '.'); ?></th>
                    <!--Persentase didapat dari sd bulan ini / target * 100 -->
                    <?php if ($sd_bulan_ini_pad > 0 && $target_pad > 0) {
                        $persentase = $sd_bulan_ini_pad / $target_pad * 100;
                    } else {
                        $persentase = 0;
                    }
                    $lebih_kurang = $sd_bulan_ini_pad - $target_pad;
                    ?>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
                    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                </tr>
                <!-- ============================================================================================================================== -->
                <!-- PAJAK DAERAH -->
                <?php foreach ($jenis_pendapatan1 as $value) : ?>
                    <tr>
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
                        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
                        <!-- Menampilkan Target -->
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($pd, 2, ',', '.'); ?></th>
                        <!-- Realisasi bulan ini dengan jenis pajak 1 -->
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($b_rd, 2, ',', '.'); ?></th>
                        <!-- Realisasi bulan lalu dengan jenis pajak 1 -->
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($rd, 2, ',', '.'); ?></th>
                        <!-- SD Bulan Ini -->
                        <?php $sd_bulan_ini = $b_rd + $rd; ?>
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
                        <!--Persentase didapat dari sd bulan ini / target * 100 -->
                        <?php if ($sd_bulan_ini > 0 && $pd > 0) {
                            $persentase = $sd_bulan_ini / $pd * 100;
                        } else {
                            $persentase = 0;
                        }
                        ?>
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
                        <?php $lebih_kurang = $sd_bulan_ini - $pd ?>
                        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                    <tr>
                        <!-- Start Menampilkan Data OPD Badan Pendapatan Daerah -->
                        <th bgcolor='#008000' style='color:#FFFFFF'></th>
                        <th bgcolor='#008000' style='color:#FFFFFF'></th>
                        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['nama_opd']; ?></th>
                        <!-- Menampilkan Target -->
                        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($pd, 2, ',', '.'); ?></th>
                        <!-- Realisasi Bulan ini dengan jenis pajak 1 -->
                        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_rd, 2, ',', '.'); ?></th>
                        <!-- Realisasi Bulan Lalu dengan jenis pajak 1 -->
                        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($rd, 2, ',', '.'); ?></th>
                        <!-- SD Bulan Ini -->
                        <?php $sd_bulan_ini = $b_rd + $rd; ?>
                        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
                        <!--Persentase didapat dari realisasi / target * 100 -->
                        <?php if ($sd_bulan_ini > 0 && $pd > 0) {
                            $persentase = $sd_bulan_ini / $pd * 100;
                        } else {
                            $persentase = 0;
                        }
                        ?>
                        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
                        <?php $lebih_kurang = $sd_bulan_ini - $pd ?>
                        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                        <!-- End Menampilkan Data OPD Badan Pendapatan Daerah -->
                    </tr>
                    </tr>
                <?php endforeach; ?>
                <!-- Start Menampilkan data OPD Bapenda -->
                <tr>
                    <?php $no = 1;;
                    $i = 0;
                    ?>
                    <?php foreach ($laporan_perdinas1 as $value) : ?>
                        <td align="center"><?= $no++ ?></td>

                        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                        <td><?= $value['keterangan']; ?></td>
                        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
                        <!-- Bulan Ini -->
                        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini($tanggal_awal, $tanggal_akhir)[$i]) ? $this->laporanFilterModel->bulan_ini($tanggal_awal, $tanggal_akhir)[$i]['realisasi'] : '0'; ?>
                        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

                        <!-- Bulan Lalu -->
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
            <!-- End Menampilkan data OPD Bapenda -->

            <!-- ============================================================================================================================== -->

            <!-- 2 -->
            <!-- Start Retribusi -->
            <?php foreach ($jenis_pendapatan2 as $value) : ?>
                <tr>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
                    <th th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
                    <th th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($target_retribusi, 2, ',', '.'); ?></th>
                    <th th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($b_realisasi_retribusi, 2, ',', '.'); ?></th>
                    <th th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_retribusi, 2, ',', '.'); ?></th>
                    <th th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_retribusi, 2, ',', '.'); ?></th>
                    <!-- Persentase didapat dari Realisasi / target PAD * 100 -->
                    <?php if ($sd_bulan_ini_retribusi > 0 && $target_retribusi > 0) {
                        $persentase = $sd_bulan_ini_retribusi / $target_retribusi * 100;
                    } else {
                        $persentase = 0;
                    }
                    ?>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
                    <?php $lebih_kurang = $sd_bulan_ini_retribusi - $target_retribusi ?>
                    <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                <tr>
                    <!-- Start Dinas Kesehatan -->
                    <th bgcolor='#008000' style='color:#FFFFFF'></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'>I. <?= $value['nama_opd']; ?></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_dinkes, 2, ',', '.'); ?></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_dinkes, 2, ',', '.'); ?></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_dinkes, 2, ',', '.'); ?></th>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_dinkes, 2, ',', '.'); ?></th>

                    <!-- Persentase didapat dari SD Bulan ini / target PAD * 100 -->
                    <?php if ($sd_bulan_ini_dinkes > 0 && $target_dinkes > 0) {
                        $persentase = $sd_bulan_ini_dinkes / $target_dinkes * 100;
                    } else {
                        $persentase = 0;
                    }
                    ?>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
                    <?php $lebih_kurang = $sd_bulan_ini_dinkes - $target_dinkes ?>
                    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
                </tr>
                </tr>
            <?php endforeach; ?>

            <!-- Start menampilkan data Dinas Kesehatan -->
            <tr>
                <?php $no = 1;
                $i2 = 0; ?>
                <?php foreach ($laporan_perdinas2 as $value) : ?>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                    <td><?= $value['keterangan']; ?></td>
                    <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
                    <!-- Bulan ini -->
                    <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini2($tanggal_awal, $tanggal_akhir)[$i2]) ? $this->laporanFilterModel->bulan_ini2($tanggal_awal, $tanggal_akhir)[$i2]['realisasi'] : '0'; ?>
                    <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

                    <!-- Bulan Lalu -->
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
                    <?php $i2++; ?>
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
                <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_perdagangan, 2, ',', '.'); ?></th>
                <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_perdagangan, 2, ',', '.'); ?></th>
                <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_perdagangan, 2, ',', '.'); ?></th>
                <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_perdagangan, 2, ',', '.'); ?></th>

                <!-- Persentase didapat dari realisasi / target PAD * 100 -->
                <?php if ($sd_bulan_ini_perdagangan > 0 && $target_perdagangan > 0) {
                    $persentase = $sd_bulan_ini_perdagangan / $target_perdagangan * 100;
                } else {
                    $persentase = 0;
                }
                ?>
                <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
                <?php $lebih_kurang = $sd_bulan_ini_perdagangan - $target_perdagangan ?>
                <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
            </tr>
        <?php endforeach; ?>

        <!-- Start menampilkan data Dinas Perdagangan -->
        <tr>
            <?php $no = 1;
            $i3 = 0; ?>
            <?php foreach ($laporan_perdinas3 as $value) : ?>
                <td align="center"><?= $no++ ?></td>
                <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
                <td><?= $value['keterangan']; ?></td>
                <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
                <!-- Bulan ini -->
                <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini3($tanggal_awal, $tanggal_akhir)[$i3]) ? $this->laporanFilterModel->bulan_ini3($tanggal_awal, $tanggal_akhir)[$i3]['realisasi'] : '0'; ?>
                <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

                <!-- Bulan lalu -->
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
                <?php $i3++; ?>
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
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_pemukiman, 2, ',', '.'); ?></th>
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_pemukiman, 2, ',', '.'); ?></th>
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_pemukiman, 2, ',', '.'); ?></th>
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_pemukiman, 2, ',', '.'); ?></th>

            <!-- Persentase didapat dari sd bulan ini / target PAD * 100 -->
            <?php if ($sd_bulan_ini_pemukiman > 0 && $target_pemukiman > 0) {
                $persentase = $sd_bulan_ini_pemukiman / $target_pemukiman * 100;
            } else {
                $persentase = 0;
            }
            ?>
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
            <?php $lebih_kurang = $sd_bulan_ini_pemukiman - $target_pemukiman ?>
            <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
        </tr>
    <?php endforeach; ?>

    <!-- Start menampilkan data Dinas Pemukiman -->
    <tr>
        <?php $no = 1;
        $i4 = 0; ?>
        <?php foreach ($laporan_perdinas4 as $value) : ?>
            <td align="center"><?= $no++ ?></td>
            <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
            <td><?= $value['keterangan']; ?></td>
            <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
            <!-- bulan ini -->
            <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini4($tanggal_awal, $tanggal_akhir)[$i4]) ? $this->laporanFilterModel->bulan_ini4($tanggal_awal, $tanggal_akhir)[$i4]['realisasi'] : '0'; ?>
            <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

            <!-- bulan lalu -->
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
            <?php $i4++; ?>
    </tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Pemukiman -->

<!-- Retribusi 5 -->
<?php foreach ($jenis_pendapatan5 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>IV. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_perhubungan, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_perhubungan, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_perhubungan, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_perhubungan, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($sd_bulan_ini_perhubungan > 0 && $target_perhubungan > 0) {
            $persentase = $sd_bulan_ini_perhubungan / $target_perhubungan * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_perhubungan - $target_perhubungan ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Perhubungan -->
<tr>
    <?php $no = 1;
    $i5 = 0; ?>
    <?php foreach ($laporan_perdinas5 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i5++; ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Perhubungan -->

<!-- Retribusi 6 -->
<?php foreach ($jenis_pendapatan6 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>V. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_bkpsdm, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_bkpsdm, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_bkpsdm, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_bkpsdm, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari sd bulan ini / target PAD * 100 -->
        <?php if ($sd_bulan_ini_bkpsdm > 0 && $target_bkpsdm > 0) {
            $persentase = $sd_bulan_ini_bkpsdm / $target_bkpsdm * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_bkpsdm - $target_bkpsdm ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data BKPSDM -->
<tr>
    <?php $no = 1;
    $i6 = 0; ?>
    <?php foreach ($laporan_perdinas6 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini6($tanggal_awal, $tanggal_akhir)[$i6]) ? $this->laporanFilterModel->bulan_ini6($tanggal_awal, $tanggal_akhir)[$i6]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i6++; ?>

</tr>
<?php endforeach; ?>
<!-- End menampilkan data BKPSDM -->

<!-- Retribusi 7 -->
<?php foreach ($jenis_pendapatan7 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>VI. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_binamarga, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_binamarga, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_binamarga, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_binamarga, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari realisasi / target PAD * 100 -->
        <?php if ($sd_bulan_ini_binamarga > 0 && $target_binamarga > 0) {
            $persentase = $sd_bulan_ini_binamarga / $target_binamarga * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_binamarga - $target_binamarga ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Bina Marga -->
<tr>
    <?php $no = 1;
    $i7 = 0; ?>
    <?php foreach ($laporan_perdinas7 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini7($tanggal_awal, $tanggal_akhir)[$i7]) ? $this->laporanFilterModel->bulan_ini7($tanggal_awal, $tanggal_akhir)[$i7]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i7++ ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Bina Marga -->

<!-- Retribusi 8 -->
<?php foreach ($jenis_pendapatan8 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>VII. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_kominfo, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_kominfo, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_kominfo, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_kominfo, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari sd bulan ini / target PAD * 100 -->
        <?php if ($sd_bulan_ini_kominfo > 0 && $target_kominfo > 0) {
            $persentase = $sd_bulan_ini_kominfo / $target_kominfo * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_kominfo - $target_kominfo ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Komunikasi dan Informatika -->
<tr>
    <?php $no = 1;
    $i8 = 0; ?>
    <?php foreach ($laporan_perdinas8 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_lalu = !empty($this->laporanFilterModel->bulan_ini8($tanggal_awal, $tanggal_akhir)[$i8]) ? $this->laporanFilterModel->bulan_ini8($tanggal_awal, $tanggal_akhir)[$i8]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i8++ ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Komunikasi dan Informatika -->

<!-- Retribusi 9 -->
<?php foreach ($jenis_pendapatan9 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>VIII. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_pertanian, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_pertanian, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_pertanian, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_pertanian, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari sd bulan ini / target PAD * 100 -->
        <?php if ($sd_bulan_ini_pertanian > 0 && $target_pertanian > 0) {
            $persentase = $sd_bulan_ini_pertanian / $target_pertanian * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_pertanian - $target_pertanian ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Pertanian -->
<tr>
    <?php $no = 1;
    $i9 = 0; ?>
    <?php foreach ($laporan_perdinas9 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini9($tanggal_awal, $tanggal_akhir)[$i9]) ? $this->laporanFilterModel->bulan_ini9($tanggal_awal, $tanggal_akhir)[$i9]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i9++; ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Pertanian -->

<!-- Retribusi 10 -->
<?php foreach ($jenis_pendapatan10 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>IX. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_perikanan, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_perikanan, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_perikanan, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_perikanan, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari sd bulan ini / target PAD * 100 -->
        <?php if ($sd_bulan_ini_perikanan > 0 && $target_perikanan > 0) {
            $persentase = $sd_bulan_ini_perikanan / $target_perikanan * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_perikanan - $target_perikanan ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Pertikanan -->
<tr>
    <?php $no = 1;
    $i10 = 0; ?>
    <?php foreach ($laporan_perdinas10 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini10($tanggal_awal, $tanggal_akhir)[$i10]) ? $this->laporanFilterModel->bulan_ini10($tanggal_awal, $tanggal_akhir)[$i10]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i10++; ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Perikanan -->

<!-- Retribusi 11 -->
<?php foreach ($jenis_pendapatan11 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>X. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_umum, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_umum, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_umum, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_umum, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari sd bulan ini / target PAD * 100 -->
        <?php if ($sd_bulan_ini_umum > 0 && $target_umum > 0) {
            $persentase = $sd_bulan_ini_umum / $target_umum * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_umum - $target_umum ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Bagian Umum -->
<tr>
    <?php $no = 1;
    $i11 = 0; ?>
    <?php foreach ($laporan_perdinas11 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini11($tanggal_awal, $tanggal_akhir)[$i11]) ? $this->laporanFilterModel->bulan_ini11($tanggal_awal, $tanggal_akhir)[$i11]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i11++; ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Bagian Umum -->

<!-- Retribusi 12 -->
<?php foreach ($jenis_pendapatan12 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>XI. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_perekonomian, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_perekonomian, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_perekonomian, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_perekonomian, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari sd bulan ini / target PAD * 100 -->
        <?php if ($sd_bulan_ini_perekonomian > 0 && $target_perekonomian > 0) {
            $persentase = $sd_bulan_ini_perekonomian / $target_perekonomian * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_perekonomian - $target_perekonomian ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Bagian Perekonomian -->
<tr>
    <?php $no = 1;
    $i12 = 0; ?>
    <?php foreach ($laporan_perdinas12 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini12($tanggal_awal, $tanggal_akhir)[$i12]) ? $this->laporanFilterModel->bulan_ini12($tanggal_awal, $tanggal_akhir)[$i12]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i12++; ?>
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
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($b_realisasi_hpkdd, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_hpkdd, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_hpkdd, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari sd bulan ini / target PAD * 100 -->
        <?php if ($sd_bulan_ini_hpkdd > 0 && $target_hpkdd > 0) {
            $persentase = $sd_bulan_ini_hpkdd / $target_hpkdd * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_hpkdd - $target_hpkdd ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>

    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>I. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_bpkad, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_bpkad, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_bpkad, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_bpkad, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari sd bulan ini / target PAD * 100 -->
        <?php if ($sd_bulan_ini_bpkad > 0 && $target_bpkad > 0) {
            $persentase = ($sd_bulan_ini_bpkad / $target_bpkad) * 100;
        } else {
            $persen = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_bpkad - $target_bpkad ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data BPKAD -->
<tr>
    <?php $no = 1;
    $i13 = 0; ?>
    <?php foreach ($laporan_perdinas13 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini13($tanggal_awal, $tanggal_akhir)[$i13]) ? $this->laporanFilterModel->bulan_ini13($tanggal_awal, $tanggal_akhir)[$i13]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i13++; ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data BPKAD -->
<?php foreach ($jenis_pendapatan14 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>II. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_perekonomian2, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_perekonomian2, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_perekonomian2, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_perekonomian2, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari sd bulan ini / target PAD * 100 -->
        <?php if ($sd_bulan_ini_perekonomian2 > 0 && $target_perekonomian2 > 0) {
            $persentase = $sd_bulan_ini_perekonomian2 / $target_perekonomian2 * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_perekonomian2 - $target_perekonomian2 ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Bagian Perekonomian -->
<tr>
    <?php $no = 1;
    $i14 = 0; ?>
    <?php foreach ($laporan_perdinas14 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini14($tanggal_awal, $tanggal_akhir)[$i14]) ? $this->laporanFilterModel->bulan_ini14($tanggal_awal, $tanggal_akhir)[$i14]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i14++; ?>
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
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($b_realisasi_lain_lain, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_lain_lain, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_lain_lain, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari sd bulan ini / target PAD * 100 -->
        <?php if ($sd_bulan_ini_lain_lain > 0 && $realisasi_lain_lain > 0) {
            $persentase = $sd_bulan_ini_lain_lain / $realisasi_lain_lain * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_lain_lain - $realisasi_lain_lain ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>

    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>I. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_bapenda4, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_bapenda4, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_bapenda4, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_bapenda4, 2, ',', '.'); ?></th>

        <!-- Persentase didapat dari S/D bulan ini / target PAD * 100 -->
        <?php if ($sd_bulan_ini_bapenda4 > 0 && $target_bapenda4 > 0) {
            $persentase = $sd_bulan_ini_bapenda4 / $target_bapenda4 * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_bapenda4 - $target_bapenda4 ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Badan Pendapatan Daerah -->
<tr>

    <?php $no = 1;
    $i15 = 0; ?>
    <?php foreach ($laporan_perdinas15 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini15($tanggal_awal, $tanggal_akhir)[$i15]) ? $this->laporanFilterModel->bulan_ini15($tanggal_awal, $tanggal_akhir)[$i15]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i15++; ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Badan Pendapatan Daerah -->

<!-- jenis pajak 4 opd 4 -->
<?php foreach ($jenis_pendapatan16 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>II. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_perkim, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_perkim, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_perkim, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_perkim, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini_perkim > 0 && $target_perkim > 0) {
            $persentase = $sd_bulan_ini_perkim / $target_perkim * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_perkim - $target_perkim ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Perkim-->
<tr>
    <?php $no = 1;
    $i16 = 0; ?>
    <?php foreach ($laporan_perdinas16 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini16($tanggal_awal, $tanggal_akhir)[$i16]) ? $this->laporanFilterModel->bulan_ini16($tanggal_awal, $tanggal_akhir)[$i16]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i16++; ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Badan Perkim-->

<!-- jenis pajak 4 opd 13 -->
<?php foreach ($jenis_pendapatan20 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>III. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_bpkad2, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_bpkad2, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_bpkad2, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_bpkad2, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini_bpkad2 > 0 && $target_bpkad2 > 0) {
            $persentase = $sd_bulan_ini_bpkad2 / $target_bpkad2 * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_bpkad2 - $target_bpkad2 ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data BPKAD-->
<tr>

    <?php $no = 1;
    $i20 = 0; ?>
    <?php foreach ($laporan_perdinas20 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini20($tanggal_awal, $tanggal_akhir)[$i20]) ? $this->laporanFilterModel->bulan_ini20($tanggal_awal, $tanggal_akhir)[$i20]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i20++; ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data BPKAD-->

<!-- jenis pajak 4 opd 15 -->
<?php foreach ($jenis_pendapatan17 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>IV. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_rsu, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_rsu, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_rsu, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_rsu, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini_rsu > 0 && $target_rsu > 0) {
            $persentase = $sd_bulan_ini_rsu / $target_rsu * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_rsu - $target_rsu ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data RSU Demang Sepulau Raya-->
<tr>

    <?php $no = 1;
    $i17 = 0; ?>
    <?php foreach ($laporan_perdinas17 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini17($tanggal_awal, $tanggal_akhir)[$i17]) ? $this->laporanFilterModel->bulan_ini17($tanggal_awal, $tanggal_akhir)[$i17]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i17++; ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data RSU Demang Sepulau Raya-->

<!-- jenis pajak 4 opd 2 -->
<?php foreach ($jenis_pendapatan18 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>V. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_dinkes2, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_dinkes2, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_dinkes2, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_dinkes2, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini_dinkes2 > 0 && $target_dinkes2 > 0) {
            $persentase = $sd_bulan_ini_dinkes2 / $target_dinkes2 * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_dinkes2 - $target_dinkes2 ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Dinas Kesehatan -->
<tr>
    <?php $no = 1;
    $i18 = 0; ?>
    <?php foreach ($laporan_perdinas18 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini18($tanggal_awal, $tanggal_akhir)[$i18]) ? $this->laporanFilterModel->bulan_ini18($tanggal_awal, $tanggal_akhir)[$i18]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i18++; ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Dinas Kesehatan -->

<!-- jenis pajak 4 opd 16 -->
<?php foreach ($jenis_pendapatan19 as $value) : ?>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>VI. <?= $value['nama_opd']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_pasar, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_pasar, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_pasar, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_pasar, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini_pasar > 0 && $target_pasar > 0) {
            $persen = $sd_bulan_ini_pasar / $target_pasar * 100;
        } else {
            $persen = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_pasar - $target_pasar ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Start menampilkan data Pelayanan Pasar -->
<tr>

    <?php $no = 1;
    $i19 = 0; ?>
    <?php foreach ($laporan_perdinas19 as $value) : ?>
        <td align="center"><?= $no++ ?></td>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini19($tanggal_awal, $tanggal_akhir)[$i19]) ? $this->laporanFilterModel->bulan_ini19($tanggal_awal, $tanggal_akhir)[$i19]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i19++; ?>
</tr>
<?php endforeach; ?>
<!-- End menampilkan data Pelayanan Pasar -->
<!-- 4 -->
<!-- ============================================================================================================================== -->

<!-- PENDAPATAN TRANSFER -->
<tr>
    <th bgcolor='#FFA500' style='color:#FFFFFF'>42</th>
    <th bgcolor='#FFA500' style='color:#FFFFFF' colspan="2">PENDAPATAN TRANSFER</th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($target_pt, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($b_realisasi_pt, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($realisasi_pt, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_pt, 2, ',', '.'); ?></th>
    <!--Persentase didapat dari sd bulan ini / target * 100 -->
    <?php if ($sd_bulan_ini_pt > 0 && $target_pt > 0) {
        $persentase = $sd_bulan_ini_pt / $target_pt * 100;
    } else {
        $persentase = 0;
    }
    $lebih_kurang = $sd_bulan_ini_pt - $target_pt;
    ?>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<?php foreach ($jenis_pendapatan5101 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($target_ptpp, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($b_realisasi_ptpp, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_ptpp, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_ptpp, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini_ptpp > 0 && $target_ptpp > 0) {
            $persentase = $sd_bulan_ini_ptpp / $target_ptpp * 100;
        } else {
            $persentase = 0;
        }
        $lebih_kurang = $sd_bulan_ini_ptpp - $target_ptpp;
        ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'>421.01</th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>Dana Perimbangan</th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_dp, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_dp, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_dp, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_dp, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini_dp > 0 && $target_dp > 0) {
            $persentase = $sd_bulan_ini_dp / $target_dp * 100;
        } else {
            $persentase = 0;
        }
        $lebih_kurang = $sd_bulan_ini_dp - $target_dp;
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
    <tr>
        <th bgcolor='#008000' style='color:#FFFFFF'>421.01.01</th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'>Dana Transfer Umum dan Bagi Hasil (DBH)</th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_dbh, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_dbh, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_dbh, 2, ',', '.'); ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_dbh, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini_dbh > 0 && $target_dbh > 0) {
            $persentase = $sd_bulan_ini_dbh / $target_dbh * 100;
        } else {
            $persentase = 0;
        }
        ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <?php $lebih_kurang = $sd_bulan_ini_dbh - $target_dbh ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
    </tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php $no = 1;
    $i5101 = 0; ?>
    <?php foreach ($laporan_perdinas5101 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini5101($tanggal_awal, $tanggal_akhir)[$i5101]) ? $this->laporanFilterModel->bulan_ini5101($tanggal_awal, $tanggal_akhir)[$i5101]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i5101++; ?>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 0102 -->
<tr>
    <th bgcolor='#008000' style='color:#FFFFFF'>421.01.02</th>
    <th bgcolor='#008000' style='color:#FFFFFF'></th>
    <th bgcolor='#008000' style='color:#FFFFFF'>Dana Alokasi Umum (DAU)</th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_dau, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_dau, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_dau, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_dau, 2, ',', '.'); ?></th>

    <!--Persentase didapat dari sd bulan ini / target * 100 -->
    <?php if ($sd_bulan_ini_dau > 0 && $target_dau > 0) {
        $persentase = $sd_bulan_ini_dau / $target_dau * 100;
    } else {
        $persentase = 0;
    }
    ?>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
    <?php $lebih_kurang = $sd_bulan_ini_dau - $target_dau ?>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <?php $no = 1;
    $i5102 = 0; ?>
    <?php foreach ($laporan_perdinas5102 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini5102($tanggal_awal, $tanggal_akhir)[$i5102]) ? $this->laporanFilterModel->bulan_ini5102($tanggal_awal, $tanggal_akhir)[$i5102]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i5102++; ?>
</tr>
<?php endforeach; ?>

<tr>
    <th bgcolor='#008000' style='color:#FFFFFF'>421.01.03</th>
    <th bgcolor='#008000' style='color:#FFFFFF'></th>
    <th bgcolor='#008000' style='color:#FFFFFF'>Dana Alokasi Khusus (DAK)</th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($target_dak, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($b_realisasi_dak, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($realisasi_dak, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_dak, 2, ',', '.'); ?></th>
    <!--Persentase didapat dari sd bulan ini / target * 100 -->
    <?php if ($sd_bulan_ini_dak > 0 && $target_dak > 0) {
        $persentase = $sd_bulan_ini_dak / $target_dak * 100;
    } else {
        $persentase = 0;
    }
    $lebih_kurang = $sd_bulan_ini_dak - $target_dak;
    ?>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
    <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <th bgcolor='#708090' style='color:#FFFFFF'></th>
    <th bgcolor='#708090' style='color:#FFFFFF'></th>
    <th bgcolor='#708090' style='color:#FFFFFF'>DAK FISIK</th>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($target_dak_fisik, 2, ',', '.'); ?></th>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($b_realisasi_dak_fisik, 2, ',', '.'); ?></th>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($realisasi_dak_fisik, 2, ',', '.'); ?></th>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_dak_fisik, 2, ',', '.'); ?></th>

    <!--Persentase didapat dari sd bulan ini / target * 100 -->
    <?php if ($sd_bulan_ini_dak_fisik > 0 && $target_dak_fisik > 0) {
        $persentase = $sd_bulan_ini_dak_fisik / $target_dak_fisik * 100;
    } else {
        $persentase = 0;
    }
    ?>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
    <?php $lebih_kurang = $sd_bulan_ini_dak_fisik - $target_dak_fisik ?>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <?php $no = 1;
    $i5103 = 0; ?>
    <?php foreach ($laporan_perdinas5103 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini5103($tanggal_awal, $tanggal_akhir)[$i5103]) ? $this->laporanFilterModel->bulan_ini5103($tanggal_awal, $tanggal_akhir)[$i5103]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i5103++; ?>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 0104 -->
<tr>
    <th bgcolor='#708090' style='color:#FFFFFF'>421.01.04</th>
    <th bgcolor='#708090' style='color:#FFFFFF'></th>
    <th bgcolor='#708090' style='color:#FFFFFF'>DAK NON FISIK</th>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($target_dak_nonfisik, 2, ',', '.'); ?></th>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($b_realisasi_dak_nonfisik, 2, ',', '.'); ?></th>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($realisasi_dak_nonfisik, 2, ',', '.'); ?></th>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_dak_nonfisik, 2, ',', '.'); ?></th>

    <!--Persentase didapat dari sd bulan ini / target * 100 -->
    <?php if ($sd_bulan_ini_dak_nonfisik > 0 && $target_dak_nonfisik > 0) {
        $persentase = $sd_bulan_ini_dak_nonfisik / $target_dak_nonfisik * 100;
    } else {
        $persentase = 0;
    }
    ?>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
    <?php $lebih_kurang = $sd_bulan_ini_dak_nonfisik - $target_dak_nonfisik ?>
    <th bgcolor='#708090' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<tr>
    <?php $no = 1;
    $i5104 = 0; ?>
    <?php foreach ($laporan_perdinas5104 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini5104($tanggal_awal, $tanggal_akhir)[$i5104]) ? $this->laporanFilterModel->bulan_ini5104($tanggal_awal, $tanggal_akhir)[$i5104]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i5104++ ?>

</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 02 -->
<tr>
    <?php $i512 = 0; ?>
    <?php foreach ($laporan_perdinas512 as $value) : ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['kode']; ?><?= $value['kode_rekening']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['keterangan']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini512($tanggal_awal, $tanggal_akhir)[$i512]) ? $this->laporanFilterModel->bulan_ini512($tanggal_awal, $tanggal_akhir)[$i512]['realisasi'] : '0'; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($bln_ini, 2, ',', '.'); ?></th>

        <!-- bulan lalu -->
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
        <?php $i512++; ?>
</tr>
<?php endforeach; ?>
<tr>
    <?php $i512 = 0; ?>
    <?php foreach ($laporan_perdinas512 as $value) : ?>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini512($tanggal_awal, $tanggal_akhir)[$i512]) ? $this->laporanFilterModel->bulan_ini512($tanggal_awal, $tanggal_akhir)[$i512]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i512++; ?>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 5 dan opd 1 -->
<!-- kode 05 -->
<tr>
    <?php $i515 = 0; ?>
    <?php foreach ($laporan_perdinas515 as $value) : ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['kode']; ?><?= $value['kode_rekening']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= $value['keterangan']; ?></th>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini515($tanggal_awal, $tanggal_akhir)[$i515]) ? $this->laporanFilterModel->bulan_ini515($tanggal_awal, $tanggal_akhir)[$i515]['realisasi'] : '0'; ?>
        <th bgcolor='#008000' style='color:#FFFFFF'><?= number_format($bln_ini, 2, ',', '.'); ?></th>

        <!-- bulan lalu -->
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
        <?php $i515++; ?>
</tr>
<?php endforeach; ?>
<tr>
    <?php $i515 = 0; ?>
    <?php foreach ($laporan_perdinas515 as $value) : ?>
        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini515($tanggal_awal, $tanggal_akhir)[$i515]) ? $this->laporanFilterModel->bulan_ini515($tanggal_awal, $tanggal_akhir)[$i515]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i515++; ?>
</tr>
<?php endforeach; ?>
<!-- ============================================================================================================================== -->
<!-- PENDAPATAN TRANSFER ANTAR DAERAH -->
<?php foreach ($jenis_pendapatan601 as $value) : ?>

    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($target_ptad, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($b_realisasi_ptad, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_ptad, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_ptad, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini_ptad > 0 && $st601->target601 > 0) {
            $persentase = $sd_bulan_ini_ptad / $st601->target601 * 100;
        } else {
            $persentase = 0;
        }
        $lebih_kurang = $sd_bulan_ini_ptad - $st601->target601;
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
    $i601 = 0; ?>
    <?php foreach ($laporan_perdinas601 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini601($tanggal_awal, $tanggal_akhir)[$i601]) ? $this->laporanFilterModel->bulan_ini601($tanggal_awal, $tanggal_akhir)[$i601]['realisasi'] : '0'; ?>
        <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>

        <!-- bulan lalu -->
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
        <?php $i601++; ?>
</tr>
<?php endforeach; ?>
<!-- ============================================================================================================================== -->
<!-- LAIN-LAIN PENDAPATAN DAERAH YANG SAH -->
<tr>
    <th bgcolor='#FFA500' style='color:#FFFFFF'>43</th>
    <th bgcolor='#FFA500' style='color:#FFFFFF' colspan="2">LAIN-LAIN PENDAPATAN DAERAH YANG SAH</th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($target_llpd, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($b_realisasi_llpd, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($realisasi_llpd, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_llpd, 2, ',', '.'); ?></th>
    <!--Persentase didapat dari sd bulan ini / target * 100 -->
    <?php if ($sd_bulan_ini_llpd > 0 && $target_llpd > 0) {
        $persentase = $sd_bulan_ini_llpd / $target_llpd * 100;
    } else {
        $persentase = 0;
    }
    $lebih_kurang = $sd_bulan_ini_llpd - $target_llpd;
    ?>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
    <th bgcolor='#FFA500' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>

<?php foreach ($jenis_pendapatan701 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($target_ph, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($b_realisasi_ph, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_ph, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_ph, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini_ph > 0 && $target_ph > 0) {
            $persentase = $sd_bulan_ini_ph / $target_ph * 100;
        } else {
            $persentase = 0;
        }
        $lebih_kurang = $sd_bulan_ini_ph - $target_ph;
        ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
    </tr>
<?php endforeach; ?>
<!-- Menampilkan data jenis pajak 7 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php $i701 = 0; ?>
    <?php foreach ($laporan_perdinas701 as $value) : ?>
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= $value['kode']; ?><?= $value['kode_rekening']; ?></th>
        <th bgcolor='#FF6347' style='color:#FFFFFF'></th>
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= $value['keterangan']; ?></th>
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <!-- bulan ini -->
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini701($tanggal_awal, $tanggal_akhir)[$i701]) ? $this->laporanFilterModel->bulan_ini701($tanggal_awal, $tanggal_akhir)[$i701]['realisasi'] : '0'; ?>
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format($bln_ini, 2, ',', '.'); ?></th>

        <!-- bulan lalu -->
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format($value['realisasi'], 2, ',', '.'); ?></th>

        <!-- S/D Bulan Ini -->
        <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
            $persen = $sd_bulan_ini / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $sd_bulan_ini - $value['target'];
        ?>
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format($persen, 2, ',', '.'); ?></th>
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format($lk, 2, ',', '.'); ?></th>
        <?php $i701++; ?>
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
        <?php $id_target = $this->laporanFilterModel->bulan_ini701($tanggal_awal, $tanggal_akhir)[$i701]['id_target_pad']; ?>
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini701($tanggal_awal, $tanggal_akhir)[$i701]) ? $this->laporanFilterModel->bulan_ini701($tanggal_awal, $tanggal_akhir)[$i701]['realisasi'] : '0'; ?>
        <?php if ($value['id_target_pad'] == $id_target) : ?>
            <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>
        <?php endif; ?>
        <?php if ($value['id_target_pad'] != $id_target) : ?>
            <td><?= number_format(0, 2, ',', '.'); ?></td>
        <?php endif; ?>
        <!-- bulan lalu -->
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
        <?php $i701++; ?>
</tr>
<?php endforeach; ?>

<!-- menampilkan jenis pajak 8 -->
<!-- 433 -->
<?php foreach ($jenis_pendapatan801 as $value) : ?>
    <tr>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= $value['kode']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF' colspan="2"><?= $value['jenis_pajak']; ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($target_llp, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($b_realisasi_llp, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($realisasi_llp, 2, ',', '.'); ?></th>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_llp, 2, ',', '.'); ?></th>

        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini_llp > 0 && $target_llp > 0) {
            $persentase = $sd_bulan_ini_llp / $target_llp * 100;
        } else {
            $persentase = 0;
        }
        $lebih_kurang = $sd_bulan_ini_llp - $target_llp;
        ?>
        <th bgcolor='#0000FF' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
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
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= $value['kode']; ?>01</th>
        <th bgcolor='#FF6347' style='color:#FFFFFF'></th>
        <th bgcolor='#FF6347' style='color:#FFFFFF'>LAIN-LAIN PENDAPATAN</th>
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format($value['target'], 2, ',', '.'); ?></th>
        <!-- bulan ini -->
        <?php $id_target = $this->laporanFilterModel->bulan_ini801($tanggal_awal, $tanggal_akhir)[$i801]['id_target_pad'] ?>
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini801($tanggal_awal, $tanggal_akhir)[$i801]) ? $this->laporanFilterModel->bulan_ini801($tanggal_awal, $tanggal_akhir)[$i801]['realisasi'] : '0'; ?>
        <?php if ($value['id_target_pad'] == $id_target) : ?>
            <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format($bln_ini, 2, ',', '.'); ?></th>
        <?php endif; ?>
        <?php if ($value['id_target_pad'] != $id_target) : ?>
            <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format(0, 2, ',', '.'); ?></th>
        <?php endif; ?>
        <!-- bulan lalu -->
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format($value['realisasi'], 2, ',', '.'); ?></th>

        <!-- S/D Bulan Ini -->
        <?php $sd_bulan_ini = $bln_ini + $value['realisasi']; ?>
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
        <!--Persentase didapat dari sd bulan ini / target * 100 -->
        <?php if ($sd_bulan_ini > 0 && $value['target'] > 0) {
            $persen = $sd_bulan_ini / $value['target'] * 100;
        } else {
            $persen = 0;
        }
        $lk = $sd_bulan_ini - $value['target'];
        ?>
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format($persen, 2, ',', '.'); ?></th>
        <th bgcolor='#FF6347' style='color:#FFFFFF'><?= number_format($lk, 2, ',', '.'); ?></th>
        <?php $i801++; ?>
</tr>
<?php endforeach; ?>

<!-- Menampilkan data jenis pajak 8 dan opd 1 -->
<!-- kode 0101 -->
<tr>
    <?php $no = 1;
    $i801 = 0; ?>
    <?php foreach ($laporan_perdinas801 as $value) : ?>
        <td align="center"><?= $no++ ?></td>

        <td><?= $value['kode']; ?><?= $value['kode_rekening']; ?></td>
        <td><?= $value['keterangan']; ?></td>
        <td><?= number_format($value['target'], 2, ',', '.'); ?></td>
        <!-- bulan ini -->
        <?php $id_target = $this->laporanFilterModel->bulan_ini801($tanggal_awal, $tanggal_akhir)[$i801]['id_target_pad'] ?>
        <?php $bln_ini = !empty($this->laporanFilterModel->bulan_ini801($tanggal_awal, $tanggal_akhir)[$i801]) ? $this->laporanFilterModel->bulan_ini801($tanggal_awal, $tanggal_akhir)[$i801]['realisasi'] : '0'; ?>
        <?php if ($value['id_target_pad'] == $id_target) : ?>
            <td><?= number_format($bln_ini, 2, ',', '.'); ?></td>
        <?php endif; ?>
        <?php if ($value['id_target_pad'] != $id_target) : ?>
            <td><?= number_format(0, 2, ',', '.'); ?></td>
        <?php endif; ?>
        <!-- bulan lalu -->
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
        <?php $i801++; ?>
</tr>
<?php endforeach; ?>
<!-- ============================================================================================================================== -->
<!-- JUMLAH -->
<tr>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'>JUMLAH</th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'><?= number_format($target_jumlah, 2, ',', '.'); ?></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'><?= number_format($b_realisasi_jumlah, 2, ',', '.'); ?></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'><?= number_format($realisasi_jumlah, 2, ',', '.'); ?></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'><?= number_format($sd_bulan_ini_jumlah, 2, ',', '.'); ?></th>
    <!--Persentase didapat dari sd bulan ini / target * 100 -->
    <?php if ($sd_bulan_ini_jumlah > 0 && $target_jumlah > 0) {
        $persentase = $sd_bulan_ini_jumlah / $target_jumlah * 100;
    } else {
        $persentase = 0;
    }
    $lebih_kurang = $sd_bulan_ini_jumlah - $target_jumlah;
    ?>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'><?= number_format($persentase, 2, ',', '.'); ?></th>
    <th bgcolor='#2F4F4F' style='color:#FFFFFF'><?= number_format($lebih_kurang, 2, ',', '.'); ?></th>
</tr>
<!-- ============================================================================================================================== -->

            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>


<?= $this->endSection(); ?>