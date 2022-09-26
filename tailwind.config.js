/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,js,php}',
'./index.php','./pages/**/*.{html,js,php}','./Components/**/*.{html,js,php}',],
  theme: {
    extend: {},
    daisyui: {
      themes: ["light", "dark"],
  }
},
  plugins: [require("daisyui"),
  require("@tailwindcss/typography"),
  require("@tailwindcss/forms")({
    strategy: 'class',
  }),
  require("@tailwindcss/line-clamp"),
  require("@tailwindcss/aspect-ratio")],
}
