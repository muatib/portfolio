@include('components.header')
<div class="background-container">

    <img src="{{ asset('img/background2.jpg') }}" alt="background" class="background-image">
    <div class="gradient-overlay"></div>

</div>

<img class="logo" src="./img/logo.png" alt="logo">

<section class="pres-container">
    <h1 class="pres-ttl animated-title" id="presTitle">Artisan du digital</h1>
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
            <button class="pres-btn" onclick="window.location='{{ route('contact') }}'">Contact</button>
            <img class="pres-img" src="./img/samurai_deco.png" alt="">
        </div>
    </div>
</section>

<img src="{{ asset('img/sabre.png') }}" alt="katana decoration" class="sabre-decoration">

<h2 class="pres-ttl skills-ttl" id="skillsTitle">Compétences martiales</h2>
<section class="skills-container">
    <div class="skills-icon-container">
        <div class="icon-wrapper">
            <img style="--i: 0" class="skills-icon-stack" src="{{ asset('img/stack.png') }}" alt="stack technique">
        </div>
        <div class="icon-wrapper">
            <img style="--i: 1" class="skills-icon" src="{{ asset('img/laravel.png') }}" alt="laravel">
        </div>
        <div class="icon-wrapper">
            <img style="--i: 2" class="skills-icon" src="{{ asset('img/SCSS.png') }}" alt="style">
        </div>
        <div class="icon-wrapper">
            <img style="--i: 3" class="skills-icon" src="{{ asset('img/php.png') }}" alt="php">
        </div>
        <div class="icon-wrapper">
            <img style="--i: 4" class="skills-icon" src="{{ asset('img/wordpress.png') }}" alt="wordpress">
        </div>
        <div class="icon-wrapper">
            <img style="--i: 5" class="skills-icon" src="{{ asset('img/figma.png') }}" alt="figma">
        </div>
        <p class="skill-txt">et plus encore</p>
    </div>
</section>
<img src="{{ asset('img/sabre.png') }}" alt="katana decoration" class="sabre-decoration sabre">



</body>
@include('components.footer')
</html>
