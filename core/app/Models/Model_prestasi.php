<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_prestasi extends Model
{
    protected $table                = 'tbl_prestasi';
    protected $primaryKey           = 'idPrestasi';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['judulPrestasi', 'keterangan', 'author', 'waktu', 'gambar'];
}
