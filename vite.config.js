import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/js/scripts.min.js",
                "resources/css/styles.min.css",
                "resources/css/home-default.css",
            ],
            refresh: true,
        }),
    ],
});
