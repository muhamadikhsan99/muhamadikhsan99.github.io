/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: { fontFamily: {
        sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
      },
    },
    },
    plugins: [],
  }

  // tailwind.config.js
module.exports = {
  content: [
    './resources/**/*.{blade.php,js,vue,css}', // Sesuaikan dengan lokasi file kamu
  ],
  theme: {
    extend: {
      animation: {
        'fade-in': 'fadeIn 2s ease-out',  // Menambahkan animasi fade-in
        // Bisa menambahkan animasi lain di sini
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: 0 },
          '100%': { opacity: 1 },
        },
        // Animasi lain bisa didefinisikan di sini
      },
    },
  },
  plugins: [],
}

module.exports = {
  content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
  theme: {
    extend: {
      animation: {
        'fade-in': 'fade-in 2s ease-in-out',
      },
      keyframes: {
        'fade-in': {
          '0%': { opacity: 0 },
          '100%': { opacity: 1 },
        },
      },
    },
  },
  plugins: [],
}

//Halama Home
module.exports = {
  content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'], // Sesuaikan dengan proyek Anda
  theme: {
    extend: {
      animation: {
        blink: 'blink 1.5s infinite', // Efek berkedip
        float: 'float 3s ease-in-out infinite', // Efek melayang
      },
      keyframes: {
        blink: {
          '0%, 100%': { opacity: '1' },
          '50%': { opacity: '0.5' },
        },
        float: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-10px)' },
        },
      },
    },
  },
  plugins: [],
};


// tailwind.config.js
module.exports = {
  content: [
    './resources/**/*.{blade.php,js,vue,css}', // Sesuaikan dengan lokasi file kamu
  ],
  theme: {
    extend: {
      colors: {
        neonBlue: '#00FFFF',
        neonPurple: '#9B4DFF',
        neonPink: '#FF00FF',
      },
      animation: {
        'gradient-shift': 'gradient-shift 10s ease infinite',
        'neon-flicker': 'neon-flicker 1.5s infinite alternate',
      },
      keyframes: {
        'gradient-shift': {
          '0%': { backgroundPosition: '0% 50%' },
          '50%': { backgroundPosition: '100% 50%' },
          '100%': { backgroundPosition: '0% 50%' },
        },
        'neon-flicker': {
          '0%': { textShadow: '0 0 5px #ff004f, 0 0 10px #ff004f, 0 0 15px #ff004f, 0 0 20px #ff004f' },
          '50%': { textShadow: '0 0 2px #ff004f, 0 0 5px #ff004f, 0 0 10px #ff004f, 0 0 15px #ff004f' },
          '100%': { textShadow: '0 0 5px #ff004f, 0 0 10px #ff004f, 0 0 15px #ff004f, 0 0 20px #ff004f' },
        },
      },
      boxShadow: {
        neon: '0 0 5px #00FFFF, 0 0 10px #9B4DFF, 0 0 15px #FF00FF',
      },
    },
  },
  plugins: [],
};

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php", // Pastikan file Blade terdeteksi
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
        montserrat: ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [],
};


