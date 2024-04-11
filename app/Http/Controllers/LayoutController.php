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
            $layouts = Layout::query()->paginate(12);
            return view("lienhe.list", compact('layouts'));
        } else {
            return redirect()->route('login');
        }
    }

    public function edit($level)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $directorys = Layout::query()->select()->where('id', $level)->get();

            return view("lienhe.edit", compact('directorys', 'level'));
        } else {
            return redirect()->route('login');
        }
    }
    public function update(Request $request, Layout $level)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $request->validate([
                'name' => 'required',

            ]);
            $requestData = $request->all();

            // DB::enableQueryLog();
            Layout::query()->where('id', $requestData['id'])->update([
                'name' => $requestData['name'],
                'numberPhone' => $requestData['numberPhone'],
                'address1' => $requestData['address1'],
                'address2' => $requestData['address2'],
                'updated_at' => $requestData['updated_at']
            ]);
            // $queries = DB::getQueryLog();
            // dd($queries);
<<<<<<< HEAD
            return redirect()->route('layout.index')->with('update', 'Successful update');
=======
            return redirect()->route('lienhe.index');
>>>>>>> aff6b391fe71d57c8d1f97db9dda01d316c38f1c
        } else {
            return redirect()->route('login');
        }
    }
}