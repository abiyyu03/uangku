<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    function index()
    {
        return view('pages.auth.register');
    }

    function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);
        $userData = new User();
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->password = bcrypt($request->password);
        $userData->save();

        return redirect()->back()->with('success','Registrasi berhasil, silahkan');
    }
}
