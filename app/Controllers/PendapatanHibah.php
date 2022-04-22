<?php

namespace App\Controllers;

use App\Models\PendapatanHibahModel;
use App\Models\TargetModel;

class PendapatanHibah extends BaseController
{

    protected $pendapatanHibahModel;
    protected $targetModel;

    public function __construct()
    {
        $this->pendapatanHibahModel = new PendapatanHibahModel();
        $this->targetModel = new TargetModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Realisasi PAD | PAD',
            'validation' => \Config\Services::validation(),
            'pendapatan_hibah' => $this->pendapatanHibahModel->getData(),
            'target' => $this->targetModel->getTarget6()
        ];

        return view('lain_lain/pendapatan_hibah', $data);
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
            return redirect()->to('/pendapatan_hibah')->withInput();
        }

        $this->pendapatanHibahModel->save([
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'realisasi' => $this->request->getVar('realisasi'),
            'status' => 0
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/pendapatan_hibah');
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

        $this->pendapatanHibahModel->save([
            'id_realisasi' => $id,
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'realisasi' => $this->request->getVar('realisasi')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/pendapatan_hibah');
    }

    // Hapus data
    public function delete($id)
    {

        $this->pendapatanHibahModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/pendapatan_hibah');
    }
}
