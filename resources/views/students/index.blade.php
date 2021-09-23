       
@extends('layouts.layout')

@section('content')
<div class=" position-ref full-height">


    <div class="content">
            
    
            <h1>
                Students List:
            </h1>
            <a href="/students/create">Add a New Student</a> </br>
            <a href="/">Back to the home screen</a>
            <p class="mssg">{{ session('mssg') }}</p>
            </br>
            <div>ID | Name | Age | Year | Class | GPA</br>
                ------------------------------------------------------------------------
            </div>
            @foreach($students as $student)
            <div>
            <form action="/students/{{ $student->id }}" method="POST">
            @csrf
            @method('DELETE') 
            {{ $student->id}} - {{ $student->first_name }} {{ $student->last_name }} - {{ $student->age }} - {{ $student->year }} - {{ $student->class }} - {{$student->gpa}}
            &emsp;<button>Delete</button> 
            </form>
            </div> </br>
            @endforeach
        </div>
    </div>
</div>
@endsection
