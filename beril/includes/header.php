<?php
// Setiap halaman mengisi: $base, $aktif, $judul sebelum memanggil file ini
require_once __DIR__ . '/helpers.php';
$base  = $base  ?? '';
$aktif = $aktif ?? '';
$judul = $judul ?? 'Profil Keluarga';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($judul) ?> | Profil Beril azura aurelya</title>
    <link rel="stylesheet" href="<?= $base ?>css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container">
        <h1>Profil Beril azura aurelya</h1>
        <p>Politeknik Negeri Fakfak</p>
    </div>
</header>
<?php require __DIR__ . '/navbar.php'; ?>
<main class="container">
