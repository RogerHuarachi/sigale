<?php

namespace App\Http\Controllers;

use App\Motion;
use App\Folder;
use Illuminate\Http\Request;

class MotionController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $folder = folder::where('id','=', $request->folder_id)->firstOrFail();
        if ($folder->approved) {
            $motion = new Motion();
            $motion->action = $request->action;
            $motion->result = $request->result;
            $motion->folder_id = $request->folder_id;
            $motion->save();

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
}
