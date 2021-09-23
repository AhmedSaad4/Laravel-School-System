<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('welcome'); });

Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::post('/students', 'StudentsController@store');
Route::delete('/students/{id}', 'StudentsController@destroy');

Route::get('/teachers', 'TeachersController@index');
Route::get('/teachers/create', 'TeachersController@create');
Route::post('/teachers', 'TeachersController@store');
Route::delete('/teachers/{id}', 'TeachersController@destroy');