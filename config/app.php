<?php

/*
 * Konfigurasi Aplikasi
 */

// Base URL untuk asset (gambar, css, js).
// Otomatis terdeteksi saat development lokal (localhost / IP LAN).
// Di production (Vercel) nilainya otomatis kosong, asset memakai path dari domain root.
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
// Buang port jika ada (contoh: localhost:8080 -> localhost)
$hostName = parse_url('http://' . $host, PHP_URL_HOST) ?: $host;
$isLocal = in_array($hostName, ['localhost', '127.0.0.1'], true)
    || str_starts_with($hostName, '192.168.')
    || str_starts_with($hostName, '10.');

define('APP_BASE_URL', $isLocal ? rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/') : '');

// Nomor HP Admin untuk Order WhatsApp (format internasional tanpa tanda +)
define('WA_NUMBER', '6287713639889');

// Alamat sosmed toko - GANTI bagian "namatoko" dengan username/alamat asli milikmu
define('SOCIAL_LINKS', [
    'shopee'    => 'https://shopee.co.id/namatoko',
    'tiktok'    => 'https://www.tiktok.com/@namatoko',
    'instagram' => 'https://www.instagram.com/namatoko',
]);

// ===== Data Kontak Toko (tampil pada section "Kontak" di landing page) =====

// Alamat lengkap toko/showroom - GANTI dengan alamat asli milikmu.
// Peta Google Maps di bawah otomatis mengikuti alamat ini.
define('STORE_ADDRESS', "Jl. Merdeka No. 123\nJakarta Pusat, DKI Jakarta 10110");

// Jam operasional toko.
define('STORE_HOURS', 'Senin – Sabtu · 09.00 – 17.00 WIB');

// Tombol "Buka di Google Maps" (otomatis dibuat dari alamat di atas).
define('MAPS_LINK', 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode(STORE_ADDRESS));

// Peta yang di-embed ke halaman (tanpa perlu API key).
// Jika sudah punya link "Bagikan/Embed" dari Google Maps milikmu sendiri,
// tinggal ganti URL di bawah dengan src iframe tersebut.
define('MAPS_EMBED_URL', 'https://www.google.com/maps?q=' . rawurlencode(STORE_ADDRESS) . '&output=embed');
