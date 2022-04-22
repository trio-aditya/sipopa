<?php

namespace App\Controllers;

use App\Models\DanaInsentifDaerahModel;
use App\Models\TargetModel;

class DanaInsentifDaerah extends BaseController
{

    protected $didModel;
    protected $targetModel;

    public function __construct()
    {
        $this->didModel = new DanaInsentifDaerahModel();
        $this->targetModel = new TargetModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Realisasi PAD | PAD',
            'validation' => \Config\Services::validation(),
            'dana_insentif_daerah' => $this->didModel->getData(),
            'target' => $this->targetModel->getTarget3()
        ];

        return view('pendapatan_transfer/pemerintah_pusat/dana_insentif_daerah', $data);
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
            return redirect()->to('/dana_insentif_daerah')->withInput();
        }

        $this->didModel->save([
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'realisasi' => $this->request->getVar('realisasi'),
            'status' => 0
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/dana_insentif_daerah');
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

        $this->didModel->save([
            'id_realisasi' => $id,
            'target_pad_id' => $this->request->getVar('target_pad_id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'realisasi' => $this->request->getVar('realisasi')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/dana_insentif_daerah');
    }

    // Hapus data
    public function delete($id)
    {

        $this->didModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/dana_insentif_daerah');
    }
}
