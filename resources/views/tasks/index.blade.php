@extends('layouts.app')
@section('title', 'Список задач')

@section('content')
<h2>Список задач</h2>

    <ul>
        @foreach ($tasks as $task)  <!-- Перебор статических данных -->
            <li>
                <a href="{{ route('tasks.show', $task['id']) }}">{{ $task['title'] }}</a>
            </li>
        @endforeach
    </ul>
@endsection