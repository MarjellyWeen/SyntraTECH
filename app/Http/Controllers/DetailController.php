<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Course;

class DetailController extends Controller
{
    public function show($id) {

        $detailcourse = \App\Course::find($id);
        return view('details', ['detailcourse' => $detailcourse]);
    }
}
