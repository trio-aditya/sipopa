<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\DataOpdModel;
use App\Models\UserOpdModel;

class UserOpd extends BaseController
{

    protected $usersModel;
    protected $dataOpdModel;
    protected $userOpdModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->dataOpdModel = new DataOpdModel();
        $this->userOpdModel = new UserOpdModel();
    }

    public function index()
    {
        $data = [
            'title' => 'User OPD | PAD',
            'validation' => \Config\Services::validation(),
            'users' => $this->usersModel->getData(),
            'data_opd' => $this->dataOpdModel->getData(),
            'user_opd' => $this->userOpdModel->getData(),
        ];

        return view('pages/user_opd', $data);
    }

    //Tambah Data
    public function save()
    {
        $password = $this->request->getVar('password');

        //Validasi input
        if (!$this->validate([
            'user_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama user harus diisi.'
                ]
            ],
            'opdd_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama opd harus diisi.'
                ]
            ],
        ])) {
            return redirect()->to('/user_opd')->withInput();
        }

        $this->userOpdModel->save([
            'user_id' => $this->request->getVar('user_id'),
            'opdd_id' => $this->request->getVar('opdd_id')
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/user_opd');
    }

    //Proses Edit Data
    public function update($id)
    {

        //Validasi input
        if (!$this->validate([
            'user_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama user harus diisi.'
                ]
            ],
            'opdd_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama opd harus diisi.'
                ]
            ],
        ]));

        $this->userOpdModel->save([
            'id_user_opd' => $id,
            'user_id' => $this->request->getVar('user_id'),
            'opdd_id' => $this->request->getVar('opdd_id')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/user_opd');
    }

    // Hapus data
    public function delete($id)
    {

        $this->userOpdModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/user_opd');
    }
}
