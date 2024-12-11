@extends('layouts.app')

@section('title', 'Просмотр задачи')

@section('content')
    <x-task
        title="{{ $task['title'] }}"
        description="{{ $task['description'] }}"
        createdAt="{{ $task['created_at'] }}"
        updatedAt="{{ $task['updated_at'] }}"
        status="{{ $task['status'] }}"
        priority="{{ $task['priority'] }}"
        assignee="{{ $task['assignee'] }}"
    />
@endsection
