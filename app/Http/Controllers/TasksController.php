<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        /*
        $tasks = [
            'Tarefa 1',
            'Tarefa 2',
            'Tarefa 3',
        ];
        */

        //$tasks = DB::table('tasks')->latest()->get();
        $tasks = Task::all();
        //return $tasks;
        
        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
        //dd($id);

        //$tasks = DB::table('tasks')->find($id);
        //$tasks = Task::find($id);
        //dd($tasks);
        
        return view('tasks.show', compact('task'));
    }
}
