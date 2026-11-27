<?php
/**
 * Halaman Kelola Konten (kelola.php)
 * Memungkinkan pengguna mengedit informasi (Profil Keluarga, Galeri, Audio/Video, Berita)
 * dan menyimpan semua perubahan ke penyimpanan file JSON lokal.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/site_content.php';
require_once __DIR__ . '/includes/content_store.php';

$tab = $_GET['tab'] ?? 'profil';
$validTabs = ['profil', 'galeri', 'media', 'berita', 'teks'];
if (!in_array($tab, $validTabs, true)) {
    $tab = 'profil';
}

$flashSuccess = '';
$flashError = '';

require __DIR__ . '/data/keluarga.php';
require __DIR__ . '/data/galeri.php';
require __DIR__ . '/data/media.php';
require __DIR__ . '/data/berita.php';

/**
 * Helper aman untuk upload file ke folder target.
 */
function handle_upload(string $inputName, string $targetDirRel, array $allowedExts, string $prefix): array
{
    if (!isset($_FILES[$inputName]) || $_FILES[$inputName]['error'] === UPLOAD_ERR_NO_FILE) {
        return ['ok' => true, 'path' => null];
    }

    $file = $_FILES[$inputName];
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $msg = match ($file['error']) {
            UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE => 'Ukuran file melebihi batas upload server (php.ini).',
            default => 'Terjadi kesalahan saat mengunggah file (kode: ' . $file['error'] . ').',
        };
        return ['ok' => false, 'error' => $msg];
    }

    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (!in_array($ext, $allowedExts, true)) {
        return ['ok' => false, 'error' => 'Format file tidak didukung. Gunakan: ' . implode(', ', $allowedExts)];
    }

    $absDir = __DIR__ . '/' . trim($targetDirRel, '/');
    if (!is_dir($absDir)) {
        mkdir($absDir, 0777, true);
    }

    $safeName = preg_replace('/[^a-z0-9_-]/i', '-', $prefix) . '-' . date('YmdHis') . '.' . $ext;
    $destAbs = $absDir . '/' . $safeName;
    $destRel = trim($targetDirRel, '/') . '/' . $safeName;

    if (!move_uploaded_file($file['tmp_name'], $destAbs)) {
        return ['ok' => false, 'error' => 'Gagal menyimpan file ke folder ' . $targetDirRel];
    }

    return ['ok' => true, 'path' => $destRel];
}

