<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $req)
    {
        $req->validate([
            'name'     => 'required',
            'surname'  => 'required',
            'sex'      => 'required',
            'address'  => 'required',
            'phone'    => 'required',
            'email'    => 'required',
            'nameuser' => 'required',
            'password' => 'required',
        ]);

        $res = User::create(
            [
                'name'     => $req->get('name'),
                'surname'  => $req->get('surname'),
                'sex'      => $req->get('sex'),
                'address'  => $req->get('address'),
                'phone'    => $req->get('phone'),
                'email'    => $req->get('email'),
                'username' => $req->get('nameuser'),
                'password' => $req->get('password'),
                'rol_id' => 2
            ]
        );


        return redirect('/auth/login');
    }
}
