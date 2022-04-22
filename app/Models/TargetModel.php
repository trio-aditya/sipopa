<?php

namespace App\Models;

use CodeIgniter\Model;

class TargetModel extends Model
{
    protected $table      = 'target_pad';
    protected $primaryKey = 'id_target_pad';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_target_pad', 'kode_rekening_id', 'target', 'tahun'];

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
            return $this->join('kode_rekening', 'kode_rekening.id_kode_rekening = target_pad.kode_rekening_id')
                ->join('jenis_pajak', 'jenis_pajak.id_jenis_pajak = kode_rekening.jenis_pajak_id')
                ->findAll();
        }

        return $this->join('kode_rekening', 'kode_rekening.id_kode_rekening = target_pad.kode_rekening_id')->where(['id_target_pad' => $id])->first();
        // return $this->where(['id_opd' => $id])->first();
    }

    public function getTarget()
    {

        return $this->join('kode_rekening', 'kode_rekening.id_kode_rekening = target_pad.kode_rekening_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            ->where('jenis_pajak_id !=', 5)
            ->where('jenis_pajak_id !=', 6)
            ->where('jenis_pajak_id !=', 7)
            ->where('jenis_pajak_id !=', 8)
            ->findAll();
    }

    //Menampilkan data target untuk pendapatan transfer
    // dana perimbangan
    public function getTarget2()
    {

        return $this->join('kode_rekening', 'kode_rekening.id_kode_rekening = target_pad.kode_rekening_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            ->where('jenis_pajak_id', 5)
            ->like('kode_rekening', '01', 'after')
            ->findAll();
    }

    //Menampilkan data target untuk pendapatan transfer
    // dana insentif daerah (DID)
    public function getTarget3()
    {

        return $this->join('kode_rekening', 'kode_rekening.id_kode_rekening = target_pad.kode_rekening_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            ->where('jenis_pajak_id', 5)
            ->like('kode_rekening', '02', 'after')
            ->findAll();
    }

    //Menampilkan data target untuk pendapatan transfer
    // dana desa
    public function getTarget4()
    {

        return $this->join('kode_rekening', 'kode_rekening.id_kode_rekening = target_pad.kode_rekening_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            ->where('jenis_pajak_id', 5)
            ->like('kode_rekening', '05', 'after')
            ->findAll();
    }

    //Menampilkan data target untuk pendapatan transfer antar daerah
    // pendapatan bagi hasil
    public function getTarget5()
    {

        return $this->join('kode_rekening', 'kode_rekening.id_kode_rekening = target_pad.kode_rekening_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            ->where('jenis_pajak_id', 6)
            ->like('kode_rekening', '01', 'after')
            ->findAll();
    }

    //Menampilkan data target untuk lain-lain pendapatan
    // pendapatan hibah dari pemerintah pusat
    public function getTarget6()
    {

        return $this->join('kode_rekening', 'kode_rekening.id_kode_rekening = target_pad.kode_rekening_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            ->where('jenis_pajak_id', 7)
            ->like('kode_rekening', '01', 'after')
            ->findAll();
    }

    //Menampilkan data target untuk lain-lain pendapatan
    // Lain-lain pendapatan
    public function getTarget7()
    {

        return $this->join('kode_rekening', 'kode_rekening.id_kode_rekening = target_pad.kode_rekening_id')
            ->join('user_opd', 'user_opd.opdd_id=kode_rekening.opd_id')
            ->join('user', 'user.id_user=user_opd.user_id')
            ->where('jenis_pajak_id', 8)
            ->like('kode_rekening', '01', 'after')
            ->findAll();
    }
}
