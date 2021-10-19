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

        $task = App\Task::create([
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
