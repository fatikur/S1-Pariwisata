<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KabupatenSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_kabupaten'      => 1,
                'nama_kabupaten'    => 'Sidoarjo',
                'foto'              => 'default.jpg'
            ],
            [
                'id_kabupaten'      => 2,
                'nama_kabupaten'    => 'Surabaya',
                'foto'              => 'default.jpg'
            ],
            [
                'id_kabupaten'      => 3,
                'nama_kabupaten'    => 'Pacitan',
                'foto'              => 'default.jpg'
            ],
        ];

        $this->db->table('kabupaten')->insertBatch($data);
    }
}
