document.querySelector(".menu-burger").addEventListener("click", function () {
    this.classList.toggle("active");
    document.querySelector(".nav-menu").classList.toggle("active");
});

// document.addEventListener("DOMContentLoaded", function () {
//     const observer = new IntersectionObserver((entries) => {
//         entries.forEach((entry) => {
//             if (entry.isIntersecting) {
//                 entry.target.classList.add("visible");
//             }
//         });
//     });

//     const skillsContainer = document.querySelector(".skills-icon-container");
//     if (skillsContainer) observer.observe(skillsContainer);

// });
document.addEventListener('DOMContentLoaded', function () {
    // Fonction pour animer les lettres
    function animateLetters(element) {
        const text = element.textContent;
        element.textContent = ''; // Efface le texte initial

        [...text].forEach((char, index) => {
            const span = document.createElement('span');
            span.textContent = char;
            span.classList.add('letter');
            span.style.animationDelay = `${index * 0.08}s`; // Ajout d'un délai pour chaque lettre
            element.appendChild(span);
        });
    }

    // Initialiser Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Ajoute la classe `visible` lorsque l'élément est visible
                entry.target.classList.add('visible');

                // Si c'est le titre des skills, animer les lettres
                if (entry.target.id === 'skillsTitle') {
                    animateLetters(entry.target);
                }

                // Déconnecter l'observation pour éviter des répétitions inutiles
                observer.unobserve(entry.target);
            }
        });
    });

    // Observer les éléments nécessaires
    const skillsTitle = document.querySelector('#skillsTitle');
    const skillsContainer = document.querySelector('.skills-icon-container');

    if (skillsTitle) observer.observe(skillsTitle);
    if (skillsContainer) observer.observe(skillsContainer);
});

