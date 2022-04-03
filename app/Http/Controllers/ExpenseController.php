<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Start;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $start = Start::where('id','=', $request->start_id)->firstOrFail();
        if ($start->admitted) {
            $user = Auth::user();
            $expense = new Expense();
            $expense->date = $request->date;
            $expense->invoice = $request->invoice;
            $expense->amount = $request->amount;
            $expense->detail = $request->detail;
            $expense->start_id = $start->id;
            $expense->save();

            return back()->with('confirmation','Gasto Registrado Correctamente');
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

    public function print($id)
    {
        $start = Start::where('id','=', $id)->firstOrFail();

        $total = 0;
        foreach ($start->expenses as $expense) {
            $total = $total + $expense->amount;
        }

        // return $users;

        return view('expenses.print', compact('start', 'total'));
    }
}
