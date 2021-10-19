<?php

use Illuminate\Http\Request;


Route::get('tasks', "App\Http\Controllers\TasksController@index");

Route::get('tasks/{task}', "App\Http\Controllers\TasksController@show");

Route::post('tasks', "App\Http\Controllers\TasksController@store");

Route::patch('tasks/{tasks}', "App\Http\Controllers\TasksController@update");

Route::delete('tasks/{task}', "App\Http\Controllers\TasksController@destroy");