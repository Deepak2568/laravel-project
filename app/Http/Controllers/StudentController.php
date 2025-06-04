<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student; // Assuming you have a Student model

class StudentController extends Controller
{
    //
    public function index()
    {
        // Fetch all students from the database
        $students = Student::all();
        // Pass the students to the view
        return view('index',['data' => $students]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email|unique:students,email',
        ]);
        $student = $request->all();
        Student::create($student);
        return redirect()->to('/')->with('success', 'Student created successfully');
    }
    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit', ['data' => $student]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email|unique:students,email,' . $id,
        ]);
        $student = Student::find($id);
        $student->update($request->all());
        return redirect()->to('/')->with('success', 'Student updated successfully');
    }
    public function delete($id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            return redirect()->to('/')->with('success', 'Student deleted successfully');
        }
        return redirect()->to('/')->with('error', 'Student not found');
    }
}
