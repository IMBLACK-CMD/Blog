<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="{{asset('css/app.css')}}">
        <title>BlogPost</title>
    </head>
    <body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Home</a>
            </li>
            <li>
                <a href="" class="p-3">Posts</a>
            </li>
            <li>
                <a href="" class="p-3">Dashboard</a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Nelson ongiti</a>
            </li>
            <li>
                <a href="" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{route('register')}}" class="p-3">Register</a>
            </li>
            <li>
                <a href="" class="p-3">Logout</a>
            </li>
        </ul>
    </nav>
    @yield('content')
    </body>
</html>