<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_agenda extends Model
{
    protected $table                = 'tbl_agenda';
    protected $primaryKey           = 'idAgenda';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['judulAgenda', 'agenda', 'author', 'waktu', 'gambar'];
}
