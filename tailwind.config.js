/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ "./resources/**/*.blade.php",
  "./resources/**/*.js",
],
  theme: {
    extend: {
    	width:{
        '96' : '24rem',
    }
},
  },
  plugins: [],
}
