<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth extends Model
{
    protected $table            = 'karyawan';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nama', 'nip', 'jabatan', 'role', 'picture', 'email', 'password'];
    protected $useTimestamps    = true;



    public function authEmail($email)
    {
        return $this->where(['email' => $email])->first();
    }

}
