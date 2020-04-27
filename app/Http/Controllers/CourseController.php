<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Course;

class CourseController extends Controller
{
    public function show () {

        $courses = Course::all();
        $topcourse = Course::latest()->first();
        return view ('courses',['courses' => $courses, 'topcourse' => $topcourse]);
    }
}
