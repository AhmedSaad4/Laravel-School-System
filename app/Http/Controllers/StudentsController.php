<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class StudentsController extends Controller
{
    public function index(){
        $students = Students::all();
        return view('students.index', ['students' => $students]);  
    }

    public function create() {
        return view('students.create');
    }

    public function store() {

        $student = new Students();

        $student->first_name = request('first_name');
        $student->last_name = request('last_name');
        $student->age = request('age');
        $student->year = request('year');
        $student->class = request('class');
        $student->gpa = request('gpa');
        
        $student->save();
        

        return redirect('/')->with('mssg', 'Student Saved!');
    }

    public function destroy($id) {
        $student = Students::findOrFail($id);
        $student->delete();

        return redirect('/students')->with('mssg', 'Student Deleted!');
    }
}
