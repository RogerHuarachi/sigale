<?php

namespace App\Http\Controllers;

use App\Start;
use App\Subject;
use App\Step;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StartExport;
use App\Imports\StartImport;

class StartController extends Controller
{
    public function index()
    {
        $starts = Start::orderBy('id')->get();
        return view('starts.index', compact('starts'));
    }

    public function show($id)
    {
        $start = Start::where('id','=', $id)->firstOrFail();

        $total = 0;
        foreach ($start->expenses as $expense) {
            $total = $total + $expense->amount;
        }

        $subjects = Subject::orderBy('id')->get();
        $steps = Step::orderBy('id')->get();
        return view('starts.show', compact('start', 'subjects', 'steps', 'total'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request["user_id"]=$user->id;
        Start::create($request->all());

        return back()->with('confirmation','Formulario Registrado Correctamente');
    }

    public function update(Request $request, $id)
    {
        $start = Start::where('id','=', $id)->firstOrFail();

        $start->update($request->all());

        return back()->with('confirmation','Formulario Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $start = Start::where('id','=', $id)->firstOrFail();
        $start->delete();
        return back()->with('confirmation','Formulario Eliminado Correctamente');
    }
    
    public function export()
    {
        return Excel::download(new StartExport, 'Start-list.xlsx');
    }
    
    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new StartImport, $file);
        return back()->with('message','importacion correcta');
    }
}
