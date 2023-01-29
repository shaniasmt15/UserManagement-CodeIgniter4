<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class Auth extends BaseController
{

    public function __construct()
    {
        $this->authModel = new \App\Models\Auth();
        
    }

    public function index()
    {   
        $session = session();

        $data = [
            'title' => 'Masuk - Manajemen Karyawan'
        ];

         // Jika user sudah login, redirect ke halaman dashboard
         if ($session->get('logged_in')) {
            return redirect()->to('karyawan');
        }

        // Tampilkan halaman login
        return view('auth/login', $data);
    }

    public function login()
    {
        $session = session();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $user = $this->authModel->authEmail($email);

        if (!$user) {
            return redirect()->to('login')->with("error", "Email tidak terdaftar");
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->to('login')->with("error", "Email atau Password Salah");
        }

        $session->set('logged_in', true);
        $session->set('user_data', [
            'id' => $user['id'],
            'nama' => $user['nama'],
            'nip' => $user['nip'],
            'jabatan' => $user['jabatan'],
            'role' => $user['role'],
            'picture' => $user['picture'],
            'email' => $user['email'],
        ]);

        return redirect()->to('karyawan');
        
    }

    public function logout()
    {
        $session = session();

        // Hapus data user dari session
        $session->remove('logged_in');
        $session->remove('user_data');

        // Redirect ke halaman login
        return redirect()->to('login');
    }

}
