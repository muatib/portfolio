
document.querySelector('.menu-burger').addEventListener('click', function() {
    this.classList.toggle('active');
    document.querySelector('.nav-menu').classList.toggle('active');
});
// document.addEventListener('DOMContentLoaded', function() {
//     // Select all elements with the animated-title class
//     const titles = document.querySelectorAll('.animated-title');

//     // Apply animation to each title
//     titles.forEach(title => {
//         const titleText = title.textContent;
//         title.textContent = '';

//         [...titleText].forEach((char, index) => {
//             const span = document.createElement('span');
//             span.textContent = char;
//             span.classList.add('letter');
//             span.style.animationDelay = `${index * 0.08}s`;
//             title.appendChild(span);
//         });
//     });
// });
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour animer les lettres
    function animateLetters(element) {
        const text = element.textContent;
        element.textContent = '';

        [...text].forEach((char, index) => {
            const span = document.createElement('span');
            span.textContent = char;
            span.classList.add('letter');
            span.style.animationDelay = `${index * 0.08}s`;
            element.appendChild(span);
        });
    }

    // Observer pour le scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Si c'est le titre des skills, on anime les lettres
                if (entry.target.id === 'skillsTitle') {
                    animateLetters(entry.target);
                }
            }
        });
    });

    // Observer le container skills et son titre
    const skillsTitle = document.querySelector('#skillsTitle');
    const skillsContainer = document.querySelector('.skills-icon-container');

    if (skillsTitle) observer.observe(skillsTitle);
    if (skillsContainer) observer.observe(skillsContainer);
});

