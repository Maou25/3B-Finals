<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/students', 'StudentController@index');
Route::post('/students', 'StudentController@store');
Route::get('/students/{id}', 'StudentController@show');
Route::patch('/students/{id}', 'StudentController@update');