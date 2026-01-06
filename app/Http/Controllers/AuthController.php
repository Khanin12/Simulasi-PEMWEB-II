<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function formregister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create($data);
        return redirect('/login');
    }

    public function formlogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $login = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($login)) {
           $request->session()->regenerate();
           return redirect('/dashboard');
        };
        return redirect('/dashboard');
    }
}
