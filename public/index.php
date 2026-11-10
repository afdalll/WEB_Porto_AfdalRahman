<?php

require dirname(__DIR__) . '/app/bootstrap.php';

$appName = $_ENV['APP_NAME'] ?? 'Portofolio';
$appEnvironment = $_ENV['APP_ENV'] ?? 'production';

error_reporting(E_ALL);
ini_set('display_errors', $appEnvironment === 'development' ? '1' : '0');
ini_set('log_errors', '1');

$pages = [
    '/' => [
        'title' => 'Beranda',
        'file' => 'home.php',
    ],
    '/tentang' => [
        'title' => 'Tentang Saya',
        'file' => 'about.php',
    ],
    '/pendidikan' => [
        'title' => 'Pendidikan',
        'file' => 'study.php',
    ],
    '/pengalaman' => [
        'title' => 'Pengalaman',
        'file' => 'experience.php',
    ],
    '/proyek' => [
        'title' => 'Proyek',
        'file' => 'project.php',
    ],
    '/blog' => [
        'title' => 'Blog',
        'file' => 'blog.php',
    ],
    '/kontak' => [
        'title' => 'Kontak',
        'file' => 'contact.php',
    ],
];

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$requestPath = rtrim($requestPath, '/') ?: '/';
$page = $pages[$requestPath] ?? null;

if ($page === null) {
    http_response_code(404);
    $pageTitle = 'Halaman Tidak Ditemukan';
} else {
    $pageTitle = $page['title'];
}

// Header
require dirname(__DIR__) . '/app/views/public/layouts/header.php';

if ($page !== null) {
    // Body
    require dirname(__DIR__) . '/app/views/public/pages/' . $page['file'];
}

// Footer
require dirname(__DIR__) . '/app/views/public/layouts/footer.php';
