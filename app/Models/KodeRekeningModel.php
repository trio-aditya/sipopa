<?php

namespace App\Models;

use CodeIgniter\Model;

class KodeRekeningModel extends Model
{
    protected $table      = 'kode_rekening';
    protected $primaryKey = 'id_kode_rekening';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_kode_rekening', 'opd_id', 'jenis_pajak_id', 'kode_rekening', 'keterangan'];

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
            return $this->join('opd', 'opd.id_opd = kode_rekening.opd_id')
                ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak = kode_rekening.jenis_pajak_id')
                ->findAll();
        }

        return $this->join('opd', 'opd.id_opd = kode_rekening.opd_id')
            ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak = kode_rekening_id.jenis_pajak_id')
            ->where(['id_kode_rekening' => $id])
            ->first();
    }
}