// Proses POST Form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    try {
        if ($action === 'update_profil') {
            $tab = 'profil';
            $slug = $_POST['slug'] ?? '';
            $existing = $keluargaList[$slug] ?? null;
            $nama = trim($_POST['nama'] ?? '');

            if (!$existing) {
                $flashError = 'Anggota keluarga tidak ditemukan.';
            } elseif ($nama === '') {
                $flashError = 'Nama tidak boleh kosong.';
            } else {
                $upload = handle_upload('foto_profil', 'assets/images/profil', ['jpg', 'jpeg', 'png', 'webp', 'svg'], $slug);
                if (!$upload['ok']) {
                    $flashError = $upload['error'];
                } else {
                    $dataDiri = [];
                    foreach (($_POST['label'] ?? []) as $idx => $label) {
                        $label = trim((string)$label);
                        if ($label !== '') {
                            $dataDiri[$label] = trim((string)($_POST['nilai'][$idx] ?? ''));
                        }
                    }

                    $updatedProfile = array_replace($existing, [
                        'nama' => $nama,
                        'ringkas' => trim($_POST['ringkas'] ?? ''),
                        'foto' => $upload['path'] ?? $existing['foto'],
                        'data' => $dataDiri,
                    ]);
                    update_content_group('keluarga', static function (array $profiles) use ($keluargaList, $slug, $updatedProfile): array {
                        $profiles = $profiles ?: $keluargaList;
                        $profiles[$slug] = $updatedProfile;
                        return $profiles;
                    });
                    $flashSuccess = 'Profil "' . $nama . '" berhasil diperbarui!';
                }
            }
        } elseif ($action === 'add_galeri') {
            $tab = 'galeri';
            $judul = trim($_POST['judul'] ?? '');
            if ($judul === '') {
                $flashError = 'Judul foto wajib diisi.';
            } elseif (!isset($_FILES['foto_galeri']) || $_FILES['foto_galeri']['error'] === UPLOAD_ERR_NO_FILE) {
                $flashError = 'Silakan pilih file foto yang akan diunggah.';
            } else {
                $upload = handle_upload('foto_galeri', 'assets/images/galeri', ['jpg', 'jpeg', 'png', 'webp'], 'foto');
                if (!$upload['ok']) {
                    $flashError = $upload['error'];
                } else {
                    $nextId = max(array_column($galeriPhotos, 'id')) + 1;
                    $newPhoto = [
                        'id' => $nextId,
                        'src' => $upload['path'],
                        'judul' => $judul,
                        'caption' => trim($_POST['caption'] ?? ''),
                        'tahun' => trim($_POST['tahun'] ?? date('Y')),
                    ];
                    update_content_group('galeri', static function (array $photos) use ($galeriPhotos, $newPhoto): array {
                        $photos = $photos ?: $galeriPhotos;
                        $photos[] = $newPhoto;
                        return $photos;
                    });
                    $flashSuccess = 'Foto baru #' . $nextId . ' berhasil ditambahkan ke galeri!';
                }
            }
        } elseif ($action === 'update_galeri') {
            $tab = 'galeri';
            $id = (int)($_POST['id'] ?? 0);
            $existing = null;
            foreach ($galeriPhotos as $photo) {
                if ((int)$photo['id'] === $id) {
                    $existing = $photo;
                    break;
                }
            }
            $judul = trim($_POST['judul'] ?? '');

            if (!$existing) {
                $flashError = 'Foto galeri tidak ditemukan.';
            } elseif ($judul === '') {
                $flashError = 'Judul foto tidak boleh kosong.';
            } else {
                $upload = handle_upload('foto_galeri_edit', 'assets/images/galeri', ['jpg', 'jpeg', 'png', 'webp', 'svg'], 'foto-' . $id);
                if (!$upload['ok']) {
                    $flashError = $upload['error'];
                } else {
                    $updatedPhoto = array_replace($existing, [
                        'src' => $upload['path'] ?? $existing['src'],
                        'judul' => $judul,
                        'caption' => trim($_POST['caption'] ?? ''),
                        'tahun' => trim($_POST['tahun'] ?? date('Y')),
                    ]);
                    update_content_group('galeri', static function (array $photos) use ($galeriPhotos, $id, $updatedPhoto): array {
                        $photos = $photos ?: $galeriPhotos;
                        foreach ($photos as &$photo) {
                            if ((int)$photo['id'] === $id) {
                                $photo = $updatedPhoto;
                                break;
                            }
                        }
                        unset($photo);
                        return $photos;
                    });
                    $flashSuccess = 'Foto galeri #' . $id . ' berhasil diperbarui!';
                }
            }
        } elseif ($action === 'delete_galeri') {
            $tab = 'galeri';
            $id = (int)($_POST['id'] ?? 0);
            update_content_group('galeri', static function (array $photos) use ($galeriPhotos, $id): array {
                $photos = $photos ?: $galeriPhotos;
                return array_values(array_filter($photos, static fn(array $photo): bool => (int)$photo['id'] !== $id));
            });
            $flashSuccess = 'Foto galeri #' . $id . ' berhasil dihapus.';
        } elseif ($action === 'update_media') {
            $tab = 'media';
            $id = (int)($_POST['id'] ?? 0);
            $existing = null;
            foreach ($mediaRows as $item) {
                if ((int)$item['id'] === $id) {
                    $existing = $item;
                    break;
                }
            }

            if (!$existing) {
                $flashError = 'Data media tidak ditemukan.';
            } else {
                $allowed = $existing['tipe'] === 'video' ? ['mp4', 'webm', 'mov'] : ['mp3', 'wav', 'ogg', 'm4a'];
                $prefix = $existing['tipe'] === 'video' ? 'video-perkenalan' : 'audio-' . $id;
                $upload = handle_upload('file_media', 'assets/media', $allowed, $prefix);
                if (!$upload['ok']) {
                    $flashError = $upload['error'];
                } else {
                    $updatedMedia = array_replace($existing, [
                        'judul' => trim($_POST['judul'] ?? ''),
                        'artis_atau_info' => trim($_POST['artis_atau_info'] ?? ''),
                        'genre_atau_orientasi' => trim($_POST['genre_atau_orientasi'] ?? ''),
                        'durasi' => trim($_POST['durasi'] ?? ''),
                        'src' => $upload['path'] ?? $existing['src'],
                        'deskripsi' => trim($_POST['deskripsi'] ?? ''),
                    ]);
                    update_content_group('media', static function (array $items) use ($mediaRows, $id, $updatedMedia): array {
                        $items = $items ?: $mediaRows;
                        foreach ($items as &$item) {
                            if ((int)$item['id'] === $id) {
                                $item = $updatedMedia;
                                break;
                            }
                        }
                        unset($item);
                        return $items;
                    });
                    $flashSuccess = 'Data media "' . $updatedMedia['judul'] . '" berhasil diperbarui!';
                }
            }
        } elseif ($action === 'update_berita') {
            $tab = 'berita';
            $id = $_POST['id'] ?? '';
            $existing = null;
            foreach ($beritaList as $article) {
                if ($article['id'] === $id) {
                    $existing = $article;
                    break;
                }
            }
            $judul = trim($_POST['judul'] ?? '');
            $sumberUrl = trim($_POST['sumber_url'] ?? '');
            $paragraphs = array_values(array_filter(
                array_map('trim', preg_split("/\r\n|\r|\n/", trim($_POST['isi_teks'] ?? ''))),
                static fn(string $paragraph): bool => $paragraph !== ''
            ));

            if (!$existing) {
                $flashError = 'Berita tidak ditemukan.';
            } elseif ($judul === '' || $sumberUrl === '') {
                $flashError = 'Judul dan link sumber berita wajib diisi.';
            } else {
                $updatedArticle = array_replace($existing, [
                    'judul' => $judul,
                    'tanggal' => trim($_POST['tanggal'] ?? ''),
                    'ringkasan' => trim($_POST['ringkasan'] ?? ''),
                    'isi' => $paragraphs,
                    'sumber_url' => $sumberUrl,
                ]);
                update_content_group('berita', static function (array $articles) use ($beritaList, $id, $updatedArticle): array {
                    $articles = $articles ?: $beritaList;
                    foreach ($articles as &$article) {
                        if ($article['id'] === $id) {
                            $article = $updatedArticle;
                            break;
                        }
                    }
                    unset($article);
                    return $articles;
                });
                $flashSuccess = 'Berita "' . $judul . '" berhasil diperbarui!';
            }
        } elseif ($action === 'update_site_content') {
            $tab = 'teks';
            save_site_content($_POST['content'] ?? []);
            $flashSuccess = 'Teks Beranda dan About berhasil diperbarui!';
        } else {
            $flashError = 'Aksi pengelolaan tidak dikenali.';
        }
    } catch (RuntimeException $e) {
        $flashError = 'Perubahan gagal disimpan: ' . $e->getMessage();
    }
}

