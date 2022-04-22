<?php

namespace App\Controllers;

use App\Models\KodeRekeningModel;
use App\Models\TargetLainnyaModel;

class TargetLainnya extends BaseController
{

    protected $kodeRekeningModel;
    protected $targetLainnyaModel;

    public function __construct()
    {
        $this->kodeRekeningModel = new KodeRekeningModel();
        $this->targetLainnyaModel = new TargetLainnyaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Target PAD | PAD',
            'validation' => \Config\Services::validation(),
            'kode_rekening' => $this->kodeRekeningModel->getData(),
            'target_lainnya' => $this->targetLainnyaModel->getData()
        ];

        return view('target_lainnya/index', $data);
    }

    // Proses Tambah Data
    public function save()
    {

        //Validasi input
        if (!$this->validate([
            'kode_rekening_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kode rekening harus diisi.'
                ]
            ],
            'target_lainnya' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} target harus diisi.'
                ]
            ],
            'tahun_target' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tahun harus diisi.'
                ]
            ],
        ])) {
            return redirect()->to('/target_lainnya')->withInput();
        }

        $this->targetLainnyaModel->save([
            'kode_rekening_id' => $this->request->getVar('kode_rekening_id'),
            'target_lainnya' => $this->request->getVar('target_lainnya'),
            'tahun_target' => $this->request->getVar('tahun_target')
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/target_lainnya');
    }

    //Proses Edit Data
    public function update($id)
    {

        //Validasi input
        if (!$this->validate([
            'kode_rekening_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kode rekening harus diisi.'
                ]
            ],
            'target_lainnya' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} target harus diisi.'
                ]
            ],
            'tahun_target' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tahun harus diisi.'
                ]
            ],
        ]));

        $this->targetLainnyaModel->save([
            'id_target_lainnya' => $id,
            'kode_rekening_id' => $this->request->getVar('kode_rekening_id'),
            'target_lainnya' => $this->request->getVar('target_lainnya'),
            'tahun_target' => $this->request->getVar('tahun_target')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/target_lainnya');
    }

    // Hapus data
    public function delete($id)
    {

        $this->targetLainnyaModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/target_lainnya');
    }
}
