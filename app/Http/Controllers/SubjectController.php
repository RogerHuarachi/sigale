<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::orderBy('id')->get();
        return view('subjects.index', compact('subjects'));
    }

    public function store(Request $request)
    {
        Subject::create($request->all());

        return back()->with('confirmation','Materia Registrada Correctamente');
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::where('id','=', $id)->firstOrFail();
        $subject->update($request->all());

        return back()->with('confirmation','Materia Actualizada Correctamente');
    }

    public function destroy($id)
    {
        $subject = Subject::where('id','=', $id)->firstOrFail();
        $subject->delete();
        return back()->with('confirmation','Materia Eliminada Correctamente');
    }
}
