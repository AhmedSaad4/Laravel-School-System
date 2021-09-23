@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
  <h1>Add a New Teacher</h1>
  <form action="/teachers" method="POST">
    @csrf
    <label for="first_name">First Name: </label>
    <input type="text" name="first_name" id="first_name" required>

    <label for="last_name">Last Name: </label>
    <input type="text" name="last_name" id="last_name" required>

    <label for="age">Age: </label>
    <input type="integer" name="age" id="age" required>

    <label for="specialization">Specialization: </label>
    <select name="specialization" id="specialization">
      <option value="Mathematics">Mathematics</option>
      <option value="Physics">Physics</option>
      <option value="Chemistry">Chemistry</option>
      <option value="Biology">Biology</option>
      <option value="Computer Science">Computer Science</option>
      <option value="English">English</option>
      <option value="Arabic">Arabic</option>
    </select>

    <label for="year">Year: </label>
    <select name="year" id="year">
      <option value="1st">1st Grade</option>
      <option value="2nd">2nd Grade</option>
      <option value="3rd">3rd Grade</option>
    </select>

    <input type="submit" value="Save">
  </form>
</div>
@endsection
