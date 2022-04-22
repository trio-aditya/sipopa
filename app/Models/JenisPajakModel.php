<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisPajakModel extends Model
{
    protected $table      = 'jenis_pajak';
    protected $primaryKey = 'id_jenis_pajak';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_jenis_pajak', 'kode', 'jenis_pajak'];

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
            return $this->findAll();
        }

        return $this->where(['id_jenis_pajak' => $id])->first();
    }
}
