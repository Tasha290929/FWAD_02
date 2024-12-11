<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/about">О нас</a></li>
                <li><a href="/tasks">Список задач</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <x-header :title="'To-Do App'" />

    <div class="content">
        @yield('content')
    </div>
    
    <footer>
        &copy; {{ date('Y') }} ToDo App
    </footer>
        
    </main>
</body>
</html>
