<?php

require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/Controllers/ProductController.php';

/**
 * Mengubah kandidat URL menjadi nama route internal.
 * Return null jika kandidat bukan route yang dikenal.
 */
function resolveRoute(string $candidate): ?string
{
    return match ($candidate) {
        '', 'home' => 'home',
        'api/checkout' => 'checkout',
        default => null,
    };
}

$candidates = [];

// 1. Prioritas utama: query string (?url=...) dari .htaccess / akses langsung
if (($_GET['url'] ?? '') !== '') {
    $candidates[] = rtrim(trim((string) $_GET['url']), '/');
}

$rawPath = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/', '/');

// 2. Path setelah segment index.php (akses langsung ke file entry)
if (str_contains($rawPath, 'index.php')) {
    $candidates[] = trim(substr($rawPath, (int) strpos($rawPath, 'index.php') + strlen('index.php')), '/');
}

// 3. Path tanpa folder tempat entry berada (contoh: /ruang-fashion/public/ di Apache)
$baseDir = trim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
if ($baseDir !== '' && str_starts_with($rawPath, $baseDir)) {
    $candidates[] = trim(substr($rawPath, strlen($baseDir)), '/');
}

// 4. Path apa adanya (pretty URL di Vercel / built-in server)
$candidates[] = $rawPath;

$route = null;
foreach ($candidates as $candidate) {
    $route = resolveRoute($candidate);
    if ($route !== null) {
        break;
    }
}

$controller = new ProductController();

switch ($route) {
    case 'home':
        $controller->index();
        break;

    case 'checkout':
        // Endpoint siap pakai untuk AJAX Request Checkout nantinya
        $controller->checkout();
        break;

    default:
        http_response_code(404);
        echo "404 - Halaman Tidak Ditemukan";
        break;
}
