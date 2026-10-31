<?php

declare(strict_types=1);

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function formatRupiah(int|float $angka): string
{
    return 'Rp ' . number_format((float) $angka, 0, ',', '.');
}

function getBadgeInfo(string $level): array
{
    return match ($level) {
        'express' => ['label' => 'Express',  'kelas' => 'badge-express'],
        'flash'   => ['label' => 'Flash',    'kelas' => 'badge-flash'],
        'premium' => ['label' => 'Premium',  'kelas' => 'badge-premium'],
        default   => ['label' => 'Reguler',  'kelas' => 'badge-reguler'],
    };
}


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