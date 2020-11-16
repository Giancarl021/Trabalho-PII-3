<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}">
    <link rel="shortcut icon" href="https://dummyimage.com/100x100/fff/000.png&text=PI-III" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header class="section">
        <h1 class="title">@yield('title')</h1>
        <h2 class="subtitle">@yield('subtitle')</h2>
    </header>
        
    @yield('pre-content')

    <section class="section container">
        @yield('content')
    </section>
</body>
</html>
