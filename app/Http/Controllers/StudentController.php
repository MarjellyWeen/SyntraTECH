<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        // Hier checken we of de student/email al bestaat. als deze al bestaat stuurt de pagina je terug naar students/create
        // $checkmail = request('email');
        // if(Student::where('email', $checkmail)->exists()) {
        //     session()->put('checkmail','U bent reeds ingeschreven als student bij SyntraTECH');
        //     return redirect('students/create');
        // }

        // dit checkt of alle velden zijn ingevuld/aanwezig zijn
        $validation = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'age' => 'required'
        ]);

        // 1. Vind of creeer student en sla hem op in een variabel
        //maakt een nieuwe student aan met de gevalideerde data en assiocieerd de nieuwe student met de opgegeven courses
        $student = Student::firstOrNew([ 
            'email' => $validation['email']
        ], $validation);

        $student->save();

        // 2. Haal de courses op en sla dit op in een variable (withCount students)
        $courseIds = request('course');
        $courses = Course::withCount('student')->whereIn('id', $courseIds)->get();     
  
        // 3. Nieuwe gebruiker koppelen aan courses(attach werkt pas als model al opgeslagen is)
        $student->course()->attach($courses);

        // 4. Stuur per course een mail naar de nieuwe student, gebaseerd op student count
        foreach($courses as $course){ 
            $data = [
                'courseName' => $course->name,
                'studentName' => $student->name,
                'studentCount' => $course->student_count,
            ];
            Mail::send('mails.register', $data, function ($message) use ($student, $course) {
                $message->to($student->email, $student->name);
                // $message->bcc('info@syntratech.be', 'SyntraTechAdmin');
                $message->subject('Inschrijving van '. $student->name . ' voor de opleiding ' . $course->name);
            });
        }

        // Student::Create($validation)->course()->attach(request('course'));
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
