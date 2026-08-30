<?php

/*
 * Generator halaman statis untuk Firebase Hosting.
 *
 * Menjalankan view yang sama dengan aplikasi (MVC) lalu menyimpan hasil
 * render sebagai index.html yang murni HTML/CSS/JS + gambar.
 *
 * Cara pakai: php build/static.php
 * (hasil keluar di public/index.html — folder inilah yang di-upload ke Firebase)
 */

$_SERVER['HTTP_HOST'] = 'snh2.firebaseapp.com';

require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../app/Models/ProductModel.php';
require_once __DIR__ . '/../app/Controllers/ProductController.php';

$controller = new ProductController();

ob_start();
$controller->index();
$html = ob_get_clean();

$output = dirname(__DIR__) . '/public/index.html';
file_put_contents($output, $html);

echo "OK — index.html dibuat (" . number_format(strlen($html)) . " bytes).\n";