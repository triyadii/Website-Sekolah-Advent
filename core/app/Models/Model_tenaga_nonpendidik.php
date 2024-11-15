<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_tenaga_nonpendidik extends Model
{
    protected $table                = 'tbl_tenaga_nonpendidik';
    protected $primaryKey           = 'idtenagaNonPendidik';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama', 'jabatan', 'foto'];
}
