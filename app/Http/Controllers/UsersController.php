<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student=Student::all();
        return view('students.index',compact('student'));
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
    public function store(Request $request)
    {
        $student=new Student();
        $student->fname=$request->fname;
        $student->lname=$request->lname;
        $student->email=$request->email;
        $student->password=$request->password;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id=Student::find($id);
        return view('students.show',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id=Student::find($id);
        return view('students.edit',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student=Student::find($id);
        $student->fname=$request->fname;
        $student->lname=$request->lname;
        $student->email=$request->email;
        $student->password=$request->password;
        $student->update();
        return redirect()->route('students.index');
    }

/* public function delete(string $id)
{
    $student=Student::find($id);
    $student->delete();
    return redirect()->route('students.index');
} */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $s=Student::find($id);
    $s->destroy($id);
    return redirect()->route('students.index');
    }
}
