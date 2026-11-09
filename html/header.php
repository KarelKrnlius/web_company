<?php
// Deteksi path absolut agar CSS & gambar tetap terbaca di semua folder
$basePath = (strpos($_SERVER['PHP_SELF'], '/html/') !== false) ? '../' : '';
?>

<!-- =============================== -->
<!-- 🔰 HEADER UNIVERSAL - BANK MUTIARA SYARIAH -->
<!-- =============================== -->

<link rel="stylesheet" href="<?= $basePath ?>css/header.css">

<nav class="navbar">
  <div class="container nav-container">

    <!-- Logo -->
    <div class="nav-logo">
      <img src="<?= $basePath ?>image/Logo.png" alt="Logo Bank">
      <span>Bank Syariah Mutiara</span>
    </div>

    <!-- Menu -->
    <ul class="nav-menu" id="nav-menu"> 
      <li><a href="<?= $basePath ?>index.php">Beranda</a></li>
      <li><a href="<?= $basePath ?>html/produk.php">Produk</a></li>
      <li><a href="<?= $basePath ?>html/VisiMisi.php">Visi Misi</a></li>
      <li><a href="<?= $basePath ?>html/TentangPerusahaanKami.php">Informasi Bank</a></li>
    </ul>

    <!-- Tombol Hamburger -->
    <button class="hamburger" id="hamburger" aria-label="Toggle Menu">
      <svg class="icon icon-hamburger" viewBox="0 0 100 80" width="30" height="30">
        <rect width="100" height="10" rx="5"></rect>
        <rect y="30" width="100" height="10" rx="5"></rect>
        <rect y="60" width="100" height="10" rx="5"></rect>
      </svg>
      <svg class="icon icon-close" viewBox="0 0 50 50" width="28" height="28">
        <line x1="5" y1="5" x2="45" y2="45" stroke-width="5" stroke-linecap="round" />
        <line x1="45" y1="5" x2="5" y2="45" stroke-width="5" stroke-linecap="round" />
      </svg>
    </button>

  </div>
</nav>

<!-- Script JS untuk Navbar -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");
  const navbar = document.querySelector(".navbar");

  if (hamburger && navMenu) {
    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
    });
  }

  if (navbar) {
    window.addEventListener("scroll", () => {
      navbar.classList.toggle("scrolled", window.scrollY > 50);
    });
  }
});
</script>
