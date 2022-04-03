<?php

namespace App\Http\Controllers;

use App\Agency;
use App\City;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies = Agency::orderBy('id')->get();
        $cities = City::orderBy('id')->get();
        return view('agencies.index', compact('agencies', 'cities'));
    }

    public function store(Request $request)
    {
        Agency::create($request->all());

        return back()->with('confirmation','Agencia Registrada Correctamente');
    }

    public function update(Request $request, $id)
    {
        $agency = Agency::where('id','=', $id)->firstOrFail();
        $agency->update($request->all());

        return back()->with('confirmation','Agencia Actualizada Correctamente');
    }

    public function destroy($id)
    {
        $agency = Agency::where('id','=', $id)->firstOrFail();
        $agency->delete();
        return back()->with('confirmation','Agencia Eliminada Correctamente');
    }
}
