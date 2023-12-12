import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },

        colors: {
            cranberry: '#AE0F0A',
            navy: '#19233E',
            amber: '#FCB900',
            skygrey: '#ABB8C3',
            white:'#FFFFFF',
            red: '#FF0000',


        }
    },

    plugins: [forms],
};
