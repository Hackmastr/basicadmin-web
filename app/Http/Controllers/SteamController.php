<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Invisnik\LaravelSteamAuth\SteamAuth;

class SteamController extends Controller
{
    public function __construct(private readonly SteamAuth $steamAuth) {}

    public function login()
    {
        return $this->steamAuth->redirect();
    }

    public function handle()
    {
        if (!$this->steamAuth->validate()) {
            return redirect()->route('login');
        }

        $info = $this->steamAuth->getUserInfo();

        $user = User::where('steamid64', (int) $info->get('steamID64'))->first();

        if (!$user)
            return redirect()->route('auth.steam');

        Auth::login($user, true);

        return redirect()->route('dashboard');
    }
}
