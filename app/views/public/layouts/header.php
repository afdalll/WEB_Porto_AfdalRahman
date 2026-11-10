<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Portofolio', ENT_QUOTES, 'UTF-8') ?> | <?= htmlspecialchars($appName ?? 'Portofolio', ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/header.js" defer></script>
</head>
<body>
    <header class="header" aria-label="Navigasi utama">
        <div class="header__inner">
            <a class="header__brand" href="/" aria-label="Afdalrahman - Beranda">
                <img class="header__logo" src="/assets/images/logo.png" alt="Logo Afdalrahman">
            </a>
            <button class="header__menu-toggle" type="button" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="main-navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav class="header__nav" id="main-navigation" aria-label="Menu utama">
                <ul>
                    <li><a href="/" <?= $requestPath === '/' ? 'aria-current="page"' : '' ?>>Beranda</a></li>
                    <li><a href="/tentang" <?= $requestPath === '/tentang' ? 'aria-current="page"' : '' ?>>Tentang Saya</a></li>
                    <li><a href="/pendidikan" <?= $requestPath === '/pendidikan' ? 'aria-current="page"' : '' ?>>Pendidikan</a></li>
                    <li><a href="/pengalaman" <?= $requestPath === '/pengalaman' ? 'aria-current="page"' : '' ?>>Pengalaman</a></li>
                    <li><a href="/proyek" <?= $requestPath === '/proyek' ? 'aria-current="page"' : '' ?>>Proyek</a></li>
                    <li><a href="/blog" <?= $requestPath === '/blog' ? 'aria-current="page"' : '' ?>>Blog</a></li>
                    <li><a href="/kontak" <?= $requestPath === '/kontak' ? 'aria-current="page"' : '' ?>>Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
