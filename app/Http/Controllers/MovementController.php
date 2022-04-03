<?php

namespace App\Http\Controllers;

use App\Movement;
use App\Start;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovementController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $start = Start::where('id','=', $request->start_id)->firstOrFail();
        if ($start->admitted) {
            $movement = new Movement();
            $movement->term = $request->term;
            $movement->obs = $request->obs;
            $movement->start_id = $request->start_id;
            $movement->step_id = $request->step_id;
            $movement->save();

            return back()->with('confirmation','Movimiento Registrado Correctamente');
        } else {
            return back()->with('validation','Formulario No Aceptado');
        }
        // return $request;
    }

    public function update(Request $request, Accepted $accepted)
    {
        //
    }

    public function destroy(Accepted $accepted)
    {
        //
    }


    
    public function todo()
    {
        $date = date("Y-m-d");
        $movements = Movement::whereDate('term','>', $date)->get();
        // return $movements;
        return view('movements.todo', compact('movements'));
    }
}
