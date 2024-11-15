<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_tenaga_pendidik extends Model
{
    protected $table                = 'tbl_tenaga_pendidik';
    protected $primaryKey           = 'idTenagaPendidik';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama', 'jabatan', 'foto'];
}
