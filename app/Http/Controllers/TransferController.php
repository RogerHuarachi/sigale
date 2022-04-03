<?php

namespace App\Http\Controllers;

use App\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransferExport;
use App\Imports\TransferImport;

class TransferController extends Controller
{
    public function index()
    {
        $transfers = Transfer::orderBy('id')->get();
        return view('transfers.index', compact('transfers'));
    }

    public function show($id)
    {
        $transfer = Transfer::where('id','=', $id)->firstOrFail();
        return view('transfers.show', compact('transfer'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request["user_id"]=$user->id;
        Transfer::create($request->all());

        return back()->with('confirmation','Formulario Registrado Correctamente');
    }

    public function update(Request $request, $id)
    {
        $transfer = Transfer::where('id','=', $id)->firstOrFail();

        $transfer->update($request->all());

        return back()->with('confirmation','Formulario Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $transfer = Transfer::where('id','=', $id)->firstOrFail();
        $transfer->delete();
        return back()->with('confirmation','Formulario Eliminado Correctamente');
    }
    
    public function export()
    {
        return Excel::download(new TransferExport, 'Transfer-list.xlsx');
    }
    
    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new TransferImport, $file);
        return back()->with('message','importacion correcta');
    }
}
