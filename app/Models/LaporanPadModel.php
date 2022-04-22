<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanPadModel extends Model
{
    protected $table      = 'kode_rekening';
    protected $primaryKey = 'id_kode_rekening';

    public function getJenis1()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '1')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 2 dan nama opd 2
    public function getJenis2()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '2')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 2 dan nama opd 3
    public function getJenis3()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '3')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 2 dan nama opd 4
    public function getJenis4()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '4')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 2 dan nama opd 5
    public function getJenis5()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '5')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 2 dan nama opd 6
    public function getJenis6()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '6')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 2 dan nama opd 7
    public function getJenis7()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '7')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 2 dan nama opd 8
    public function getJenis8()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '8')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 2 dan nama opd 9
    public function getJenis9()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '9')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 2 dan nama opd 10
    public function getJenis10()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '10')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 2 dan nama opd 11
    public function getJenis11()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '11')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 2 dan nama opd 12
    public function getJenis12()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '12')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 3 dan nama opd 13
    public function getJenis13()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '3')
            ->where('id_opd', '13')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 3 dan nama opd 12
    public function getJenis14()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '3')
            ->where('id_opd', '12')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 4 dan nama opd 1
    public function getJenis15()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '1')
            ->findAll(1);
    }
    // Menampilkan data jenis pajak 4 dan nama opd 14
    public function getJenis16()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '14')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 4 dan nama opd 15
    public function getJenis17()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '15')
            ->findAll(1);
    }
    // Menampilkan data jenis pajak 4 dan nama opd 2
    public function getJenis18()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '2')
            ->findAll(1);
    }
    // Menampilkan data jenis pajak 4 dan nama opd 16
    public function getJenis19()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '16')
            ->findAll(1);
    }

    // Menampilkan data jenis pajak 4 dan nama opd 13
    public function getJenis20()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '13')
            ->findAll(1);
    }


    //Menampilkan data Pajak Daerah
    public function getData1($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '1')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('id_target_pad')
            ->findAll();
    }

    //menampilkan data bulan ini dengan jenis pajak 1 dan opd 1
    public function bulan_ini($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '1')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('id_target_pad')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 2 dan nama opd 2
    public function getData2($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '2')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 1 dan opd 1
    public function bulan_lalu2($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '2')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 2 dan nama opd 3
    public function getData3($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '3')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 2 dan opd 3
    public function bulan_lalu3($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '3')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 2 dan nama opd 3
    public function getData4($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '4')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 2 dan opd 3
    public function bulan_lalu4($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '4')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 2 dan nama opd 5
    public function getData5($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '5')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 2 dan opd 5
    public function bulan_lalu5($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            // ->where('id_opd', '5')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 2 dan nama opd 6
    public function getData6($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '6')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 2 dan opd 6
    public function bulan_lalu6($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '6')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 2 dan nama opd 7
    public function getData7($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '7')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 2 dan opd 7
    public function bulan_lalu7($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '7')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 2 dan nama opd 8
    public function getData8($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '8')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 2 dan opd 8
    public function bulan_lalu8($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '8')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 2 dan nama opd 9
    public function getData9($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '9')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 2 dan opd 9
    public function bulan_lalu9($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '9')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 2 dan nama opd 10
    public function getData10($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '10')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 2 dan opd 10
    public function bulan_lalu10($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '10')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 2 dan nama opd 11
    public function getData11($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '11')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 2 dan opd 11
    public function bulan_lalu11($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '11')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 2 dan nama opd 12
    public function getData12($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '12')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 2 dan opd 12
    public function bulan_lalu12($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '12')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 3 dan nama opd 13
    public function getData13($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '3')
            ->where('id_opd', '13')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 3 dan opd 13
    public function bulan_lalu13($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '3')
            ->where('id_opd', '13')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 3 dan nama opd 12
    public function getData14($tanggal_awal, $tanggal_akhir)
    {
        return $this
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '3')
            ->where('id_opd', '12')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 3 dan opd 12
    public function bulan_lalu14($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->select('*')
            ->selectSum('realisasi')
            ->where('jenis_pajak_id', '3')
            ->where('opd_id', '12')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 4 dan nama opd 1
    public function getData15($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 4 dan opd 1
    public function bulan_lalu15($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('jenis_pajak_id', '4')
            ->where('opd_id', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 4 dan nama opd 14
    public function getData16($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '14')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 4 dan opd 14
    public function bulan_lalu16($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('jenis_pajak_id', '4')
            ->where('opd_id', '14')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 4 dan nama opd 15
    public function getData17($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '15')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 4 dan opd 15
    public function bulan_lalu17($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('jenis_pajak_id', '4')
            ->where('opd_id', '15')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 4 dan nama opd 2
    public function getData18($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '2')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan ini dengan jenis pajak 4 dan opd 15
    public function bulan_ini18($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('jenis_pajak_id', '4')
            ->where('opd_id', '2')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 4 dan nama opd 16
    public function getData19($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '16')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 4 dan opd 16
    public function bulan_lalu19($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('jenis_pajak_id', '4')
            ->where('opd_id', '16')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Menampilkan data Retribusi dengan jenis pajak 4 dan nama opd 13
    public function getData20($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '13')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 4 dan opd 16
    public function bulan_ini20($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('jenis_pajak_id', '4')
            ->where('opd_id', '13')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Sum untuk jenis pajak 1
    public function sumTarget1()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target')
            ->where('id_jenis_pajak', '1')
            ->where('id_opd', '1');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2 dan nama opd 2
    public function sumTarget2()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target2')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '2');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2 dan nama opd 3
    public function sumTarget3()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target3')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '3');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2 dan nama opd 4
    public function sumTarget4()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target4')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '4');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2 dan nama opd 5
    public function sumTarget5()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target5')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '5');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2 dan nama opd 6
    public function sumTarget6()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target6')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '6');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2 dan nama opd 7
    public function sumTarget7()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target7')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '7');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2 dan nama opd 8
    public function sumTarget8()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target8')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '8');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2 dan nama opd 9
    public function sumTarget9()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target9')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '9');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2 dan nama opd 10
    public function sumTarget10()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target10')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '10');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2 dan nama opd 11
    public function sumTarget11()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target11')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '11');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2 dan nama opd 12
    public function sumTarget12()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target12')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '12');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 3 dan nama opd 13
    public function sumTarget13()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target13')
            ->where('id_jenis_pajak', '3')
            ->where('id_opd', '13');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 3 dan nama opd 12
    public function sumTarget14()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target14')
            ->where('id_jenis_pajak', '3')
            ->where('id_opd', '12');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 4 dan nama opd 1
    public function sumTarget15()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target15')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '1');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 4 dan nama opd 14
    public function sumTarget16()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target16')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '14');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 4 dan nama opd 15
    public function sumTarget17()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target17')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '15');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 4 dan nama opd 2
    public function sumTarget18()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target18')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '2');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 4 dan nama opd 16
    public function sumTarget19()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target19')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '16');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 4 dan nama opd 13
    public function sumTarget20()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target20')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '13');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 1 dan opd 1
    // bulan sekarang
    public function sumRealisasi($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '1')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 1 dan opd 1
    // bulan lalu
    public function sumRealisasi2($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '1')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 2
    // bulan sekarang
    public function sumRealisasi3($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '2')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 2
    // bulan lalu
    public function sumRealisasi4($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '2')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 3
    // bulan sekarang
    public function sumRealisasi5($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '3')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 3
    // bulan lalu
    public function sumRealisasi6($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '3')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 4
    // bulan sekarang
    public function sumRealisasi7($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '4')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 3
    // bulan lalu
    public function sumRealisasi8($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '4')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 5
    // bulan sekarang
    public function sumRealisasi9($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '5')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 5
    // bulan lalu
    public function sumRealisasi10($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '5')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 6
    // bulan sekarang
    public function sumRealisasi11($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '6')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 6
    // bulan lalu
    public function sumRealisasi12($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '6')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 7
    // bulan sekarang
    public function sumRealisasi13($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '7')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 7
    // bulan lalu
    public function sumRealisasi14($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '7')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 8
    // bulan sekarang
    public function sumRealisasi15($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '8')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 8
    // bulan lalu
    public function sumRealisasi16($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '8')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 9
    // bulan sekarang
    public function sumRealisasi17($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '9')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 9
    // bulan lalu
    public function sumRealisasi18($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '9')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 10
    // bulan sekarang
    public function sumRealisasi19($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '10')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 10
    // bulan lalu
    public function sumRealisasi20($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '10')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 11
    // bulan sekarang
    public function sumRealisasi21($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '11')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 11
    // bulan lalu
    public function sumRealisasi22($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '11')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 12
    // bulan sekarang
    public function sumRealisasi23($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '12')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 2 dan opd 12
    // bulan lalu
    public function sumRealisasi24($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '12')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 3 dan opd 13
    // bulan sekarang
    public function sumRealisasi25($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '3')
            ->where('id_opd', '13')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 3 dan opd 13
    // bulan lalu
    public function sumRealisasi26($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '3')
            ->where('id_opd', '13')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 3 dan opd 12
    // bulan sekarang
    public function sumRealisasi27($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '3')
            ->where('id_opd', '12')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 3 dan opd 12
    // bulan lalu
    public function sumRealisasi28($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '3')
            ->where('id_opd', '12')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 4 dan opd 1
    // bulan sekarang
    public function sumRealisasi29($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 4 dan opd 1
    // bulan lalu
    public function sumRealisasi30($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 4 dan opd 14
    // bulan sekarang
    public function sumRealisasi31($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '14')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 4 dan opd 14
    // bulan lalu
    public function sumRealisasi32($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '14')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 4 dan opd 15
    // bulan sekarang
    public function sumRealisasi33($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '15')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 4 dan opd 15
    // bulan lalu
    public function sumRealisasi34($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '15')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 4 dan opd 2
    // bulan sekarang
    public function sumRealisasi35($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '2')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 4 dan opd 2
    // bulan lalu
    public function sumRealisasi36($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '2')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 4 dan opd 16
    // bulan sekarang
    public function sumRealisasi37($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '16')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 4 dan opd 16
    // bulan lalu
    public function sumRealisasi38($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '16')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 4 dan opd 13
    // bulan sekarang
    public function sumRealisasi39($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '13')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 4 dan opd 13
    // bulan lalu
    public function sumRealisasi40($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('id_opd', '13')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Laporan PAD
    //menampilkan data bulan sekarang dengan jenis pajak 2
    //kode 412
    //kode rekening 01
    //opd 3
    //Menampilkan data Pajak Daerah
    public function getRetribusi($bl_tanggal_awal, $bl_tanggal_akhir)
    {

        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '3')
            ->where('status', '1')
            ->like('kode_rekening', '01', 'after')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan ini dengan jenis pajak 2 dan kode rekening 01* opd 3
    public function retribusi_bulan_ini($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '3')
            ->where('status', '1')
            ->like('kode_rekening', '01', 'after')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Laporan PAD
    //menampilkan data bulan sekarang dengan jenis pajak 2
    //kode 412
    //kode rekening 01
    //opd 5
    //Menampilkan data Pajak Daerah
    public function b_rju5($bl_tanggal_awal, $bl_tanggal_akhir)
    {

        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '5')
            ->where('status', '1')
            ->like('kode_rekening', '01', 'after')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan ini dengan jenis pajak 2 dan kode rekening 01* opd 3
    public function bl_rju5($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '5')
            ->where('status', '1')
            ->like('kode_rekening', '01', 'after')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Laporan PAD
    //menampilkan data bulan sekarang dengan jenis pajak 2
    //kode 412
    //kode rekening 01
    //opd 8
    //Menampilkan data Pajak Daerah
    public function b_rju8($bl_tanggal_awal, $bl_tanggal_akhir)
    {

        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '8')
            ->where('status', '1')
            ->like('kode_rekening', '01', 'after')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 2 dan kode rekening 01* opd 8
    public function bl_rju8($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '8')
            ->where('status', '1')
            ->like('kode_rekening', '01', 'after')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Sum untuk jenis pajak 2
    //kode rekening 01 (Perizinan Jasa Umum)
    public function sumJasaUmum()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'jasa_umum')
            ->where('id_jenis_pajak', '2')
            ->like('kode_rekening', '01', 'after');
        $query = $builder->get()->getResultArray();

        return $query;
    }

    //Sum untuk jenis pajak 2
    //kode rekening 01 (Jasa Umum)
    // bulan sekarang
    public function sumRealisasi201($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('status', '1')
            ->like('kode_rekening', '01', 'after')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2
    //kode rekening 01 (Jasa Umum)
    // bulan lalu
    public function bsumRealisasi201($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('status', '1')
            ->like('kode_rekening', '01', 'after')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2 
    //kode rekening 01 (Jasa Umum)
    public function sumRetribusi()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target')
            ->where('id_jenis_pajak', '2')
            ->like('kode_rekening', '01', 'after');
        $query = $builder->get()->getResultArray();

        return $query;
    }

    //Menampilkan data target Retribusi Pemakaian Kekayaan Daerah
    //jenis pajak 2
    //kode rekening 0201 
    public function sumPkd()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target_pkd')
            ->where('id_jenis_pajak', '2')
            ->like('kode_rekening', '0201', 'after');
        $query = $builder->get()->getResultArray();

        return $query;
    }

    //Menampilkan data target Retribusi Pemakaian Kekayaan Daerah
    //jenis pajak 2
    //kode rekening 0201 
    //Realisasi
    //Bulan sekarang
    public function sumRealisasi20201($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('status', '1')
            ->like('kode_rekening', '0201', 'after')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Menampilkan data target Retribusi Pemakaian Kekayaan Daerah
    //jenis pajak 2
    //kode rekening 0201 
    //Realisasi
    //Bulan lalu
    public function bsumRealisasi20201($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('status', '1')
            ->like('kode_rekening', '0201', 'after')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Menampilkan data target Retribusi Pemakaian Kekayaan Daerah
    //jenis pajak 2
    //kode rekening 0211 
    public function sumPpud()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target_ppud')
            ->where('id_jenis_pajak', '2')
            ->like('kode_rekening', '0211', 'after');
        $query = $builder->get()->getResultArray();

        return $query;
    }

    //Menampilkan data target Retribusi Pemakaian Kekayaan Daerah
    //jenis pajak 2
    //kode rekening 0211
    //Realisasi
    //Bulan sekarang
    public function sumRealisasi20211($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('status', '1')
            ->like('kode_rekening', '0211', 'after')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Menampilkan data target Retribusi Pemakaian Kekayaan Daerah
    //jenis pajak 2
    //kode rekening 0211
    //Realisasi
    //Bulan lalu
    public function bsumRealisasi20211($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('status', '1')
            ->like('kode_rekening', '0211', 'after')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2
    //kode rekening 02 (Perizinan Jasa Usaha)
    public function sumJasaUsaha()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'jasa_usaha')
            ->where('id_jenis_pajak', '2')
            ->like('kode_rekening', '02', 'after');
        $query = $builder->get()->getResultArray();

        return $query;
    }

    //Sum untuk jenis pajak 2
    //kode rekening 02 (Jasa Usaha)
    // bulan sekarang
    public function sumRealisasi202($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('status', '1')
            ->like('kode_rekening', '02', 'after')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2
    //kode rekening 02 (Jasa Usaha)
    // bulan lalu
    public function bsumRealisasi202($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('status', '1')
            ->like('kode_rekening', '02', 'after')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Laporan PAD
    //menampilkan data bulan sekarang dengan jenis pajak 2
    //kode 412
    //kode rekening 02
    //Menampilkan data Pajak Daerah
    public function getRetribusi2($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '5')
            ->where('status', '1')
            ->like('kode_rekening', '02', 'after')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }


    //menampilkan data bulan lalu dengan jenis pajak 2 dan kode rekening 02*
    public function retribusi_bulan_ini2($tanggal_awal, $tanggal_akhir)
    {

        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '5')
            ->where('status', '1')
            ->like('kode_rekening', '02', 'after')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Laporan PAD
    //menampilkan data bulan sekarang dengan jenis pajak 2
    //kode 412
    //kode rekening 02
    //opd 3
    //Menampilkan data Pajak Daerah
    public function b_rjus3($bl_tanggal_awal, $bl_tanggal_akhir)
    {

        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '3')
            ->where('status', '1')
            ->like('kode_rekening', '02', 'after')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 2 dan kode rekening 02* opd 3
    public function bl_rjus3($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('id_opd', '3')
            ->where('status', '1')
            ->like('kode_rekening', '02', 'after')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Sum untuk jenis pajak 2
    //kode rekening 03 (Perizinan Tertentu)
    public function sumPerizinanTertentu()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target_perizinan_tertentu')
            ->where('id_jenis_pajak', '2')
            ->like('kode_rekening', '03', 'after');
        $query = $builder->get()->getResultArray();

        return $query;
    }

    //Sum untuk jenis pajak 2
    //kode rekening 03 (Perizinan Tertentu)
    // bulan sekarang
    public function sumRealisasi203($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('status', '1')
            ->like('kode_rekening', '03', 'after')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 2
    //kode rekening 03 (Perizinan Tertentu)
    // bulan lalu
    public function bsumRealisasi203($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('status', '1')
            ->like('kode_rekening', '03', 'after')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Laporan PAD
    //menampilkan data bulan sekarang dengan jenis pajak 2
    //kode 412
    //kode rekening 03
    //Menampilkan data Pajak Daerah
    public function getRetribusi3($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('status', '1')
            ->like('kode_rekening', '03', 'after')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->groupBy('kode_rekening')
            ->findAll();
    }

    //menampilkan data bulan ini dengan jenis pajak 2 dan kode rekening 02*
    public function retribusi_bulan_ini3($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '2')
            ->where('status', '1')
            ->like('kode_rekening', '03', 'after')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->groupBy('kode_rekening')
            ->findAll();
    }

    //Sum untuk jenis pajak 3
    //hASIL KEKAYAAN DAERAH YANG DIPISAHKAN
    public function sumHpkdd()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'hpkdd')
            ->where('id_jenis_pajak', '3');
        $query = $builder->get()->getResultArray();

        return $query;
    }

    //Sum untuk jenis pajak 3
    //HASIL KEKAYAAN DAERAH YANG DIPISAHKAN
    // bulan sekarang
    public function sumRealisasi413($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '3')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 3
    //HASIL KEKAYAAN DAERAH YANG DIPISAHKAN
    // bulan lalu
    public function bsumRealisasi413($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '3')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 4
    //LAIN-LAIN PAD YANG SAH
    public function sumLain()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'lain_lain')
            ->where('id_jenis_pajak', '4');
        $query = $builder->get()->getResultArray();

        return $query;
    }

    //Sum untuk jenis pajak 4
    //LAIN-LAIN PAD YANG SAH
    // bulan sekarang
    public function sumRealisasi414($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Sum untuk jenis pajak 4
    //LAIN-LAIN PAD YANG SAH
    // bulan lalu
    public function bsumRealisasi414($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '4')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir);
        $query = $builder->get()->getResult();

        return $query;
    }

    //Dana Transfer Umum dan Bagi Hasil (DBH)
    //Menampilkan Jenis Pajak 5 dan OPD 1
    // kode 0101
    public function sumTarget5101()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target5101')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->like('kode_rekening', '0101', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan
    // dengan jenis pajak 5 dan opd 1
    // kode 0101
    // bulan sekarang
    public function sumRealisasi5101($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '0101', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 5 dan opd 1
    // kode 0101
    // bulan lalu
    public function bsumRealisasi5101($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '0101', 'after');
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //Pendapatan Transfer
    //Menampilkan Jenis Pajak 5 dan OPD 1
    // kode 0101
    public function getJenis5101()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '5')
            ->like('kode_rekening', '0101', 'after')
            ->findAll(1);
    }

    //Menampilkan data Dana Transfer DBH
    // 421.01.01
    // Jenis Pajak 5 dan OPD 1
    // kode 0101
    public function getData5101($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '0101', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 5 dan opd 1
    // kode 0102
    public function bulan_lalu5101($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '01', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Dana Alokasi Umum (DAU)
    //Menampilkan Jenis Pajak 5 dan OPD 1
    // kode 0102
    public function sumTarget5102()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target5102')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->like('kode_rekening', '0102', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan
    // dengan jenis pajak 5 dan opd 1
    // kode 0102
    // bulan sekarang
    public function sumRealisasi5102($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '0102', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan sesuai dengan target pad
    // dengan jenis pajak 5 dan opd 1
    // kode 0102
    // bulan lalu
    public function bsumRealisasi5102($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '0102', 'after');
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //Menampilkan data Dana Alokasi Umum (DAU)
    // 421.01.01
    // Jenis Pajak 5 dan OPD 1
    // kode 0102
    public function getData5102($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '0102', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 5 dan opd 1
    // kode 0102
    public function bulan_lalu5102($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '0102', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Dana Alokasi Khusus (DAK)
    //DAK Fisik
    //Menampilkan Jenis Pajak 5 dan OPD 1
    // kode 0103
    public function sumTarget5103()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target5103')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->like('kode_rekening', '0103', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan
    //DAK Fisik
    // dengan jenis pajak 5 dan opd 1
    // kode 0103
    // bulan sekarang
    public function sumRealisasi5103($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '0103', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan
    // DAK Fisik
    // dengan jenis pajak 5 dan opd 1
    // kode 0103
    // bulan lalu
    public function bsumRealisasi5103($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '0103', 'after');
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //Menampilkan data Dana Alokasi Khusus (DAK)
    // 421.01.01
    // Jenis Pajak 5 dan OPD 1
    // kode 0103
    public function getData5103($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '0103', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 5 dan opd 1
    // kode 0103
    public function bulan_lalu5103($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '0103', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Dana Alokasi Khusus (DAK)
    //DAK Non Fisik
    //Menampilkan Jenis Pajak 5 dan OPD 1
    // kode 0104
    public function sumTarget5104()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target5104')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->like('kode_rekening', '0104', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan
    //DAK Non Fisik
    // dengan jenis pajak 5 dan opd 1
    // kode 0104
    // bulan sekarang
    public function sumRealisasi5104($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '0104', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan
    //DAK Non Fisik
    // dengan jenis pajak 5 dan opd 1
    // kode 0104
    // bulan lalu
    public function bsumRealisasi5104($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '0104', 'after');
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //Menampilkan data Dana ALokasi Khusus
    // DAK Non Fisik
    // 421.01.01
    // Jenis Pajak 5 dan OPD 1
    // kode 0104
    public function getData5104($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '0104', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 5 dan opd 1
    // kode 0104
    public function bulan_lalu5104($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '0104', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Dana Insentif Daerah (DID)
    //Menampilkan Jenis Pajak 5 dan OPD 1
    // kode 02
    public function sumTarget512()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target512')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->like('kode_rekening', '02', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Dana Insentif Daerah (DID)
    // dengan jenis pajak 5 dan opd 1
    // kode 02
    // bulan sekarang
    public function sumRealisasi512($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '02', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan
    // Dana Insentif Daerah (DID)
    // dengan jenis pajak 5 dan opd 1
    // kode 02
    // bulan lalu
    public function bsumRealisasi512($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '02', 'after');
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //Menampilkan data Dana Insentif Daerah (DID)
    // 421.01.01
    // Jenis Pajak 5 dan OPD 1
    // kode 02
    public function getData512($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '02', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan ini dengan jenis pajak 5 dan opd 1
    // kode 02
    public function bulan_ini512($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '02', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Dana Insentif Daerah (DID)
    //Menampilkan Jenis Pajak 5 dan OPD 1
    // kode 05
    public function sumTarget515()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target515')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->like('kode_rekening', '05', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Dana Desa
    // dengan jenis pajak 5 dan opd 1
    // kode 05
    // bulan sekarang
    public function sumRealisasi515($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '05', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan
    // Dana Desa
    // dengan jenis pajak 5 dan opd 1
    // kode 05
    // bulan lalu
    public function bsumRealisasi515($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '05', 'after');
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //Menampilkan Dana Desa
    // 421.01.01
    // Jenis Pajak 5 dan OPD 1
    // kode 5
    public function getData515($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '05', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 5 dan opd 1
    // kode 05
    public function bulan_ini515($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '5')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '05', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Pendapatan Transfer Antar Daerah
    //Menampilkan Jenis Pajak 6 dan OPD 1
    // kode 01
    public function sumTarget601()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target601')
            ->where('id_jenis_pajak', '6')
            ->where('id_opd', '1')
            ->like('kode_rekening', '01', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Pendapatan Transfer Antar Daerah
    // dengan jenis pajak 6 dan opd 1
    // kode 01
    // bulan sekarang
    public function sumRealisasi601($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '6')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '01', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan
    // Pendapatan Transfer Antar Daerah 
    // dengan jenis pajak 6 dan opd 1
    // kode 01
    // bulan lalu
    public function bsumRealisasi601($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '6')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '01', 'after');
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //Menampilkan Jenis Pajak 6 dan OPD 1
    // kode 01
    public function getJenis601()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '6')
            ->like('kode_rekening', '01', 'after')
            ->findAll(1);
    }

    //Menampilkan data Dana Transfer Antar Daerah
    // 421.01.01
    // Jenis Pajak 6 dan OPD 1
    // kode 01
    public function getData601($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '6')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '01', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan lalu dengan jenis pajak 6 dan opd 1
    // kode 01
    public function bulan_lalu601($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '6')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '01', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Pendapatan Hibah
    //Menampilkan Jenis Pajak 7 dan OPD 1
    // kode 01
    public function sumTarget701()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target701')
            ->where('id_jenis_pajak', '7')
            ->where('id_opd', '1')
            ->like('kode_rekening', '01', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Pendapatan Hibah
    // dengan jenis pajak 7 dan opd 1
    // kode 01
    // bulan sekarang
    public function sumRealisasi701($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '7')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '01', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan
    // Pendapatan Hibah
    // dengan jenis pajak 7 dan opd 1
    // kode 01
    // bulan lalu
    public function bsumRealisasi701($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '7')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '01', 'after');
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //Lain-lain pendapatan daerah yang sah
    //Menampilkan Jenis Pajak 7 dan OPD 1
    // kode 01
    public function getJenis701()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '7')
            ->like('kode_rekening', '01', 'after')
            ->findAll(1);
    }

    //Menampilkan data Dana Transfer Antar Daerah
    // 431.01.01
    // Jenis Pajak 7 dan OPD 1
    // kode 01
    public function getData701($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '7')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '01', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan ini dengan jenis pajak 7 dan opd 1
    // kode 01
    public function bulan_ini701($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '7')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '01', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //Pendapatan Hibah
    //Menampilkan Jenis Pajak 8 dan OPD 1
    // kode 01
    public function sumTarget801()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kode_rekening')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->selectSum('target', 'target801')
            ->where('id_jenis_pajak', '8')
            ->where('id_opd', '1')
            ->like('kode_rekening', '01', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //Pendapatan Hibah
    // dengan jenis pajak 8 dan opd 1
    // kode 01
    // bulan sekarang
    public function sumRealisasi801($tanggal_awal, $tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '8')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '01', 'after');
        $query = $builder->get()->getResult();

        return $query;
    }

    //membuat sum untuk realisasi perbulan
    // Pendapatan Hibah
    // dengan jenis pajak 8 dan opd 1
    // kode 01
    // bulan lalu
    public function bsumRealisasi801($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('target_pad')->selectSum('target');
        $builder = $db->table('realisasi')
            ->join('target_pad', 'target_pad.id_target_pad=realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '8')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '01', 'after');
        // ->groupBy('target_pad_id') 
        $query = $builder->get()->getResult();

        return $query;
    }

    //Lain-lain pendapatan daerah yang sah
    //Menampilkan Jenis Pajak 8 dan OPD 1
    // kode 01
    public function getJenis801()
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->where('id_jenis_pajak', '8')
            ->like('kode_rekening', '01', 'after')
            ->findAll(1);
    }

    //Menampilkan data Dana Transfer Antar Daerah
    // 433.01.01
    // Jenis Pajak 8 dan OPD 1
    // kode 01
    public function getData801($bl_tanggal_awal, $bl_tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '8')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $bl_tanggal_awal)
            ->where('tanggal <=', $bl_tanggal_akhir)
            ->like('kode_rekening', '01', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }

    //menampilkan data bulan ini dengan jenis pajak 8 dan opd 1
    // kode 01
    public function bulan_ini801($tanggal_awal, $tanggal_akhir)
    {
        return $this->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('target_pad', 'target_pad.kode_rekening_id=kode_rekening.id_kode_rekening')
            ->join('realisasi', 'realisasi.target_pad_id=target_pad.id_target_pad')
            ->distinct()
            ->select('*')
            ->selectSum('realisasi')
            ->where('id_jenis_pajak', '8')
            ->where('id_opd', '1')
            ->where('status', '1')
            ->where('tanggal >=', $tanggal_awal)
            ->where('tanggal <=', $tanggal_akhir)
            ->like('kode_rekening', '01', 'after')
            ->groupBy('target_pad_id')
            ->findAll();
    }
}
