<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisWisataSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_jenis_wisata'      => 1,
                'nama_jenis_wisata'    => 'Goa',
            ],
            [
                'id_jenis_wisata'      => 2,
                'nama_jenis_wisata'    => 'Pantai',
            ],
            [
                'id_jenis_wisata'      => 3,
                'nama_jenis_wisata'    => 'Pegunungan',
            ],
        ];

        $this->db->table('jenis_wisata')->insertBatch($data);
    }
}
