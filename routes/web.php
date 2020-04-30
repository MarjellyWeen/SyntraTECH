<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // Als een user een "get" request aanroept, dan geven (return) we een view als antwoord
});

Route::get('/about', function () {
    return view('about');
     
});

// routes\web.php
Route::get('/users/{id}', 'UsersController@show');
Route::get('courses','CourseController@show');
Route::get('details/{id}','CourseController@detail');
// Bij een get request spreken we de methode show aan in de UsersController en we geven de id mee

Route::get('students','StudentController@index');
Route::get('students/create','StudentController@create');
Route::get('students/{student}','StudentController@show');
Route::post('students/store','StudentController@store');
Route::get('students/{student}/edit','StudentController@edit');
Route::put('students/{student}','StudentController@update');

Route::get('contact','ContactController@create');
Route::post('contact/store','ContactController@store');
// Update - eerst form inladen en data ophalen
Route::get('contact/{contact}','ContactController@edit');
// een update uitvoeren
Route::put('contact/{contact}','ContactController@update');

Route::get('courset2', function() {
$result = \App\Location::find(1)->course;
dd($result);
});