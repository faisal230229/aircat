/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        '.vendor/awcodes/filament-tiptap-editor/resources/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                'primary': 'rgba(0, 112, 192, 1)',
                'secondary': 'rgba(51, 51, 51, 1)',
                'neutral-normal': 'rgba(51, 51, 51, 0.2)',
                'neutral-medium': 'rgba(51, 51, 51, 0.6)',
                'neutral-dark': 'rgba(51, 51, 51, 0.8)',
                'neutral-light': 'rgba(255, 255, 255, 1)',
                'neutral-accent': 'rgba(158, 158, 158, 1)',
                'neutral-border': 'rgba(207, 211, 255, 1)',
                'neutral-dark-border': 'rgba(191, 191, 191, 1)',
                'primary-bg': 'rgba(245, 245, 245, 1)',
                'secondary-bg': 'rgba(233, 233, 233, 1)',
                'neutral-gray': 'rgba(217, 217, 217, 1)'
            },
            fontFamily: {
                'mulish': ['Mulish', 'sans-serif'],
            },
            keyframes: {
                ping: {
                    '75%, 100%': {
                        transform: 'scale(1.4)',
                        opacity: 0,
                    }
                }
            }
        },
    },
    plugins: [],
}
