<?php

namespace App\Controllers;

use App\Models\DataOpdModel;

class DataOpd extends BaseController
{

    protected $dataOpdModel;

    public function __construct()
    {
        $this->dataOpdModel = new DataOpdModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data OPD | PAD',
            'validation' => \Config\Services::validation(),
            'data_opd' => $this->dataOpdModel->getData()
        ];

        return view('data_master/data_opd', $data);
    }

    //Proses Tambah Data
    public function save()
    {

        //Validasi input
        if (!$this->validate([
            'nama_opd' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama opd harus diisi.'
                ]
            ],
        ])) {
            return redirect()->to('/data_opd')->withInput();
        }

        $this->dataOpdModel->save([
            'nama_opd' => $this->request->getVar('nama_opd')
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/data_opd');
    }

    //Proses Edit Data
    public function update($id)
    {

        //Validasi input
        if (!$this->validate([
            'nama_opd' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama opd harus diisi.'
                ]
            ],
        ]));

        $this->dataOpdModel->save([
            'id_opd' => $id,
            'nama_opd' => $this->request->getVar('nama_opd')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/data_opd');
    }

    //Hapus data
    public function delete($id)
    {

        $this->dataOpdModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/data_opd');
    }
}
