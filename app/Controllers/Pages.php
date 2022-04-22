<?php

namespace App\Controllers;

use App\Models\LaporanModel;
use App\Models\TargetModel;

class Pages extends BaseController
{

    // public function index()
    // {
    //     $data = [
    //         'title' => 'Home | PAD'
    //     ];
    //     return view('pages/home', $data);
    // }

    protected $laporanModel;
    protected $targetModel;

    public function __construct()
    {
        $this->laporanModel = new LaporanModel();
        $this->targetModel = new TargetModel();
    }

    public function index()
    {
        $bulan_lalu = 0;
        $bulan = date('m');
        $bulan_lalu != date('m');
        $data = [
            'title' => 'Home | PAD',
            'target' => $this->targetModel->getTarget(),
            // Pajak Daerah
            'jenis_pendapatan1' => $this->laporanModel->getJenis1(),
            // Retribusi
            'jenis_pendapatan2' => $this->laporanModel->getJenis2(),
            'jenis_pendapatan3' => $this->laporanModel->getJenis3(),
            'jenis_pendapatan4' => $this->laporanModel->getJenis4(),
            'jenis_pendapatan5' => $this->laporanModel->getJenis5(),
            'jenis_pendapatan6' => $this->laporanModel->getJenis6(),
            'jenis_pendapatan7' => $this->laporanModel->getJenis7(),
            'jenis_pendapatan8' => $this->laporanModel->getJenis8(),
            'jenis_pendapatan9' => $this->laporanModel->getJenis9(),
            'jenis_pendapatan10' => $this->laporanModel->getJenis10(),
            'jenis_pendapatan11' => $this->laporanModel->getJenis11(),
            'jenis_pendapatan12' => $this->laporanModel->getJenis12(),
            // Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan
            'jenis_pendapatan13' => $this->laporanModel->getJenis13(),
            'jenis_pendapatan14' => $this->laporanModel->getJenis14(),
            // Lain-lain PAD yang Sah
            'jenis_pendapatan15' => $this->laporanModel->getJenis15(),
            'jenis_pendapatan16' => $this->laporanModel->getJenis16(),
            'jenis_pendapatan17' => $this->laporanModel->getJenis17(),
            'jenis_pendapatan18' => $this->laporanModel->getJenis18(),
            'jenis_pendapatan19' => $this->laporanModel->getJenis19(),
            'jenis_pendapatan20' => $this->laporanModel->getJenis20(),

            // Pajak Daerah
            'laporan_perdinas1' => $this->laporanModel->getData1($bulan),
            'bulan_lalu' => $this->laporanModel->bulan_lalu($bulan_lalu),
            //Retribusi
            'laporan_perdinas2' => $this->laporanModel->getData2($bulan),
            'bulan_lalu2' => $this->laporanModel->bulan_lalu2($bulan_lalu),
            'laporan_perdinas3' => $this->laporanModel->getData3($bulan),
            'bulan_lalu3' => $this->laporanModel->bulan_lalu3($bulan_lalu),
            'laporan_perdinas4' => $this->laporanModel->getData4($bulan),
            'bulan_lalu4' => $this->laporanModel->bulan_lalu4($bulan_lalu),
            'laporan_perdinas5' => $this->laporanModel->getData5($bulan),
            'bulan_lalu5' => $this->laporanModel->bulan_lalu5($bulan_lalu),
            'laporan_perdinas6' => $this->laporanModel->getData6($bulan),
            'bulan_lalu6' => $this->laporanModel->bulan_lalu6($bulan_lalu),
            'laporan_perdinas7' => $this->laporanModel->getData7($bulan),
            'bulan_lalu7' => $this->laporanModel->bulan_lalu7($bulan_lalu),
            'laporan_perdinas8' => $this->laporanModel->getData8($bulan),
            'bulan_lalu8' => $this->laporanModel->bulan_lalu8($bulan_lalu),
            'laporan_perdinas9' => $this->laporanModel->getData9($bulan),
            'bulan_lalu9' => $this->laporanModel->bulan_lalu9($bulan_lalu),
            'laporan_perdinas10' => $this->laporanModel->getData10($bulan),
            'bulan_lalu10' => $this->laporanModel->bulan_lalu10($bulan_lalu),
            'laporan_perdinas11' => $this->laporanModel->getData11($bulan),
            'bulan_lalu11' => $this->laporanModel->bulan_lalu11($bulan_lalu),
            'laporan_perdinas12' => $this->laporanModel->getData12($bulan),
            'bulan_lalu12' => $this->laporanModel->bulan_lalu12($bulan_lalu),
            // Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan
            'laporan_perdinas13' => $this->laporanModel->getData13($bulan),
            'bulan_lalu13' => $this->laporanModel->bulan_lalu13($bulan_lalu),
            'laporan_perdinas14' => $this->laporanModel->getData14($bulan),
            'bulan_lalu14' => $this->laporanModel->bulan_lalu14($bulan_lalu),
            // Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan
            // opd1
            'laporan_perdinas15' => $this->laporanModel->getData15($bulan),
            'bulan_lalu15' => $this->laporanModel->bulan_lalu15($bulan_lalu),
            //opd 14
            'laporan_perdinas16' => $this->laporanModel->getData16($bulan),
            'bulan_lalu16' => $this->laporanModel->bulan_lalu16($bulan_lalu),
            //opd 15
            'laporan_perdinas17' => $this->laporanModel->getData17($bulan),
            'bulan_lalu17' => $this->laporanModel->bulan_lalu17($bulan_lalu),
            //opd 2
            'laporan_perdinas18' => $this->laporanModel->getData18($bulan),
            'bulan_lalu18' => $this->laporanModel->bulan_lalu18($bulan_lalu),
            //opd 16
            'laporan_perdinas19' => $this->laporanModel->getData19($bulan),
            'bulan_lalu19' => $this->laporanModel->bulan_lalu19($bulan_lalu),
            //opd 13
            'laporan_perdinas20' => $this->laporanModel->getData20($bulan),
            'bulan_lalu20' => $this->laporanModel->bulan_lalu20($bulan_lalu),

            //Pajak Daerah
            'sum_target1' => $this->laporanModel->sumTarget1(),
            // Retribusi
            'sum_target2' => $this->laporanModel->sumTarget2(),
            'sum_target3' => $this->laporanModel->sumTarget3(),
            'sum_target4' => $this->laporanModel->sumTarget4(),
            'sum_target5' => $this->laporanModel->sumTarget5(),
            'sum_target6' => $this->laporanModel->sumTarget6(),
            'sum_target7' => $this->laporanModel->sumTarget7(),
            'sum_target8' => $this->laporanModel->sumTarget8(),
            'sum_target9' => $this->laporanModel->sumTarget9(),
            'sum_target10' => $this->laporanModel->sumTarget10(),
            'sum_target11' => $this->laporanModel->sumTarget11(),
            'sum_target12' => $this->laporanModel->sumTarget12(),
            // Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan
            'sum_target13' => $this->laporanModel->sumTarget13(),
            'sum_target14' => $this->laporanModel->sumTarget14(),
            // Lain-lain PAD yang Sah
            'sum_target15' => $this->laporanModel->sumTarget15(),
            'sum_target16' => $this->laporanModel->sumTarget16(),
            'sum_target17' => $this->laporanModel->sumTarget17(),
            'sum_target18' => $this->laporanModel->sumTarget18(),
            'sum_target19' => $this->laporanModel->sumTarget19(),
            'sum_target20' => $this->laporanModel->sumTarget20(),

            //Realisasi dengan jenis pajak 1 dan opd 1
            'sum_realisasi' => $this->laporanModel->sumRealisasi(),
            'sum_realisasi2' => $this->laporanModel->sumRealisasi2(),
            //Realisasi dengan jenis pajak 2 dan opd 2
            'sum_realisasi3' => $this->laporanModel->sumRealisasi3(),
            'sum_realisasi4' => $this->laporanModel->sumRealisasi4(),
            //Realisasi dengan jenis pajak 2 dan opd 3
            'sum_realisasi5' => $this->laporanModel->sumRealisasi5(),
            'sum_realisasi6' => $this->laporanModel->sumRealisasi6(),
            //Realisasi dengan jenis pajak 2 dan opd 4
            'sum_realisasi7' => $this->laporanModel->sumRealisasi7(),
            'sum_realisasi8' => $this->laporanModel->sumRealisasi8(),
            //Realisasi dengan jenis pajak 2 dan opd 5
            'sum_realisasi9' => $this->laporanModel->sumRealisasi9(),
            'sum_realisasi10' => $this->laporanModel->sumRealisasi10(),
            //Realisasi dengan jenis pajak 2 dan opd 6
            'sum_realisasi11' => $this->laporanModel->sumRealisasi11(),
            'sum_realisasi12' => $this->laporanModel->sumRealisasi12(),
            //Realisasi dengan jenis pajak 2 dan opd 7
            'sum_realisasi13' => $this->laporanModel->sumRealisasi13(),
            'sum_realisasi14' => $this->laporanModel->sumRealisasi14(),
            //Realisasi dengan jenis pajak 2 dan opd 8
            'sum_realisasi15' => $this->laporanModel->sumRealisasi15(),
            'sum_realisasi16' => $this->laporanModel->sumRealisasi16(),
            //Realisasi dengan jenis pajak 2 dan opd 9
            'sum_realisasi17' => $this->laporanModel->sumRealisasi17(),
            'sum_realisasi18' => $this->laporanModel->sumRealisasi18(),
            //Realisasi dengan jenis pajak 2 dan opd 10
            'sum_realisasi19' => $this->laporanModel->sumRealisasi19(),
            'sum_realisasi20' => $this->laporanModel->sumRealisasi20(),
            //Realisasi dengan jenis pajak 2 dan opd 11
            'sum_realisasi21' => $this->laporanModel->sumRealisasi21(),
            'sum_realisasi22' => $this->laporanModel->sumRealisasi22(),
            //Realisasi dengan jenis pajak 2 dan opd 12
            'sum_realisasi23' => $this->laporanModel->sumRealisasi23(),
            'sum_realisasi24' => $this->laporanModel->sumRealisasi24(),
            //Realisasi dengan jenis pajak 3 dan opd 13
            'sum_realisasi25' => $this->laporanModel->sumRealisasi25(),
            'sum_realisasi26' => $this->laporanModel->sumRealisasi26(),
            //Realisasi dengan jenis pajak 3 dan opd 14
            'sum_realisasi27' => $this->laporanModel->sumRealisasi27(),
            'sum_realisasi28' => $this->laporanModel->sumRealisasi28(),
            //Realisasi dengan jenis pajak 4 dan opd 1
            'sum_realisasi29' => $this->laporanModel->sumRealisasi29(),
            'sum_realisasi30' => $this->laporanModel->sumRealisasi30(),
            //Realisasi dengan jenis pajak 4 dan opd 14
            'sum_realisasi31' => $this->laporanModel->sumRealisasi31(),
            'sum_realisasi32' => $this->laporanModel->sumRealisasi32(),
            //Realisasi dengan jenis pajak 4 dan opd 15
            'sum_realisasi33' => $this->laporanModel->sumRealisasi33(),
            'sum_realisasi34' => $this->laporanModel->sumRealisasi34(),
            //Realisasi dengan jenis pajak 4 dan opd 13
            'sum_realisasi39' => $this->laporanModel->sumRealisasi39(),
            'sum_realisasi40' => $this->laporanModel->sumRealisasi40(),
            //Realisasi dengan jenis pajak 4 dan opd 2
            'sum_realisasi35' => $this->laporanModel->sumRealisasi35(),
            'sum_realisasi36' => $this->laporanModel->sumRealisasi36(),
            //Realisasi dengan jenis pajak 4 dan opd 16
            'sum_realisasi37' => $this->laporanModel->sumRealisasi37(),
            'sum_realisasi38' => $this->laporanModel->sumRealisasi38(),


            //Retribusi
            //Menampilkan data Retribusi jasa umum
            //Dinas perdagangan | 3
            'jasa_umum' => $this->laporanModel->getRetribusi($bulan),
            'retribusi_bulan_lalu' => $this->laporanModel->retribusi_bulan_lalu($bulan_lalu),
            //Dinas perhubungan | 5
            'b_rju5' => $this->laporanModel->b_rju5($bulan),
            'bl_rju5' => $this->laporanModel->bl_rju5($bulan_lalu),
            //Dinas kominfo | 8
            'b_rju8' => $this->laporanModel->b_rju8($bulan),
            'bl_rju8' => $this->laporanModel->bl_rju8($bulan_lalu),
            'sum_retribusi' => $this->laporanModel->sumRetribusi(),

            // menampilkan target data Retribusi Pemakaian Kekayaan Daerah
            'sum_pkd' => $this->laporanModel->sumPkd(),
            //Realisasi dengan jenis pajak 2 dan kode rekening 0201
            'sum_realisasi20201' => $this->laporanModel->sumRealisasi20201(),
            'bsum_realisasi20201' => $this->laporanModel->bsumRealisasi20201(),
            // menampilkan target data Retribusi Penjualan Produksi Usaha Daerah
            'sum_ppud' => $this->laporanModel->sumPpud(),
            //Realisasi dengan jenis pajak 2 dan kode rekening 0211
            'sum_realisasi20211' => $this->laporanModel->sumRealisasi20211(),
            'bsum_realisasi20211' => $this->laporanModel->bsumRealisasi20211(),
            //Retribusi
            // Retribusi Jasa Usaha
            //Sum Target
            'sum_jasa_umum' => $this->laporanModel->sumJasaUmum(),
            //Realisasi dengan jenis pajak 2 dan kode rekening 02
            'sum_realisasi201' => $this->laporanModel->sumRealisasi201(),
            'bsum_realisasi201' => $this->laporanModel->bsumRealisasi201(),
            // Retribusi Jasa Usaha
            //Sum Target
            'sum_jasa_usaha' => $this->laporanModel->sumJasaUsaha(),
            //Realisasi dengan jenis pajak 2 dan kode rekening 02
            'sum_realisasi202' => $this->laporanModel->sumRealisasi202(),
            'sr202' => $this->laporanModel->sumRealisasi202(),
            'bsum_realisasi202' => $this->laporanModel->bsumRealisasi202(),

            //Retribusi
            //Menampilkan data Retribusi jasa usaha
            //Dinas perhubungan | 5
            'jasa_usaha' => $this->laporanModel->getRetribusi2($bulan),
            'retribusi_bulan_lalu2' => $this->laporanModel->retribusi_bulan_lalu2($bulan_lalu),
            //Dinas perdagangan | 3
            'b_rjus3' => $this->laporanModel->b_rjus3($bulan),
            'bl_rjus3' => $this->laporanModel->bl_rjus3($bulan_lalu),

            //Retribusi
            // Retribusi Perizinan Tertentu
            //Sum Target
            'sum_perizinan_tertentu' => $this->laporanModel->sumPerizinanTertentu(),
            //Realisasi dengan jenis pajak 2 dan kode rekening 03
            'sum_realisasi203' => $this->laporanModel->sumRealisasi203(),
            'bsum_realisasi203' => $this->laporanModel->bsumRealisasi203(),

            'perizinan_tertentu' => $this->laporanModel->getRetribusi3($bulan),
            'retribusi_bulan_lalu3' => $this->laporanModel->retribusi_bulan_lalu3($bulan_lalu),

            //Hasil Kekayaan Daerah yang Dipisahkan | 413
            //Sum Target
            'sum_hpkdd' => $this->laporanModel->sumHpkdd(),
            //Realisasi dengan jenis pajak 3
            'sum_realisasi413' => $this->laporanModel->sumRealisasi413(),
            'bsum_realisasi413' => $this->laporanModel->bsumRealisasi413(),

            //Lain-lain PAD yang Sah | 414
            //Sum Target
            'sum_lain_lain' => $this->laporanModel->sumLain(),
            //Realisasi dengan jenis pajak 4
            'sum_realisasi414' => $this->laporanModel->sumRealisasi414(),
            'bsum_realisasi414' => $this->laporanModel->bsumRealisasi414(),

            // PENDAPATAN TRANSFER
            // Pendapatan Transfer Pemerintah Pusat
            // 421
            //kode 0101
            //Menampilkan Target
            'sum_target5101' => $this->laporanModel->sumTarget5101(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi5101' => $this->laporanModel->sumRealisasi5101(),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi5101' => $this->laporanModel->bsumRealisasi5101(),
            'jenis_pendapatan5101' => $this->laporanModel->getJenis5101(),
            'laporan_perdinas5101' => $this->laporanModel->getData5101($bulan),
            'bulan_lalu5101' => $this->laporanModel->bulan_lalu5101($bulan_lalu),

            // kode 0102
            //Menampilkan Target
            'sum_target5102' => $this->laporanModel->sumTarget5102(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi5102' => $this->laporanModel->sumRealisasi5102(),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi5102' => $this->laporanModel->bsumRealisasi5102(),
            'laporan_perdinas5102' => $this->laporanModel->getData5102($bulan),
            'bulan_lalu5102' => $this->laporanModel->bulan_lalu5102($bulan_lalu),

            // kode 0103
            //Menampilkan Target
            'sum_target5103' => $this->laporanModel->sumTarget5103(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi5103' => $this->laporanModel->sumRealisasi5103(),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi5103' => $this->laporanModel->bsumRealisasi5103(),
            'laporan_perdinas5103' => $this->laporanModel->getData5103($bulan),
            'bulan_lalu5103' => $this->laporanModel->bulan_lalu5103($bulan_lalu),

            // kode 0104
            //Menampilkan Target
            'sum_target5104' => $this->laporanModel->sumTarget5104(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi5104' => $this->laporanModel->sumRealisasi5104(),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi5104' => $this->laporanModel->bsumRealisasi5104(),
            'laporan_perdinas5104' => $this->laporanModel->getData5104($bulan),
            'bulan_lalu5104' => $this->laporanModel->bulan_lalu5104($bulan_lalu),

            // kode 02
            //Menampilkan Target
            'sum_target512' => $this->laporanModel->sumTarget512(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi512' => $this->laporanModel->sumRealisasi512(),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi512' => $this->laporanModel->bsumRealisasi512(),
            'laporan_perdinas512' => $this->laporanModel->getData512($bulan),
            'bulan_lalu512' => $this->laporanModel->bulan_lalu512($bulan_lalu),

            // kode 05
            //Menampilkan Target
            'sum_target515' => $this->laporanModel->sumTarget515(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi515' => $this->laporanModel->sumRealisasi515(),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi515' => $this->laporanModel->bsumRealisasi515(),
            'laporan_perdinas515' => $this->laporanModel->getData515($bulan),
            'laporan_perdinas515' => $this->laporanModel->getData515($bulan),
            'bulan_lalu515' => $this->laporanModel->bulan_lalu515($bulan_lalu),

            // Pendapatan Transfer Antar Daerah
            // Jenis pajak 6
            // 422
            //kode 01
            //Menampilkan Target
            'sum_target601' => $this->laporanModel->sumTarget601(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi601' => $this->laporanModel->sumRealisasi601(),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi601' => $this->laporanModel->bsumRealisasi601(),
            'jenis_pendapatan601' => $this->laporanModel->getJenis601(),
            'laporan_perdinas601' => $this->laporanModel->getData601($bulan),
            'bulan_lalu601' => $this->laporanModel->bulan_lalu601($bulan_lalu),

            // Lain-Lain Pendapatan Daerah yang Sah
            // Jenis pajak 7
            // 431
            //kode 01
            //Menampilkan Target
            'sum_target701' => $this->laporanModel->sumTarget701(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi701' => $this->laporanModel->sumRealisasi701(),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi701' => $this->laporanModel->bsumRealisasi701(),
            'jenis_pendapatan701' => $this->laporanModel->getJenis701(),
            'laporan_perdinas701' => $this->laporanModel->getData701($bulan),
            'bulan_lalu701' => $this->laporanModel->bulan_lalu701($bulan_lalu),

            // Lain-Lain Pendapatan Daerah yang Sah
            // Jenis pajak 8
            // 433
            //kode 01
            //Menampilkan Target
            'sum_target801' => $this->laporanModel->sumTarget801(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi801' => $this->laporanModel->sumRealisasi801(),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi801' => $this->laporanModel->bsumRealisasi801(),
            'jenis_pendapatan801' => $this->laporanModel->getJenis801(),
            'laporan_perdinas801' => $this->laporanModel->getData801($bulan),
            'bulan_lalu801' => $this->laporanModel->bulan_lalu801($bulan_lalu),
            'sum_target801' => $this->laporanModel->sumTarget801(),
        ];

        return view('pages/home', $data);
    }
}
