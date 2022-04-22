<?php

namespace App\Controllers;

use App\Models\VerifikasiModel;
use App\Models\TargetModel;
use App\Models\DataOpdModel;

class Verifikasi extends BaseController
{

    protected $verifikasiModel;
    protected $targetModel;
    protected $dataOpdModel;

    public function __construct()
    {
        $this->verifikasiModel = new VerifikasiModel();
        $this->targetModel = new TargetModel();
        $this->dataOpdModel = new DataOpdModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Verifikasi PAD | PAD',
            'validation' => \Config\Services::validation(),
            'realisasi' => $this->verifikasiModel->getData(),
            'verifikasi' => $this->verifikasiModel->getDataVerifikasi(),
            'pending' => $this->verifikasiModel->getDataPending(),
            'tolak' => $this->verifikasiModel->getDataTolak(),
            'target' => $this->targetModel->getTarget(),
            'data_opd' => $this->dataOpdModel->getData()
        ];

        return view('verifikasi/index', $data);
    }

    //Menampilkan data filter
    public function filter($id)
    {
        if ($id == 0) {
            $data = [
                'real' => $this->verifikasiModel->getData(),
            ];
        } else {
            $data = [
                'real' => $this->verifikasiModel->getFilter($id),
            ];
        }

        return view('verifikasi/filter', $data);
    }

    //Menampilkan data filter
    // public function filter_verifikasi($id)
    // {
    //     if ($id == 0) {
    //         $data = [
    //             'verifikasi' => $this->verifikasiModel->getDataVerifikasi(),
    //         ];
    //     } else {
    //         $data = [
    //             'real' => $this->verifikasiModel->getFilterVerifikasi($id),
    //         ];
    //     }

    //     return view('verifikasi/filter_verifikasi', $data);
    // }

    //Proses Edit Data
    public function update($id)
    {

        // $id_opd = $_GET['id_opd'];

        $this->verifikasiModel->save([
            'id_realisasi' => $id,
            'status' => 1
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/verifikasi');
    }

    //Proses Edit Data Verifikasi menjadi Unposting
    public function unposting($id)
    {

        $this->verifikasiModel->save([
            'id_realisasi' => $id,
            'status' => 0
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/verifikasi');
    }

    //Proses Edit Data untuk status Tolak
    public function tolak($id)
    {

        $this->verifikasiModel->save([
            'id_realisasi' => $id,
            'status' => 2
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/verifikasi');
    }

    //Proses Edit Data untuk status Verifikasi
    public function verifikasi($id)
    {

        $this->verifikasiModel->save([
            'id_realisasi' => $id,
            'status' => 1
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/verifikasi');
    }
}
