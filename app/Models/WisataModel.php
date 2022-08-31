<?php

namespace App\Models;

use CodeIgniter\Model;

class WisataModel extends Model
{
    protected $table            = 'wisata';
    protected $primaryKey       = 'id_wisata';
    protected $returnType       = 'array';
    protected $allowedFields    = [
                                    'id_kabupaten',
                                    'id_jenis_wisata',
                                    'id_sosial_media',
                                    'nama_wisata',
                                    'harga_tiket',
                                    'jam_buka', 
                                    'jam_tutup',
                                    'alamat', 
                                    'no_telepon', 
                                    'email',
                                    'foto'
                                ];

    public function getAll()
    {
        $builder = $this->db->table('wisata')
                            ->select('wisata.*, kabupaten.nama_kabupaten, jenis_wisata.*')
                            ->join('kabupaten', 'kabupaten.id_kabupaten = wisata.id_kabupaten')
                            ->join('jenis_wisata', 'jenis_wisata.id_jenis_wisata = wisata.id_jenis_wisata')
                            ->orderBy('id_wisata', 'DESC');
        return $builder->get()->getResultArray();
    }

    public function getAllById($id)
    {
        $builder = $this->db->table('wisata')
                            ->select('wisata.*, kabupaten.nama_kabupaten, jenis_wisata.*')
                            ->join('kabupaten', 'kabupaten.id_kabupaten = wisata.id_kabupaten')
                            ->join('jenis_wisata', 'jenis_wisata.id_jenis_wisata = wisata.id_jenis_wisata')
                            ->where('id_wisata', $id);
        return $builder->get()->getRowArray();
    }
}
