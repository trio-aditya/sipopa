<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\RoleModel;

class Users extends BaseController
{

    protected $usersModel;
    protected $roleModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->roleModel = new RoleModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Users | PAD',
            'validation' => \Config\Services::validation(),
            'users' => $this->usersModel->getData(),
            'role' => $this->roleModel->getData(),
        ];

        return view('pages/users', $data);
    }

    //Tambah Data
    public function save()
    {
        $password = $this->request->getVar('password');

        //Validasi input
        if (!$this->validate([
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama lengkap harus diisi.'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[sampul,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    // 'uploaded' => 'Pilih gambar sampul terlebih dahulu',
                    'max_size' => 'Ukuran gambar maksimal 1MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[user.email]',
                'errors' => [
                    'required' => '{field} email harus diisi.',
                    'is_unique' => '{field} email sudah ada.'
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[user.username]',
                'errors' => [
                    'required' => '{field} username harus diisi.',
                    'is_unique' => '{field} username sudah ada.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} password harus diisi.'
                ]
            ],
            'role_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} role harus diisi.'
                ]
            ],
        ]));

        //Ambil gambar
        $fileFoto = $this->request->getFile('foto');

        //Apakah tidak ada gambar yang diupload
        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            //Generate nama foto random (jika ingin nama file di random)
            $namaFoto = $fileFoto->getRandomName();

            //Pindahkan file ke folder img
            //jika nama file sesuai dengan diupload
            // $fileSampul->move('img');
            //jika nama file dibuat random perlu ditambahkan parameter
            $fileFoto->move('img/foto', $namaFoto);

            //Ambil nama file
            // $namaSampul = $fileSampul->getName();
        }
        $pass_ens = password_hash($password, PASSWORD_DEFAULT);

        $this->usersModel->save([
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'foto' => $namaFoto,
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => $pass_ens,
            'role_id' => $this->request->getVar('role_id')
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/users');
    }

    //Proses Edit Data
    public function update($id)
    {

        //Validasi input
        if (!$this->validate([
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} nama lengkap harus diisi.'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar maksimal 1MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[user.email]',
                'errors' => [
                    'required' => '{field} email harus diisi.',
                    'is_unique' => '{field} email sudah ada.'
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[user.username]',
                'errors' => [
                    'required' => '{field} username harus diisi.',
                    'is_unique' => '{field} username sudah ada.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} password harus diisi.'
                ]
            ],
            'role_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} role harus diisi.'
                ]
            ],
        ]));

        //mengambil file dari foto
        $fileFoto = $this->request->getFile('foto');

        //cek foto, apakah tetap foto lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            //generate nama foto random
            $namaFoto = $fileFoto->getRandomName();
            //pindahkan gambar
            $fileFoto->move('img/foto/', $namaFoto);
            //hapus file yang lama
            unlink('img/foto/' . $this->request->getVar('fotoLama'));
        }

        $password = $this->request->getVar('password');
        $pass_ens = password_hash($password, PASSWORD_DEFAULT);

        if ($password == '') {
            $this->usersModel->save([
                'id_user' => $id,
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'foto' => $namaFoto,
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),
                'role_id' => $this->request->getVar('role_id'),
            ]);
        } else {
            $this->usersModel->save([
                'id_user' => $id,
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'foto' => $namaFoto,
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),
                'password' => $pass_ens,
                'role_id' => $this->request->getVar('role_id'),
            ]);
        }

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/users');
    }

    //Hapus data
    public function delete($id)
    {

        $this->usersModel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus.');

        return redirect()->to('/users');
    }
}
