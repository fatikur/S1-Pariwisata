<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisWisataModel extends Model
{
    protected $table            = 'jenis_wisata';
    protected $primaryKey       = 'id_jenis_wisata';
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_jenis_wisata','nama_jenis_wisata'];

}
