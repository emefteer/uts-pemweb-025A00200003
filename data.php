<?php

declare(strict_types=1);

/**
 * Data Utama Paket Layanan FreshClean Laundry
 * Memenuhi syarat: Minimal 8 item dan minimal 4 atribut per item.
 */
$daftarLayanan = [
    [
        'id'          => 1,
        'nama'        => 'Cuci Kering Setrika Reguler',
        'kategori'    => 'Kiloan',
        'harga'       => 8000,
        'satuan'      => 'kg',
        'durasi_hari' => 2,
        'level'       => 'reguler',
        'deskripsi'   => 'Pencucian harian bersih menyeluruh, pewangi segar, dan setrika uap rapi.',
    ],
    [
        'id'          => 2,
        'nama'        => 'Cuci Kering Setrika Express',
        'kategori'    => 'Kiloan',
        'harga'       => 14000,
        'satuan'      => 'kg',
        'durasi_hari' => 1,
        'level'       => 'express',
        'deskripsi'   => 'Layanan prioritas 1 hari selesai dengan mesin pengering khusus higienis.',
    ],
    [
        'id'          => 3,
        'nama'        => 'Cuci Kilat Super Flash',
        'kategori'    => 'Kiloan',
        'harga'       => 22000,
        'satuan'      => 'kg',
        'durasi_hari' => 1,
        'level'       => 'flash',
        'deskripsi'   => 'Layanan darurat ekstra cepat selesai di hari yang sama tanpa antre.',
    ],
    [
        'id'          => 4,
        'nama'        => 'Perawatan Bed Cover & Selimut',
        'kategori'    => 'Satuan',
        'harga'       => 25000,
        'satuan'      => 'pcs',
        'durasi_hari' => 3,
        'level'       => 'reguler',
        'deskripsi'   => 'Pencucian serat tebal anti-tungau dengan pengering bersuhu terukur.',
    ],
    [
        'id'          => 5,
        'nama'        => 'Dry Clean Jas & Kebaya Formal',
        'kategori'    => 'Satuan',
        'harga'       => 35000,
        'satuan'      => 'pcs',
        'durasi_hari' => 3,
        'level'       => 'premium',
        'deskripsi'   => 'Teknik dry-cleaning khusus menjaga tekstur kain premium dan payet.',
    ],
    [
        'id'          => 6,
        'nama'        => 'Deep Clean Sepatu Sneakers',
        'kategori'    => 'Sepatu & Tas',
        'harga'       => 30000,
        'satuan'      => 'pasang',
        'durasi_hari' => 2,
        'level'       => 'premium',
        'deskripsi'   => 'Pembersihan mendetail outsole, midsole, upper, serta antibakteri sepatu.',
    ],
    [
        'id'          => 7,
        'nama'        => 'Cuci Tas Ransel & Carrier',
        'kategori'    => 'Sepatu & Tas',
        'harga'       => 28000,
        'satuan'      => 'pcs',
        'durasi_hari' => 3,
        'level'       => 'reguler',
        'deskripsi'   => 'Pencucian bahan kanvas dan cordura hingga sela kantong dan ritsleting.',
    ],
    [
        'id'          => 8,
        'nama'        => 'Cuci Karpet & Permadani Ruangan',
        'kategori'    => 'Rumah Tangga',
        'harga'       => 15000,
        'satuan'      => 'm2',
        'durasi_hari' => 4,
        'level'       => 'reguler',
        'deskripsi'   => 'Ekstraksi debu mendalam dengan hydro-vacuum dan parfum tahan lama.',
    ],
];