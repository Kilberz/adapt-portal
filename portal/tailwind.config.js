const { colors } = require('laravel-mix/src/Log');

module.exports = {
  content: [
    './public/**/*.{html,js}',
    './views/**/*.php',
    './views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'red': '#7a0012',
        'gray-light': '#f5f5f5',
        'primary': '#7c00f9',
      },
    },
  },
  // enable dark mode via class strategy
  darkMode: 'class',
  plugins: [
    require('@tailwindcss/forms'),
    require('preline/plugin'),
  ],
}