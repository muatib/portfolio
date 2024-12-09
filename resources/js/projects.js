// const slider = document.querySelector('.slider');
const cards = document.querySelectorAll('.project-card');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

let currentIndex = 0;

nextBtn?.addEventListener('click', () => {
    if (currentIndex < cards.length - 1) {
        currentIndex++;
        slider.scrollTo({
            left: cards[currentIndex].offsetLeft,
            behavior: 'smooth'
        });
    }
});

prevBtn?.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        slider.scrollTo({
            left: cards[currentIndex].offsetLeft,
            behavior: 'smooth'
        });
    }
});




document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".project-card");

    const observerOptions = {
        threshold: 0.2, // La carte doit être visible à 20% pour être animée
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target); // Stop observing une fois animée
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    cards.forEach(card => observer.observe(card));
});
