
import daisyui from 'daisyui'
/** @type {import('tailwindcss').Config} */
export default {
  content: ['./index.html', './src/**/*.{js,ts,jsx,tsx}'],
  theme: {
    extend: {},
  },
  plugins: [daisyui],
  daisyui: {
    themes: [
      {
        mytheme: {
          primary: '#E35F21',
          secondary: '#EEF8F7',
          accent: '#FAAB05',
          neutral: '#010506',
          white: '#EEF8F7',
          'base-100': '#ffffff',
        },
      },
    ],
  },
}

