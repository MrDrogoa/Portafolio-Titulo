/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.html", "./js/**/*.js"],
  darkMode: "class", // 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: {
          light: "#4A90E2",
          DEFAULT: "#2074D4",
          dark: "#1756A9",
        },
      },
    },
  },
  plugins: [],
};
