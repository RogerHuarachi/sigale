<?php

namespace App\Http\Controllers;

use App\Folder;
use App\City;
use App\State;
use App\Gender;
use App\Warranty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FolderExport;
use App\Imports\FolderImport;

class FolderController extends Controller
{
    public function index()
    {
        $folders = Folder::orderBy('id')->get();
        $warranties = Warranty::orderBy('id')->get();
        return view('folders.index', compact('folders', 'warranties'));
    }
    
    public function show($id)
    {
        $folder = Folder::where('id','=', $id)->firstOrFail();
        return view('folders.show', compact('folder'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        
        $request["user_id"]=$user->id;
        $request["agency_id"]=$user->agency->id;
        
        Folder::create($request->all());

        return back()->with('confirmation','Formulario Registrado Correctamente');
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $folder = Folder::where('id','=', $id)->firstOrFail();

        $request["user_id"]=$user->id;
        $request["agency_id"]=$user->agency->id;

        $folder->update($request->all());

        return back()->with('confirmation','Formulario Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $folder = Folder::where('id','=', $id)->firstOrFail();
        $folder->delete();
        return back()->with('confirmation','Formulario Eliminado Correctamente');
    }
    
    public function export()
    {
        return Excel::download(new FolderExport, 'Folder-list.xlsx');
    }
    
    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new FolderImport, $file);
        return back()->with('message','importacion correcta');
    }
}
