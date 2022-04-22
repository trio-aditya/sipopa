<?php

namespace App\Models;

use CodeIgniter\Model;

class UserOpdModel extends Model
{
    protected $table      = 'user_opd';
    protected $primaryKey = 'id_user_opd';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_user_opd', 'user_id', 'opdd_id'];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;



    public function getData($id = false)
    {
        if ($id == false) {
            return $this->join('user', 'user.id_user = user_opd.user_id')->join('opd', 'opd.id_opd = user_opd.opdd_id')->findAll();
        }

        return $this->join('user', 'user.id_user = user_opd.user_id')->join('opd', 'opd.id_opd = user_opd.opdd_id')->where(['id_user_opd' => $id])->first();
        // return $this->where(['id_opd' => $id])->first();
    }
}
