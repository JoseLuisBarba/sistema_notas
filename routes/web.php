<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'home')->name('home');
Route::get('alumnos', 'App\Http\Controllers\AlumnoController@index')->name('alumnos.index');
Route::get('alumnos/crear', 'App\Http\Controllers\AlumnoController@create')->name('alumnos.create');
Route::post('alumnos', 'App\Http\Controllers\AlumnoController@store')->name('alumnos.store');
Route::get('alumnos/{id}', 'App\Http\Controllers\AlumnoController@show')->name('alumnos.show');