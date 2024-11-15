<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_profil extends Model
{
    protected $table                = 'tbl_profil';
    protected $primaryKey           = 'idProfil';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama', 'nomorTelepon', 'alamat', 'tentang', 'pengantar', 'gambar', 'linkMap', 'instagram', 'youtube', 'facebook'];
}
