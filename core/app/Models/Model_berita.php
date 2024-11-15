<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_berita extends Model
{
    protected $table                = 'tbl_berita';
    protected $primaryKey           = 'idBerita';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['judulBerita', 'berita', 'author', 'waktu', 'gambar'];
}
