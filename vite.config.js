import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/charts.js",
                "resources/js/components.materialize.js",
                "resources/js/bootstrap.js",
            ],
            refresh: true,
        }),
    ],
});
