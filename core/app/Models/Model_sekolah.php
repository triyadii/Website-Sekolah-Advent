<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_sekolah extends Model
{
    protected $table                = 'tbl_sekolah';
    protected $primaryKey           = 'idSekolah';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama', 'jabatan', 'foto'];
}
