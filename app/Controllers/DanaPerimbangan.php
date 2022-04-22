<?php

namespace App\Controllers;

use App\Models\DanaPerimbanganModel;
use App\Models\TargetModel;

class DanaPerimbangan extends BaseController
{

    protected $perimbanganModel;
    protected $targetModel;

    public function __construct()
    {
        $this->perimbanganModel = new DanaPerimbanganModel();
        $this->targetModel = new TargetModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Realisasi PAD | PAD',
            'validation' => \Config\Services::validation(),
            'dana_perimbangan' => $this->perimbanganModel->getData(),
            'target' => $this->targetModel->getTarget2()
        ];

        return view('pendapatan_transfer/pemerintah_pusat/dana_perimbangan', $data);
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
            return redirect()->to('/dana_perimbangan')->withInput();
        }

        $this->perimbanganModel->save([
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'realisasi' => $this->request->getVar('realisasi'),
            'status' => 0
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/dana_perimbangan');
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

        $this->perimbanganModel->save([
            'id_realisasi' => $id,
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'realisasi' => $this->request->getVar('realisasi')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/dana_perimbangan');
    }

    // Hapus data
    public function delete($id)
    {

        $this->perimbanganModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/dana_perimbangan');
    }
}
