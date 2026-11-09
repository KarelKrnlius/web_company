<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bank Syariah Mutiara</title>
  <link rel="shortcut icon" href="image/Logo.png">
  <link rel="stylesheet" href="style.css" />
</head>
<?php include("html/header.php"); ?>
<body>
  <!-- SECTION 1: SLIDER -->
  <section class="hero-slider">
        <div class="slider">
            <div class="slide active" style="background-image: url('image/Gedung_1.jpg')"></div>
            <div class="slide" style="background-image: url('image/gedung_2.jpg');"></div>
            <div class="slide" style="background-image: url('image/gedung_3.jpg');"></div>
        </div>

        <div class="hero-text">
            <h1 id="typing"></h1> <!-- Efek ngetik -->
            <p>Informasi tentang Bank Syariah Mutiara</p>
            <a href="html/TentangPerusahaanKami.php" class="btn-primary">BACA SELENGKAPNYA</a>
        </div>

        <!-- Tombol Navigasi -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>

        <!-- Indicator -->
        <div class="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        </section>

<!-- SECTION 2: DEFINISI -->
<section id="definisi" class="info-section">
  <div class="section-header">
    <h2>DEFINISI</h2>
    <h3>WHAT IS PERBANKAN SYARIAH?</h3>
    <p>
      Perbankan syariah adalah sistem perbankan yang kegiatannya dijalankan berdasarkan prinsip syariah atau hukum Islam, yang tidak ada unsur
      <b>MAGHRIB</b> (maysir, gharar dan riba).
    </p>
  </div>

  <div class="definisi-content">
    <div class="definisi-image">
      <img src="image/dalambank.jpg" alt="Bank Syariah" />
    </div>

    <div class="definisi-card">
      <div class="sub-card">
        <h4>Konvensional</h4>
        <ul>
          <li>Berbasis bunga (riba) dan tujuan utama adalah mencari keuntungan.</li>
          <li>Menghimpun dana dari nasabah dengan sistem bunga.</li>
          <li>Menyalurkan dana kepada nasabah dengan sistem bunga.</li>
          <li>Menawarkan produk seperti deposito, kredit, dan investasi konvensional.</li>
          <li>Risiko dan tanggung jawab ditanggung nasabah sepenuhnya.</li>
          <li>Tujuan utama: mencari keuntungan.</li>
        </ul>
      </div>

      <div class="sub-card">
        <h4>Syariah</h4>
        <ul>
          <li>Berbasis prinsip syariah: bagi hasil, jual-beli, sewa-menyewa.</li>
          <li>Menghimpun dana dengan sistem bagi hasil atau titipan.</li>
          <li>Menyalurkan dana berdasarkan prinsip syariah.</li>
          <li>Menawarkan produk seperti deposito syariah, pembiayaan, investasi syariah.</li>
          <li>Risiko dan tanggung jawab dibagi antara bank dan nasabah.</li>
          <li>Tujuan utama: mencari ridho Allah dan keuntungan halal.</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- SECTION 3: PERBEDAAN -->
<section id="perbedaan" class="perbedaan-section">
  <h2>Perbedaan Bunga & Bagi Hasil</h2>
  <div class="compare-container">
    <div class="compare-card bunga">
      <img src="image/BungaBank.jpg" alt="Bunga Bank">
      <h3>Bunga</h3>
      <p>Bunga adalah imbalan atas penggunaan uang (modal) yang disewakan, dihitung dari modal dan harus dibayar terlepas dari untung rugi usaha.</p>
    </div>

    <div class="compare-card hasil">
      <img src="image/bagihasil.jpg" alt="Bagi Hasil">
      <h3>Bagi Hasil</h3>
      <p>Bagi hasil adalah pembagian keuntungan antara pemilik modal dan pengelola usaha sesuai nisbah yang disepakati.</p>
    </div>
  </div>
</section>

<!-- SECTION 4: TENTANG KAMI -->
<section class="tentang-kami" id="tentang-kami">
  <div class="tentang-container">
    <h2>TENTANG KAMI</h2>
    <p>
      Bank Syariah Mutiara hadir sebagai lembaga keuangan yang berlandaskan pada nilai-nilai Islam.
      Kami berkomitmen memberikan pelayanan terbaik kepada seluruh nasabah dengan menjunjung tinggi
      kejujuran, amanah, dan profesionalitas. Setiap kegiatan usaha kami dijalankan sesuai prinsip
      syariah — tanpa riba, gharar, dan maysir — demi terciptanya sistem keuangan yang adil dan
      menyejahterakan.
    </p>

    <p>
      Kami percaya bahwa keberkahan dalam usaha tidak hanya diukur dari keuntungan, tetapi juga dari
      manfaat yang diberikan kepada masyarakat. Dengan semangat kolaborasi dan inovasi, kami terus
      melangkah untuk menjadi bank syariah yang modern, transparan, dan penuh keberkahan.
    </p>

    <div class="signature">
      <span>Bank Syariah Mutiara</span>
      <p>— Bersama Menuju Keuangan yang Berkah —</p>
    </div>
  </div>
</section>
<?php include("html/footer.php"); ?>

  <script src="script/slider.js"></script>
  <script src="script/typing.js"></script>
</body>
</html>
