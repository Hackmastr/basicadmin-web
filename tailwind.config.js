import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import daisyUi from 'daisyui';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    // daisyui: {
    //     themes: [
    //         {
    //             basicadmin: {
    //
    //                 "primary": "#d8b4fe",
    //
    //                 "secondary": "#9ca3af",
    //
    //                 "accent": "#fca5a5",
    //
    //                 "neutral": "#07101c",
    //
    //                 "base-100": "#374151",
    //
    //                 "info": "#7dd3fc",
    //
    //                 "success": "#4ade80",
    //
    //                 "warning": "#fed7aa",
    //
    //                 "error": "#ef4444",
    //             },
    //         },
    //     ],
    // },

    plugins: [forms, typography, daisyUi],
};
