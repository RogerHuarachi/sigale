<?php

namespace App\Http\Controllers;

use App\Approved;
use App\Folder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ApprovedController extends Controller
{
    public function index()
    {
        //
    }

    public function store($id)
    {
        $folder = Folder::where('id','=', $id)->firstOrFail();
        if ($folder->accepted) {
            return back()->with('validation','Formulario ya Aceptado');
        } else {
            $user = Auth::user();
            $approved = new Approved();
            $approved->folder_id = $folder->id;
            $approved->user_id = $user->id;
            $approved->save();

            return back()->with('confirmation','Formulario Aceptado Correctamente');
        }

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
