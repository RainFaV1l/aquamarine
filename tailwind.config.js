/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                accentBgBlue: '#69CBEA',
                accentDarkerBgBlue: '#249CC2',
                accentBlue: '#09A6D8',
            },
            fontFamily: {
                'montserrat': ['Montserrat, sans-serif'],
                'flower': ['Indie Flower, sans-serif'],
            }
        },
    },
    plugins: [],
}

