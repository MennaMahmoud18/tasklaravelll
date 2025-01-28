<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    function index()
    {
       
        $students = Student::all();
        return view('students', ["students" => $students]);
    }

    function view($id)
    {
        $student = Student::findOrFail($id);
        return view('view', compact('student'));
    }

    function destroy($id)
    {
        $student = Student::findOrFail($id);  // single student
        $student->delete();
        // route name
        return to_route('students.index');
    }

    function create()
    {
        $tracks=Track::all();
        return view('create',compact('tracks'));
        // return view('create');
    }

    function store()
    {
        
        $requestData = request()->all();
        Student::create($requestData);
        return to_route('students.index');
    }

    function edit($id)
    {
     $student=Student::findOrFail($id);
     return view('update',compact("student"));
    }

    function update($id)
    {
        $student=Student::findOrFail($id);
        $requestData=request()->all();
        // dd($requestData);
        $student->update($requestData);
        return to_route('students.index');


    }
}

