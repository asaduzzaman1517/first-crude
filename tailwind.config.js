module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/sass/**/*.scss',
  ],
  theme: {
    extend: {}
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
