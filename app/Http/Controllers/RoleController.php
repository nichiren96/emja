<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create()
    {
        return view('private.roles.role');
    }

    public function store(Request $request)
    {
        Role::create($request->all());

        return redirect(route('show_role'))->with(['success' => 'Role ajouté avec succès']);
    }

    public function update(Role $role, Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('private.roles.role', compact('role'));
        }

        $role->update($request->all());
        return redirect(route('show_role'))->with(['success' => 'Role modifié avec succès']);
    }

    public function show()
    {
        $roles = Role::all();
        return view('private.roles.show', compact('roles'));
    }

    public function delete(Role $role)
    {
        $role->delete();
        return redirect(route('show_role'))->with(['success' => 'Role supprimé avec succès']);
    }
}
