<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="shortcut icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset("js/app.js") }}"></script>
    
    @yield('head_scripts')
</head>

<body>
    <header>
        @include('partials._header')
    </header>

    <main>
        @yield('main_content')
    </main>

    @include('partials._footer')
</body>

</html>