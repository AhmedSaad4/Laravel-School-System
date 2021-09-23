       
@extends('layouts.layout')

@section('content')
<div class=" position-ref full-height">


    <div class="content">
            
    
            <h1>
                Teachers List:
            </h1>
            <a href="/teachers/create">Add a New Teacher</a> </br>
            <a href="/">Back to the home screen</a>
            <p class="mssg">{{ session('mssg') }}</p>
            </br>
            <div>ID | Name | Age | Specialization | Year</br>
                ------------------------------------------------------------------------
            </div>
            @foreach($teachers as $teacher)
            <div>
            <form action="/teachers/{{ $teacher->id }}" method="POST">
            @csrf
            @method('DELETE') 
            {{ $teacher->id}} - {{ $teacher->first_name }} {{ $teacher->last_name }}  -  {{ $teacher->age }}  -  {{ $teacher->specialization }}  -  {{ $teacher->year }}
            &emsp;<button>Delete</button> 
            </form>
            </div> </br>
            @endforeach
        </div>
    </div>
</div>
@endsection
