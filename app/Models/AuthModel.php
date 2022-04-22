<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_user';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_user', 'nama_lengkap', 'email', 'username', 'password', 'role_id'];

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
            return $this->join('role', 'role.id_role = user.role_id')
                ->findAll();
        }

        return $this->join('role', 'role.id_role = user.role_id')
            ->where(['id_user' => $id])->first();
    }
}
