/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js,php}"],
  theme: {
    colors: {
      darksystem: '#11101D',
      darkmode: '#1D1B31',
      graywarrior: '#F3F4F6',
      graysimple: '#9CA3AF',
      freshgreen: '#10B981',
      white: '#FFFFFF',
    },
    boxShadow: {
      custom: '0 5px 10px rgba(0, 0, 0, 0.2)',
    },
    extend: {},
  },
  plugins: [],
}