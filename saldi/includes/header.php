<?php
/**
 * Header modular untuk semua halaman PHP.
 * Memerlukan variabel $pageTitle (opsional) dan $basePath (opsional).
 */
require_once __DIR__ . '/config.php';

$fullTitle = isset($pageTitle)
    ? e($pageTitle) . ' — ' . e($siteConfig['site_name'])
    : e($siteConfig['site_name']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $fullTitle ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= url('assets/css/style.css') ?>">
</head>
<body>
<?php require __DIR__ . '/navbar.php'; ?>
<main class="main-content">
