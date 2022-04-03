<?php

namespace App\Http\Controllers;

use App\Accepted;
use App\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcceptedController extends Controller
{
    public function index()
    {
        //
    }

    public function store($id)
    {
        $transfer = Transfer::where('id','=', $id)->firstOrFail();
        if ($transfer->accepted) {
            return back()->with('validation','Formulario ya Aceptado');
        } else {
            $user = Auth::user();
            $accepted = new Accepted();
            $accepted->transfer_id = $transfer->id;
            $accepted->user_id = $user->id;
            $accepted->save();

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
