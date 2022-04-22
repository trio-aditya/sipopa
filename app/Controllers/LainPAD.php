<?php

namespace App\Controllers;

use App\Models\LainPadModel;
use App\Models\TargetModel;

class LainPAD extends BaseController
{

    protected $lainPadModel;
    protected $targetModel;

    public function __construct()
    {
        $this->lainPadModel = new LainPadModel();
        $this->targetModel = new TargetModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Lain-Lain PAD yang Sah| PAD',
            'validation' => \Config\Services::validation(),
            'lain_pad' => $this->lainPadModel->getData(),
            'target' => $this->targetModel->getTarget()
        ];

        return view('lain_pad/index', $data);
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
            'pendapatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pendapatan harus diisi.'
                ]
            ],
        ])) {
            return redirect()->to('/lainPad')->withInput();
        }

        $this->lainPadModel->save([
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'pendapatan' => $this->request->getVar('pendapatan')
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/lainPad');
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
            'pendapatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} pendapatan harus diisi.'
                ]
            ],
        ]));

        $this->lainPadModel->save([
            'id_lain_pad' => $id,
            'target_lainnya_id' => $this->request->getVar('target_lainnya_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'pendapatan' => $this->request->getVar('pendapatan')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/lainPad');
    }

    // Hapus data
    public function delete($id)
    {

        $this->lainPadModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/lainPad');
    }
}
