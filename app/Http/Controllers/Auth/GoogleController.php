<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    // Redireciona para Google
    public function redirect()
    {
        return Socialite::driver('google')
            ->stateless()
            ->redirect();
    }

    // Callback do Google
    public function callback()
    {
        $googleUser = Socialite::driver('google')
            ->stateless()
            ->user();

        $user = User::updateOrCreate(
            [
                'email' => $googleUser->email
            ],
            [
                'name' => $googleUser->name,
                'password' => bcrypt('google_login'),
                'role' => 'user'
            ]
        );

        Auth::login($user);

        // Redirecionamento
        if ($user->role === 'admin') {
            return redirect('/admin');
        }

        return redirect('/contacto');
    }
}