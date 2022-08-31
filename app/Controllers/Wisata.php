<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WisataModel;
use App\Models\JenisWisataModel;
use App\Models\KabupatenModel;

class Wisata extends BaseController
{
    public function __construct()
    {
        $this->wisata = new WisataModel();
        $this->jenis_wisata = new JenisWisataModel();
        $this->kabupaten = new KabupatenModel();
    }

    public function index()
    {
        $data = [
            'wisata'   => $this->wisata->getAll()
        ];
        return view('wisata/index', $data);
    }

    public function detail($id_wisata)
    {

        $data = [
            'wisata'        => $this->wisata->getAllById($id_wisata)
        ];
        return view('wisata/detail', $data);
    }

    public function new()
    {
        $data = [
            'kabupaten'   => $this->kabupaten->findAll(),
            'jenis_wisata'   => $this->jenis_wisata->findAll()
        ];
        return view('wisata/new', $data);
    }

    public function create()
    {
        $data = $this->request->getPost();
        $upload = $this->request->getFile('foto');

        $mimeTypeValid = ['image/jpeg', 'image/png', 'image/jpg'];
        $mimeType = $upload->getMimeType();

        if ( !in_array($mimeType, $mimeTypeValid) ) {
            return redirect()->to(site_url('wisata/new'))->with('error', 'Harus Upload foto');
        }

        $nama_file = $upload->getRandomName();
        $data['foto'] = $nama_file;

        $this->wisata->insert($data);

        $upload->move('uploads/wisata/', $nama_file);
        return redirect()->to(site_url('wisata'))->with('success', 'Data berhasil ditambah');
    }

     public function edit($id = null)
    {
        $data = [
            'wisata'        => $this->wisata->find($id),
            'kabupaten'     => $this->kabupaten->findAll(),
            'jenis_wisata'  => $this->jenis_wisata->findAll()
        ];

        return view('wisata/edit', $data);
    }

    public function update($id = null)
    {
        $data = $this->request->getPost();
        $upload = $this->request->getFile('foto');

        // cek gambar apakah gambar lama 
        if ($upload->getError() == 4) {
            $foto = $this->request->getPost('foto_lama');
        } else { 
            $foto = $upload->getRandomName();
            $upload->move('uploads/wisata/', $foto);

            unlink('uploads/wisata/' . $data['foto_lama']);
            unset($data['foto_lama']);

            $data['foto'] = $foto;
        }
        $this->wisata->update($id, $data);
        return redirect()->to(site_url('wisata'))->with('success', 'Data berhasil Diubah');
    }

    public function remove($id = null)
    {
        $data = $this->wisata->find($id);

        $this->wisata->delete($id);

        if ($data['foto'] != 'default.jpg') {
            // hapus gambar di folder
            unlink('uploads/wisata/' . $data['foto']);
        }

        return redirect()->to(site_url('wisata'))->with('success', 'Data berhasil dihapus');

    }
}
