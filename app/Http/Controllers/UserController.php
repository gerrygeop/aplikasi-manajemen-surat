<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

use RealRashid\SweetAlert\Facades\Alert;

use App\User;
use App\Role;
use App\Bidang;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

   
    public function create()
    {
        $roles = Role::all()->where('id', '!=', 1);
        $bidang = Bidang::all();
        return view('users.create', compact('roles', 'bidang'));
    }

   
    public function store(Request $request)
    {
        $bidang;
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'alpha_dash', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'nip' => ['required', 'numeric'],
            'roles' => ['exists:roles,id'],
            // 'bidang' => ['exists:bidang,id'],
        ]);

        if ($request['bidang'] != 0) {
            $bidang = $request->bidang;
        }
        else{
            $bidang = null;
        }

        $user = User::create([
            'name'       => $request->name,
            'username'   => $request->username,
            'password'   => Hash::make($request->password),
            'nip'        => $request->nip,
            'bidang_id'      => $bidang,
        ]);

        $user->assignRole($request->roles);

        return redirect()->route('users.index')->with('success', 'Berhasil menambah user');
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit(User $user)
    {
        $roles = Role::all()->where('id', '!=', 1);
        $bidang = Bidang::all();
        return view('users.edit', compact('user', 'roles', 'bidang'));
    }
   
    public function update(Request $request, $id)
    {
        $bidang;
        $user = User::findOrFail($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'nip' => ['required', 'numeric'],
            'roles' => ['exists:roles,id'],
            // 'bidang' => ['exists:bidang,id'],
        ]);

        $password = $request->password != '' ? Hash::make($request->password) : $user->password;

        if ($request['bidang'] != 0) {
            $bidang = $request->bidang;
        }
        else{
            $bidang = null;
        }

        $user->update([
            'name'       => $request->name,
            'username'   => $request->username,
            'password'   => $password,
            'nip'        => $request->nip,
            'bidang_id'      => $bidang,
        ]);

        
        $user->assignRole($request->roles);

        return redirect()->route('users.index')->with('success', 'Berhasil mengubah user');
    }

   
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus user');
    }
}
