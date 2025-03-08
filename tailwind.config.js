/** @type {import('tailwindcss').Config} */
import forms from '@tailwindcss/forms';

export default {
    preset: [
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        forms,
        require('flowbite/plugin'),
    ],
}

