<?php
$base_path = basename(dirname($_SERVER['SCRIPT_FILENAME'])) === 'berita_detail' ? '../' : '';
include_once __DIR__ . '/data_keluarga.php';
$halaman_aktif = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Website Profil - Sulistiyani'; ?></title>
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/style.css">
</head>
<body>
    <header class="site-header">
        <nav class="navbar">
            <a href="<?php echo $base_path; ?>../index.php" class="btn-host">← Host Utama</a>
            <ul class="nav-links">
                <li><a href="<?php echo $base_path; ?>index.php" class="<?php echo $halaman_aktif === 'index.php' ? 'active-nav' : ''; ?>">Beranda</a></li>
                <li class="dropdown">
                    <a href="<?php echo $base_path; ?>profil.php" class="<?php echo $halaman_aktif === 'profil.php' ? 'active-nav' : ''; ?>">Profil ▾</a>
                    <ul class="dropdown-menu">
                        <?php foreach ($daftar_keluarga as $key => $anggota): ?>
                            <li>
                                <a href="<?php echo $base_path; ?>profil.php?anggota=<?php echo $key; ?>">
                                    <?php echo $anggota['hubungan']; ?> (<?php echo $anggota['nama_panggilan']; ?>)
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a href="<?php echo $base_path; ?>media.php" class="<?php echo $halaman_aktif === 'media.php' ? 'active-nav' : ''; ?>">Audio Video</a></li>
                <li><a href="<?php echo $base_path; ?>galeri.php" class="<?php echo $halaman_aktif === 'galeri.php' ? 'active-nav' : ''; ?>">Galeri</a></li>
                <li><a href="<?php echo $base_path; ?>berita.php" class="<?php echo ($halaman_aktif === 'berita.php' || $base_path === '../') ? 'active-nav' : ''; ?>">Berita</a></li>
                <li><a href="<?php echo $base_path; ?>about.php" class="<?php echo $halaman_aktif === 'about.php' ? 'active-nav' : ''; ?>">About</a></li>
            </ul>
        </nav>
    </header>
    <main class="main-content">