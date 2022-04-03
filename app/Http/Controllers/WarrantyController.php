<?php

namespace App\Http\Controllers;

use App\Warranty;
use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    public function index()
    {
        $warranties = Warranty::orderBy('id')->get();
        return view('warranties.index', compact('warranties'));
    }

    public function store(Request $request)
    {
        Warranty::create($request->all());

        return back()->with('confirmation','Garantía Registrada Correctamente');
    }

    public function update(Request $request, $id)
    {
        $warranty = Warranty::where('id','=', $id)->firstOrFail();
        $warranty->update($request->all());

        return back()->with('confirmation','Garantía Actualizada Correctamente');
    }

    public function destroy($id)
    {
        $warranty = Warranty::where('id','=', $id)->firstOrFail();
        $warranty->delete();
        return back()->with('confirmation','Garantía Eliminada Correctamente');
    }
}
