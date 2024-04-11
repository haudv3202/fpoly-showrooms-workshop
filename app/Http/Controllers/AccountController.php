<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $accounts = User::query()->latest('id')->paginate(12);
            return view("accounts.list", compact('accounts'));
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return view("accounts.create");
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccountRequest $request)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $data = $request->except('avatar');

            if ($request->hasFile('image')) {
                $pathFile = Storage::putFile('accounts', $request->file('image'));
                $data['avatar'] = 'storage/' . $pathFile;
            } else {
                $data['avatar'] = 'storage/accounts/user.png';
            }

            try {
                User::create($data);
                return redirect()->route('accounts.index');
            } catch (\Exception $e) {
                return back()->with('error', 'Đã xảy ra lỗi khi thêm người dùng. Vui lòng thử lại.');
            }
        } else {
            return redirect()->route('login');
        }
    }




    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $account = User::findOrFail($id);
            return view('accounts.edit', compact('account'));
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $account)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $account->id,
            ]);

            $data = $request->except('avatar');

            // Giữ nguyên ảnh cũ nếu không có ảnh mới được tải lên
            if ($request->hasFile('image')) {
                $pathFile = Storage::putFile('accounts', $request->file('image'));
                $data['avatar'] = 'storage/' . $pathFile;
            } else {
                $data['avatar'] = $request->img_old;
            }

            try {
                $account->update($data);
                return redirect()->route('accounts.index')->with('update', 'Successful update');
            } catch (\Exception $e) {
                return back()->with('error', 'Đã xảy ra lỗi khi cập nhật thông tin người dùng. Vui lòng thử lại.');
            }
        } else {
            return redirect()->route('login');
        }
    }
}