<?php

namespace App\Controllers;

use App\Models\RoleModel;

class Role extends BaseController
{

    protected $roleModel;

    public function __construct()
    {
        $this->roleModel = new RoleModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Role | PAD',
            'validation' => \Config\Services::validation(),
            'role' => $this->roleModel->getData()
        ];

        return view('data_master/role', $data);
    }

    //Proses Tambah Data
    public function save()
    {
        //Validasi input
        if (!$this->validate([
            'role' => [
                'rules' => 'required|is_unique[role.role]',
                'errors' => [
                    'required' => '{field} role user harus diisi.',
                    'is_unique' => '{field} role user sudah ada.'
                ]
            ],
        ])) {
            return redirect()->to('/role')->withInput();
        }

        $this->roleModel->save([
            'role' => $this->request->getVar('role')
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/role');
    }

    //Proses Edit Data
    public function update($id)
    {

        //Validasi input
        if (!$this->validate([
            'role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} role user harus diisi.',
                    'is_unique' => '{field} role user sudah ada.'
                ]
            ],
        ]));

        $this->roleModel->save([
            'id_role' => $id,
            'role' => $this->request->getVar('role')
        ]);

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/role');
    }

    //Hapus data
    public function delete($id)
    {

        $this->roleModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/role');
    }
}
