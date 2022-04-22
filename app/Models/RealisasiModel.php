<?php

namespace App\Models;

use CodeIgniter\Model;

class RealisasiModel extends Model
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
                ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
                ->join('user', 'user.id_user=user_opd.user_id')
                // ->groupBy(["target_pad_id", "tanggal"])
                ->orderBy("id_realisasi", "DESC")
                ->findAll();
        }

        return $this->join('target_pad', 'target_pad.id_target_pad = realisasi.target_pad_id')->where(['id_target_pad' => $id])->first();
        // return $this->where(['id_opd' => $id])->first();
    }
}
