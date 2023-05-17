/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'green-logo': '#169F1A',
        'ijo': '#00B074',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

