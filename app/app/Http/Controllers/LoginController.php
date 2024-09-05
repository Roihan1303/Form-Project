<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login()
    {
        return redirect()->route('dashboard')->with('success', 'Login Sukses!');
    }

    public function logout()
    {
        return redirect('/')->with('success', 'Logout Sukses!');
    }
}
