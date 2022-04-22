<?php

namespace App\Controllers;

use App\Models\JenisPajakModel;

class JenisPajak extends BaseController
{

    protected $jenisPajakModel;

    public function __construct()
    {
        $this->jenisPajakModel = new JenisPajakModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Jenis Pajak | PAD',
            'validation' => \Config\Services::validation(),
            'jenis_pajak' => $this->jenisPajakModel->getData()
        ];

        return view('data_master/jenis_pajak', $data);
    }

    //Proses Tambah Data
    public function save()
    {

        //Validasi input
        if (!$this->validate([
            'kode' => [
                'rules' => 'required|is_unique[jenis_pajak.kode]',
                'errors' => [
                    'required' => '{field} kode harus diisi.',
                    'is_unique' => '{field} kode sudah ada.'
                ]
            ],
            'jenis_pajak' => [
                'rules' => 'required|is_unique[jenis_pajak.jenis_pajak]',
                'errors' => [
                    'required' => '{field} jenis pajak harus diisi.',
                    'is_unique' => '{field} jenis pajak sudah ada.'
                ]
            ],
        ])) {
            return redirect()->to('/jenis_pajak')->withInput();
        }

        $this->jenisPajakModel->save([
            'kode' => $this->request->getVar('kode'),
            'jenis_pajak' => $this->request->getVar('jenis_pajak')
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/jenis_pajak');
    }

    //Proses Edit Data
    public function update($id)
    {

        //Validasi input
        if (!$this->validate([
            'kode' => [
                'rules' => 'required|is_unique[jenis_pajak.kode]',
                'errors' => [
                    'required' => '{field} kode harus diisi.',
                    'is_unique' => '{field} kode sudah ada.'
                ]
            ],
            'jenis_pajak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} jenis pajak harus diisi.',
                    'is_unique' => '{field} jenis pajak sudah ada.'
                ]
            ],
        ]));

        $this->jenisPajakModel->save([
            'id_jenis_pajak' => $id,
            'kode' => $this->request->getVar('kode'),
            'jenis_pajak' => $this->request->getVar('jenis_pajak')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/jenis_pajak');
    }

    //Hapus data
    public function delete($id)
    {

        $this->jenisPajakModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/jenis_pajak');
    }
}
