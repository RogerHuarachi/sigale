<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::orderBy('id')->get();
        return view('cities.index', compact('cities'));
    }

    public function store(Request $request)
    {
        City::create($request->all());

        return back()->with('confirmation','Departamento Registrado Correctamente');
    }

    public function update(Request $request, $id)
    {
        $city = City::where('id','=', $id)->firstOrFail();
        $city->update($request->all());

        return back()->with('confirmation','Departamento Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $city = City::where('id','=', $id)->firstOrFail();
        $city->delete();
        return back()->with('confirmation','Departamento Eliminado Correctamente');
    }
}
