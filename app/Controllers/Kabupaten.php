<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\KabupatenModel;

class Kabupaten extends ResourcePresenter
{
    public function __construct()
    {
        $this->kabupaten = new KabupatenModel();
    }
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['kabupaten'] = $this->kabupaten->orderBy('id_kabupaten', 'DESC')->findAll() ;
        return view('kabupaten/index', $data);
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $upload = $this->request->getFile('foto_kabupaten');
        $mimeTypeValid = ['image/jpeg', 'image/png', 'image/jpg'];
        $mimeType = $upload->getMimeType();

        if ( !in_array($mimeType, $mimeTypeValid) ) {
            return redirect()->to(site_url('kabupaten'))->with('error', 'Harus Upload foto');
        }

        $nama_file = $upload->getRandomName();
        $data['foto'] = $nama_file;

        $this->kabupaten->insert($data);

        $upload->move('uploads/foto_kabupaten/', $nama_file);
        return redirect()->to(site_url('kabupaten'))->with('success', 'Data berhasil ditambah');
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data['kabupaten'] = $this->kabupaten->find($id);
        return view('kabupaten/edit', $data);
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $upload = $this->request->getFile('foto_kabupaten');

        // cek gambar apakah gambar lama 
        if ($upload->getError() == 4) {
            $foto = $this->request->getPost('foto_lama');
        } else { 
            $foto = $upload->getRandomName();
            $upload->move('uploads/foto_kabupaten/', $foto);

            unlink('uploads/foto_kabupaten/' . $data['foto_lama']);
            unset($data['foto_lama']);

            $data['foto'] = $foto;
        }
        $this->kabupaten->update($id, $data);
        return redirect()->to(site_url('kabupaten'))->with('success', 'Data berhasil Diubah');
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        $data = $this->kabupaten->find($id);

        $this->kabupaten->delete($id);

        if ($data['foto'] != 'default.jpg') {
            // hapus gambar di folder
            unlink('uploads/foto_kabupaten/' . $data['foto']);
        }

        return redirect()->to(site_url('kabupaten'))->with('success', 'Data berhasil dihapus');
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
