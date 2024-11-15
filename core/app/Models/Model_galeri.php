<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_galeri extends Model
{
    protected $table                = 'tbl_galeri';
    protected $primaryKey           = 'idGaleri';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['gambar', 'keterangan', 'author', 'waktu'];
}
