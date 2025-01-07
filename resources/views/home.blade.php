@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="background-container">
    <img id="theme-background" src="{{ asset('img/background.jpg') }}" alt="background" class="background-image">
    <div class="gradient-overlay"></div>
</div>
    <div class="theme-switcher">
        <div class="theme-label">
            <span class="theme-icon">🎨</span>
            <div class="theme-options">
                <span class="theme-name active" data-theme="samurai">SAMOURAÏ</span>
                <span class="theme-name" data-theme="cyber">CYBER</span>
                <span class="theme-name" data-theme="minimal">MINIMAL</span>
            </div>
            <span class="theme-arrow">⇄</span>
        </div>
    </div>
    <div class="logo-container">
        <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
    </div>
<h1 class="main-ttl">Développeur Web à Caen</h1>
    <section class="pres-container">
        <h2 class="pres-ttl ttl" id="presTitle">Artisan du digital</h2>
        <div class="intro-txt">
            <p>Dans l'obscurité du web comme dans l'art du sabre, chaque ligne de code est un geste précis, chaque
                fonction une technique maîtrisée.</p>
            <p>Tel un samouraï moderne, je forge des solutions web avec discipline et détermination, transformant les
                défis en victoires numériques.</p>
            <p>Je suis développeur web, guidé par le Bushido du code : clarté, performance, honneur de l'artisanat.
                Chaque projet est une nouvelle bataille où technologie et créativité s'unissent pour créer des
                expériences web exceptionnelles.</p>
            <p>Découvrez mon arsenal de compétences et les territoires conquis dans ce portfolio.</p>
            <div class="pres-contact">
                <a class="lnk" href="#contact" ><button class="pres-btn">Me contacter</button></a>
                <img class="pres-img" src="{{ asset('img/samurai_deco.png') }}" alt="">
            </div>
        </div>
    </section>

    <img src="{{ asset('img/sabre.png') }}" alt="katana decoration" class="sabre-decoration">

    <h2 class="pres-ttl" id="skillsTitle">Compétences martiales</h2>

    @include('components.skills')


    <img src="{{ asset('img/sabre.png') }}" alt="katana decoration" class="sabre-decoration">

    <section id="portfolio" class="projects-section">
        <h2 class="pres-ttl" id="projectsTitle">Territoires conquis</h2>
        @include('components.projects')

    </section>

    <img src="{{ asset('img/sabre.png') }}" alt="katana decoration" class="sabre-decoration">


    <section id="pricing" class="projects-section">
        <h2 class="pres-ttl" id="projectsTitle">Prestations</h2>
        @include('components.pricing')

    </section>


    <img src="{{ asset('img/sabre.png') }}" alt="katana decoration" class="sabre-decoration">

    <section id="contact" class="contact-section">
        @include('components.contact')

    </section>



@endsection
