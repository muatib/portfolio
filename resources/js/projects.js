/**
 * Manages the slider functionality and card animations for a project portfolio
 * with enhanced touch support for mobile and tablet devices
 */
class ProjectSlider {
    /**
     * Initializes the slider with all necessary elements
     * @param {string} sliderSelector - Selector for the main slider container
     * @param {string} cardSelector - Selector for project cards
     * @param {string} prevBtnSelector - Selector for previous button
     * @param {string} nextBtnSelector - Selector for next button
     */
    constructor(
        sliderSelector = '.slider',
        cardSelector = '.project-card',
        prevBtnSelector = '.prev',
        nextBtnSelector = '.next'
    ) {
        this.slider = document.querySelector(sliderSelector);
        this.cards = document.querySelectorAll(cardSelector);
        this.prevBtn = document.querySelector(prevBtnSelector);
        this.nextBtn = document.querySelector(nextBtnSelector);
        this.currentIndex = 0;

        // Touch handling properties
        this.touchStartX = 0;
        this.touchEndX = 0;
        this.isDragging = false;
        this.startScrollLeft = 0;

        this.initializeNavigation();
        this.initializeCardAnimations();
        this.initializeTouchEvents();
    }

    /**
     * Initializes touch event handlers for mobile and tablet
     */
    initializeTouchEvents() {
        if (!this.slider) return;

        this.slider.addEventListener('touchstart', (e) => {
            this.touchStartX = e.touches[0].clientX;
            this.startScrollLeft = this.slider.scrollLeft;
            this.isDragging = true;
        });

        this.slider.addEventListener('touchmove', (e) => {
            if (!this.isDragging) return;
            e.preventDefault();
            const touchCurrentX = e.touches[0].clientX;
            const diff = this.touchStartX - touchCurrentX;
            this.slider.scrollLeft = this.startScrollLeft + diff;
        });

        this.slider.addEventListener('touchend', (e) => {
            if (!this.isDragging) return;
            this.isDragging = false;
            const touchEndX = e.changedTouches[0].clientX;
            const diffX = this.touchStartX - touchEndX;

            // Determine swipe direction and threshold
            if (Math.abs(diffX) > 50) {
                if (diffX > 0 && this.currentIndex < this.cards.length - 1) {
                    this.navigateSlider('next');
                } else if (diffX < 0 && this.currentIndex > 0) {
                    this.navigateSlider('prev');
                } else {
                    this.scrollToCard(this.currentIndex);
                }
            } else {
                // Si le swipe n'est pas assez important, retour à la carte actuelle
                this.scrollToCard(this.currentIndex);
            }
        });
    }

    /**
     * Initializes the navigation buttons for the slider
     */
    initializeNavigation() {
        if (!this.slider || !this.cards.length) return;

        this.nextBtn?.addEventListener('click', () => this.navigateSlider('next'));
        this.prevBtn?.addEventListener('click', () => this.navigateSlider('prev'));
    }

    /**
     * Handles slider navigation in both directions
     * @param {string} direction - Direction of navigation ('next' or 'prev')
     */
    navigateSlider(direction) {
        const isNext = direction === 'next';
        const canMove = isNext
            ? this.currentIndex < this.cards.length - 1
            : this.currentIndex > 0;

        if (canMove) {
            this.currentIndex = isNext
                ? this.currentIndex + 1
                : this.currentIndex - 1;

            this.scrollToCard(this.currentIndex);
        }
    }

    /**
     * Scrolls to a specific card in the slider
     * @param {number} index - Index of the target card
     */
    scrollToCard(index) {
        if (this.cards[index]) {
            this.slider.scrollTo({
                left: this.cards[index].offsetLeft,
                behavior: 'smooth'
            });
        }
    }

    /**
     * Initializes the intersection observer for card animations
     */
    initializeCardAnimations() {
        const observer = new IntersectionObserver(
            (entries, observer) => this.handleCardIntersection(entries, observer),
            { threshold: 0.2 }
        );

        this.cards.forEach(card => observer.observe(card));
    }

    /**
     * Handles the intersection observer callback for card animations
     * @param {IntersectionObserverEntry[]} entries - Intersection observer entries
     * @param {IntersectionObserver} observer - The intersection observer instance
     */
    handleCardIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }
}

// Initialize the slider when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    new ProjectSlider();
});








