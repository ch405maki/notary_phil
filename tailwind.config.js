import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['times', ...defaultTheme.fontFamily.sans],
                // sans: ['Inter', ...defaultTheme.fontFamily.sans],
                times: ['Times New Roman', 'serif'],
            },
            colors: {
                'purple': {
                    '50': '#fbf5ff',
                    '100': '#f5e8ff',
                    '200': '#ecd5ff',
                    '300': '#ddb4fe',
                    '400': '#c784fc',
                    '500': '#b055f7',
                    '600': '#9933ea',
                    '700': '#8222ce',
                    '800': '#6c21a8',
                    '900': '#581c87',
                    '950': '#3b0764',
                },
                'yellow': {
                    '50': '#fffaeb',
                    '100': '#fff1c6',
                    '200': '#ffe492',
                    '300': '#ffcc4a',
                    '400': '#ffb620',
                    '500': '#f99307',
                    '600': '#dd6d02',
                    '700': '#b74b06',
                    '800': '#94390c',
                    '900': '#7a2f0d',
                    '950': '#461702',
                },
            },
        },
    },
    plugins: [forms],
};
