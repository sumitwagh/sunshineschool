<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Student;
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
        $students = Student::all();
    
        $students = DB::table('students')->paginate(10);


        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $validated = request()->validate([
            'first_name'   => 'required',
            'middle_name'   => 'required',
            'last_name'   => 'required',
            'dob'    => 'required',
            'gender' => 'required',
            'address' => 'required|min:5',
            'mobile'  => 'required|numeric|digits:10',
            'std'     => 'required'
 
        ]);

        Student::create($validated);

        flash('Student Added Successfully!')->success();

        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
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
        $validated = request()->validate([
            'first_name'   => 'required',
            'middle_name'   => 'required',
            'last_name'   => 'required',
            'dob'    => 'required',
            'gender' => 'required',
            'address' => 'required|min:5',
            'mobile'  => 'required|numeric|digits:10',
            'std'     => 'required'
 
        ]);

        $student->update($validated);   

        flash('Student updated succefully!')->success();

        return redirect('/students');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        flash('Student deleted succefully!')->error();

        return redirect()->back();
    }

    public function search(Request $request)
    { 
        $name = $request->input('search');

        $students = DB::table('students')
            ->select(DB::raw("*"))
            ->where('first_name', 'LIKE', "%{$name}%")
            ->orWhere('last_name', 'LIKE', "%{$name}%")
            ->get();

            
            return view('students.search', compact('students', 'name'));

        }
}
