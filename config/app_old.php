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
$isLocal = in_array($hostName, ['localhost', '127.0'], true)
    || str_starts_with($hostName, '192.168.')
    || str_starts_with($hostName, '10.');

define('APP_BASE_URL', $isLocal ? rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/') : '');

// Nomor HP Admin untuk Order WhatsApp (format internasional tanpa tanda +)
define('WA_NUMBER', '6285216758721');
