import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php"
],
  theme: {
    extend: {
      fontFamily: {
        sans : [ "FigTree" , ...defaultTheme.fontFamily.sans]
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography')
  ],
}

