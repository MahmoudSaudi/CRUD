<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::latest()->paginate(8);
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate(['name'=>'required','mobile'=>'required','email'=>'required','age'=>'required']);
        $input = $request->all();
        Student::create($input);
        return redirect('student');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $student=Student::find($id);
        return view('students.show',compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student):View
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(['name'=>'required','email'=>'required','mobile'=>'required','name'=>'required']);
        // $student = Student::find($id);
        $input = $request->all();
        Student::update($input);
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        return  redirect('student');
    }
}
