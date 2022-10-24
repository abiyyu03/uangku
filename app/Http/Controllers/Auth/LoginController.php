<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    function index()
    {
        return view('pages.auth.login');
    }

    function login(Request $request)
    {
        $loginData = $request->only('email','password');
        if(Auth()->attempt($loginData)){
            return redirect()->to('/');
        }
        return back()->with('error','Cek kembali username atau password anda');
    }

    function logout()
    {
        Auth()->logout();
        return redirect()->to('/login');
    }
}
