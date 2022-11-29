const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
  ],

  theme: {
    extend: {
        colors: {
            'primary': '#41DEA0',
            'secondary': '#00092C',
            'third': '#31B380'
          },
        animation: {
            'spin-slow': 'spin 10s linear infinite',
        },
        height: {
            '128': '27rem',
            '130' : '32rem'
        }
    },
  },

  plugins: [
    require("daisyui"),
    require('@tailwindcss/forms')
]
}
