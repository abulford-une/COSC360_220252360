import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',
		'resources/css/bootstrap.min.css',
		'resources/js/color-modes.js',
		'resources/css/admin/dashboard.css',
		'resources/js/admin/dashboard.js',
		'resources/js/bootstrap.bundle.min.js',
		'resources/js/bootstrap.js',
		'resources/sass/_variables.scss',
            ],
            refresh: true,
        }),
    ],
});
