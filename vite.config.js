import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/images/favicon.ico',
                'resources/assets/libs/aos/aos.css',
                'resources/assets/js/layout.js',
                'resources/assets/css/bootstrap.min.css',
                'resources/assets/css/icons.min.css',
                'resources/assets/css/app.min.css',
                'resources/assets/css/custom.min.css',
                'resources/assets/libs/bootstrap/js/bootstrap.bundle.min.js',
                'resources/assets/libs/simplebar/simplebar.min.js',
                'resources/assets/libs/node-waves/waves.min.js',
                'resources/assets/libs/feather-icons/feather.min.js',
                'resources/assets/js/pages/plugins/lord-icon-2.1.0.js',
                'resources/assets/js/plugins.js',
                'resources/assets/libs/aos/aos.js',
                'resources/assets/libs/prismjs/prism.js',
                'resources/assets/js/pages/animation-aos.init.js',
                'resources/assets/js/app.js',

            ],
            refresh: true,
        }),
    ],
});
