<?php

namespace App\Controllers;

use App\Models\LainLainModel;
use App\Models\TargetModel;

class LainLain extends BaseController
{

    protected $lainLainModel;
    protected $targetModel;

    public function __construct()
    {
        $this->lainLainModel = new LainLainModel();
        $this->targetModel = new TargetModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Realisasi PAD | PAD',
            'validation' => \Config\Services::validation(),
            'lain_lain' => $this->lainLainModel->getData(),
            'target' => $this->targetModel->getTarget7()
        ];

        return view('lain_lain/lain_lain_pendapatan', $data);
    }

    //Proses Tambah Data
    public function save()
    {

        //Validasi input
        if (!$this->validate([
            'target_pad_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} target PAD harus diisi.'
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tanggal harus diisi.'
                ]
            ],
            'realisasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} realisasi harus diisi.'
                ]
            ],
        ])) {
            return redirect()->to('/lain_lain')->withInput();
        }

        $this->lainLainModel->save([
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'realisasi' => $this->request->getVar('realisasi'),
            'status' => 0
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/lain_lain');
    }

    //Proses Edit Data
    public function update($id)
    {

        //Validasi input
        if (!$this->validate([
            'target_pad_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} target PAD harus diisi.'
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tanggal harus diisi.'
                ]
            ],
            'realisasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} realisasi harus diisi.'
                ]
            ],
        ]));

        $this->lainLainModel->save([
            'id_realisasi' => $id,
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'realisasi' => $this->request->getVar('realisasi')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/lain_lain');
    }

    // Hapus data
    public function delete($id)
    {

        $this->lainLainModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/lain_lain');
    }
}
