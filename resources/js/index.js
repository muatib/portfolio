
/**
 * Handles the burger menu functionality
 * @param {HTMLElement} menuBurger - The burger menu button element
 * @param {HTMLElement} navMenu - The navigation menu element
 */
function initializeBurgerMenu(menuBurger, navMenu) {
    const menuLinks = document.querySelectorAll('.nav-menu a');

    // Toggle menu on burger click
    menuBurger.addEventListener('click', () => {
        menuBurger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Close menu when clicking links
    menuLinks.forEach(link => {
        link.addEventListener('click', () => closeMenu(menuBurger, navMenu));
    });

    // Close menu when clicking outside
    document.addEventListener('click', (event) => {
        if (!menuBurger.contains(event.target) && !navMenu.contains(event.target)) {
            closeMenu(menuBurger, navMenu);
        }
    });
}

/**
 * Closes the navigation menu
 * @param {HTMLElement} menuBurger - The burger menu button element
 * @param {HTMLElement} navMenu - The navigation menu element
 */
function closeMenu(menuBurger, navMenu) {
    menuBurger.classList.remove('active');
    navMenu.classList.remove('active');
}

/**
 * Animates individual letters in a text element
 * @param {HTMLElement} element - The element containing text to animate
 */
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

/**
 * Creates and initializes an Intersection Observer for animations
 * @param {Function} animateLetters - The letter animation function
 * @returns {IntersectionObserver} The configured observer
 */
function createAnimationObserver(animateLetters) {
    return new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');

                if (entry.target.id === 'skillsTitle') {
                    animateLetters(entry.target);
                }

                entry.observer.unobserve(entry.target);
            }
        });
    });
}

// Main initialization
document.addEventListener('DOMContentLoaded', () => {
    // Initialize burger menu
    const menuBurger = document.querySelector('.menu-burger');
    const navMenu = document.querySelector('.nav-menu');
    if (menuBurger && navMenu) {
        initializeBurgerMenu(menuBurger, navMenu);
    }

    // Initialize animations
    const skillsTitle = document.querySelector('#skillsTitle');
    const skillsContainer = document.querySelector('.skills-icon-container');

    if (skillsTitle || skillsContainer) {
        const observer = createAnimationObserver(animateLetters);
        if (skillsTitle) observer.observe(skillsTitle);
        if (skillsContainer) observer.observe(skillsContainer);
    }
});
