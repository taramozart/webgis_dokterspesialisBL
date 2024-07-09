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
        'modal': '#84A584',
        'hijau': '#84A584',
      },
    },
    
  },
  plugins: [],
}

