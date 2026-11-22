<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - Laravel POS</title>
</head>
<body>
 <nav>
    <a href="{{ route('home') }}">Today</a> |
    <a href="{{ route('tasks.index') }}">Task List</a> |
    <a href="{{ route('profile') }}">Profile</a> |
    <a href="{{ route('about') }}">About</a>
</nav>

    <hr>

    <main>
        @yield('content')
    </main>
</body>
</html>