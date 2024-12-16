// script.js

// Fungsi untuk navigasi responsif (hamburger menu)
document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".hamburger");
  const navLinks = document.querySelector(".nav-links");

  hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("open");
    hamburger.classList.toggle("active");
  });
});

// Animasi teks "Typing Effect" di bagian Home
const typingText = document.querySelector(".typing-text");
if (typingText) {
  const textArray = ["Web Developer.", "UI/UX Enthusiast.", "Tech Explorer."];
  let textIndex = 0;
  let charIndex = 0;

  function type() {
    if (charIndex < textArray[textIndex].length) {
      typingText.textContent += textArray[textIndex].charAt(charIndex);
      charIndex++;
      setTimeout(type, 100); // Kecepatan mengetik (100ms)
    } else {
      setTimeout(erase, 2000); // Tunggu sebelum menghapus teks
    }
  }

  function erase() {
    if (charIndex > 0) {
      typingText.textContent = textArray[textIndex].substring(0, charIndex - 1);
      charIndex--;
      setTimeout(erase, 50); // Kecepatan menghapus (50ms)
    } else {
      textIndex = (textIndex + 1) % textArray.length; // Pindah ke teks berikutnya
      setTimeout(type, 500); // Tunggu sebelum mulai mengetik lagi
    }
  }

  type(); // Mulai efek mengetik
}

// Scroll smooth untuk navigasi
const links = document.querySelectorAll("a[href^='#']");
links.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    const target = document.querySelector(link.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  });
});

// Validasi Form Kontak
const contactForm = document.querySelector(".contact-form");
if (contactForm) {
  contactForm.addEventListener("submit", (e) => {
    e.preventDefault(); // Mencegah reload halaman
    alert("Pesan berhasil dikirim! Terima kasih telah menghubungi saya.");
    contactForm.reset(); // Reset form setelah submit
  });
}
