<?php

namespace App\Models;

use CodeIgniter\Model;

class VerifikasiModel extends Model
{
    protected $table      = 'realisasi';
    protected $primaryKey = 'id_realisasi';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_realisasi', 'target_pad_id', 'tanggal', 'realisasi', 'status'];

    protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;



    public function getData($id = false)
    {
        if ($id == false) {
            return $this->join('target_pad', 'target_pad.id_target_pad = realisasi.target_pad_id')
                ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
                ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
                ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
                ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
                ->join('user', 'user.id_user=user_opd.user_id')
                ->orderBy("id_realisasi", 'DESC')
                ->findAll();
        }

        return $this->join('target_pad', 'target_pad.id_target_pad = realisasi.target_pad_id')->where(['id_target_pad' => $id])->first();
        // return $this->where(['id_opd' => $id])->first();
    }

    public function getDataVerifikasi()
    {
        return $this->join('target_pad', 'target_pad.id_target_pad = realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            ->orderBy("id_realisasi", 'DESC')
            ->where('status', 1)
            ->findAll();
    }

    //Menampilkan data Pending
    public function getDataPending()
    {
        return $this->join('target_pad', 'target_pad.id_target_pad = realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            ->orderBy("id_realisasi", 'DESC')
            ->where('status', 0)
            ->findAll();
    }

    //Menampilkan data Tolak
    public function getDataTolak()
    {
        return $this->join('target_pad', 'target_pad.id_target_pad = realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            ->orderBy("id_realisasi", 'DESC')
            ->where('status', 2)
            ->findAll();
    }

    //Menampilkan data Filter
    public function getFilter($id)
    {
        return $this->join('target_pad', 'target_pad.id_target_pad = realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            // ->orderBy("id_realisasi", 'DESC')
            ->where(['id_opd' => $id])
            ->findAll();
    }

    //Menampilkan data Filter Verifikasi
    public function getFilterVerifikasi($id)
    {
        return $this->join('target_pad', 'target_pad.id_target_pad = realisasi.target_pad_id')
            ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
            ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            // ->orderBy("id_realisasi", 'DESC')
            ->where(['id_opd' => $id])
            ->where('status', 1)
            ->findAll();
    }

    // public function getDatatables($katakunci = null, $start = 0, $length = 0)
    // {
    //     $builder = $this->table('realisasi')
    //         ->join('target_pad', 'target_pad.id_target_pad = realisasi.target_pad_id')
    //         ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_pad.kode_rekening_id')
    //         ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak=kode_rekening.jenis_pajak_id')
    //         ->join('opd', 'opd.id_opd=kode_rekening.opd_id')
    //         ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
    //         ->join('user', 'user.id_user=user_opd.user_id');

    //     if ($katakunci) {
    //         $arr_katakunci = explode(" ", $katakunci);
    //         for ($x = 0; $x < count($arr_katakunci); $x++) {
    //             $builder = $builder->orLike('tanggal', $arr_katakunci[$x]);
    //             $builder = $builder->orLike('jenis_pajak', $arr_katakunci[$x]);
    //             $builder = $builder->orLike('jenis_pendapatan', $arr_katakunci[$x]);
    //             $builder = $builder->orLike('jumlah', $arr_katakunci[$x]);
    //             $builder = $builder->orLike('status', $arr_katakunci[$x]);
    //         }
    //     }
    //     if ($start != 0 or $length != 0) {
    //         $builder = $builder->limit($length, $start);
    //     }

    //     return $builder->orderBy('tanggal')->get()->getResult();
    // }
}
