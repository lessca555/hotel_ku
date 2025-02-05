<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        @include('landing.layouts.nav')
    </header>
    
    <main>
        @yield('content')
    </main>
    
    <footer>
        @include('landing.layouts.footer')
    </footer>
</body>
</html>