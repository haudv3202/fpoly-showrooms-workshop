<?php

namespace App\Http\Controllers;

use App\Models\Layout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $layouts = Layout::query()->get();
            return view("lienhe.list",compact('layouts'));
        } else {
            return redirect()->route('login');
        }
    }
}
