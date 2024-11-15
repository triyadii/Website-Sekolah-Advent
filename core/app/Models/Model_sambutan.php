<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_sambutan extends Model
{
    protected $table                = 'tbl_sambutan';
    protected $primaryKey           = 'idSambutan';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['sambutan', 'gambar', 'author', 'waktu'];
}
