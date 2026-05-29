<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credenciais = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credenciais)) {

        $request->session()->regenerate();

        if (Auth::user()->role === 'admin') {
            return redirect('/admin');
        }

        return redirect('/contacto');
    }

    return back()->withErrors([
        'email' => 'Credenciais inválidas'
    ]);
}

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}