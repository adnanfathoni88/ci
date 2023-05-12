<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('register');
    }
    public function store()
    {
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $data = [
            'nama' => $nama,
            'email' => $email,
            'password' => $password
        ];

        $model = new \App\Models\UserModel();
        $model = $model->insert($data);

        return var_dump('berhasil');
    }
}
