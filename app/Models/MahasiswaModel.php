<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = ['nim', 'nama', 'jurusan', 'email'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'nim'   => 'required|max_length[20]',
        'nama'  => 'required|max_length[100]',
        'jurusan' => 'required|max_length[50]',
        'email' => 'required|valid_email',
    ];
}