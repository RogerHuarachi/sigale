<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Agency;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->get();
        $agencies = Agency::orderBy('id')->get();
        $roles = Role::orderBy('name')->get();
        return view('users.index', compact('users', 'roles', 'agencies'));
    }

    public function store(Request $request)
    {
        // $user = User::create($request->all());
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'agency_id' => $request->agency_id
        ]);
        $role = $request->role;
        $user->assignRole($role);

        return back()->with('confirmation','Usuario Registrado Correctamente');
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id','=', $id)->firstOrFail();

        $roles = $user->roles;
        foreach($roles as $role){
            $user->removeRole($role);
        }

        $role = $request->role;
        $user->assignRole($role);
        // $user->update($request->all());

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->agency_id = $request->agency_id;
        $user->save();

        return back()->with('confirmation','Usuario Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $user = User::where('id','=', $id)->firstOrFail();
        $user->delete();
        return back()->with('confirmation','Usuario Eliminado Correctamente');
    }
}
