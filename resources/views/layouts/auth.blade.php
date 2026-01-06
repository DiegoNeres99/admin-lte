<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Autenticação')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/scss/app.scss')
</head>

<body class="@yield('body-class') bg-body-secondary d-flex align-items-center justify-content-center min-vh-100">

    @yield('content')

    @vite('resources/js/app.js')
</body>

</html>