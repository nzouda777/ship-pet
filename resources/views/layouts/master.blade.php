<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @stack('stylesheets')
    @stack('scripts.header')
    @vite('resources/css/app.css')
@vite('resources/css/vimeo.css')
    <title>Demo - {{ $title ?? 'demo' }}</title>
</head>
<body class="mx-auto font-work w-full max-w-screen-4xl space-y-12">
    @include('layouts.partials._nav', ['element' => 'the navbar'])
    @yield('content')

    <footer>
        @yield('footer')
    </footer>
    @stack('scripts.footer')
</body>
</html>