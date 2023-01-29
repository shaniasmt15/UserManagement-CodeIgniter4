<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        $options = [
            'cost' => 12
        ];

        $data = [
            [
                'nama' => 'John Doe',
                'nip' => '1234567890',
                'jabatan' => 'Manager',
                'role' => 'admin',
                'picture' => 'default.jpg',
                'email' => 'johndoe@example.com',
                'password' => password_hash('password', PASSWORD_DEFAULT, $options),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama' => 'Jane Doe',
                'nip' => '0987654321',
                'jabatan' => 'Staff',
                'role' => 'karyawan',
                'picture' => 'default.jpg',
                'email' => 'janedoe@example.com',
                'password' => password_hash('password', PASSWORD_DEFAULT, $options),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];

        $this->db->table('karyawan')->insertBatch($data);
    }
}
