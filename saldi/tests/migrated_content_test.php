<?php
require_once __DIR__ . '/../data/keluarga.php';
require_once __DIR__ . '/../data/galeri.php';
require_once __DIR__ . '/../data/media.php';
require_once __DIR__ . '/../data/berita.php';
require_once __DIR__ . '/../includes/site_content.php';

function assert_content(bool $condition, string $message): void
{
    if (!$condition) {
        throw new RuntimeException($message);
    }
}

assert_content(count($keluargaList) === 6, 'All six family profiles should load.');
assert_content(count($galeriPhotos) === 16, 'All gallery photos should load.');
assert_content(count($mediaRows) === 5, 'All five media records should load.');
assert_content(count($audioPlaylist) === 4, 'All four audio tracks should load.');
assert_content(count($beritaCategories) === 5, 'All five news categories should load.');
assert_content(array_key_first($beritaCategories) === 'it', 'News categories should retain their intended display order.');
assert_content(count($beritaList) === 25, 'All 25 news articles should load.');
assert_content(
    $keluargaList['anak-1']['foto'] === 'assets/images/profil/anak-1-20261127123456.jpeg',
    'Uploaded family profile photos should survive migration.'
);
assert_content(
    get_berita_by_id('it-1')['judul'] === 'Microsoft Tetapkan Status "Code Red" Usai Gangguan Layanan Hampir 24 Jam',
    'The latest edited IT news should survive migration.'
);
assert_content(
    get_site_content()['home_hero_title'] === 'Selamat Datang di Website Profil Saldi & Keluarga',
    'The homepage text should load from the file store.'
);
$storageDirectory = realpath(dirname(content_store_path()));
$projectDirectory = realpath(dirname(__DIR__));
assert_content(
    $storageDirectory !== false && strpos($storageDirectory, $projectDirectory) !== 0,
    'Private content storage should be outside the web root.'
);

echo "Migrated content tests passed.\n";
