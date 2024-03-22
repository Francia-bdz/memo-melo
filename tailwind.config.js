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
                alinsa: ["Alinsa", "sans-serif"],
                inter: ["Inter", "sans-serif"]
            },
            colors: {
                'beige': '#FFEFDE',
                'pink': '#F79C99',
                'pinkHover': '#E3908D',
                'green': "#0F790F",
                'greenHover' : '#0C610C',
            },
            boxShadow:{
                'button': ['4px 4px 0px 0px rgb(0 0 0 / 1)'],
                'buttonHover': ['2px 2px 0px 0px rgb(0 0 0 / 1)']
            }
        },
    },

    plugins: [forms],
};
