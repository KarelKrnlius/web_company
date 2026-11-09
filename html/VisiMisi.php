<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Visi & Misi - Bank Syariah Mutiara</title>
  <link rel="shortcut icon" href="../image/Logo.png">
  <link rel="stylesheet" href="../css/VisiMisi.css" />
</head>
<?php include("header.php"); ?>
<body>
  <!-- SECTION: VISI MISI -->
  <section class="visi-misi">
    <div class="overlay"></div>
    <div class="container">
      <h1 class="title">VISI & MISI</h1>

      <!-- VISION -->
      <div class="vision-box animate-fade">
        <h2>VISI</h2>
        <p>
          Menjadikan <span>Bank Syariah Mutiara</span> sebagai pusat transaksi perbankan
          yang berlandaskan <b>prinsip-prinsip syari’ah</b>.
        </p>
      </div>

      <!-- MISSION -->
      <div class="mission-box animate-slide">
        <h2>MISI</h2>
        <ul>
          <li>Memberikan layanan yang unggul dengan mengutamakan kepuasan nasabah.</li>
          <li>Menerapkan akad dalam setiap transaksi.</li>
          <li>Menetapkan tata kelola perusahaan yang berintegritas pada nilai perusahaan.</li>
        </ul>
      </div>
    </div>
  </section>
  <?php include("footer.php"); ?>

<!-- ✅ SCRIPT ANIMASI MUNCUL OTOMATIS DENGAN EFEK TRANSISI -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".animate-fade, .animate-slide");

    // beri sedikit delay agar browser sempat render posisi awal
    setTimeout(() => {
      elements.forEach(el => el.classList.add("visible"));
    }, 150); // 150ms = waktu ideal biar efeknya halus
  });
</script>

</body>
</html>