$siteContent = get_site_content();
$siteContentFields = site_content_fields();

$pageTitle = 'Kelola Konten & Upload Foto';
$currentPage = 'kelola';

require __DIR__ . '/includes/header.php';
?>

<section class="page-hero page-hero-compact">
    <div class="container">
        <div class="breadcrumb">
            <a href="<?= url('index.php') ?>">Beranda</a>
            <span>/</span>
            <span>Kelola Konten</span>
        </div>
        <h1>Kelola Informasi &amp; Upload Foto</h1>
        <p>Edit profil, foto, media, berita, serta teks Beranda dan About langsung dari web. Perubahan disimpan di file lokal.</p>
    </div>
</section>

<section class="container page-section">
    <?php if ($flashSuccess !== ''): ?>
        <div class="alert alert-success"><?= e($flashSuccess) ?></div>
    <?php endif; ?>
    <?php if ($flashError !== ''): ?>
        <div class="alert alert-error"><?= e($flashError) ?></div>
    <?php endif; ?>

    <div class="category-tabs">
        <a href="?tab=profil" class="category-tab <?= $tab === 'profil' ? 'active' : '' ?>">1. Profil Keluarga (6)</a>
        <a href="?tab=galeri" class="category-tab <?= $tab === 'galeri' ? 'active' : '' ?>">2. Galeri &amp; Upload Foto (<?= count($galeriPhotos) ?>)</a>
        <a href="?tab=media" class="category-tab <?= $tab === 'media' ? 'active' : '' ?>">3. Audio &amp; Video</a>
        <a href="?tab=berita" class="category-tab <?= $tab === 'berita' ? 'active' : '' ?>">4. Berita (25)</a>
        <a href="?tab=teks" class="category-tab <?= $tab === 'teks' ? 'active' : '' ?>">5. Teks Beranda &amp; About</a>
    </div>

    <!-- ==================== TAB 1: PROFIL KELUARGA ==================== -->
    <?php if ($tab === 'profil'): ?>
        <?php
        $selectedSlug = $_GET['anggota'] ?? $_POST['slug'] ?? 'anak-1';
        if (!isset($keluargaList[$selectedSlug])) {
            $selectedSlug = array_key_first($keluargaList);
        }
        $m = $keluargaList[$selectedSlug];
        ?>
        <div class="card">
            <h2>Edit Profil &amp; Upload Foto Anggota Keluarga</h2>
            <p style="color: var(--text-muted); margin-bottom: 1rem;">Pilih anggota keluarga yang ingin diubah datanya:</p>

            <div class="category-tabs" style="margin-bottom: 1.5rem;">
                <?php foreach ($keluargaList as $slug => $item): ?>
                    <a href="?tab=profil&anggota=<?= urlencode($slug) ?>"
                       class="category-tab <?= $slug === $selectedSlug ? 'active' : '' ?>">
                        <?= e($item['nama']) ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <form method="post" action="?tab=profil&anggota=<?= urlencode($selectedSlug) ?>" enctype="multipart/form-data" class="admin-form">
                <input type="hidden" name="action" value="update_profil">
                <input type="hidden" name="slug" value="<?= e($selectedSlug) ?>">

                <div class="grid-2" style="margin-bottom: 1rem;">
                    <div class="form-group">
                        <label>Nama Tampilan (<?= e($m['urutan']) ?>)</label>
                        <input type="text" name="nama" value="<?= e($m['nama']) ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Keterangan Ringkas</label>
                        <input type="text" name="ringkas" value="<?= e($m['ringkas']) ?>">
                    </div>
                </div>

                <div class="form-group" style="margin-bottom: 1.5rem;">
                    <label>Foto Profil Saat Ini &amp; Upload Foto Baru (JPG/PNG/WEBP)</label>
                    <div style="display: flex; align-items: center; gap: 1rem; flex-wrap: wrap;">
                        <img src="<?= url($m['foto']) ?>" alt="<?= e($m['nama']) ?>" style="width: 84px; height: 84px; object-fit: cover; border-radius: 10px; border: 1px solid var(--border);">
                        <input type="file" name="foto_profil" accept="image/jpeg,image/png,image/webp">
                    </div>
                </div>

                <h3>10 Sub-Data Diri</h3>
                <div class="grid-2">
                    <?php $no = 1; foreach ($m['data'] as $label => $nilai): ?>
                        <div class="form-group">
                            <label>#<?= $no++ ?> — Label &amp; Isi Data</label>
                            <input type="text" name="label[]" value="<?= e($label) ?>" style="margin-bottom: 0.35rem; font-weight: 600;" required>
                            <input type="text" name="nilai[]" value="<?= e($nilai) ?>">
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="article-actions">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan Profil</button>
                    <a href="<?= url('profil.php?anggota=' . urlencode($selectedSlug)) ?>" class="btn btn-secondary">Lihat di Halaman Profil &rarr;</a>
                </div>
            </form>
        </div>

    <!-- ==================== TAB 2: GALERI FOTO ==================== -->
    <?php elseif ($tab === 'galeri'): ?>
        <div class="card" style="margin-bottom: 1.5rem;">
            <h2>Tambah Foto Baru ke Galeri</h2>
            <p style="color: var(--text-muted); margin-bottom: 1rem;">Unggah foto keluarga (disarankan orientasi <em>landscape</em>, non-selfie).</p>

            <form method="post" action="?tab=galeri" enctype="multipart/form-data" class="admin-form">
                <input type="hidden" name="action" value="add_galeri">
                <div class="grid-3">
                    <div class="form-group">
                        <label>Pilih File Foto (JPG/PNG/WEBP)</label>
                        <input type="file" name="foto_galeri" accept="image/jpeg,image/png,image/webp" required>
                    </div>
                    <div class="form-group">
                        <label>Judul Foto</label>
                        <input type="text" name="judul" placeholder="Contoh: Foto Keluarga di Teras" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="text" name="tahun" value="<?= date('Y') ?>" required>
                    </div>
                </div>
                <div class="form-group" style="margin-top: 0.75rem;">
                    <label>Keterangan / Caption</label>
                    <textarea name="caption" rows="2" placeholder="Ceritakan singkat momen pada foto ini..."></textarea>
                </div>
                <div class="article-actions">
                    <button type="submit" class="btn btn-primary">+ Tambah &amp; Upload Foto</button>
                    <a href="<?= url('galeri.php') ?>" class="btn btn-secondary">Lihat Halaman Galeri &rarr;</a>
                </div>
            </form>
        </div>

        <div class="card">
            <h2>Edit atau Ganti Foto Galeri yang Sudah Ada (<?= count($galeriPhotos) ?> Foto)</h2>
            <div class="grid-2" style="margin-top: 1rem;">
                <?php foreach ($galeriPhotos as $g): ?>
                    <div class="card" style="padding: 1rem; background: var(--bg);">
                        <form method="post" action="?tab=galeri" enctype="multipart/form-data" class="admin-form">
                            <input type="hidden" name="action" value="update_galeri">
                            <input type="hidden" name="id" value="<?= (int)$g['id'] ?>">

                            <div style="display: flex; gap: 0.85rem; align-items: center; margin-bottom: 0.75rem;">
                                <img src="<?= url($g['src']) ?>" alt="<?= e($g['judul']) ?>" style="width: 120px; height: 75px; object-fit: cover; border-radius: 8px; border: 1px solid var(--border); flex-shrink: 0;">
                                <div style="flex: 1;">
                                    <strong>Foto #<?= (int)$g['id'] ?></strong>
                                    <input type="file" name="foto_galeri_edit" accept="image/jpeg,image/png,image/webp" style="margin-top: 0.35rem; font-size: 0.8rem;">
                                </div>
                            </div>

                            <div class="grid-2">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" name="judul" value="<?= e($g['judul']) ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="text" name="tahun" value="<?= e($g['tahun']) ?>" required>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 0.5rem;">
                                <label>Caption</label>
                                <textarea name="caption" rows="2"><?= e($g['caption']) ?></textarea>
                            </div>
                            <div style="display: flex; gap: 0.5rem; margin-top: 0.75rem;">
                                <button type="submit" class="btn btn-primary" style="padding: 0.45rem 0.9rem; font-size: 0.85rem;">Simpan</button>
                            </div>
                        </form>
                        <form method="post" action="?tab=galeri" onsubmit="return confirm('Hapus foto #<?= (int)$g['id'] ?> dari galeri?');" style="margin-top: 0.4rem;">
                            <input type="hidden" name="action" value="delete_galeri">
                            <input type="hidden" name="id" value="<?= (int)$g['id'] ?>">
                            <button type="submit" class="btn btn-outline" style="padding: 0.35rem 0.75rem; font-size: 0.8rem; color: #b91c1c; border-color: #fca5a5;">Hapus Foto</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    <!-- ==================== TAB 3: AUDIO & VIDEO ==================== -->
    <?php elseif ($tab === 'media'): ?>
        <div class="card">
            <div class="section-header" style="margin-bottom: 1rem;">
                <div>
                    <h2>Kelola Video Perkenalan &amp; Daftar Audio</h2>
                    <p>Ubah informasi atau unggah file <code>.mp4</code> / <code>.mp3</code> langsung ke <code>assets/media/</code>.</p>
                </div>
                <a href="<?= url('audio-video.php') ?>" class="btn btn-secondary">Lihat Halaman Audio Video &rarr;</a>
            </div>

            <div style="display: flex; flex-direction: column; gap: 1.25rem;">
                <?php foreach ($mediaRows as $row): ?>
                    <form method="post" action="?tab=media" enctype="multipart/form-data" class="card admin-form" style="background: var(--bg); padding: 1.15rem;">
                        <input type="hidden" name="action" value="update_media">
                        <input type="hidden" name="id" value="<?= (int)$row['id'] ?>">

                        <span class="badge <?= $row['tipe'] === 'video' ? 'badge-accent' : '' ?>" style="margin-bottom: 0.75rem;">
                            <?= $row['tipe'] === 'video' ? 'VIDEO PERKENALAN' : 'AUDIO LAGU' ?> (#<?= (int)$row['id'] ?>)
                        </span>

                        <div class="grid-2">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" value="<?= e($row['judul']) ?>" required>
                            </div>
                            <div class="form-group">
                                <label><?= $row['tipe'] === 'video' ? 'Pembuat' : 'Artis / Penyanyi' ?></label>
                                <input type="text" name="artis_atau_info" value="<?= e($row['artis_atau_info']) ?>">
                            </div>
                            <div class="form-group">
                                <label><?= $row['tipe'] === 'video' ? 'Orientasi & Kamera' : 'Genre Lagu' ?></label>
                                <input type="text" name="genre_atau_orientasi" value="<?= e($row['genre_atau_orientasi']) ?>">
                            </div>
                            <div class="form-group">
                                <label>Durasi</label>
                                <input type="text" name="durasi" value="<?= e($row['durasi']) ?>">
                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 0.75rem;">
                            <label>Deskripsi / Catatan</label>
                            <textarea name="deskripsi" rows="2"><?= e($row['deskripsi']) ?></textarea>
                        </div>

                        <div class="form-group" style="margin-top: 0.75rem;">
                            <label>Upload File <?= $row['tipe'] === 'video' ? 'Video (.mp4/.webm)' : 'Audio (.mp3/.wav/.ogg)' ?> — Saat ini: <code><?= e($row['src']) ?></code></label>
                            <input type="file" name="file_media" accept="<?= $row['tipe'] === 'video' ? 'video/mp4,video/webm' : 'audio/mpeg,audio/wav,audio/ogg' ?>">
                        </div>

                        <div style="margin-top: 0.85rem;">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan Media</button>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>

    <!-- ==================== TAB 4: BERITA ==================== -->
    <?php elseif ($tab === 'berita'): ?>
        <?php
        $selectedId = $_GET['id'] ?? $_POST['id'] ?? $beritaList[0]['id'];
        $selectedArticle = get_berita_by_id($selectedId) ?? $beritaList[0];
        ?>
        <div class="card">
            <h2>Edit Artikel Berita</h2>
            <form method="get" action="" style="margin-bottom: 1.25rem; display: flex; gap: 0.75rem; flex-wrap: wrap; align-items: center;">
                <input type="hidden" name="tab" value="berita">
                <label for="pilihBerita" style="font-weight: 600;">Pilih Berita:</label>
                <select name="id" id="pilihBerita" onchange="this.form.submit()" style="padding: 0.55rem 0.75rem; border-radius: 8px; border: 1px solid var(--border); max-width: 100%; flex: 1;">
                    <?php foreach ($beritaList as $b): ?>
                        <option value="<?= e($b['id']) ?>" <?= $b['id'] === $selectedArticle['id'] ? 'selected' : '' ?>>
                            [<?= e($b['kategori']) ?>] <?= e($b['judul']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </form>

            <form method="post" action="?tab=berita&id=<?= urlencode($selectedArticle['id']) ?>" class="admin-form">
                <input type="hidden" name="action" value="update_berita">
                <input type="hidden" name="id" value="<?= e($selectedArticle['id']) ?>">

                <div class="grid-2">
                    <div class="form-group">
                        <label>Judul Berita</label>
                        <input type="text" name="judul" value="<?= e($selectedArticle['judul']) ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" name="tanggal" value="<?= e($selectedArticle['tanggal']) ?>" required>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 0.75rem;">
                    <label>Ringkasan Singkat</label>
                    <textarea name="ringkasan" rows="2"><?= e($selectedArticle['ringkasan']) ?></textarea>
                </div>

                <div class="form-group" style="margin-top: 0.75rem;">
                    <label>Isi Berita (pisahkan antar paragraf dengan baris baru / Enter)</label>
                    <textarea name="isi_teks" rows="7"><?= e(implode("\n\n", $selectedArticle['isi'])) ?></textarea>
                </div>

                <div class="form-group" style="margin-top: 0.75rem;">
                    <label>Link Sumber (wajib tercantum di bagian bawah berita)</label>
                    <input type="url" name="sumber_url" value="<?= e($selectedArticle['sumber_url']) ?>" required>
                </div>

                <div class="article-actions">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan Berita</button>
                    <a href="<?= url($selectedArticle['file']) ?>" class="btn btn-secondary">Lihat Halaman Berita &rarr;</a>
                </div>
            </form>

        </div>
    <?php elseif ($tab === 'teks'): ?>
        <form method="post" action="?tab=teks" class="admin-form">
            <input type="hidden" name="action" value="update_site_content">
            <?php foreach (['Beranda', 'About'] as $section): ?>
                <div class="card" style="margin-bottom: 1.25rem;">
                    <h2>Edit Teks <?= e($section) ?></h2>
                    <div class="grid-2">
                        <?php foreach ($siteContentFields as $key => $field): ?>
                            <?php if ($field['section'] !== $section) { continue; } ?>
                            <div class="form-group">
                                <label for="content-<?= e($key) ?>"><?= e($field['label']) ?></label>
                                <?php if ($field['multiline']): ?>
                                    <textarea id="content-<?= e($key) ?>" name="content[<?= e($key) ?>]" rows="3" required><?= e($siteContent[$key]) ?></textarea>
                                <?php else: ?>
                                    <input id="content-<?= e($key) ?>" type="text" name="content[<?= e($key) ?>]" value="<?= e($siteContent[$key]) ?>" required>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="article-actions">
                <button type="submit" class="btn btn-primary">Simpan Teks Halaman</button>
                <a href="<?= url('index.php') ?>" class="btn btn-secondary">Lihat Beranda &rarr;</a>
                <a href="<?= url('about.php') ?>" class="btn btn-secondary">Lihat About &rarr;</a>
            </div>
        </form>
    <?php endif; ?>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
