<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')
            ->stateless()
            ->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')
            ->stateless()
            ->user();

        $user = User::firstOrCreate(
        [
            'email' => $googleUser->email
        ],
        [
            'name' => $googleUser->name,
            'password' => bcrypt(\Illuminate\Support\Str::random(20)),
            'role' => 'user',
            'google_id' => $googleUser->id,
            'avatar' => $googleUser->avatar
        ]
     );

        Auth::login($user);

        if ($user->role === 'admin') {
            return redirect('/admin');
        }

        return redirect('/contacto');
    }
}