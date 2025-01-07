import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/index.js', 'resources/js/projects.js', 'resources/js/theme.js'],
            refresh: true,
        }),
    ],
});
