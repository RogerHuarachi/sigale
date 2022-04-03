<?php

namespace App\Http\Controllers;

use App\Admitted;
use App\Start;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmittedController extends Controller
{
    public function index()
    {
        //
    }

    public function store($id)
    {
        $start = Start::where('id','=', $id)->firstOrFail();
        if ($start->admitted) {
            return back()->with('validation','Formulario ya Aceptado');
        } else {
            $user = Auth::user();
            $admitted = new Admitted();
            $admitted->start_id = $start->id;
            $admitted->user_id = $user->id;
            $admitted->save();

            return back()->with('confirmation','Formulario Aceptado Correctamente');
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
