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
            },
            
        },
        screens: {
            '450': '450px',
            '500': '500px',
            '800': '800px',
            '1000': '1000px',
            '1200': '1200px',
            '1376': '1376px',
            '1440': '1440px'
        }
    },
    plugins: [],
}

