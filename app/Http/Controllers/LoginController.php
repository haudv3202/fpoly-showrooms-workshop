<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::check() && Auth::user()->role == 'admin') {
            return redirect()->route('ourteams.index');
        } else {
            return view('login.login');
        }
    }

    public function loginGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function show()
    {
        $user = Socialite::driver('google')->user();


        $existingUser = User::where('email', $user->email)->first();

        if (!$existingUser) {

            $existingUser = User::create([
                'email' => $user->email,
                'name' => $user->name
            ]);
        }


        Auth::login($existingUser);


        return redirect()->route('home');
    }

    public function register()
    {
        return view('login.register');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
