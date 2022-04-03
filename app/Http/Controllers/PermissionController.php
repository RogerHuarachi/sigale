<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::get();
        return view('permissions.index', compact('permissions'));
    }

    public function store(Request $request)
    {
        $permission = Permission::create(['name' => $request->name]);

        return back()->with('confirmation','Permiso Registrado Correctamente');
    }

    public function update(Request $request, $id)
    {
        $permission = Permission::where('id','=', $id)->firstOrFail();

        $permission->name = $request->name;
        $permission->save();

        return back()->with('confirmation','Permiso Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $permission = Permission::where('id', '=', $id)->firstOrFail();
        $permission->delete();
        return back()->with('confirmation','Permiso Eliminado Correctamente');
    }
}
