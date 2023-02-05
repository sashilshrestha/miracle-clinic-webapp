const theme = require('./theme.json');
const tailpress = require('@jeffreyvr/tailwindcss-tailpress');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './resources/css/*.css',
    './resources/js/*.js',
    './safelist.txt',
  ],
  theme: {
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '0rem',
      },
    },
    extend: {
      // colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
      colors: {
        'light-grey': '#EFEFEF',
        primary: '#FCCA44',
        'primary-light': '#FFFBF2',
        'primary-mid-light': '#FFF6DD',
        dark: '#231F20',
        text: '#787878',
      },
      fontSize: tailpress.fontSizeMapper(
        tailpress.theme('settings.typography.fontSizes', theme)
      ),
    },
    screens: {
      xs: '480px',
      sm: '600px',
      md: '782px',
      lg: tailpress.theme('settings.layout.contentSize', theme),
      xl: tailpress.theme('settings.layout.wideSize', theme),
      '2xl': '1440px',
      'max-xl': {'max': '1439px'},
      'max-lg': {'max': '1023px'},
      'max-md': {'max': '768px'},
      'max-sm': {'max': '449px'},
    },
  },
  plugins: [tailpress.tailwind],
};
