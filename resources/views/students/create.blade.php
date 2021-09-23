@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
  <h1>Add a New Student</h1>
  <form action="/students" method="POST">
    @csrf
    <label for="first_name">First Name: </label>
    <input type="text" name="first_name" id="first_name" required>

    <label for="last_name">Last Name: </label>
    <input type="text" name="last_name" id="last_name" required>

    <label for="age">Age: </label>
    <input type="integer" name="age" id="age" required>

    <label for="year">Year: </label>
    <select name="year" id="year">
      <option value="1st">1st Grade</option>
      <option value="2nd">2nd Grade</option>
      <option value="3rd">3rd Grade</option>
    </select>

    <label for="class">Class: </label>
    <select name="class" id="class">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
    </select>

    <label for="gpa">GPA: </label>
    <input type="float" name="gpa" id="gpa" required>

    <input type="submit" value="Save">
  </form>
</div>
@endsection
