<?php

namespace App\Http\Controllers;

use App\Income;
use App\Start;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $start = Start::where('id','=', $request->start_id)->firstOrFail();
        if ($start->admitted) {
            Income::create($request->all());

            return back()->with('confirmation','Ingreso de Demanda Registrada Correctamente');
        } else {
            return back()->with('validation','Formulario No Aceptado');
        }
    }

    public function update(Request $request, $id)
    {
        $income = Income::where('id','=', $request->start_id)->firstOrFail();
        $income->update($request->all());

        return back()->with('confirmation','Actualización Correctamente');
    }

    public function destroy(Accepted $accepted)
    {
        //
    }
}
