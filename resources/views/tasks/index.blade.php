@extends('layouts.app')

@section('title', 'Список задач')

@section('content')
    <h1>Список задач</h1>
    @foreach ($tasks as $task)
        <p>{{ $task['title'] }} — {{ $task['description'] }}</p>
    @endforeach
@endsection
