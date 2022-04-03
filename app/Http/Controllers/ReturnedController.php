<?php

namespace App\Http\Controllers;

use App\Returned;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReturnedExport;
use App\Imports\ReturnedImport;

class ReturnedController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
        ->join('user_has_roles', 'users.id', '=', 'user_has_roles.user_id')
        ->join('roles', 'user_has_roles.role_id', '=', 'roles.id')
        ->where('roles.name','=', 'JEFE DE AGENCIA')
        ->orwhere('roles.name','=', 'ASESOR')
        ->select('users.*')
        ->get();

        $returneds = Returned::orderBy('id')->get();
        $cities = City::orderBy('id')->get();
        return view('returneds.index', compact('returneds', 'users', 'cities'));
    }

    public function show($id)
    {
        $returned = Returned::where('id','=', $id)->firstOrFail();
        $agency = $returned->user->agency->id;

        $users = DB::table('users')
        ->join('user_has_roles', 'users.id', '=', 'user_has_roles.user_id')
        ->join('roles', 'user_has_roles.role_id', '=', 'roles.id')
        ->where('roles.name','=', 'JEFE DE AGENCIA')
        ->where('users.agency_id','=', $agency)
        ->select('users.*')
        ->get();

        // return $users;

        return view('returneds.show', compact('returned', 'users'));
    }

    public function store(Request $request)
    {
        Returned::create($request->all());

        return back()->with('confirmation','Formulario Registrado Correctamente');
    }

    public function update(Request $request, $id)
    {
        $returned = Returned::where('id','=', $id)->firstOrFail();

        $returned->update($request->all());

        return back()->with('confirmation','Formulario Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $returned = Returned::where('id','=', $id)->firstOrFail();
        $returned->delete();
        return back()->with('confirmation','Formulario Eliminado Correctamente');
    }

    public function print($id)
    {
        $returned = Returned::where('id','=', $id)->firstOrFail();
        $agency = $returned->user->agency->id;

        $users = DB::table('users')
        ->join('user_has_roles', 'users.id', '=', 'user_has_roles.user_id')
        ->join('roles', 'user_has_roles.role_id', '=', 'roles.id')
        ->where('roles.name','=', 'JEFE DE AGENCIA')
        ->where('users.agency_id','=', $agency)
        ->select('users.*')
        ->get();

        // return $users;

        return view('returneds.print', compact('returned', 'users'));
    }
    
    public function export()
    {
        return Excel::download(new ReturnedExport, 'Returned-list.xlsx');
    }
    
    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new ReturnedImport, $file);
        return back()->with('message','importacion correcta');
    }
}
