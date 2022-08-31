<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $data = [
            'total_wisata'       => $this->db->table('wisata')->countAllResults(),
            'total_kabupaten'    => $this->db->table('kabupaten')->countAllResults(),
            'total_jenis_wisata' => $this->db->table('jenis_wisata')->countAllResults(),
            'total_user'         => $this->db->table('user')->countAllResults(),
        ];

        return view('home', $data);
    }
}
