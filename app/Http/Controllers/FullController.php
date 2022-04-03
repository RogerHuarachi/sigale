<?php

namespace App\Http\Controllers;

use App\Full;
use App\Movement;
use Illuminate\Http\Request;

class FullController extends Controller
{
    public function index()
    {
        //
    }

    public function store($id)
    {
        $movement = Movement::where('id','=', $id)->firstOrFail();
        if ($movement->full) {
            return back()->with('validation','Movimiento Ya Completado');
        } else {
            $full = new Full();
            $full->movement_id = $movement->id;
            $full->save();
            return back()->with('confirmation','Movimiento Completado Correctamente');
        }
    }

    public function update(Request $request, Accepted $accepted)
    {
        //
    }

    public function destroy(Accepted $accepted)
    {
        //
    }
}
