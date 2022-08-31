<?php

namespace App\Models;

use CodeIgniter\Model;

class KabupatenModel extends Model
{
    protected $table            = 'kabupaten';
    protected $primaryKey       = 'id_kabupaten';
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_kabupaten','nama_kabupaten', 'foto'];

}
