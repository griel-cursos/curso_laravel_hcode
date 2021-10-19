<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TasksController extends Controller
{
    
    public function index()
    {
        return Task::all();
    }


    public function store(Request $request)
    {

        $task = Task::create([
            'name'=>$request->input('name')
        ]);

        return $task;
    }
}
