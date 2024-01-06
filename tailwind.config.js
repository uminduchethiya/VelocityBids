/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        colors:{

            "buttonorange":"#C5250F",

          }
    },
  },
  plugins: [require('flowbite/plugin')],
}

