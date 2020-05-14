<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocentController extends Controller
{
    public function index() {

        $results = \App\User::with('course')->get();
        dd($results);
        return view('docent', compact('results'));
    }
}