<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\JenisWisataModel;

class JenisWisata extends ResourcePresenter
{

    public function __construct()
    {
        $this->jenis_wisata = new JenisWisataModel();
    }
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['jenis_wisata'] = $this->jenis_wisata->orderBy('id_jenis_wisata', 'DESC')->findAll();
        return view('jenis_wisata/index', $data);
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
        $this->jenis_wisata->insert($data);
        return redirect()->to(site_url('JenisWisata'))->with('success', 'Data berhasil ditambah');
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
        $data['jenis_wisata'] = $this->jenis_wisata->find($id);
        return view('jenis_wisata/edit', $data);
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
        $this->jenis_wisata->update($id, $data);
        return redirect()->to(site_url('JenisWisata'))->with('success', 'Data berhasil Diubah');
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
        $this->jenis_wisata->delete($id);
        return redirect()->to(site_url('JenisWisata'))->with('success', 'Data berhasil dihapus');
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
