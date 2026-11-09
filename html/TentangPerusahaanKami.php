<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tentang Perusahaan Kami - Bank Syariah Mutiara</title>
  <link rel="shortcut icon" href="../image/Logo.png">
  <link rel="stylesheet" href="../css/TentangPerusahaanKami.css" />
</head>

<body>
  <?php include("header.php"); ?>

  <!-- SECTION: ABOUT COMPANY -->
  <section class="about animate-fade">
    <div class="overlay"></div>
    <div class="container">
      <h1 class="title animate-slide">Introduction to The Company</h1>

      <div class="about-content">
        <!-- INFO BOX -->
        <div class="info-box animate-fade">
          <p><strong>Nama:</strong> PT. Bank Syariah Mutiara</p>
          <p><strong>Kantor Pusat:</strong> Jl. Sekolah Duta VI No.11, RT.4/RW.14, Pd. Pinang, Kec. Kebayoran Lama, Kota Jakarta Selatan, DKI Jakarta 12310</p>
          <p><strong>Telp:</strong> (021) 12131418</p>
          <p><strong>Email:</strong> <a href="mailto:SyariahMutiara@gmail.com">SyariahMutiara@gmail.com</a></p>
          <p><strong>Website:</strong> <a href="http://banksyariahmutiara.kesug.com" target="_blank">banksyariahmutiara.kesug.com</a></p>
          <p><strong>Sosial Media:</strong> @mutiarasyariah_id</p>
          <p><strong>Tanggal Berdiri:</strong> 11 April 2000</p>
          <p><strong>Tanggal Beroperasi:</strong> 15 Juli 2000</p>
          <p><strong>Modal Dasar:</strong> Rp 5.000.000.000,00</p>
          <p><strong>Modal Disetor:</strong> Rp 9.000.000.000,00</p>
          <p><strong>Direktur:</strong> Muhammad Al - Maul</p>
          <p><strong>Pengawasan Bank:</strong> Otoritas Jasa Keuangan (OJK)</p>
          <p><strong>Operasional:</strong> Senin - Jumat, 08.00 - 15.00 WIB</p>
        </div>

        <!-- MAP BOX -->
        <div class="map-box animate-slide">
          <iframe 
            src="https://www.google.com/maps?q=Jl.+Sekolah+Duta+VI+No.11,+Pd.+Pinang,+Jakarta+Selatan&output=embed"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </section>

  <?php include("footer.php"); ?>

  <!-- ✅ SCRIPT: Animasi langsung muncul (fade-slide) -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const elements = document.querySelectorAll(".animate-fade, .animate-slide");
      elements.forEach(el => {
        setTimeout(() => el.classList.add("visible"), 150);
      });
    });
  </script>
</body>
</html>