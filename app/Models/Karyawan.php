<?php

namespace App\Models;

use CodeIgniter\Model;

class Karyawan extends Model
{
    protected $table            = 'karyawan';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nama', 'nip', 'jabatan', 'role', 'picture', 'email', 'password'];
    protected $useTimestamps    = true;

    public function getKaryawan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->asArray()->where(['id' => $id])->first();
    }

    public function getKaryawanWRole($role)
    {
        return $this->asArray()->where(['role' => $role])->get()->getResultArray();
    }

    public function saveKaryawan($data)
    {
        $this->insert($data);
        return $this->getInsertID();
    }

    public function updateKaryawan($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deleteKaryawan($id)
    {
        return $this->delete($id);
    }

}
