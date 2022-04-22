<?php

namespace App\Models;

use CodeIgniter\Model;

class DataOpdModel extends Model
{
    protected $table      = 'opd';
    protected $primaryKey = 'id_opd';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_opd', 'nama_opd'];

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

        return $this->where(['id_opd' => $id])->first();
    }
}
