<?php

namespace App\Controllers;

use App\Models\KodeRekeningModel;
use App\Models\TargetModel;

class Target extends BaseController
{

    protected $kodeRekeningModel;
    protected $targetModel;

    public function __construct()
    {
        $this->kodeRekeningModel = new KodeRekeningModel();
        $this->targetModel = new TargetModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Target PAD | PAD',
            'validation' => \Config\Services::validation(),
            'kode_rekening' => $this->kodeRekeningModel->getData(),
            'target' => $this->targetModel->getData()
        ];

        return view('target/index', $data);
    }

    //Proses Tambah Data
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
            'target' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} target harus diisi.'
                ]
            ],
            'tahun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tahun harus diisi.'
                ]
            ],
        ])) {
            return redirect()->to('/target')->withInput();
        }

        $this->targetModel->save([
            'kode_rekening_id' => $this->request->getVar('kode_rekening_id'),
            'target' => $this->request->getVar('target'),
            'tahun' => $this->request->getVar('tahun')
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/target');
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
            'target' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} target harus diisi.'
                ]
            ],
            'tahun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tahun harus diisi.'
                ]
            ],
        ]));

        $this->targetModel->save([
            'id_target_pad' => $id,
            'kode_rekening_id' => $this->request->getVar('kode_rekening_id'),
            'target' => $this->request->getVar('target'),
            'tahun' => $this->request->getVar('tahun')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/target');
    }

    // Hapus data
    public function delete($id)
    {

        $this->targetModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/target');
    }
}
