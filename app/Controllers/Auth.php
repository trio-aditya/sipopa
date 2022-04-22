<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\UsersModel;
use App\Models\RoleModel;

class Auth extends BaseController
{

    protected $authModel;
    protected $usersModel;
    protected $roleModel;
    private $session;

    public function __construct()
    {
        $this->authModel = new AuthModel();
        $this->roleModel = new RoleModel();
        $this->usersModel = new UsersModel();
        $this->session = \Config\Services::session();
    }


    public function index()
    {
        $data = [
            'title' => 'Login | APD',
            'validation' => \Config\Services::validation(),
            'auth' => $this->authModel->getData(),
            'role' => $this->roleModel->getData()
        ];

        return view('auth/login', $data);
    }

    public function loginProcess()
    {

        $post = $this->request->getPost();
        // $query = $this->authModel->join('role', 'role.id_role = user.role_id')->where(['username' => $post['username']])->first();
        $query = $this->authModel->where(['username' => $post['username']])->first();

        //Jika username ditemukan
        if ($query) {
            if (password_verify($post['password'], $query['password'])) {
                $params = ['id_user' => $query['id_user']];
                session()->set($params);

                $data = [
                    'nama_lengkap' => $query['nama_lengkap'],
                    'foto' => $query['foto'],
                    'email' => $query['email'],
                    'username' => $query['username'],
                    'password' => $query['password'],
                    'role_id' => $query['role_id'],
                    'logged_in' => TRUE
                ];
                session()->set($data);
                return redirect('/');
            } else {
                return redirect()->back()->with('pesan', 'Password tidak sesuai!');
            }
        } else {
            return redirect()->back()->with('pesan', 'Username tidak ditemukan!');
        }
    }
    public function register()
    {
        $data = [
            'title' => 'Register | PAD',
            'auth' => $this->authModel->getData(),
            'role' => $this->roleModel->getData()
        ];
        return view('auth/register', $data);
    }

    // Proses Register
    public function registerProcess()
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
        ])) {
            return redirect()->to('/auth')->withInput();
        }

        $pass_ens = password_hash($password, PASSWORD_DEFAULT);

        $this->authModel->save([
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => $pass_ens,
            'role_id' => $this->request->getVar('role_id')
        ]);

        session()->setFlashdata('pesan', 'Ditambahkan.');

        return redirect()->to('/auth');
    }

    public function profile()
    {
        $data = [
            'title' => 'Profile| PAD',
            'validation' => \Config\Services::validation(),
            'auth' => $this->authModel->getData(),
            'role' => $this->roleModel->getData()
        ];
        return view('auth/profile', $data);
    }

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
            $fileFoto->move('img/foto', $namaFoto);
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
                'username' => $this->request->getVar('username')
            ]);
        } else {
            $this->usersModel->save([
                'id_user' => $id,
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'foto' => $namaFoto,
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),
                'password' => $pass_ens,
            ]);
        }

        session()->setFlashdata('pesan', 'Diubah.');

        return redirect()->to('/auth/logout');
    }

    public function logout()
    {
        session()->remove('id_user');
        return redirect()->to('/auth');
    }
}
