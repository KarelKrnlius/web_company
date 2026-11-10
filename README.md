# 🏦 Bank Syariah Mutiara — Website Resmi

Website resmi **Bank Syariah Mutiara**, sebuah lembaga keuangan berbasis prinsip syariah. Website ini dibangun menggunakan **PHP**, **HTML**, **CSS**, dan **JavaScript** murni (tanpa framework). Website bersifat responsif dan dapat diakses dari berbagai perangkat (HP, tablet, dan desktop).

---

## 📋 Daftar Isi

1. [Tentang Proyek](#-tentang-proyek)
2. [Fitur Utama](#-fitur-utama)
3. [Struktur Folder](#-struktur-folder)
4. [Teknologi yang Digunakan](#-teknologi-yang-digunakan)
5. [Persyaratan Sistem](#-persyaratan-sistem)
6. [Cara Menjalankan Website](#-cara-menjalankan-website)
   - [Opsi 1: XAMPP (Direkomendasikan)](#opsi-1-xampp-direkomendasikan)
   - [Opsi 2: Laragon](#opsi-2-laragon)
   - [Opsi 3: PHP Bawaan Server](#opsi-3-php-bawaan-server)
7. [Penjelasan Halaman](#-penjelasan-halaman)
8. [Daftar Produk Bank](#-daftar-produk-bank)
9. [Catatan Pengembangan](#-catatan-pengembangan)

---

## 📖 Tentang Proyek

Bank Syariah Mutiara adalah website profil perbankan syariah yang menampilkan informasi tentang:

- **Definisi perbankan syariah** dan perbedaannya dengan bank konvensional
- **Perbedaan sistem bunga dan bagi hasil**
- **Profil perusahaan** (alamat, kontak, sejarah, peta lokasi)
- **Visi & Misi** bank
- **Daftar produk & layanan** perbankan syariah lengkap dengan detail tiap produk

Website ini dirancang dengan nuansa warna hijau-teal (khas Islami) dan memiliki animasi modern seperti slider gambar otomatis, efek mengetik (typing effect), serta animasi fade-slide pada konten.

---

## ✨ Fitur Utama

| Fitur | Deskripsi |
|---|---|
| 🖼️ **Hero Slider** | Slider gambar otomatis dengan navigasi tombol dan indikator dots (berganti tiap 4 detik) |
| ⌨️ **Typing Effect** | Efek mengetik pada judul hero dengan beberapa kalimat yang bergantian |
| 📱 **Responsif** | Tampilan menyesuaikan layar HP, tablet (iPad), dan desktop |
| 🍔 **Navbar Hamburger** | Menu navigasi yang bisa di-toggle pada layar kecil |
| 📂 **Dynamic Product Detail** | Klik produk untuk melihat detail yang dimuat secara dinamis (AJAX/fetch) |
| 🎨 **Animasi Fade-Slide** | Konten muncul dengan animasi halus saat halaman dimuat |
| 🗺️ **Google Maps Embed** | Peta lokasi kantor pusat tertanam di halaman Informasi Bank |
| 🔗 **PHP Include** | Header dan footer dipisah agar reusable di semua halaman |

---

## 📁 Struktur Folder

```
RPL_LPS_20/
├── index.php                  # Halaman utama (Beranda)
├── style.css                  # CSS untuk halaman utama
├── README.md                   # File dokumentasi ini
│
├── css/                        # Folder stylesheet tiap halaman
│   ├── header.css              # Style navbar/header
│   ├── footer.css              # Style footer
│   ├── produk.css              # Style halaman produk
│   ├── TentangPerusahaanKami.css
│   └── VisiMisi.css
│
├── html/                       # Folder halaman website
│   ├── header.php              # Komponen header (navbar) - di-include di tiap halaman
│   ├── footer.php              # Komponen footer - di-include di tiap halaman
│   ├── produk.php              # Halaman daftar produk & layanan
│   ├── VisiMisi.php             # Halaman Visi & Misi
│   ├── TentangPerusahaanKami.php# Halaman profil perusahaan
│   └── detail/                 # Folder file detail tiap produk (dimuat via fetch/AJAX)
│       ├── tmib.php            # Detail Tabunganku Mutiara B
│       ├── tsmib.php           # Detail Tabunganku Simpel Mutiara IB
│       ├── ttib.php            # Detail Tabungan Tijarah IB
│       ├── thmib.php
│       ├── temib.php
│       ├── tpenib.php
│       ├── tperib.php
│       ├── tpib.php
│       ├── tqib.php
│       ├── stm.php
│       ├── ssmib.php
│       ├── twawiib.php
│       └── ...
│
├── image/                      # Folder gambar & aset visual
│   ├── Logo.png                # Logo bank
│   ├── Gedung_1.jpg            # Foto gedung (slider 1)
│   ├── gedung_2.jpg            # Foto gedung (slider 2)
│   ├── gedung_3.jpg            # Foto gedung (slider 3)
│   ├── dalambank.jpg           # Foto interior bank
│   ├── bagihasil.jpg           # Ilustrasi bagi hasil
│   └── BungaBank.jpg           # Ilustrasi bunga bank
│
└── script/                     # Folder JavaScript
    ├── slider.js               # Logika slider gambar otomatis
    ├── typing.js               # Efek mengetik pada hero
    └── produk.js               # Logika load detail produk dinamis (fetch)
```

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Kegunaan |
|---|---|
| **PHP** | Server-side rendering, include komponen (header/footer), deteksi path dinamis |
| **HTML5** | Struktur halaman |
| **CSS3** | Styling, responsif (media query), animasi, gradient |
| **JavaScript (Vanilla)** | Slider, typing effect, fetch detail produk, toggle menu |
| **Google Maps Embed** | Menampilkan lokasi kantor pusat |

> Tidak ada framework, library eksternal, atau package manager yang digunakan. Cukup letakkan di server PHP dan jalankan.

---

## ✅ Persyaratan Sistem

- **PHP versi 7.0 atau lebih baru** (disarankan 7.4+ atau 8.x)
- **Web server** yang mendukung PHP (Apache, Nginx, atau PHP built-in server)
- **Browser modern** (Chrome, Firefox, Edge, Safari)

Tidak memerlukan database karena seluruh konten masih bersifat statis (hardcode di file PHP).

---

## 🚀 Cara Menjalankan Website

Karena website ini menggunakan PHP, Anda **tidak bisa** membukanya langsung dengan double-click file `.php` di browser (seperti `file://`). Anda memerlukan server PHP. Berikut beberapa cara:

### Opsi 1: XAMPP (Direkomendasikan)

XAMPP adalah paket all-in-one yang sudah berisi Apache (web server) dan PHP.

1. **Download & install XAMPP** dari [https://www.apachefriends.org](https://www.apachefriends.org)
2. **Salin folder proyek** `RPL_LPS_20` ke dalam folder `htdocs` XAMPP:
   - Windows: `C:\xampp\htdocs\RPL_LPS_20`
   - macOS/Linux: `/Applications/XAMPP/htdocs/RPL_LPS_20`
3. **Jalankan XAMPP Control Panel**, lalu klik **Start** pada **Apache**
4. **Buka browser**, akses alamat:
   ```
   http://localhost/RPL_LPS_20/index.php
   ```

### Opsi 2: Laragon

Laragon adalah alternatif ringan untuk Windows.

1. **Download & install Laragon** dari [https://laragon.org](https://laragon.org)
2. **Salin folder proyek** ke dalam folder `www` Laragon:
   - `C:\laragon\www\RPL_LPS_20`
3. **Jalankan Laragon**, pastikan Apache/Nginx dan PHP aktif
4. **Buka browser**, akses:
   ```
   http://localhost/RPL_LPS_20/index.php
   ```

### Opsi 3: PHP Bawaan Server

Jika Anda sudah punya PHP terinstal di komputer (tanpa web server), bisa gunakan built-in server PHP:

1. Buka **Terminal / Command Prompt / PowerShell**
2. Arahkan ke folder proyek:
   ```bash
   cd "C:\Users\LENOVO\Documents\DOCUMENT KAREL\RPL_LPS_20"
   ```
3. Jalankan perintah:
   ```bash
   php -S localhost:8000
   ```
4. **Buka browser**, akses:
   ```
   http://localhost:8000/index.php
   ```

> **Tips:** Halaman pertama yang harus dibuka adalah `index.php` (halaman Beranda). Dari sana, gunakan menu navbar untuk berpindah ke halaman Produk, Visi Misi, dan Informasi Bank.

---

## 📄 Penjelasan Halaman

### 1. Beranda (`index.php`)
Halaman utama yang berisi:
- **Hero Slider** — gambar gedung bank yang berganti otomatis dengan efek typing pada judul
- **Section Definisi** — penjelasan apa itu perbankan syariah dan perbandingan dengan bank konvensional
- **Section Perbedaan** — perbedaan antara sistem bunga dan bagi hasil
- **Section Tentang Kami** — ringkasan profil bank

### 2. Produk (`html/produk.php`)
Menampilkan daftar produk bank yang dikelompokkan dalam tiga kategori:
- **Funding** — Tabungan, Giro, Deposito
- **Financing** — Jual Beli, Sewa Menyewa, Investasi, Lainnya
- **Fee Base Income** — Kiriman Uang, Autodebit, Other

Klik salah satu produk untuk melihat detail yang muncul secara dinamis di bawahnya (dimuat via `fetch()` dari folder `detail/`).

### 3. Visi & Misi (`html/VisiMisi.php`)
Menampilkan visi dan misi Bank Syariah Mutiara dengan animasi fade-slide.

### 4. Informasi Bank (`html/TentangPerusahaanKami.php`)
Profil lengkap perusahaan meliputi:
- Nama, alamat, telepon, email, website, sosial media
- Tanggal berdiri dan beroperasi
- Modal dasar dan modal disetor
- Direktur dan pengawasan (OJK)
- Jam operasional
- Peta lokasi (Google Maps embed)

---

## 🏷️ Daftar Produk Bank

### Funding
- **Tabungan:** Tabunganku Mutiara B, Tabunganku Simpel Mutiara IB, Tabungan Tijarah IB, Tabungan Prioritas IB, Tabungan Emas, Tabungan Haji, Tabungan Pernikahan, Tabungan Pensiun, Tabungan Qurban, Tabungan Traveling, Tabungan WNA/WNI, Simulasi Tabungan Mudharabah
- **Giro:** Giro Bisnis IB, Giro Utama Mutiara IB, Ilustrasi Perhitungan Giro
- **Deposito:** Deposito Berjangka, Deposito On Call, Simulasi Deposito On Call, Reksa Dana, Special Investment

### Financing
- **Jual Beli:** MUHOFI IB, Simulasi Pembiayaan Rumah, MUVEFI IB, Simulasi Pembiayaan Kendaraan, Pembiayaan Emas IB, Kartu Kredit Mutiara IB
- **Sewa Menyewa:** Hijrah Multiguna IB, Simulasi Akad Ijarah Multijasa
- **Investasi:** MUMKM IB, Simulasi MUMKM
- **Lainnya:** Gadai Emas Mutiara IB, Simulasi Gadai Emas, Pinjaman Sosial IB, Simulasi Akad Qardh

### Fee Base Income
- **Kiriman Uang:** RTGS, SKNBI
- **Autodebit:** Standing Instructions, Payrol, Payment Point
- **Other:** Save Deposit Box, Inkaso, Garansi, Letter of Credit, Valas

> **Catatan:** Tidak semua file detail produk sudah terisi konten. Saat ini yang sudah memiliki konten lengkap adalah `tmib.php`, `tsmib.php`, dan `ttib.php`. File lain masih berupa placeholder kosong.

---

## 📝 Catatan Pengembangan

- **Path dinamis:** Header dan footer mendeteksi posisi file (root atau folder `html/`) untuk menyesuaikan path CSS dan gambar secara otomatis menggunakan variabel `$basePath` / `$pathPrefix`.
- **Tanpa database:** Seluruh konten masih ditulis langsung di file PHP. Jika ingin dikembangkan, bisa ditambahkan database MySQL untuk manajemen produk dan konten.
- **Responsif:** Sudah dilengkapi media query untuk berbagai ukuran layar (HP kecil, HP besar, iPad, iPad Pro, desktop).
- **Aksesibilitas:** Tombol hamburger memiliki atribut `aria-label` untuk screen reader.

---

<p align="center">
  <strong>Bank Syariah Mutiara</strong><br>
  <em>— Bersama Menuju Keuangan yang Berkah —</em>
</p>
