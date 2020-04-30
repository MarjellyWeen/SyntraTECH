<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Course;

class CourseController extends Controller
{
    public function show () {

        $courses = Course::all();
        $topcourse = Course::latest()->first();
        $coursepivot = Course::withCount('student')->get();
        //dd ($coursepivot);
        return view ('courses', ['coursepivot' => $coursepivot, 'topcourse' => $topcourse]);
        // Ook komt het zeer vaak voor, dat we 2 datasets meegeven aan onze view
        // Dit doen we door de array uit te breiden...
    }

    public function detail($id) {

        $detailcourse = \App\Course::find($id);
        return view('details', compact('detailcourse'));
    }
}
