<?php
/**
 * Konfigurasi utama website profil modular PHP.
 * Menggunakan $basePath relatif agar dapat berjalan di root (php -S) maupun subfolder (htdocs/saldi).
 */

if (!isset($basePath)) {
    $basePath = '';
}

$siteConfig = [
    'site_name'   => 'Profil Keluarga Saldi',
    'tagline'     => 'Website Profil Pribadi & Keluarga',
    'author'      => 'Saldi',
    'year'        => date('Y'),
    'course'      => 'Pemrograman Web',
];

/**
 * Helper untuk membuat URL relatif terhadap root proyek.
 */
function url(string $path = ''): string
{
    global $basePath;
    return $basePath . ltrim($path, '/');
}

/**
 * Helper untuk mengecek apakah menu sedang aktif.
 */
function is_active(string $page, string $currentPage): string
{
    return $page === $currentPage ? 'active' : '';
}

/**
 * Helper untuk escaping HTML yang aman.
 */
function e(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
