/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "!./resources/views/admin/**/*.blade.php",
    "!./resources/views/layouts/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

