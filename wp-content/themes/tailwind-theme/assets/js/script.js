// Swiper Autoplay
const autoplaySwiper = new Swiper('.swiper-autoplay', {
  loop: true, // Mengulang slide
  autoplay: {
    delay: 2000, // Waktu delay (ms) untuk setiap slide
    disableOnInteraction: false, // Agar autoplay tidak berhenti saat interaksi
  },
  slidesPerView: 5, // Menampilkan 5 slide secara bersamaan di layar besar
  spaceBetween: 2, // Menurunkan jarak antar slide
  centeredSlides: false, // Tidak menempatkan slide di tengah
  breakpoints: {
    1024: {
      slidesPerView: 5, // Menampilkan 4 slide pada layar lebih besar dari 1024px
      spaceBetween: 2,
    },
    768: {
      slidesPerView: 3, // Menampilkan 3 slide pada layar lebih kecil dari 1024px (dan lebih besar dari 640px)
      spaceBetween: 2,
    },
    640: {
      slidesPerView: 3, // Menampilkan 3 slide pada layar lebih kecil dari 768px
      spaceBetween: 2,
    },
    390: {
      slidesPerView: 3, // Menampilkan 3 slide pada layar lebih kecil dari 768px
      spaceBetween: 2,
    },
    360: {
      slidesPerView: 3, // Menampilkan 3 slide pada layar lebih kecil dari 768px
      spaceBetween: 2,
    },
  },
});

// Swiper card
  const cardSwiper = new Swiper('.swiper-cards', {
    loop: true, // Mengaktifkan loop
    slidesPerView: 3, // Menampilkan 3 card sekaligus
    spaceBetween: 20, // Jarak antar card
    navigation: {
        nextEl: '.swiper-button-next', // Tombol untuk navigasi ke slide berikutnya
        prevEl: '.swiper-button-prev', // Tombol untuk navigasi ke slide sebelumnya
    },
    breakpoints: {
        1024: {
            slidesPerView: 4, // 4 card pada layar besar
        },
        768: {
            slidesPerView: 2, // 2 card pada layar tablet
        },
        640: {
            slidesPerView: 1, // 1 card pada layar kecil
        },
        390: {
            slidesPerView: 1, // 1 card pada layar kecil
        },
        360: {
          slidesPerView: 1, // 1 card pada layar kecil
        },
    },
});

// Button back to top
const backToTopButton = document.getElementById("backToTop");

// Tampilkan tombol ketika scroll melebihi 100px
window.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    backToTopButton.classList.add("opacity-100", "visible");
    backToTopButton.classList.remove("opacity-0", "invisible");
  } else {
    backToTopButton.classList.add("opacity-0", "invisible");
    backToTopButton.classList.remove("opacity-100", "visible");
  }
});

// Scroll ke atas ketika tombol diklik
backToTopButton.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// Responsive Navbar
document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.getElementById("mobile-menu-button");
  const closeButton = document.getElementById("close-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");
  const menuOverlay = document.getElementById("menu-overlay");

  function openMenu() {
      mobileMenu.classList.remove("-translate-x-full");
      menuOverlay.classList.remove("hidden");
  }

  function closeMenu() {
      mobileMenu.classList.add("-translate-x-full");
      menuOverlay.classList.add("hidden");
  }

  menuButton.addEventListener("click", openMenu);
  closeButton.addEventListener("click", closeMenu);
  menuOverlay.addEventListener("click", closeMenu);
});