<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <meta name="description" content="Sistem Informasi PAD">
    <meta name="Trio Aditya" content="Tiga-O">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('/assets//bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('/assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('/assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('/assets/dist/css/AdminLTE.min.css'); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('/assets/dist/css/skins/_all-skins.min.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('/assets/bower_components/select2/dist/css/select2.min.css'); ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src=" https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js">
  </script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
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


    <!-- Main content -->
    <section class="content">

        <!-- Main content -->
        <div class="p-5 mt-10">
            <div class="row">
                <div class="col-xs-5 text-right">
                    <img src="<?= base_url('/img/lampung_tengah.png');?>" alt="" height="85" width="70"></img>
                </div>
                <div class="col-xs-7">
                    <font size="4">PEMERINTAH KABUPATEN LAMPUNG TENGAH</font><br>
                    <font size="3"><b>BADAN PENDAPATAN DAERAH</b></font><br>
                    <font size="2"><i>Jl. H. Muchtar Komplek Perkantoran Dinas Instansi Gunung Sugih</i></b></font><br>
                    <font size="2">Telp. (0721) 481126 Fax (0721) 481126 </b></font>
                </div>
                <!-- /.col -->
            </div>
            <br><br>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-8 invoice-col">
                    <address>
                        Nomor &emsp;: 970/ &nbsp; &nbsp; &nbsp; /B.a VII.03/2022<br>
                        Lampiran : 2 (dua) Berkas<br>
                        Perihal &emsp;: Laporan Realisasi Pendapatan Daerah<br>
                        &emsp;&emsp;&emsp;&emsp;&ensp;<u><?= tgl_indo($tanggal_akhir) ?></u><br>
                    </address>
                </div>
                <!-- /.col -->

                <div class="col-sm-4 invoice-col text-white">
                    Gunung Sugih: <?= tgl_indo($tanggal_akhir) ?>
                    <address>
                        Kepada Yth<br>
                        Bapak Bupati Lampung Tengah<br>
                        Di -<br>
                        <strong>GUNUNG SUGIH</strong><br>
                    </address>
                </div>
            </div>
            <div class="row invoice-info">
                <div class="col-sm-12">
                    Dengan Hormat,<br>
                    <br>
                    Bersama ini disampaikan kepada Bapak 1 (satu) berkas Laporan Realisasi Pendapatan Daerah Kabupaten Lampung Tengah<br>
                    Sampai dengan tanggal <?= tgl_indo($tanggal_akhir) ?>, adalah sebagai berikut:
                </div>
                <!-- /.col -->
            </div>
            <br>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>NO.</th>
                                    <th>URAIAN</th>
                                    <th>TARGET</th>
                                    <th>BULAN INI</th>
                                    <th>BULAN LALU</th>
                                    <th>S/D BULAN INI</th>
                                    <th>%</th>
                                </tr>
                                <tr>
                                    <th colspan="2">PENDAPATAN ASLI DAERAH</th>
                                    <th><?= number_format($pad, 2, ',', '.'); ?></th>
                                    <th><?= number_format($pad_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($pad_bulan_lalu, 2, ',', '.'); ?></th>
                                    <th><?= number_format($pad_sd_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($pad_persentase, 2, ',', '.'); ?></th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <th>Pajak Daerah</th>
                                    <th><?= number_format($pd, 2, ',', '.'); ?></th>
                                    <!-- Realisasi dengan jenis pajak 1 -->
                                    <!-- Bulan ini Pajak Daerah -->
                                    <?php foreach ($sum_realisasi as $re) : ?>
                                        <th><?= number_format($re->realisasi, 2, ',', '.'); ?></th>
                                    <?php endforeach; ?>
                                    <!-- Bulan lalu Pajak Daerah -->
                                    <!-- Jika bulan dalam sistem - 1 maka data sum bulan ini berpindah ke bulan lalu -->
                                    <!-- Jika hasil bulan ini - 1 = 0, maka data 0 -->
                                    <?php foreach ($sum_realisasi2 as $re2) : ?>
                                        <th><?= number_format($re2->realisasi, 2, ',', '.'); ?></th>
                                    <?php endforeach; ?>

                                    <!-- S/D bulan ini didapat dari penjumlahan bulan ini + bulan lalu -->
                                    <?php $sd_bulan_ini = $re->realisasi + $re2->realisasi ?>
                                    <th><?= number_format($sd_bulan_ini, 2, ',', '.'); ?></th>
                                    <!-- Persentase didapat dari S/D bulan ini / target PAD * 100% -->
                                    <?php $persentase = $sd_bulan_ini / $pd * 100 ?>
                                    <th><?= number_format($persentase, 2, ',', '.'); ?></th>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <th>Retribusi Daerah</th>
                                    <th><?= number_format($retribusi, 2, ',', '.'); ?></th>
                                    <th><?= number_format($retribusi_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($retribusi_bulan_lalu, 2, ',', '.'); ?></th>
                                    <th><?= number_format($retribusi_sd_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($retribusi_persentase, 2, ',', '.'); ?></th>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <th>Hasil Pengelolaan Kekayaan</th>
                                    <th><?= number_format($hpkdd, 2, ',', '.'); ?></th>
                                    <th><?= number_format($hpkdd_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($hpkdd_bulan_lalu, 2, ',', '.'); ?></th>
                                    <th><?= number_format($hpkdd_sd_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($hpkdd_persentase, 2, ',', '.'); ?></th>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <th>Lain-lain Pendapatan Asli Daerah Yang Syah</th>
                                    <th><?= number_format($lain_lain, 2, ',', '.'); ?></th>
                                    <th><?= number_format($lain_lain_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($lain_lain_bulan_lalu, 2, ',', '.'); ?></th>
                                    <th><?= number_format($lain_lain_sd_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($lain_lain_persentase, 2, ',', '.'); ?></th>
                                </tr>
                                <tr>
                                    <th colspan="2">PENDAPATAN TRANSFER</th>
                                    <th><?= number_format($pt_target, 2, ',', '.'); ?></th>
                                    <th><?= number_format($pt_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($pt_bulan_lalu, 2, ',', '.'); ?></th>
                                    <th><?= number_format($pt_sd_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($pt_persentase, 2, ',', '.'); ?></th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <th>Transfer Pusat</th>
                                    <th><?= number_format($ptpp_target, 2, ',', '.'); ?></th>
                                    <th><?= number_format($ptpp_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($ptpp_bulan_lalu, 2, ',', '.'); ?></th>
                                    <th><?= number_format($ptpp_sd_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($ptpp_persentase, 2, ',', '.'); ?></th>
                                </tr>
                                <tr>

                                    <?php
                                    $ptad_sd_bulan_ini = 0;
                                    $ptad_persentase = 0;
                                    $ptad_lebih_kurang = 0;

                                    $ptad_sd_bulan_ini =  $re601->realisasi + $bre601->realisasi;
                                    $ptad_persentase =  $ptad_sd_bulan_ini / $st601->target601 * 100;
                                    $ptad_lebih_kurang = $ptad_sd_bulan_ini - $st601->target601;
                                    ?>
                                    <th>2</th>
                                    <th>Transfer Daerah</th>
                                    <th><?= number_format($st601->target601, 2, ',', '.'); ?></th>
                                    <th><?= number_format($re601->realisasi, 2, ',', '.'); ?></th>
                                    <th><?= number_format($bre601->realisasi, 2, ',', '.'); ?></th>
                                    <th><?= number_format($ptad_sd_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($ptad_persentase, 2, ',', '.'); ?></th>
                                </tr>
                                <tr>
                                    <th colspan="2">LAIN-LAIN PENDAPATAN DAERAH YANG SAH</th>
                                    <th><?= number_format($llpd_target, 2, ',', '.'); ?></th>
                                    <th><?= number_format($llpd_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($llpd_bulan_lalu, 2, ',', '.'); ?></th>
                                    <th><?= number_format($llpd_sd_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($llpd_persentase, 2, ',', '.'); ?></th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>JUMLAH</th>
                                    <th><?= number_format($ph_target, 2, ',', '.'); ?></th>
                                    <th><?= number_format($ph_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($ph_bulan_lalu, 2, ',', '.'); ?></th>
                                    <th><?= number_format($ph_sd_bulan_ini, 2, ',', '.'); ?></th>
                                    <th><?= number_format($ph_persentase, 2, ',', '.'); ?></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-12">
                    <p>Demikian untuk maklum, terima kasih:</p>
                </div>
                <div class="col-xs-8"></div>
                <div class="col-xs-4">
                    <p class="text-center"><b>KEPALA BADAN PENDAPATAN DAERAH<br>KABUPATEN LAMPUNG TENGAH</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="text-center">Drs. ASRUL SANI<br>NIP. 196606211986031002</p>
                    </p>
                </div>
                <div class="col-xs-12">
                    <p class="text-muted" style="margin-top: 30px;">
                        Tembusan : Disampaikan kepada Yth.<br>
                        1. Ketua DPRD Kab. L. T CQ Ketua Komisi II<br>
                        2. Sekertaris Daerah Kab. L. T <br>
                        3. Inspektorat Kabupaten Lampung Tengah<br>
                        4. Kepala BPKAD Kab. Lam. Teng <br>
                        5. --------Arsip-------------- <br>
                    </p>
                </div>
                <!-- /.col -->
            </div>
        </div>
    </section>
    <!-- /.content -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('/assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- SlimScroll -->
    <script src="<?= base_url('/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('/assets/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('/assets/dist/js/adminlte.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('/assets/dist/js/demo.js'); ?>"></script>
    <!-- DataTables -->
    <script src="<?= base_url('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url('/assets/js/sweetalert/sweetalert2.all.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/js/myscript.js'); ?>"></script>
    <!-- Select2 -->
    <script src="<?= base_url('/assets/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.sidebar-menu').tree()
        })
    </script>
    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>

</body>

</html>