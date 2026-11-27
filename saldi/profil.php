<?php
/**
 * Halaman Profil & Sub-menu Keluarga (10 Anggota: Bapak, Mama, Kakak 1 - Adik 8).
 * Setiap anggota memiliki foto dan tepat 10 sub-data diri yang seragam.
 */
require_once __DIR__ . '/data/keluarga.php';

$slugs = array_keys($keluargaList);
$requested = $_GET['anggota'] ?? 'bapak';
$activeMember = array_key_exists($requested, $keluargaList) ? $requested : 'bapak';
$member = $keluargaList[$activeMember];

$pageTitle = 'Profil — ' . $member['nama'];
$currentPage = 'profil';

require __DIR__ . '/includes/header.php';
?>

<section class="page-hero page-hero-compact">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= url('index.php') ?>">Beranda</a>
            <span>/</span>
            <span>Profil Keluarga</span>
            <span>/</span>
            <span><?= e($member['urutan']) ?></span>
        </div>
        <h1>Profil Keluarga</h1>
        <p>Urutan profil lengkap Bapak, Mama, serta 4 bersaudara (6 sub-menu anggota keluarga), masing-masing dilengkapi foto dan 10 data diri.</p>
    </div>
</section>

<section class="container page-section">
    <div class="profile-layout">
        <aside class="family-sidebar" aria-label="Daftar Anggota Keluarga">
            <h3>Sub-Menu Keluarga (6)</h3>
            <ul class="family-nav">
                <?php foreach ($keluargaList as $slug => $item): ?>
                    <li>
                        <a href="<?= url('profil.php?anggota=' . urlencode($slug)) ?>"
                           class="<?= $slug === $activeMember ? 'active' : '' ?>">
                            <small><?= e($item['urutan']) ?></small>
                            <strong><?= e($item['nama']) ?></strong>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>

        <div class="card">
            <div class="profile-header">
                <img src="<?= url($member['foto']) ?>" alt="Foto <?= e($member['nama']) ?>" class="profile-photo">
                <div class="profile-title">
                    <span class="badge"><?= e($member['urutan']) ?></span>
                    <h2><?= e($member['nama']) ?></h2>
                    <p><?= e($member['ringkas']) ?></p>
                </div>
            </div>

            <h3>10 Data Diri Lengkap</h3>
            <table class="profile-data-table">
                <tbody>
                    <?php $no = 1; foreach ($member['data'] as $label => $nilai): ?>
                        <tr>
                            <th>
                                <span class="profile-num"><?= $no++ ?></span>
                                <?= e($label) ?>
                            </th>
                            <td><?= e($nilai) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?php
            $currentIndex = array_search($activeMember, $slugs, true);
            $prevSlug = $currentIndex > 0 ? $slugs[$currentIndex - 1] : null;
            $nextSlug = $currentIndex < count($slugs) - 1 ? $slugs[$currentIndex + 1] : null;
            ?>
            <div class="article-actions">
                <?php if ($prevSlug): ?>
                    <a href="<?= url('profil.php?anggota=' . urlencode($prevSlug)) ?>" class="btn btn-secondary">
                        &larr; Sebelumnya: <?= e($keluargaList[$prevSlug]['nama']) ?>
                    </a>
                <?php endif; ?>
                <?php if ($nextSlug): ?>
                    <a href="<?= url('profil.php?anggota=' . urlencode($nextSlug)) ?>" class="btn btn-primary">
                        Berikutnya: <?= e($keluargaList[$nextSlug]['nama']) ?> &rarr;
                    </a>
                <?php endif; ?>
                <a href="<?= url('kelola.php?tab=profil&anggota=' . urlencode($activeMember)) ?>" class="btn btn-outline">
                    Edit / Upload Foto Profil
                </a>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
