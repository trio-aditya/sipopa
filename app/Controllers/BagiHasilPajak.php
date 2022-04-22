<?php

namespace App\Controllers;

use App\Models\BagiHasilPajakModel;
use App\Models\TargetModel;

class BagiHasilPajak extends BaseController
{

    protected $bagiHasilPajakModel;
    protected $targetModel;

    public function __construct()
    {
        $this->bagiHasilPajakModel = new BagiHasilPajakModel();
        $this->targetModel = new TargetModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Realisasi PAD | PAD',
            'validation' => \Config\Services::validation(),
            'bagi_hasil_pajak' => $this->bagiHasilPajakModel->getData(),
            'target' => $this->targetModel->getTarget5()
        ];

        return view('pendapatan_transfer/antar_daerah/index', $data);
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
            return redirect()->to('/bagi_hasil_pajak')->withInput();
        }

        $this->bagiHasilPajakModel->save([
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'realisasi' => $this->request->getVar('realisasi'),
            'status' => 0
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/bagi_hasil_pajak');
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

        $this->bagiHasilPajakModel->save([
            'id_realisasi' => $id,
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'realisasi' => $this->request->getVar('realisasi')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/bagi_hasil_pajak');
    }

    // Hapus data
    public function delete($id)
    {

        $this->bagiHasilPajakModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/bagi_hasil_pajak');
    }
}
