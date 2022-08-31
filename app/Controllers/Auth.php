<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{

	public function __construct()
	{
        

		$this->user = new UserModel();
	}

    public function index()
    {
        if (session('id_user')) {
            return redirect()->to(site_url('/'));
        }
        return $this->login();
    }

    public function login()
    {
    	return view('auth/login');
    }

    public function cekLogin()
    {
        $data = $this->request->getPost();

        if ($user = $this->user->getUser($data)) {

            if ($data['password'] == $user->password) {
                $params = [
                    'id_user'    => $user->id_user,
                    'username'   => $user->username,
                    'level'		 => $user->level	
                ];

                session()->set($params);

                if ($params['level'] == 'admin') {
                	return redirect()->to(site_url('/'));
                }

            } else {
                return redirect()->back()->with('error', 'Password tidak sesuai');
            }

        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }

    }

    public function logout()
    {
        $params = ['id_user', 'username', 'level'];
        session()->remove($params);
        return redirect()->to(site_url('login'));
    }
}
