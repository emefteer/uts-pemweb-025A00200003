<?php

declare(strict_types=1);

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';

$kriteriaSort = isset($_GET['sort']) ? (string) $_GET['sort'] : 'default';
$daftarTersortir = urutkanLayanan($daftarLayanan, $kriteriaSort);
$ringkasan = hitungRingkasanLayanan($daftarLayanan);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katalog Layanan &amp; Tarif - FreshClean Laundry</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <div class="container flex-between">
      <a href="index.php" class="brand">FreshClean Laundry</a>
      <nav aria-label="Navigasi Utama">
        <ul class="nav-menu">
          <li><a href="index.php">Profil Usaha</a></li>
          <li><a href="katalog.php" class="active">Katalog Layanan</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container">
    <section>
      <h1>Katalog Paket &amp; Tarif Laundry</h1>
      <p>Daftar lengkap layanan pencucian pakaian, sepatu, tas, dan perlengkapan rumah tangga.</p>
    </section>

    <section aria-label="Ringkasan Statistik Tarif">
      <h2>Ringkasan Statistik Layanan</h2>
      <div class="grid">
        <article class="card">
          <span>Total Paket Layanan</span>
          <strong class="stat-val"><?= e((string) $ringkasan['total_layanan']); ?> Paket</strong>
        </article>
        <article class="card">
          <span>Tarif Termurah</span>
          <strong class="stat-val"><?= e(formatRupiah($ringkasan['harga_termurah'])); ?></strong>
        </article>
        <article class="card">
          <span>Tarif Tertinggi</span>
          <strong class="stat-val"><?= e(formatRupiah($ringkasan['harga_tertinggi'])); ?></strong>
        </article>
        <article class="card">
          <span>Rata-Rata Tarif</span>
          <strong class="stat-val"><?= e(formatRupiah($ringkasan['rata_rata_harga'])); ?></strong>
        </article>
      </div>
    </section>

    <section aria-label="Daftar Paket Layanan">
      <div class="card flex-between" style="flex-direction: row; margin-bottom: 1.25rem;">
        <h2 style="margin: 0; font-size: 1.15rem;">Daftar Layanan (<?= count($daftarTersortir); ?> Item)</h2>
        <form action="katalog.php" method="GET">
          <label for="sort">Urutkan:</label>
          <select name="sort" id="sort" onchange="this.form.submit()">
            <option value="default" <?= $kriteriaSort === 'default' ? 'selected' : ''; ?>>Urutan Standar</option>
            <option value="harga_asc" <?= $kriteriaSort === 'harga_asc' ? 'selected' : ''; ?>>Harga Termurah - Tertinggi</option>
            <option value="harga_desc" <?= $kriteriaSort === 'harga_desc' ? 'selected' : ''; ?>>Harga Tertinggi - Termurah</option>
            <option value="durasi_asc" <?= $kriteriaSort === 'durasi_asc' ? 'selected' : ''; ?>>Estimasi Selesai Tercepat</option>
            <option value="nama_asc" <?= $kriteriaSort === 'nama_asc' ? 'selected' : ''; ?>>Nama Layanan (A - Z)</option>
          </select>
        </form>
      </div>

      <?php if (empty($daftarTersortir)): ?>
        <article class="card">
          <h3>Data Kosong</h3>
          <p>Belum ada paket layanan laundry yang terdaftar saat ini.</p>
        </article>
      <?php else: ?>
        <div class="grid">
          <?php foreach ($daftarTersortir as $layanan): ?>
            <?php $badge = getBadgeInfo($layanan['level']); ?>
            <article class="card">
              <div>
                <div class="flex-between">
                  <small><?= e($layanan['kategori']); ?></small>
                  <span class="badge <?= e($badge['kelas']); ?>"><?= e($badge['label']); ?></span>
                </div>
                <h3><?= e($layanan['nama']); ?></h3>
                <p><?= e($layanan['deskripsi']); ?></p>
              </div>
              <div class="card-footer flex-between">
                <span class="price"><?= e(formatRupiah($layanan['harga'])); ?> <small>/ <?= e($layanan['satuan']); ?></small></span>
                <small><?= e((string) $layanan['durasi_hari']); ?> Hari</small>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </section>
  </main>

  <footer>
    <div class="container">
      <p>&copy; <?= date('Y'); ?> FreshClean Laundry. Proyek Mini Individu Pemrograman Web.</p>
    </div>
  </footer>

</body>
</html>