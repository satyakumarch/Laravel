<!-- filepath: d:\Laravel\LaravelProject\resources\views\layout.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        nav {
            background-color: #f8f9fa;
            padding: 10px;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #007bff;
        }
        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>