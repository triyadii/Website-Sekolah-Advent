<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_siswa extends Model
{
    protected $table                = 'tbl_siswa';
    protected $primaryKey           = 'idSiswa';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['namaSiswa', 'kelas', 'foto'];
}