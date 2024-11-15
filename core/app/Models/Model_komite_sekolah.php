<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_komite_sekolah extends Model
{
    protected $table                = 'tbl_komite_sekolah';
    protected $primaryKey           = 'idKomiteSekolah';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama', 'jabatan', 'foto'];
}
