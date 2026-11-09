<?php
// Deteksi posisi file (root atau folder html)
$pathPrefix = (strpos($_SERVER['SCRIPT_NAME'], '/html/') !== false) ? '../' : '';
?>

<!-- Footer -->
<footer>
  <p>© 2025 Bank Syariah Mutiara. All rights reserved.</p>
</footer>

<!-- Link CSS (otomatis menyesuaikan posisi file) -->
<link rel="stylesheet" href="<?php echo $pathPrefix; ?>css/footer.css">
