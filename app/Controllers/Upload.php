<?php

namespace App\Controllers;

use App\Models\UploadModel;

class Upload extends BaseController
{

    protected $uploadModel;

    public function __construct()
    {
        $this->uploadModel = new UploadModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Upload File | PAD',
            'validation' => \Config\Services::validation(),
            'upload' => $this->uploadModel->getData()
        ];

        return view('pages/upload_file', $data);
    }

    //Proses Tambah Data
    public function save()
    {

        //Validasi input
        if (!$this->validate([
            'judul_laporan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} judul laporan harus diisi.'
                ]
            ],
            'sampul' => [
                'rules' => 'uploaded[laporan]|max_size[laporan,2048]|ext_in[laporan,pdf]',
                'errors' => [
                    'uploaded' => 'Pilih laporan terlebih dahulu',
                    'max_size' => 'Ukuran laporan maksimal 2MB',
                    'ext_in' => 'File laporan harus berupa pdf'
                ]
            ],
        ])) {
            return redirect()->to('/upload')->withInput();
        }

        //Ambil file
        $fileSampul = $this->request->getFile('laporan');

        //Generate nama sampul random (jika ingin nama file di random)
        // $namaSampul = $fileSampul->getRandomName();

        //Pindahkan file ke folder laporan
        //jika nama file sesuai dengan diupload
        $fileSampul->move('laporan');
        //jika nama file dibuat random perlu ditambahkan parameter
        // $fileSampul->move('laporan', $namaSampul);

        //Ambil nama file
        $namaSampul = $fileSampul->getName();

        // $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->uploadModel->save([
            'users_id' => $this->request->getVar('users_id'),
            'judul_laporan' => $this->request->getVar('judul_laporan'),
            'laporan' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Ditambah.');

        return redirect()->to('/upload');
    }

    //Proses Edit Data
    public function update($id)
    {

        //Validasi input
        if (!$this->validate([
            'judul_laporan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} judul laporan harus diisi.'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[laporan,2048]|ext_in[laporan,pdf]',
                'errors' => [
                    'uploaded' => 'Pilih laporan terlebih dahulu',
                    'max_size' => 'Ukuran laporan maksimal 2MB',
                    'ext_in' => 'File laporan harus berupa pdf'
                ]
            ]
        ])) {
            return redirect()->to('/upload/' . $this->request->getVar('id_laporan'))->withInput();
        }

        //mengambil file dari file
        $fileSampul = $this->request->getFile('laporan');

        //cek file, apakah tetap file lama
        if ($fileSampul->getError() == 4) {
            $this->uploadModel->save([
                'id_laporan' => $id,
                'judul_laporan' => $this->request->getVar('judul_laporan')
            ]);
        } else {
            $namaSampul = $fileSampul->getName();
            //pindahkan file
            $fileSampul->move('laporan');
            //hapus file yang lama
            unlink('laporan/' . $this->request->getVar('laporan'));

            $this->uploadModel->save([
                'id_laporan' => $id,
                'judul_laporan' => $this->request->getVar('judul_laporan'),
                'laporan' => $namaSampul
            ]);
        }

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/upload');
    }

    //Hapus data
    public function delete($id)
    {
        //Cari gambar berdasarkan id
        $laporan = $this->uploadModel->find($id);


        unlink('laporan/' . $laporan['laporan']);

        $this->uploadModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/upload');
    }

    //Download laporan
    public function download($id)
    {
        //Cari gambar berdasarkan id
        $data = $this->uploadModel->find($id);
        return $this->response->download('laporan/' . $data['laporan'], null);
    }
}
