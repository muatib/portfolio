<header>

    <div class="header-container">
        <a class="nav-menu-lg-lnk" href="{{ route('home') }}">
            <img id="theme-logo-mobile" src="{{ asset('img/initiales.png') }}" alt="init" class="init">
        </a>
        <div class="menu-burger">
            <img src="{{ asset('img/burger_japon.png') }}" alt="Temple" class="temple">
            <img src="{{ asset('img/katana-burger.png') }}" alt="Swords" class="swords">
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="#portfolio">Réalisations</a></li>
                <li><a href="#pricing">Prestations</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="header-container-lg">
        <a href="{{ route('home') }}">
            <img id="theme-logo-desktop" src="{{ asset('img/initiales.png') }}" alt="init" class="init">
        </a>
        <nav class="nav-menu-lg">
            <ul class="nav-menu-lg-itm">
                <li><a class="nav-menu-lg-lnk" href="{{ route('home') }}">Accueil</a></li>
                <li><a class="nav-menu-lg-lnk" href="#portfolio">Réalisations</a></li>
                <li><a class="nav-menu-lg-lnk" href="#pricing">Prestations</a></li>
                <li><a class="nav-menu-lg-lnk" href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
