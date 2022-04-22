<?php

namespace App\Models;

use CodeIgniter\Model;

class LainPadModel extends Model
{
    protected $table      = 'lain_pad';
    protected $primaryKey = 'id_lain_pad';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_lain_pad', 'target_lainnya_id', 'tanggal', 'pendapatan'];

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
            return $this->join('target_lainnya', 'target_lainnya.id_target_lainnya = lain_pad.target_lainnya_id')
                ->join('kode_rekening', 'kode_rekening.id_kode_rekening=target_lainnya.kode_rekening_id')
                ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
                ->join('user', 'user.id_user=user_opd.user_id')
                ->groupBy(["target_lainnya_id", "tanggal"])
                ->findAll();
        }

        return $this->join('target_lainnya', 'target_lainnya.id_target_lainnya = lain_pad.target_lainnya_id')->where(['id_target_lainnya' => $id])->first();
        // return $this->where(['id_opd' => $id])->first();
    }
}
