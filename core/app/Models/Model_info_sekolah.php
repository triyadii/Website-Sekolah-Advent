<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_info_sekolah extends Model
{
    protected $table                = 'tbl_info_sekolah';
    protected $primaryKey           = 'idInfoSekolah';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['judulInfo', 'informasi', 'author', 'waktu', 'gambar'];
}
