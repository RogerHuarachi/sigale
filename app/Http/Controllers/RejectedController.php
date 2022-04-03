<?php

namespace App\Http\Controllers;

use App\Rejected;
use App\Start;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RejectedController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $start = Start::where('id','=', $request->start_id)->firstOrFail();
        if ($start->admitted) {
            return back()->with('validation','Formulario ya Aceptado');
        } else {
            if ($start->rejected) {
                return back()->with('validation','Formulario ya Rechazado');
            } else {
                $user = Auth::user();
                $rejected = new Rejected();
                $rejected->start_id = $start->id;
                $rejected->user_id = $user->id;
                $rejected->description = $request->description;
                $rejected->save();
    
                return back()->with('confirmation','Formulario Rechazado Correctamente');
            }
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
