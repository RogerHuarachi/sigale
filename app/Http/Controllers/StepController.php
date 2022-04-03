<?php

namespace App\Http\Controllers;

use App\Step;
use App\Subject;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public function index()
    {
        $steps = Step::orderBy('id')->get();
        $subjects = Subject::orderBy('id')->get();
        return view('steps.index', compact('steps', 'subjects'));
    }

    public function store(Request $request)
    {
        Step::create($request->all());

        return back()->with('confirmation','Etapa Registrada Correctamente');
    }

    public function update(Request $request, $id)
    {
        $step = Step::where('id','=', $id)->firstOrFail();
        $step->update($request->all());

        return back()->with('confirmation','Etapa Actualizada Correctamente');
    }

    public function destroy($id)
    {
        $step = Step::where('id','=', $id)->firstOrFail();
        $step->delete();
        return back()->with('confirmation','Etapa Eliminada Correctamente');
    }
}
