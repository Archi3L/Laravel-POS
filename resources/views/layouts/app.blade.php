<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - Laravel POS</title>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ url('/about') }}">About</a> |
        <a href="{{ url('/customers') }}">Customers</a> |
        <a href="{{ url('/users') }}">Users</a>
    </nav>

    <hr>

    <main>
        @yield('content')
    </main>
</body>
</html>