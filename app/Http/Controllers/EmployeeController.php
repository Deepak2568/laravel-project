<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            "name" => "required|string|min:3|max:50",
            "email" => "required|email",
            "department" => "required",
            "skills" => "required",
        ]);
        dd($request->all());
        // Logic to store employee data
        // For example, you might save the data to a database
        // return redirect()->route('employees.index');
    }
}
