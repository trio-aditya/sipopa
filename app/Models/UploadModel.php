<?php

namespace App\Models;

use CodeIgniter\Model;

class UploadModel extends Model
{
    protected $table      = 'laporan';
    protected $primaryKey = 'id_laporan';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_laporan', 'users_id', 'judul_laporan', 'laporan'];

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
            return $this
                ->join('user_opd', 'user_opd.user_id=laporan.users_id')
                ->join('nama_opd', 'nama_opd.id_nama_opd=user_opd.opdd_id')
                ->orderBy('id_laporan', 'DESC')
                ->findAll();
        }

        return $this->where(['id_laporan' => $id])->first();
    }
}
