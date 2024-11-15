<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_sejarah extends Model
{
    protected $table                = 'tbl_sejarah';
    protected $primaryKey           = 'idSejarah';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['sejarah', 'author', 'waktu'];
}
