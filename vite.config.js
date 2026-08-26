import tailwindcss from "@tailwindcss/vite";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/swiper.css",
                "resources/js/app.js",
                "resources/js/home.js",
                "resources/js/detail.js",
                "resources/js/product.js",
                "resources/js/gsap.js",
                "resources/js/slider.js",
                "resources/js/sliderProduct.js",
                "resources/css/filament/admin/theme.css",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
