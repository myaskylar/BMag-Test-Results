import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const plugin = require('tailwindcss/plugin');

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
            
            colors: {
                cranberry: '#AE0F0A',
                navy: '#19233E',
                amber: '#FCB900',
                skygrey: '#ABB8C3',
                white: '#FFFFFF',
                red: '#FF0000',
                black: '#000000',
            },
        },

        // Extend the default colors as well
        // colors: {
        //     ...defaultTheme.colors,
        // },
        
        // Explicitly set the default text color
        // textColor: {
        //     ...defaultTheme.textColor,
        //     default: defaultTheme.colors.black,
        // },
    },

    plugins: [
        forms,
        plugin(function({ addBase, theme }) {
            addBase({
                'h1': { fontSize: theme('fontSize.2xl') },
                'h2': { fontSize: theme('fontSize.xl') },
                'h3': { fontSize: theme('fontSize.lg') },
            });
        }),
    
    ],
};
