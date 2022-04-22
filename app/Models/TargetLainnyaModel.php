<?php

namespace App\Models;

use CodeIgniter\Model;

class TargetLainnyaModel extends Model
{
    protected $table      = 'target_lainnya';
    protected $primaryKey = 'id_target_lainnya';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_target_lainnya', 'kode_rekening_id', 'target_lainnya', 'tahun_target'];

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
            return $this->join('kode_rekening', 'kode_rekening.id_kode_rekening = target_lainnya.kode_rekening_id')->findAll();
        }

        return $this->join('kode_rekening', 'kode_rekening.id_kode_rekening = target_lainnya.kode_rekening_id')->where(['id_target_lainnya' => $id])->first();
        // return $this->where(['id_opd' => $id])->first();
    }

    public function getTarget()
    {

        return $this->join('kode_rekening', 'kode_rekening.id_kode_rekening = target_lainnya.kode_rekening_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            ->findAll();
    }
}
