document.addEventListener('DOMContentLoaded', () => {
    const themeNames = document.querySelectorAll('.theme-name');
    const logoMobile = document.getElementById('theme-logo-mobile');
    const logoDesktop = document.getElementById('theme-logo-desktop');
    const backgroundImage = document.getElementById('theme-background');

    /**
     * Updates the logo based on the theme name
     * @param {string} themeName - The theme name
     */
    function updateLogo(themeName) {
        const logoMap = {
            // Path to the cyber logo
            cyber: '/img/cyber-logo.png',
            // Path to the minimal logo
            minimal: '/img/minimal-logo.png',
        };

        const logoPath = logoMap[themeName] || '/img/initiales.png';

        // Update the logo on both mobile and desktop
        [logoMobile, logoDesktop].forEach(logo => {
            if (logo) {
                // Fade out the logo first
                logo.style.opacity = '0';

                // Update the logo after a delay
                setTimeout(() => {
                    logo.src = logoPath;
                    logo.style.opacity = '1';
                }, 300);
            }
        });
    }

    /**
     * Updates the background image based on the theme name
     * @param {string} themeName - The theme name
     */
    function updateBackgroundImage(themeName) {
        // Check if the background image element exists
        if (!backgroundImage) return;

        try {
            // Start by fading out the current background image
            backgroundImage.style.opacity = '0';

            // Map theme names to their respective background image paths
            const backgroundMap = {
                cyber: '/img/cyber-background.jpg',
                minimal: '/img/minimal-background.jpg',
            };

            // Determine the background path based on the theme name
            const backgroundPath = backgroundMap[themeName] || '/img/background.jpg';

            // Update the background image after a delay to allow for fade out
            setTimeout(() => {
                backgroundImage.src = backgroundPath;
                backgroundImage.style.opacity = '1'; // Fade in the new background image
            }, 300);
        } catch (error) {
            // Log any errors that occur during the update
            console.error('Error updating background image:', error);
        }
    }

    /**
     * Sets the theme of the application
     * @param {string} themeName - The theme name
     */
    function setTheme(themeName) {
        const defaultTheme = 'samurai';
        const rootElement = document.documentElement;

        if (!rootElement) {
            console.error('Root element not found');
            return;
        }

        // Remove the data-theme attribute if the default theme is selected
        if (themeName === defaultTheme) {
            rootElement.removeAttribute('data-theme');
        } else {
            // Set the data-theme attribute to the selected theme
            rootElement.setAttribute('data-theme', themeName);
        }

        // Update the logo and background image
        updateLogo(themeName);
        updateBackgroundImage(themeName);

        if (Array.isArray(themeNames)) {
            // Toggle the active class on theme name elements
            themeNames.forEach(themeElement => {
                if (themeElement && themeElement.dataset) {
                    themeElement.classList.toggle(
                        'active',
                        themeElement.dataset.theme === themeName
                    );
                }
            });
        } else {
            console.warn('themeNames is not an array');
        }

        try {
            // Save the selected theme to local storage
            localStorage.setItem('theme', themeName);
        } catch (error) {
            console.error('Error setting theme:', error);
        }
    }

    // Écouteurs d'événements
    themeNames.forEach(name => {
        name.addEventListener('click', () => {
            setTheme(name.dataset.theme);
        });
    });

    // Initialisation au chargement
    const savedTheme = localStorage.getItem('theme') || 'samurai';
    setTheme(savedTheme);
});
