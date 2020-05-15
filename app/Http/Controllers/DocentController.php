<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DocentController extends Controller
{
    public function index() {

        // Full Blown retrieve van de hele bazaar (eager loading)
        $results = \App\User::with('course')->get();

        // Enkel MIJN gegevens ophalen (eager loading)
        $resultone = \App\User::with('course')->where('id',Auth::user()->id)->firstOrFail();
       //dd($resultsone);
        return view('docent', compact('results','resultone'));
    }
}