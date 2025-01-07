<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta Tags Principaux -->
    <title>Vincent Dubois | Développeur Web Freelance à Caen - Expert WordPress & Full Stack</title>
    <meta name="description" content="Vincent Dubois, développeur web freelance à Caen. Expert en création de sites WordPress et développement full stack. Solutions web personnalisées pour les entreprises normandes. Plus de 10 ans d'expérience en développement web.">
    <meta name="author" content="Vincent Dubois">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Mots-clés ciblés -->
    <meta name="keywords" content="Vincent Dubois développeur, développeur web Caen, développeur freelance Caen, développeur WordPress Caen, création site web Normandie, développeur full stack Caen, expert WordPress Normandie, Vincent Dubois freelance">

    <!-- Open Graph / Réseaux Sociaux -->
    <meta property="og:title" content="Vincent Dubois - Développeur Web Freelance Caen | Expert WordPress">
    <meta property="og:description" content="Vincent Dubois, votre développeur web freelance à Caen. Spécialiste WordPress et développement full stack pour vos projets web professionnels en Normandie.">
    <meta property="og:image" content="{{ asset('img/vincent-dubois-developpeur.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Vincent Dubois - Développeur Web">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Vincent Dubois - Développeur Web Freelance à Caen">
    <meta name="twitter:description" content="Expert WordPress et développement full stack. Création de sites web professionnels en Normandie.">
    <meta name="twitter:image" content="{{ asset('img/vincent-dubois-twitter.jpg') }}">

    <!-- Liens canoniques et alternatifs -->
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="fr" href="{{ url()->current() }}">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/initiales.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

    <!-- Preconnect pour optimisation -->
    <link rel="preconnect" href="https://www.google.com">
    <link rel="preconnect" href="https://www.gstatic.com">

    <!-- Schema.org enrichi -->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Person",
        "name": "Vincent Dubois",
        "jobTitle": "Développeur Web Freelance",
        "description": "Développeur web freelance spécialisé en WordPress et développement full stack à Caen",
        "image": "{{ asset('img/vincent-dubois.jpg') }}",
        "url": "{{ url()->current() }}",
        "sameAs": [
            "[Votre LinkedIn]",
            "[Votre GitHub]",
            "[Votre Twitter]"
        ],
        "worksFor": {
            "@type": "Organization",
            "name": "Vincent Dubois - Développement Web",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Caen",
                "postalCode": "14000",
                "addressRegion": "Normandie",
                "addressCountry": "FR"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "49.182863",
                "longitude": "-0.370679"
            }
        },
        "makesOffer": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Développement WordPress",
                    "description": "Création et maintenance de sites WordPress sur mesure"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Développement Full Stack",
                    "description": "Développement d'applications web complètes"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Référencement SEO",
                    "description": "Optimisation pour les moteurs de recherche"
                }
            }
        ],
        "knowsAbout": [
            "WordPress",
            "PHP",
            "JavaScript",
            "HTML5/CSS3",
            "Laravel",
            "React",
            "Développement Full Stack",
            "SEO",
            "MySQL",
            "API REST"
        ],
        "areaServed": {
            "@type": "GeoCircle",
            "geoMidpoint": {
                "@type": "GeoCoordinates",
                "latitude": "49.182863",
                "longitude": "-0.370679"
            },
            "geoRadius": "50000"
        }
    }
    </script>

    <!-- Scripts -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/index.js', 'resources/js/projects.js', 'resources/js/theme.js'])
</head>

<body>
    <header>
        @include('components.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>
