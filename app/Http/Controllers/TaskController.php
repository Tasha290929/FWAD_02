<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = [
            ['id' => 1, 'title' => 'Задача 1', 'description' => 'Описание задачи 1'],
            ['id' => 2, 'title' => 'Задача 2', 'description' => 'Описание задачи 2'],
            ['id' => 3, 'title' => 'Задача 3', 'description' => 'Описание задачи 3'],
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
            'title' => 'Название задачи',
            'description' => 'Описание задачи',
            'created_at' => '2024-10-24',
            'updated_at' => '2024-10-25',
            'status' => 'В процессе',
            'priority' => 'Высокий',
            'assignee' => 'Иван Иванов',
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
