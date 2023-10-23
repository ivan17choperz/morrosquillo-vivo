<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'password' => 'required|min:5'
        ]);
        $username = $req->get('username');
        $password = $req->get('password');
        dd($username, $password);
    }
}
