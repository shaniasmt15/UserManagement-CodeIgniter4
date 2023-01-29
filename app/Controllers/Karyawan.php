<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Karyawan extends BaseController
{

    public function __construct()
    {

        $this->karyawanModel = new \App\Models\Karyawan();
    }

    public function index()
    {

        $session = session();

        // Jika user sudah login, redirect ke halaman dashboard
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Dashboard Karyawan',
            'total_karyawan' => count($this->karyawanModel->getKaryawanWRole("karyawan")),
            'total_admin' => count($this->karyawanModel->getKaryawanWRole("admin")),
            'session' => $session->get('user_data')
        ];

        return view('templates/header', $data)
            . view('templates/sidebar', $data)
            . view('employee/index', $data)
            . view('templates/footer');
    }

    public function manageEmployeeView()
    {
        $session = session();

        // Jika user sudah login, redirect ke halaman dashboard
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Kelola Karyawan',
            'karyawan' =>  $this->karyawanModel->getKaryawan(),
            'session' => $session->get('user_data')
        ];

        return view('templates/header', $data)
            . view('templates/sidebar', $data)
            . view('employee/manage-employee', $data)
            . view('templates/footer');
    }

    public function addEmployeeView()
    {
        $session = session();

        // Jika user sudah login, redirect ke halaman dashboard
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Tambah Karyawan',
            'session' => $session->get('user_data')
        ];

        return view('templates/header', $data)
            . view('templates/sidebar', $data)
            . view('employee/add-employee', $data)
            . view('templates/footer');
    }


    public function detailEmployeeView($id)
    {

        $session = session();

        // Jika user sudah login, redirect ke halaman dashboard
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $user = $this->karyawanModel->getKaryawan($id);

        $session->set('user_data', [
            'id' => $user['id'],
            'nama' => $user['nama'],
            'nip' => $user['nip'],
            'jabatan' => $user['jabatan'],
            'role' => $user['role'],
            'picture' => $user['picture'],
            'email' => $user['email'],
        ]);

        $data = [
            'title' => 'Detail Karyawan',
            'session' => $session->get('user_data'),
            'karyawan' => $this->karyawanModel->getKaryawan($id)
        ];

        return view('templates/header', $data)
            . view('templates/sidebar', $data)
            . view('employee/detail-employee', $data)
            . view('templates/footer');
    }

    public function addEmployeeAction()
    {
        $nip = $this->request->getPost('nip');

        $validationRule = [
            'picture' => [
                'label' => 'Picture',
                'rules' => [
                    'uploaded[picture]',
                    'is_image[picture]',
                    'mime_in[picture,image/jpg,image/jpeg]',
                    'max_size[picture,300]',
                ],
            ],
        ];


        $options = [
            'cost' => 12
        ];

        if ($this->validate($validationRule)) {

            $file = $this->request->getFile('picture');
            $img = uploadAndRenameFile($file, $nip);
            $data = [
                'nama' => $this->request->getPost('nama'),
                'nip' => $this->request->getPost('nip'),
                'jabatan' => $this->request->getPost('jabatan'),
                'role' => $this->request->getPost('role'),
                'picture' => $img,
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT, $options)
            ];
        } else {
            $data = [
                'nama' => $this->request->getPost('nama'),
                'nip' => $this->request->getPost('nip'),
                'jabatan' => $this->request->getPost('jabatan'),
                'role' => $this->request->getPost('role'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT, $options)
            ];
        }

        // Menambah data karyawan ke database
        $this->karyawanModel->saveKaryawan($data);

        // Redirect ke halaman daftar karyawan
        return redirect()->to('/karyawan/kelola')->with('success', 'Data karyawan berhasil ditambahkan');
    }

    public function editEmployeeAction($id)
    {
        $nip = $this->request->getPost('nip');

        $validationRule = [
            'picture' => [
                'label' => 'Picture',
                'rules' => [
                    'uploaded[picture]',
                    'is_image[picture]',
                    'mime_in[picture,image/jpg,image/jpeg]',
                    'max_size[picture,300]',
                ],
            ],
        ];

        if ($this->validate($validationRule)) {

            $file = $this->request->getFile('picture');
            $img = uploadAndRenameFile($file, $nip);
            $data = [
                'nama' => $this->request->getPost('nama'),
                'nip' => $this->request->getPost('nip'),
                'jabatan' => $this->request->getPost('jabatan'),
                'role' => $this->request->getPost('role'),
                'picture' => $img,
                'email' => $this->request->getPost('email')
            ];
        } else {
            $data = [
                'nama' => $this->request->getPost('nama'),
                'nip' => $this->request->getPost('nip'),
                'jabatan' => $this->request->getPost('jabatan'),
                'role' => $this->request->getPost('role'),
                'email' => $this->request->getPost('email')
            ];
        }

        // Menambah data karyawan ke database
        $this->karyawanModel->updateKaryawan($data, $id);

        // Redirect ke halaman daftar karyawan
        return redirect()->to('/karyawan/detail/' . $id)->with('success', 'Data karyawan berhasil diubah');
    }

    public function deleteEmployeeAction($id)
    {

        // Mengambil data karyawan berdasarkan id di database
        $imgDb =  $this->karyawanModel->getKaryawan($id);

        // Menghapus data karyawan di database
        $this->karyawanModel->deleteKaryawan($id);

        $gambar = $imgDb['picture'];
        // Menghapus file foto karyawan
        $path = ROOTPATH . 'public/uploads/karyawan/';
        @unlink($path . $gambar);

        // Redirect ke halaman daftar karyawan
        return redirect()->to('/karyawan/kelola')->with('success', 'Data karyawan berhasil dihapus');
    }
}
