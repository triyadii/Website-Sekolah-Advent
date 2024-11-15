<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_osis extends Model
{
    protected $table                = 'tbl_osis';
    protected $primaryKey           = 'idOsis';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama', 'jabatan', 'foto'];
}
