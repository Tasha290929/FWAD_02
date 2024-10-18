<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = [
            ['id' => 1, 'title' => 'Задача 1'],
            ['id' => 2, 'title' => 'Задача 2'],
            ['id' => 3, 'title' => 'Задача 3'],
        ];
    
        return view('tasks.index', ['tasks' => $tasks]);
    }
    

    public function create()
    {
        return 'Create page';
    }   
    public function store(Request $request)
    {
        return 'store';
    }
    public function show($id)
    {
        $task = [
            'id' => $id,
            'title' => 'Task Title',
            'description' => 'Описание задачи',
        ];
    
        return view('tasks.show', ['task' => $task]);
    }
    
    public function edit($id)
    {
        return "Edit";
    }
    public function update(Request $request, $id)
    {
      return "update";
    }
    public function destroy($id)
    {
       return "destroy";
    }
}
