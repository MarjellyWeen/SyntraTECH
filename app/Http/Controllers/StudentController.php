<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $students = Student::get();
       return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        //dd($courses);
        return view('student.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request('email'));
        //dd(request('course'));
        $checkmail = request('email');
        if(Student::where('email', $checkmail)->exists()) {
            session()->put('checkmail','U bent reeds ingeschreven als studen bij SyntraTECH');
            return redirect('students/create');
        }
        $validation = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'age' => 'required'
        ]);
       //dd($validation);

        Student::Create($validation)->course()->attach(request('course'));
        return redirect('students');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student = Student::findOrFail($student)->first();
        
        return view('student.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // $student = Student::findOrFail($student)->first();
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $validation = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'age' => 'required'
        ]);
        $student->update($validation);
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
