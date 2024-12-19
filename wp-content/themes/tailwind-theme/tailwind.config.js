module.exports = {
  content: [
    "./*.php", // Semua file PHP di root tema
    "./template-parts/**/*.php", // Semua file PHP di subfolder template-parts
    "./src/**/*.js", // Jika Anda menggunakan file JavaScript di src
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};


