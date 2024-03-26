<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return Socialite::driver('google')->redirect();
    }
    public function show()
    {
        $user = Socialite::driver('google')->user();
        // dd($user);
        $check = User::query()->where('email', '=', $user->email)->get();
        if (count($check) == 0) {
            User::query()->create([
                'email' => $user->email,
                'name' => $user->name
            ]);
        } else {
            $_SERVER['userInfor'] = [
                'name' => $check->name,
                'role' => $check->role,
            ];
        }
    }
    public function register()
    {
        return view('login.register');
    }
}
