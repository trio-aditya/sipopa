<?php

namespace App\Controllers;

use App\Models\KodeRekeningModel;
use App\Models\DataOpdModel;
use App\Models\JenisPajakModel;

class KodeRekening extends BaseController
{

    protected $kodeRekeningModel;
    protected $dataOpdModel;
    protected $jenisPajakModel;

    public function __construct()
    {
        $this->kodeRekeningModel = new KodeRekeningModel();
        $this->dataOpdModel = new DataOpdModel();
        $this->jenisPajakModel = new JenisPajakModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Kode Rekening | PAD',
            'validation' => \Config\Services::validation(),
            'kode_rekening' => $this->kodeRekeningModel->getData(),
            'opd' => $this->dataOpdModel->getData(),
            'jenis_pajak' => $this->jenisPajakModel->getData()
        ];

        return view('data_master/kode_rekening', $data);
    }

    //Proses Tambah Data
    public function save()
    {

        //Validasi input
        if (!$this->validate([
            'opd_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama opd harus diisi.'
                ]
            ],
            'jenis_pajak_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} jenis pajak harus diisi.'
                ]
            ],
            'kode_rekening' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kode rekening harus diisi.'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} keterangan harus diisi.'
                ]
            ],
        ])) {
            return redirect()->to('/kode_rekening')->withInput();
        }

        $this->kodeRekeningModel->save([
            'opd_id' => $this->request->getVar('opd_id'),
            'jenis_pajak_id' => $this->request->getVar('jenis_pajak_id'),
            'kode_rekening' => $this->request->getVar('kode_rekening'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/kode_rekening');
    }

    //Proses Edit Data
    public function update($id)
    {

        //Validasi input
        if (!$this->validate([
            'opd_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama opd harus diisi.'
                ]
            ],
            'jenis_pajak_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} jenis pajak harus diisi.'
                ]
            ],
            'kode_rekening' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} kode rekening harus diisi.'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} keterangan harus diisi.'
                ]
            ],
        ]));

        $this->kodeRekeningModel->save([
            'id_kode_rekening' => $id,
            'opd_id' => $this->request->getVar('opd_id'),
            'jenis_pajak_id' => $this->request->getVar('jenis_pajak_id'),
            'kode_rekening' => $this->request->getVar('kode_rekening'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/kode_rekening');
    }

    //Hapus data
    public function delete($id)
    {

        $this->kodeRekeningModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/kode_rekening');
    }
}
