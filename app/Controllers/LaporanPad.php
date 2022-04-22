<?php

namespace App\Controllers;

use App\Models\LaporanModel;
use App\Models\LaporanPadModel;

class LaporanPad extends BaseController
{

    protected $laporanModel;

    public function __construct()
    {
        $this->laporanModel = new LaporanModel();
        $this->laporanPadModel = new LaporanPadModel();
    }

    public function index()
    {
        $bulan_lalu = 0;
        $bulan = date('m');
        $bulan_lalu != date('m');
        $data = [
            'title' => 'Laporan PAD | PAD',
            'validation' => \Config\Services::validation(),
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
        // dd($data['laporan_perdinas1']);
        return view('laporan/pad', $data);
    }

    public function excel()
    {
        $bulan_lalu = 0;
        $bulan = date('m');
        $bulan_lalu != date('m');
        $data = [
            'title' => 'Laporan PAD | PAD',
            'validation' => \Config\Services::validation(),
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
        return view('laporan/excel_pad', $data);
    }

    public function filter()
    {
        $tanggal_awal = $this->request->getPost('tanggal_awal');
        $tanggal_akhir = $this->request->getPost('tanggal_akhir');
        $bl_tanggal_awal = $this->request->getPost('bl_tanggal_awal');
        $bl_tanggal_akhir = $this->request->getPost('bl_tanggal_akhir');

        $data = [
            'title' => 'Laporan PAD | PAD',
            'validation' => \Config\Services::validation(),
            // Pajak Daerah
            'jenis_pendapatan1' => $this->laporanPadModel->getJenis1(),
            // Retribusi
            'jenis_pendapatan2' => $this->laporanPadModel->getJenis2(),
            'jenis_pendapatan3' => $this->laporanPadModel->getJenis3(),
            'jenis_pendapatan4' => $this->laporanPadModel->getJenis4(),
            'jenis_pendapatan5' => $this->laporanPadModel->getJenis5(),
            'jenis_pendapatan6' => $this->laporanPadModel->getJenis6(),
            'jenis_pendapatan7' => $this->laporanPadModel->getJenis7(),
            'jenis_pendapatan8' => $this->laporanPadModel->getJenis8(),
            'jenis_pendapatan9' => $this->laporanPadModel->getJenis9(),
            'jenis_pendapatan10' => $this->laporanPadModel->getJenis10(),
            'jenis_pendapatan11' => $this->laporanPadModel->getJenis11(),
            'jenis_pendapatan12' => $this->laporanPadModel->getJenis12(),
            // Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan
            'jenis_pendapatan13' => $this->laporanPadModel->getJenis13(),
            'jenis_pendapatan14' => $this->laporanPadModel->getJenis14(),
            // Lain-lain PAD yang Sah
            'jenis_pendapatan15' => $this->laporanPadModel->getJenis15(),
            'jenis_pendapatan16' => $this->laporanPadModel->getJenis16(),
            'jenis_pendapatan17' => $this->laporanPadModel->getJenis17(),
            'jenis_pendapatan18' => $this->laporanPadModel->getJenis18(),
            'jenis_pendapatan19' => $this->laporanPadModel->getJenis19(),
            'jenis_pendapatan20' => $this->laporanPadModel->getJenis20(),

            // Pajak Daerah
            'laporan_perdinas1' => $this->laporanPadModel->getData1($bl_tanggal_awal, $bl_tanggal_akhir),
            'bulan_ini' => $this->laporanPadModel->bulan_ini($tanggal_awal, $tanggal_akhir),
            //Retribusi
            'laporan_perdinas2' => $this->laporanPadModel->getData2($tanggal_awal, $tanggal_akhir),
            'bulan_lalu2' => $this->laporanPadModel->bulan_lalu2($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas3' => $this->laporanPadModel->getData3($tanggal_awal, $tanggal_akhir),
            'bulan_lalu3' => $this->laporanPadModel->bulan_lalu3($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas4' => $this->laporanPadModel->getData4($tanggal_awal, $tanggal_akhir),
            'bulan_lalu4' => $this->laporanPadModel->bulan_lalu4($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas5' => $this->laporanPadModel->getData5($tanggal_awal, $tanggal_akhir),
            'bulan_lalu5' => $this->laporanPadModel->bulan_lalu5($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas6' => $this->laporanPadModel->getData6($tanggal_awal, $tanggal_akhir),
            'bulan_lalu6' => $this->laporanPadModel->bulan_lalu6($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas7' => $this->laporanPadModel->getData7($tanggal_awal, $tanggal_akhir),
            'bulan_lalu7' => $this->laporanPadModel->bulan_lalu7($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas8' => $this->laporanPadModel->getData8($tanggal_awal, $tanggal_akhir),
            'bulan_lalu8' => $this->laporanPadModel->bulan_lalu8($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas9' => $this->laporanPadModel->getData9($tanggal_awal, $tanggal_akhir),
            'bulan_lalu9' => $this->laporanPadModel->bulan_lalu9($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas10' => $this->laporanPadModel->getData10($tanggal_awal, $tanggal_akhir),
            'bulan_lalu10' => $this->laporanPadModel->bulan_lalu10($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas11' => $this->laporanPadModel->getData11($tanggal_awal, $tanggal_akhir),
            'bulan_lalu11' => $this->laporanPadModel->bulan_lalu11($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas12' => $this->laporanPadModel->getData12($tanggal_awal, $tanggal_akhir),
            'bulan_lalu12' => $this->laporanPadModel->bulan_lalu12($bl_tanggal_awal, $bl_tanggal_akhir),
            // Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan
            'laporan_perdinas13' => $this->laporanPadModel->getData13($tanggal_awal, $tanggal_akhir),
            'bulan_lalu13' => $this->laporanPadModel->bulan_lalu13($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas14' => $this->laporanPadModel->getData14($tanggal_awal, $tanggal_akhir),
            'bulan_lalu14' => $this->laporanPadModel->bulan_lalu14($bl_tanggal_awal, $bl_tanggal_akhir),
            // Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan
            // opd1
            'laporan_perdinas15' => $this->laporanPadModel->getData15($tanggal_awal, $tanggal_akhir),
            'bulan_lalu15' => $this->laporanPadModel->bulan_lalu15($bl_tanggal_awal, $bl_tanggal_akhir),
            //opd 14
            'laporan_perdinas16' => $this->laporanPadModel->getData16($tanggal_awal, $tanggal_akhir),
            'bulan_lalu16' => $this->laporanPadModel->bulan_lalu16($bl_tanggal_awal, $bl_tanggal_akhir),
            //opd 15
            'laporan_perdinas17' => $this->laporanPadModel->getData17($tanggal_awal, $tanggal_akhir),
            'bulan_lalu17' => $this->laporanPadModel->bulan_lalu17($bl_tanggal_awal, $bl_tanggal_akhir),
            //opd 2
            'laporan_perdinas18' => $this->laporanPadModel->getData18($bl_tanggal_awal, $bl_tanggal_akhir),
            'bulan_ini18' => $this->laporanPadModel->bulan_ini18($tanggal_awal, $tanggal_akhir),
            //opd 16
            'laporan_perdinas19' => $this->laporanPadModel->getData19($tanggal_awal, $tanggal_akhir),
            'bulan_lalu19' => $this->laporanPadModel->bulan_lalu19($bl_tanggal_awal, $bl_tanggal_akhir),
            //opd 13
            'laporan_perdinas20' => $this->laporanPadModel->getData20($bl_tanggal_awal, $bl_tanggal_akhir),
            'bulan_ini20' => $this->laporanPadModel->bulan_ini20($tanggal_awal, $tanggal_akhir),

            //Pajak Daerah
            'sum_target1' => $this->laporanPadModel->sumTarget1(),
            // Retribusi
            'sum_target2' => $this->laporanPadModel->sumTarget2(),
            'sum_target3' => $this->laporanPadModel->sumTarget3(),
            'sum_target4' => $this->laporanPadModel->sumTarget4(),
            'sum_target5' => $this->laporanPadModel->sumTarget5(),
            'sum_target6' => $this->laporanPadModel->sumTarget6(),
            'sum_target7' => $this->laporanPadModel->sumTarget7(),
            'sum_target8' => $this->laporanPadModel->sumTarget8(),
            'sum_target9' => $this->laporanPadModel->sumTarget9(),
            'sum_target10' => $this->laporanPadModel->sumTarget10(),
            'sum_target11' => $this->laporanPadModel->sumTarget11(),
            'sum_target12' => $this->laporanPadModel->sumTarget12(),
            // Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan
            'sum_target13' => $this->laporanPadModel->sumTarget13(),
            'sum_target14' => $this->laporanPadModel->sumTarget14(),
            // Lain-lain PAD yang Sah
            'sum_target15' => $this->laporanPadModel->sumTarget15(),
            'sum_target16' => $this->laporanPadModel->sumTarget16(),
            'sum_target17' => $this->laporanPadModel->sumTarget17(),
            'sum_target18' => $this->laporanPadModel->sumTarget18(),
            'sum_target19' => $this->laporanPadModel->sumTarget19(),
            'sum_target20' => $this->laporanPadModel->sumTarget20(),

            //Realisasi dengan jenis pajak 1 dan opd 1
            'sum_realisasi' => $this->laporanPadModel->sumRealisasi($tanggal_awal, $tanggal_akhir),
            'sum_realisasi2' => $this->laporanPadModel->sumRealisasi2($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 2 dan opd 2
            'sum_realisasi3' => $this->laporanPadModel->sumRealisasi3($tanggal_awal, $tanggal_akhir),
            'sum_realisasi4' => $this->laporanPadModel->sumRealisasi4($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 2 dan opd 3
            'sum_realisasi5' => $this->laporanPadModel->sumRealisasi5($tanggal_awal, $tanggal_akhir),
            'sum_realisasi6' => $this->laporanPadModel->sumRealisasi6($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 2 dan opd 4
            'sum_realisasi7' => $this->laporanPadModel->sumRealisasi7($tanggal_awal, $tanggal_akhir),
            'sum_realisasi8' => $this->laporanPadModel->sumRealisasi8($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 2 dan opd 5
            'sum_realisasi9' => $this->laporanPadModel->sumRealisasi9($tanggal_awal, $tanggal_akhir),
            'sum_realisasi10' => $this->laporanPadModel->sumRealisasi10($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 2 dan opd 6
            'sum_realisasi11' => $this->laporanPadModel->sumRealisasi11($tanggal_awal, $tanggal_akhir),
            'sum_realisasi12' => $this->laporanPadModel->sumRealisasi12($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 2 dan opd 7
            'sum_realisasi13' => $this->laporanPadModel->sumRealisasi13($tanggal_awal, $tanggal_akhir),
            'sum_realisasi14' => $this->laporanPadModel->sumRealisasi14($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 2 dan opd 8
            'sum_realisasi15' => $this->laporanPadModel->sumRealisasi15($tanggal_awal, $tanggal_akhir),
            'sum_realisasi16' => $this->laporanPadModel->sumRealisasi16($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 2 dan opd 9
            'sum_realisasi17' => $this->laporanPadModel->sumRealisasi17($tanggal_awal, $tanggal_akhir),
            'sum_realisasi18' => $this->laporanPadModel->sumRealisasi18($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 2 dan opd 10
            'sum_realisasi19' => $this->laporanPadModel->sumRealisasi19($tanggal_awal, $tanggal_akhir),
            'sum_realisasi20' => $this->laporanPadModel->sumRealisasi20($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 2 dan opd 11
            'sum_realisasi21' => $this->laporanPadModel->sumRealisasi21($tanggal_awal, $tanggal_akhir),
            'sum_realisasi22' => $this->laporanPadModel->sumRealisasi22($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 2 dan opd 12
            'sum_realisasi23' => $this->laporanPadModel->sumRealisasi23($tanggal_awal, $tanggal_akhir),
            'sum_realisasi24' => $this->laporanPadModel->sumRealisasi24($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 3 dan opd 13
            'sum_realisasi25' => $this->laporanPadModel->sumRealisasi25($tanggal_awal, $tanggal_akhir),
            'sum_realisasi26' => $this->laporanPadModel->sumRealisasi26($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 3 dan opd 14
            'sum_realisasi27' => $this->laporanPadModel->sumRealisasi27($tanggal_awal, $tanggal_akhir),
            'sum_realisasi28' => $this->laporanPadModel->sumRealisasi28($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 4 dan opd 1
            'sum_realisasi29' => $this->laporanPadModel->sumRealisasi29($tanggal_awal, $tanggal_akhir),
            'sum_realisasi30' => $this->laporanPadModel->sumRealisasi30($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 4 dan opd 14
            'sum_realisasi31' => $this->laporanPadModel->sumRealisasi31($tanggal_awal, $tanggal_akhir),
            'sum_realisasi32' => $this->laporanPadModel->sumRealisasi32($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 4 dan opd 15
            'sum_realisasi33' => $this->laporanPadModel->sumRealisasi33($tanggal_awal, $tanggal_akhir),
            'sum_realisasi34' => $this->laporanPadModel->sumRealisasi34($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 4 dan opd 13
            'sum_realisasi39' => $this->laporanPadModel->sumRealisasi39($tanggal_awal, $tanggal_akhir),
            'sum_realisasi40' => $this->laporanPadModel->sumRealisasi40($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 4 dan opd 2
            'sum_realisasi35' => $this->laporanPadModel->sumRealisasi35($tanggal_awal, $tanggal_akhir),
            'sum_realisasi36' => $this->laporanPadModel->sumRealisasi36($bl_tanggal_awal, $bl_tanggal_akhir),
            //Realisasi dengan jenis pajak 4 dan opd 16
            'sum_realisasi37' => $this->laporanPadModel->sumRealisasi37($tanggal_awal, $tanggal_akhir),
            'sum_realisasi38' => $this->laporanPadModel->sumRealisasi38($bl_tanggal_awal, $bl_tanggal_akhir),


            //Retribusi
            //Menampilkan data Retribusi jasa umum
            //Dinas perdagangan | 3
            'jasa_umum' => $this->laporanPadModel->getRetribusi($bl_tanggal_awal, $bl_tanggal_akhir),
            'retribusi_bulan_ini' => $this->laporanPadModel->retribusi_bulan_ini($tanggal_awal, $tanggal_akhir),
            //Dinas perhubungan | 5
            'b_rju5' => $this->laporanPadModel->b_rju5($bl_tanggal_awal, $bl_tanggal_akhir),
            'bl_rju5' => $this->laporanPadModel->bl_rju5($tanggal_awal, $tanggal_akhir),
            //Dinas kominfo | 8
            'b_rju8' => $this->laporanPadModel->b_rju8($bl_tanggal_awal, $bl_tanggal_akhir),
            'bl_rju8' => $this->laporanPadModel->bl_rju8($tanggal_awal, $tanggal_akhir),
            'sum_retribusi' => $this->laporanPadModel->sumRetribusi(),

            // menampilkan target data Retribusi Pemakaian Kekayaan Daerah
            'sum_pkd' => $this->laporanPadModel->sumPkd(),
            //Realisasi dengan jenis pajak 2 dan kode rekening 0201
            'sum_realisasi20201' => $this->laporanPadModel->sumRealisasi20201($tanggal_awal, $tanggal_akhir),
            'bsum_realisasi20201' => $this->laporanPadModel->bsumRealisasi20201($bl_tanggal_awal, $bl_tanggal_akhir),
            // menampilkan target data Retribusi Penjualan Produksi Usaha Daerah
            'sum_ppud' => $this->laporanPadModel->sumPpud(),
            //Realisasi dengan jenis pajak 2 dan kode rekening 0211
            'sum_realisasi20211' => $this->laporanPadModel->sumRealisasi20211($tanggal_awal, $tanggal_akhir),
            'bsum_realisasi20211' => $this->laporanPadModel->bsumRealisasi20211($bl_tanggal_awal, $bl_tanggal_akhir),
            //Retribusi
            // Retribusi Jasa Usaha
            //Sum Target
            'sum_jasa_umum' => $this->laporanPadModel->sumJasaUmum(),
            //Realisasi dengan jenis pajak 2 dan kode rekening 02
            'sum_realisasi201' => $this->laporanPadModel->sumRealisasi201($tanggal_awal, $tanggal_akhir),
            'bsum_realisasi201' => $this->laporanPadModel->bsumRealisasi201($bl_tanggal_awal, $bl_tanggal_akhir),
            // Retribusi Jasa Usaha
            //Sum Target
            'sum_jasa_usaha' => $this->laporanPadModel->sumJasaUsaha(),
            //Realisasi dengan jenis pajak 2 dan kode rekening 02
            'sum_realisasi202' => $this->laporanPadModel->sumRealisasi202($tanggal_awal, $tanggal_akhir),
            'sr202' => $this->laporanPadModel->sumRealisasi202($tanggal_awal, $tanggal_akhir),
            'bsum_realisasi202' => $this->laporanPadModel->bsumRealisasi202($bl_tanggal_awal, $bl_tanggal_akhir),

            //Retribusi
            //Menampilkan data Retribusi jasa usaha
            //Dinas perhubungan | 5
            'jasa_usaha' => $this->laporanPadModel->getRetribusi2($bl_tanggal_awal, $bl_tanggal_akhir),
            'retribusi_bulan_ini2' => $this->laporanPadModel->retribusi_bulan_ini2($tanggal_awal, $tanggal_akhir),
            //Dinas perdagangan | 3
            'b_rjus3' => $this->laporanPadModel->b_rjus3($bl_tanggal_awal, $bl_tanggal_akhir),
            'bl_rjus3' => $this->laporanPadModel->bl_rjus3($tanggal_awal, $tanggal_akhir),

            //Retribusi
            // Retribusi Perizinan Tertentu
            //Sum Target
            'sum_perizinan_tertentu' => $this->laporanPadModel->sumPerizinanTertentu(),
            //Realisasi dengan jenis pajak 2 dan kode rekening 03
            'sum_realisasi203' => $this->laporanPadModel->sumRealisasi203($tanggal_awal, $tanggal_akhir),
            'bsum_realisasi203' => $this->laporanPadModel->bsumRealisasi203($bl_tanggal_awal, $bl_tanggal_akhir),

            'perizinan_tertentu' => $this->laporanPadModel->getRetribusi3($bl_tanggal_awal, $bl_tanggal_akhir),
            'retribusi_bulan_ini3' => $this->laporanPadModel->retribusi_bulan_ini3($tanggal_awal, $tanggal_akhir),

            //Hasil Kekayaan Daerah yang Dipisahkan | 413
            //Sum Target
            'sum_hpkdd' => $this->laporanPadModel->sumHpkdd(),
            //Realisasi dengan jenis pajak 3
            'sum_realisasi413' => $this->laporanPadModel->sumRealisasi413($tanggal_awal, $tanggal_akhir),
            'bsum_realisasi413' => $this->laporanPadModel->bsumRealisasi413($bl_tanggal_awal, $bl_tanggal_akhir),

            //Lain-lain PAD yang Sah | 414
            //Sum Target
            'sum_lain_lain' => $this->laporanPadModel->sumLain(),
            //Realisasi dengan jenis pajak 4
            'sum_realisasi414' => $this->laporanPadModel->sumRealisasi414($tanggal_awal, $tanggal_akhir),
            'bsum_realisasi414' => $this->laporanPadModel->bsumRealisasi414($bl_tanggal_awal, $bl_tanggal_akhir),

            // PENDAPATAN TRANSFER
            // Pendapatan Transfer Pemerintah Pusat
            // 421
            //kode 0101
            //Menampilkan Target
            'sum_target5101' => $this->laporanPadModel->sumTarget5101(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi5101' => $this->laporanPadModel->sumRealisasi5101($tanggal_awal, $tanggal_akhir),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi5101' => $this->laporanPadModel->bsumRealisasi5101($bl_tanggal_awal, $bl_tanggal_akhir),
            'jenis_pendapatan5101' => $this->laporanPadModel->getJenis5101(),
            'laporan_perdinas5101' => $this->laporanPadModel->getData5101($tanggal_awal, $tanggal_akhir),
            'bulan_lalu5101' => $this->laporanPadModel->bulan_lalu5101($bl_tanggal_awal, $bl_tanggal_akhir),

            // kode 0102
            //Menampilkan Target
            'sum_target5102' => $this->laporanPadModel->sumTarget5102(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi5102' => $this->laporanPadModel->sumRealisasi5102($tanggal_awal, $tanggal_akhir),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi5102' => $this->laporanPadModel->bsumRealisasi5102($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas5102' => $this->laporanPadModel->getData5102($tanggal_awal, $tanggal_akhir),
            'bulan_lalu5102' => $this->laporanPadModel->bulan_lalu5102($bl_tanggal_awal, $bl_tanggal_akhir),

            // kode 0103
            //Menampilkan Target
            'sum_target5103' => $this->laporanPadModel->sumTarget5103(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi5103' => $this->laporanPadModel->sumRealisasi5103($tanggal_awal, $tanggal_akhir),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi5103' => $this->laporanPadModel->bsumRealisasi5103($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas5103' => $this->laporanPadModel->getData5103($tanggal_awal, $tanggal_akhir),
            'bulan_lalu5103' => $this->laporanPadModel->bulan_lalu5103($bl_tanggal_awal, $bl_tanggal_akhir),

            // kode 0104
            //Menampilkan Target
            'sum_target5104' => $this->laporanPadModel->sumTarget5104(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi5104' => $this->laporanPadModel->sumRealisasi5104($tanggal_awal, $tanggal_akhir),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi5104' => $this->laporanPadModel->bsumRealisasi5104($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas5104' => $this->laporanPadModel->getData5104($tanggal_awal, $tanggal_akhir),
            'bulan_lalu5104' => $this->laporanPadModel->bulan_lalu5104($bl_tanggal_awal, $bl_tanggal_akhir),

            // kode 02
            //Menampilkan Target
            'sum_target512' => $this->laporanPadModel->sumTarget512(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi512' => $this->laporanPadModel->sumRealisasi512($tanggal_awal, $tanggal_akhir),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi512' => $this->laporanPadModel->bsumRealisasi512($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas512' => $this->laporanPadModel->getData512($bl_tanggal_awal, $bl_tanggal_akhir),
            'bulan_ini512' => $this->laporanPadModel->bulan_ini512($tanggal_awal, $tanggal_akhir),

            // kode 05
            //Menampilkan Target
            'sum_target515' => $this->laporanPadModel->sumTarget515(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi515' => $this->laporanPadModel->sumRealisasi515($tanggal_awal, $tanggal_akhir),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi515' => $this->laporanPadModel->bsumRealisasi515($bl_tanggal_awal, $bl_tanggal_akhir),
            'laporan_perdinas515' => $this->laporanPadModel->getData515($bl_tanggal_awal, $bl_tanggal_akhir),
            'bulan_ini515' => $this->laporanPadModel->bulan_ini515($bl_tanggal_awal, $bl_tanggal_akhir),

            // Pendapatan Transfer Antar Daerah
            // Jenis pajak 6
            // 422
            //kode 01
            //Menampilkan Target
            'sum_target601' => $this->laporanPadModel->sumTarget601(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi601' => $this->laporanPadModel->sumRealisasi601($tanggal_awal, $tanggal_akhir),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi601' => $this->laporanPadModel->bsumRealisasi601($bl_tanggal_awal, $bl_tanggal_akhir),
            'jenis_pendapatan601' => $this->laporanPadModel->getJenis601(),
            'laporan_perdinas601' => $this->laporanPadModel->getData601($tanggal_awal, $tanggal_akhir),
            'bulan_lalu601' => $this->laporanPadModel->bulan_lalu601($bl_tanggal_awal, $bl_tanggal_akhir),

            // Lain-Lain Pendapatan Daerah yang Sah
            // Jenis pajak 7
            // 431
            //kode 01
            //Menampilkan Target
            'sum_target701' => $this->laporanPadModel->sumTarget701(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi701' => $this->laporanPadModel->sumRealisasi701($tanggal_awal, $tanggal_akhir),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi701' => $this->laporanPadModel->bsumRealisasi701($bl_tanggal_awal, $bl_tanggal_akhir),
            'jenis_pendapatan701' => $this->laporanPadModel->getJenis701(),
            'laporan_perdinas701' => $this->laporanPadModel->getData701($bl_tanggal_awal, $bl_tanggal_akhir),
            'bulan_ini701' => $this->laporanPadModel->bulan_ini701($tanggal_awal, $tanggal_akhir),

            // Lain-Lain Pendapatan Daerah yang Sah
            // Jenis pajak 8
            // 433
            //kode 01
            //Menampilkan Target
            'sum_target801' => $this->laporanPadModel->sumTarget801(),
            //Menampilkan realisasi bulan ini
            'sum_realisasi801' => $this->laporanPadModel->sumRealisasi801($tanggal_awal, $tanggal_akhir),
            //Menampilkan realisasi bulan lalu
            'bsum_realisasi801' => $this->laporanPadModel->bsumRealisasi801($bl_tanggal_awal, $bl_tanggal_akhir),
            'jenis_pendapatan801' => $this->laporanPadModel->getJenis801(),
            'laporan_perdinas801' => $this->laporanPadModel->getData801($bl_tanggal_awal, $bl_tanggal_akhir),
            'bulan_ini801' => $this->laporanPadModel->bulan_ini801($tanggal_awal, $tanggal_akhir),
            'sum_target801' => $this->laporanPadModel->sumTarget801(),

            'tanggal_awal' => $tanggal_awal,
            'tanggal_akhir' => $tanggal_akhir,
            'bl_tanggal_awal' => $bl_tanggal_awal,
            'bl_tanggal_akhir' => $bl_tanggal_akhir,
        ];
        return view('laporan/filter_pad', $data);
    }
}
