<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::where('is_admin',true)->get();
        return view('back.admin.index', compact(
            'admins'
        ));
    }

    public function create()
    {
        return view('back.admin.create');
    }

    public function store(UserRequest $request)
    {
        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => 1
        ]);

        return redirect()->route('admins.index')
            ->with('message','Berhasil menambahkan admin');
    }

    public function edit(User $user)
    {
        return view('back.admin.edit', compact(
            'user'
        ));
    }

    public function update(User $user, UserRequest $request)
    {
        $user->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('admins.index')
            ->with('message','Berhasil memperbaharui admin');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admins.index')
            ->with('message','Berhasil menghapus admin');
    }
}
