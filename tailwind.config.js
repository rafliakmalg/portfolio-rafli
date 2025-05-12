import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Outfit", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "font-primary": "black", //You can also use 'black' if you prefer
                "font-secondary": "emerald", // You can also use 'black' if you prefer
            },
        },
    },
    plugins: [],
};
