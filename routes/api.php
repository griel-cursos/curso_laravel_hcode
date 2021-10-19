<?php

use Illuminate\Http\Request;


Route::get('tasks', "App\Http\Controllers\TasksController@index");

Route::post('tasks', "App\Http\Controllers\TasksController@store");