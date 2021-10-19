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

        $request->validate([
            'name'=>'required|max:255|min:3',
            'complete'=>'required'
        ]);

        $task = \App\Models\Task::create([
            'name'=>$request->input('name')
        ]);

        return $task;
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function update(Request $request, Task $task)
    {

        $request->validate([
            'name'=>'required|max:255|min:3'
        ]);

        $task->name = $request->input('name');

        $task->save();

        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json([
            'sucess'=>true
        ]);
    }
}
