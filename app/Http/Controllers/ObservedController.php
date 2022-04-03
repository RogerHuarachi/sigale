<?php

namespace App\Http\Controllers;

use App\Observed;
use App\Start;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObservedController extends Controller
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
                if ($start->observed) {
                    return back()->with('validation','Formulario ya Observado');
                } else {
                    $user = Auth::user();
                    $observed = new Observed();
                    $observed->start_id = $start->id;
                    $observed->user_id = $user->id;
                    $observed->description = $request->description;
                    $observed->save();
        
                    return back()->with('confirmation','Formulario Observado Correctamente');
                }
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
