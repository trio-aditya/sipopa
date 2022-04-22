<?php

namespace App\Controllers;

use App\Models\RealisasiModel;
use App\Models\TargetModel;

class Realisasi extends BaseController
{

    protected $realisasiModel;
    protected $targetModel;

    public function __construct()
    {
        $this->realisasiModel = new RealisasiModel();
        $this->targetModel = new TargetModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Realisasi PAD | PAD',
            'validation' => \Config\Services::validation(),
            'realisasi' => $this->realisasiModel->getData(),
            'target' => $this->targetModel->getTarget()
        ];

        return view('realisasi/index', $data);
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
            return redirect()->to('/realisasi')->withInput();
        }

        $this->realisasiModel->save([
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'realisasi' => $this->request->getVar('realisasi'),
            'status' => 0
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/realisasi');
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

        $this->realisasiModel->save([
            'id_realisasi' => $id,
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'realisasi' => $this->request->getVar('realisasi'),
            'status' => 0
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/realisasi');
    }

    // Hapus data
    public function delete($id)
    {

        $this->realisasiModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/realisasi');
    }

    //Cetak Excel
    public function excel()
    {
        $data = [
            'title' => 'Realisasi PAD | PAD',
            'validation' => \Config\Services::validation(),
            'realisasi' => $this->realisasiModel->getData(),
            'target' => $this->targetModel->getTarget()
        ];

        return view('realisasi/laporan_excel', $data);
    }
}
