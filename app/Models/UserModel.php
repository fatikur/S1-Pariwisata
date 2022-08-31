<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_user', 'username', 'password', 'level'];

    public function getUser($data)
    {
        $query = $this->db->table('user')->getWhere(['username'    => $data['username']]);
        return $query->getRow();
    }

}
