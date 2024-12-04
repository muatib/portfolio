<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/index.js'])

</head>
<header>
    <div class="header-container">
        <img src="{{ asset('img/initiales.png') }}" alt="init" class="init">
        <div class="menu-burger">
            <img src="{{ asset('img/soleil.png') }}" alt="Temple" class="temple">
            <img src="{{ asset('img/katana-burger.png') }}" alt="Swords" class="swords">
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="header-container-lg">
        <img src="{{ asset('img/initiales.png') }}" alt="init" class="init">
        <nav class="nav-menu-lg">
            <ul class="nav-menu-lg-itm">
                <li><a class="nav-menu-lg-lnk" href="{{ route('home') }}">Accueil</a></li>
                <li><a class="nav-menu-lg-lnk" href="#portfolio">Portfolio</a></li>
                <li><a class="nav-menu-lg-lnk" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>



<body>