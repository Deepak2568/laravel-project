<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matrimony;
use Illuminate\Support\Facades\Hash;
class MatrimonyController extends Controller
{
    //
    public function index()
    {
        $matrimony = Matrimony::all();
        return view('index', ['matrimony' => $matrimony]);
    }
    public function view()
    {
        $matrimony = Matrimony::all();
        return view('view', ['profiles' => $matrimony]);
    }
    public function register()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|min:3|max:50',
            'gender' => 'required',
            'dob' => 'required|date|before:today',
            'height' => 'required|integer|min:100|max:250',
            'weight' => 'required|integer|min:30|max:200',
            'marital_status' => 'required',
            'religion' => 'required',
            'caste' => 'required',
            'mother_tongue' => 'required',
            'nationality' => 'required',
            'qualification' => 'required|max:100',
            'phone' => 'required|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/',
            'password' => 'required|min:6',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB max
            'email' => 'email|unique:matrimonies,email',
        ]);

        $data = $request->except(['password',  'photo']);
        $data['password'] = Hash::make($request->password);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $data['photo'] = $imageName;
        }

        Matrimony::create($data);
        return redirect()->to('/')->with('success', 'Registration successful. Once admin approve your profile you can able to view your perfect matches!');
    }
    public function edit($id)
    {
        $matrimony = Matrimony::findOrFail($id);
        return view('edit', ['user' => $matrimony]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|min:3|max:50',
            'gender' => 'required',
            'dob' => 'required|date|before:today',
            'height' => 'required|integer|min:100|max:250',
            'weight' => 'required|integer|min:30|max:200',
            'marital_status' => 'required',
            // 'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB max
            // 'email' => 'email|unique:matrimonies,email',
        ]);
        $matrimony = Matrimony::findOrFail($id);
        $data = $request->except(['password', 'photo']);
        $data['password'] = Hash::make($request->password);
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $data['photo'] = $imageName;
        } else {
            $data['photo'] = $matrimony->photo; // Keep the old photo if not updated
        }
        $matrimony->update($data);
        return redirect()->to('/view')->with('success', 'Profile updated successfully.');
    }

    public function delete($id)
    {
        $matrimony = Matrimony::findOrFail($id);
        $matrimony->delete();
        return redirect()->to('/view')->with('success', 'Profile deleted successfully.');
    }
}
