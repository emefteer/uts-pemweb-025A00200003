<?php
declare(strict_types=1);
require_once __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FreshClean Laundry - Bersih, Wangi, & Cepat</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <div class="container navbar">
      <a href="index.php" class="logo">Fresh<span>Clean</span></a>
      <nav>
        <ul class="nav-links">
          <li><a href="index.php" class="active">Profil Usaha</a></li>
          <li><a href="katalog.php">Katalog Layanan</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <!-- Section Hero -->
    <section class="hero">
      <div class="container">
        <h1>Pakaian Bersih Sempurna Tanpa Repot</h1>
        <p>Solusi laundry modern dengan teknologi pencucian higienis, setrika uap presisi, dan jaminan wangi tahan lama untuk kenyamanan harian Anda.</p>
        <a href="katalog.php" class="btn">Lihat Daftar Tarif Layanan</a>
      </div>
    </section>

    <!-- Section Keunggulan -->
    <section class="container">
      <h2 style="text-align: center; margin-top: 1.5rem;">Mengapa Memilih FreshClean?</h2>
      <div class="features-grid">
        <article class="feature-card">
          <h3>Detergen Ramah Serat</h3>
          <p>Menggunakan detergen cair anti-bakteri ramah lingkungan yang menjaga serat pakaian tetap lembut dan warna tidak pudar.</p>
        </article>
        <article class="feature-card">
          <h3>1 Mesin 1 Pelanggan</h3>
          <p>Pakaian Anda tidak pernah dicampur dengan pakaian orang lain untuk menjaga higienitas dan mencegah risiko tertukar.</p>
        </article>
        <article class="feature-card">
          <h3>Garansi Cuci Ulang</h3>
          <p>Bila pakaian dirasa masih kurang wangi atau kurang bersih, kami cuci ulang secara gratis tanpa biaya tambahan.</p>
        </article>
      </div>
    </section>

    <!-- Section Informasi Operasional & Kontak -->
    <section class="container" style="margin-bottom: 3rem;">
      <div class="feature-card" style="text-align: center;">
        <h2>Jam Operasional & Lokasi</h2>
        <p style="margin: 0.5rem 0 1rem 0;">Buka setiap hari: <strong>07.00 - 21.00 WIB</strong></p>
        <p>Alamat: Jl. Sukoharjo Makmur No. 45, Jawa Tengah</p>
        <p>WhatsApp Hotline: <strong>0812-3456-7890</strong></p>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <p>&copy; <?= date('Y'); ?> FreshClean Laundry. Proyek Mini Pemrograman Web.</p>
    </div>
  </footer>

</body>
</html>