<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BContractController extends Controller
{
    public function index()
    {
        // $contracts = AContract::orderBy('id')->get();
        return view('bcontracts.index');
    }

    public function unocero(Request $request)
    {
        return view('bcontracts.1-0-print', compact('request'));
    }
    public function unouno(Request $request)
    {
        return view('bcontracts.1-1-print', compact('request'));
    }

    public function doscero(Request $request)
    {
        return view('bcontracts.2-0-print', compact('request'));
    }
    public function dosuno(Request $request)
    {
        return view('bcontracts.2-1-print', compact('request'));
    }

    public function trescero(Request $request)
    {
        return view('bcontracts.3-0-print', compact('request'));
    }
    public function tresuno(Request $request)
    {
        return view('bcontracts.3-1-print', compact('request'));
    }

    public function cuatrocero(Request $request)
    {
        return view('bcontracts.4-0-print', compact('request'));
    }
    public function cuatrouno(Request $request)
    {
        return view('bcontracts.4-1-print', compact('request'));
    }

    public function cincocero(Request $request)
    {
        return view('bcontracts.5-0-print', compact('request'));
    }
    public function cincouno(Request $request)
    {
        return view('bcontracts.5-1-print', compact('request'));
    }
    public function cincodos(Request $request)
    {
        return view('bcontracts.5-2-print', compact('request'));
    }

    public function seiscero(Request $request)
    {
        return view('bcontracts.6-0-print', compact('request'));
    }
    public function seisuno(Request $request)
    {
        return view('bcontracts.6-1-print', compact('request'));
    }
    public function seisdos(Request $request)
    {
        return view('bcontracts.6-2-print', compact('request'));
    }

    public function sietecero(Request $request)
    {
        return view('bcontracts.7-0-print', compact('request'));
    }
    public function sieteuno(Request $request)
    {
        return view('bcontracts.7-1-print', compact('request'));
    }
    public function sietedos(Request $request)
    {
        return view('bcontracts.7-2-print', compact('request'));
    }

    public function ochocero(Request $request)
    {
        return view('bcontracts.8-0-print', compact('request'));
    }
    public function ochouno(Request $request)
    {
        return view('bcontracts.8-1-print', compact('request'));
    }
    public function ochodos(Request $request)
    {
        return view('bcontracts.8-2-print', compact('request'));
    }

    public function nuevecero(Request $request)
    {
        return view('bcontracts.9-0-print', compact('request'));
    }
    public function nueveuno(Request $request)
    {
        return view('bcontracts.9-1-print', compact('request'));
    }
}
