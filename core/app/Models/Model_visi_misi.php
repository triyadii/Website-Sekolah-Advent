<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_visi_misi extends Model
{
    protected $table                = 'tbl_visi_misi';
    protected $primaryKey           = 'idVisiMisi';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['visi', 'misi', 'author', 'waktu'];
}
