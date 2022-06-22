<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

use App\Role;
use App\Permission;

class RoleController extends Controller
{
    
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }


    public function create()
    {
        return view('roles.create', [
            'permissions' => Permission::all()
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'role_name' => ['required', 'string', 'max:225'],
            'permissions' => ['exists:permissions,id'],
        ]);

        $role = Role::create([
            'role_name' => $request->role_name,
            'label' => $request->label,
        ]);

        $role->allowTo($request->permissions);

        return redirect()->route('roles.index')->with('success', 'Success menambah role');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('roles.edit', compact('role', 'permissions'));
    }

    
    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        
        $request->validate([
            'role_name' => ['required', 'string', 'max:225'],
            'permissions' => ['exists:permissions,id'],
        ]);

        $role->update([
            'role_name' => $request->role_name,
            'label' => $request->label,
        ]);

        $role->allowTo($request->permissions);
        
        return redirect()->route('roles.index')->with('success', 'Success mengubah role');
    }

    
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->back()->with('success', 'Succes menghapus role');
    }
}
