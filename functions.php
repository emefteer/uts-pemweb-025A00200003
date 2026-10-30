<?php

declare(strict_types=1);

/**
 * Helper Functions - FreshClean Laundry
 * Berisi semua fungsi pendukung untuk katalog.php dan index.php
 */

/**
 * Escape output HTML untuk mencegah XSS.
 */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Format angka ke format Rupiah.
 * Contoh: 8000 => "Rp 8.000"
 */
function formatRupiah(int|float $angka): string
{
    return 'Rp ' . number_format((float) $angka, 0, ',', '.');
}

/**
 * Mengembalikan informasi badge (label & kelas CSS) berdasarkan level layanan.
 *
 * @param string $level Level layanan: 'reguler', 'express', 'flash', 'premium'
 * @return array{label: string, kelas: string}
 */
function getBadgeInfo(string $level): array
{
    return match ($level) {
        'express' => ['label' => 'Express',  'kelas' => 'badge-express'],
        'flash'   => ['label' => 'Flash',    'kelas' => 'badge-flash'],
        'premium' => ['label' => 'Premium',  'kelas' => 'badge-premium'],
        default   => ['label' => 'Reguler',  'kelas' => 'badge-reguler'],
    };
}

/**
 * Mengurutkan daftar layanan berdasarkan kriteria tertentu.
 *
 * @param array<int, array<string, mixed>> $daftar      Array data layanan dari data.php
 * @param string                           $kriteria    Kriteria sort: 'harga_asc', 'harga_desc', 'durasi_asc', 'nama_asc', atau 'default'
 * @return array<int, array<string, mixed>>
 */
function urutkanLayanan(array $daftar, string $kriteria): array
{
    usort($daftar, function (array $a, array $b) use ($kriteria): int {
        return match ($kriteria) {
            'harga_asc'   => $a['harga']       <=> $b['harga'],
            'harga_desc'  => $b['harga']       <=> $a['harga'],
            'durasi_asc'  => $a['durasi_hari'] <=> $b['durasi_hari'],
            'nama_asc'    => strcmp((string) $a['nama'], (string) $b['nama']),
            default       => $a['id']          <=> $b['id'],
        };
    });

    return $daftar;
}

/**
 * Menghitung ringkasan statistik dari daftar layanan.
 *
 * @param array<int, array<string, mixed>> $daftar Array data layanan
 * @return array{total_layanan: int, harga_termurah: int|float, harga_tertinggi: int|float, rata_rata_harga: float}
 */
function hitungRingkasanLayanan(array $daftar): array
{
    if (empty($daftar)) {
        return [
            'total_layanan'   => 0,
            'harga_termurah'  => 0,
            'harga_tertinggi' => 0,
            'rata_rata_harga' => 0.0,
        ];
    }

    $hargaList = array_column($daftar, 'harga');

    return [
        'total_layanan'   => count($daftar),
        'harga_termurah'  => min($hargaList),
        'harga_tertinggi' => max($hargaList),
        'rata_rata_harga' => array_sum($hargaList) / count($hargaList),
    ];
}
