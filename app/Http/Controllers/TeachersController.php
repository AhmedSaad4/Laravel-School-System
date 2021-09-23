<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;

class TeachersController extends Controller
{
    public function index(){
        $teachers = Teachers::all();
        return view('teachers.index', ['teachers' => $teachers]);  
    }

    public function create() {
        return view('teachers.create');
    }

    public function store() {

        $teacher = new Teachers();

        $teacher->first_name = request('first_name');
        $teacher->last_name = request('last_name');
        $teacher->age = request('age');
        $teacher->specialization = request('specialization');
        $teacher->year = request('year');

        $teacher->save();

        return redirect('/')->with('mssg', 'Teacher Saved!');
    }

    public function destroy($id) {
        $teacher = Teachers::findOrFail($id);
        $teacher->delete();

        return redirect('/teachers')->with('mssg', 'Teacher Deleted!');
    }
}
