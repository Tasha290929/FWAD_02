@extends('layouts.app')

@section('title', 'Задача ' . $task['title'])

@section('content')
    <h2>{{ $task['title'] }}</h2>

    <x-task 
        title="{{ $task['title'] }}" 
        description="{{ $task['description'] ?? 'Нет описания' }}" 
        createdAt="{{ $task['created_at'] ?? 'Не указана' }}" 
        updatedAt="{{ $task['updated_at'] ?? 'Не указана' }}" 
        status="{{ $task['status'] ?? 'Не выполнена' }}" 
        priority="{{ $task['priority'] ?? 'Низкий' }}" 
        assignee="{{ $task['assignee'] ?? 'Не назначен' }}" 
    />
@endsection