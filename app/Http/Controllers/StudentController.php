<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function index()
    // {
    //     $data = Student::latest()->paginate(5);

    //     return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    public function create()
    {
        return view('student.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name'          =>  'required',
    //         'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
    //         'age'         =>  'required|email|unique:students',
    //         'status'         =>  'required',

    //     ]);

    //     $file_name = time() . '.' . request()->image->getClientOriginalExtension();

    //     request()->image->move(public_path('images'), $file_name);

    //     $student = new Student;

    //     $student->name = $request->name;
    //     $student->image = $file_name;
    //     $student->age = $request->age;
    //     $student->status = $request->status;

    //     $student->save();

    //     return redirect()->route('students.index')->with('success', 'Student Added successfully.');
    // }
//
    // public function show(Student $student)
    // {
    //     return view('show', compact('student'));
    // }
//
    // public function edit(Student $student)
    // {
    //     return view('edit', compact('student'));
    // }
//
    // public function update(Request $request, Student $student)
    // {
    //     $request->validate([
    //         'name'      =>  'required',
    //         'email'     =>  'required|email',
    //         'image'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
    //     ]);

    //     $image = $request->hidden_image;

    //     if($request->image != '')
    //     {
    //         $image = time() . '.' . request()->image->getClientOriginalExtension();

    //         request()->image->move(public_path('images'), $image);
    //     }

    //     $student = Student::find($request->hidden_id);

    //     $student->name = $request->name;

    //     $student->email = $request->email;

    //     $student->gender = $request->gender;

    //     $student->image = $image;

    //     $student->save();

    //     return redirect()->route('students.index')->with('success', 'Student Data has been updated successfully');
    // }
//
    // public function destroy(Student $student)
    // {
    //     $student->delete();

    //     return redirect()->route('students.index')->with('success', 'Student Data deleted successfully');
    // }
}
