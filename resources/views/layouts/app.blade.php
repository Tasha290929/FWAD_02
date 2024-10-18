<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head>
<body>
    @include('components.header')
    <main>
        @yield('content')  
    </main>

    <footer>
        <p>© 2024 My To-Do App</p>
    </footer>
</body>
</html>
