<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Portfolio')</title>
    <link rel="shortcut icon" type="image/png" href="../img/initiales.png"/>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/index.js', 'resources/js/projects.js'])
</head>
<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
</body>
</html>
