/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    "./storage/framework/views/*.php",
  ],
  theme: {
    extend: {
      colors: {
        'luxury-green': '#1a4d2e',
        'light-green': '#2d8659',
        'gold': '#c5a572',
        'light-gold': '#e5d5b7',
        'cream': '#f9f6f0',
    },
    fontFamily: {
        'playfair': ['"Playfair Display"', 'serif'],
        'cormorant': ['"Cormorant Garamond"', 'serif'],
        'montserrat': ['Montserrat', 'sans-serif'],
    },
    },
  },
  plugins: [],
}