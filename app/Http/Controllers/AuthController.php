<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login()
    {
        return view('market.login');
    }

    public function signup()
    {
        return view('market.signup');
    }

    public function dashboard()
    {
        date_default_timezone_set("Asia/Jakarta");

        $b = time();
        $hour = date("G", $b);

        if ($hour >= 5 && $hour <= 10){
            $salam = "Pagi";
        } elseif ($hour >= 11 && $hour <= 15){
            $salam = "Siang";
        }elseif ($hour >= 16 && $hour <= 18){
            $salam = "Sore";
        }elseif ($hour >= 19 && $hour <= 4){
            $salam = "Malam";
        }else{
            $salam = "Malam";
        }

        return view('market.dashboard', compact('salam'));
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function HandleProviderCallback()
    {
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name'      => $callback->getName(),
            'email'     => $callback->getEmail(),
            'avatar'    => $callback->getAvatar()
        ];

        $user = User::firstOrCreate(['email' => $data['email']], $data);
        Auth::login($user, true);

        return redirect()->route('beranda.utama');
    }
}
