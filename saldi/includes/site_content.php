<?php

function site_content_fields(): array
{
    return [
        'home_hero_badge' => ['section' => 'Beranda', 'label' => 'Label utama', 'default' => 'Website Profil Modular PHP', 'multiline' => false],
        'home_hero_title' => ['section' => 'Beranda', 'label' => 'Judul utama', 'default' => 'Selamat Datang di Website Profil Saldi & Keluarga', 'multiline' => false],
        'home_hero_description' => ['section' => 'Beranda', 'label' => 'Deskripsi utama', 'default' => 'Portal profil pribadi dan keluarga yang dibangun secara modular menggunakan PHP dengan halaman terpisah untuk setiap menu: Beranda, Profil Keluarga, Audio Video, Galeri, Berita, dan About.', 'multiline' => true],
        'home_profile_button' => ['section' => 'Beranda', 'label' => 'Tombol utama — profil', 'default' => 'Lihat Profil Keluarga (6 Anggota)', 'multiline' => false],
        'home_gallery_button_hero' => ['section' => 'Beranda', 'label' => 'Tombol utama — galeri', 'default' => 'Buka Galeri (16 Foto)', 'multiline' => false],
        'home_section_title' => ['section' => 'Beranda', 'label' => 'Judul bagian menu', 'default' => 'Jelajahi Menu Utama', 'multiline' => false],
        'home_section_description' => ['section' => 'Beranda', 'label' => 'Deskripsi bagian menu', 'default' => 'Setiap menu dibuka pada halaman .php tersendiri dengan komponen header, navbar, dan footer modular.', 'multiline' => true],
        'home_profile_badge' => ['section' => 'Beranda', 'label' => 'Profil — label', 'default' => '6 Anggota Keluarga', 'multiline' => false],
        'home_profile_title' => ['section' => 'Beranda', 'label' => 'Profil — judul', 'default' => 'Profil & Sub-Menu Keluarga', 'multiline' => false],
        'home_profile_description' => ['section' => 'Beranda', 'label' => 'Profil — deskripsi', 'default' => 'Memuat profil Bapak, Mama, dan 4 bersaudara secara berurutan, masing-masing lengkap dengan foto dan 10 data diri.', 'multiline' => true],
        'home_profile_link' => ['section' => 'Beranda', 'label' => 'Profil — teks tombol', 'default' => 'Buka Profil →', 'multiline' => false],
        'home_media_badge' => ['section' => 'Beranda', 'label' => 'Audio Video — label', 'default' => 'Video & Musik', 'multiline' => false],
        'home_media_title' => ['section' => 'Beranda', 'label' => 'Audio Video — judul', 'default' => 'Audio Video', 'multiline' => false],
        'home_media_description' => ['section' => 'Beranda', 'label' => 'Audio Video — deskripsi', 'default' => 'Video perkenalan diri berorientasi landscape (kamera belakang HP) berdurasi 3 menit serta daftar lagu pilihan.', 'multiline' => true],
        'home_media_link' => ['section' => 'Beranda', 'label' => 'Audio Video — teks tombol', 'default' => 'Buka Audio Video →', 'multiline' => false],
        'home_gallery_badge' => ['section' => 'Beranda', 'label' => 'Galeri — label', 'default' => '16 Foto Landscape', 'multiline' => false],
        'home_gallery_title' => ['section' => 'Beranda', 'label' => 'Galeri — judul', 'default' => 'Galeri Keluarga', 'multiline' => false],
        'home_gallery_description' => ['section' => 'Beranda', 'label' => 'Galeri — deskripsi', 'default' => 'Koleksi 16 foto pribadi dan keluarga (non-selfie) yang seragam landscape dan dapat digeser kiri/kanan ala galeri HP.', 'multiline' => true],
        'home_gallery_link' => ['section' => 'Beranda', 'label' => 'Galeri — teks tombol', 'default' => 'Buka Galeri →', 'multiline' => false],
        'home_news_badge' => ['section' => 'Beranda', 'label' => 'Berita — label', 'default' => '5 Kategori • 25 Berita', 'multiline' => false],
        'home_news_title' => ['section' => 'Beranda', 'label' => 'Berita — judul', 'default' => 'Berita Terkini', 'multiline' => false],
        'home_news_description' => ['section' => 'Beranda', 'label' => 'Berita — deskripsi', 'default' => 'Tampilan baris-baris berita dari 5 kategori: IT, AI, Politik Indonesia, Pemrograman, dan Lifestyle Papua.', 'multiline' => true],
        'home_news_link' => ['section' => 'Beranda', 'label' => 'Berita — teks tombol', 'default' => 'Buka Berita →', 'multiline' => false],
        'home_about_badge' => ['section' => 'Beranda', 'label' => 'About — label', 'default' => 'Informasi Web', 'multiline' => false],
        'home_about_title' => ['section' => 'Beranda', 'label' => 'About — judul', 'default' => 'About', 'multiline' => false],
        'home_about_description' => ['section' => 'Beranda', 'label' => 'About — deskripsi', 'default' => 'Penjelasan mengenai tujuan pembuatan website, struktur modular PHP, serta informasi penyusun tugas.', 'multiline' => true],
        'home_about_link' => ['section' => 'Beranda', 'label' => 'About — teks tombol', 'default' => 'Buka About →', 'multiline' => false],
        'home_architecture_badge' => ['section' => 'Beranda', 'label' => 'Arsitektur — label', 'default' => 'Arsitektur', 'multiline' => false],
        'home_architecture_title' => ['section' => 'Beranda', 'label' => 'Arsitektur — judul', 'default' => 'Multi-Halaman PHP', 'multiline' => false],
        'home_architecture_description' => ['section' => 'Beranda', 'label' => 'Arsitektur — deskripsi', 'default' => 'Seluruh halaman menggunakan ekstensi .php tanpa navigasi scroll single-page berbasis ID.', 'multiline' => true],
        'home_architecture_link' => ['section' => 'Beranda', 'label' => 'Arsitektur — teks tombol', 'default' => 'Profil Saldi →', 'multiline' => false],
        'home_gallery_section_title' => ['section' => 'Beranda', 'label' => 'Cuplikan galeri — judul', 'default' => 'Cuplikan Galeri Keluarga', 'multiline' => false],
        'home_gallery_section_description' => ['section' => 'Beranda', 'label' => 'Cuplikan galeri — deskripsi', 'default' => 'Menampilkan 4 dari 16 foto keluarga berorientasi landscape.', 'multiline' => true],
        'home_gallery_button' => ['section' => 'Beranda', 'label' => 'Cuplikan galeri — teks tombol', 'default' => 'Lihat Semua 16 Foto', 'multiline' => false],
        'about_hero_title' => ['section' => 'About', 'label' => 'Judul utama', 'default' => 'Tentang Website Ini', 'multiline' => false],
        'about_hero_description' => ['section' => 'About', 'label' => 'Deskripsi utama', 'default' => 'Informasi mengenai penyusun, tujuan pembuatan, serta struktur modular PHP pada website profil ini.', 'multiline' => true],
        'about_identity_badge' => ['section' => 'About', 'label' => 'Identitas — label', 'default' => 'Identitas Pembuat', 'multiline' => false],
        'about_identity_title' => ['section' => 'About', 'label' => 'Identitas — judul', 'default' => 'Profil Singkat Penyusun', 'multiline' => false],
        'about_identity_body' => ['section' => 'About', 'label' => 'Identitas — isi', 'default' => 'Website ini disusun oleh Saldi sebagai tugas mata kuliah Pemrograman Web. Seluruh halaman dirancang agar rapi, responsif, dan mematuhi seluruh ketentuan tugas yang diberikan.', 'multiline' => true],
        'about_architecture_label' => ['section' => 'About', 'label' => 'Label arsitektur', 'default' => 'Arsitektur', 'multiline' => false],
        'about_architecture' => ['section' => 'About', 'label' => 'Keterangan arsitektur', 'default' => 'Multi-halaman PHP (bukan single-page scroll berbasis ID).', 'multiline' => true],
        'about_modularity_label' => ['section' => 'About', 'label' => 'Label modularitas', 'default' => 'Modularitas', 'multiline' => false],
        'about_modularity' => ['section' => 'About', 'label' => 'Keterangan modularitas', 'default' => 'Menggunakan includes/header.php, includes/navbar.php, includes/footer.php, dan file data terpisah di data/.', 'multiline' => true],
        'about_extension_label' => ['section' => 'About', 'label' => 'Label ekstensi', 'default' => 'Ekstensi', 'multiline' => false],
        'about_extension' => ['section' => 'About', 'label' => 'Keterangan ekstensi', 'default' => 'Seluruh halaman menggunakan ekstensi .php.', 'multiline' => true],
        'about_features_badge' => ['section' => 'About', 'label' => 'Fitur — label', 'default' => 'Struktur Menu & Konten', 'multiline' => false],
        'about_features_title' => ['section' => 'About', 'label' => 'Fitur — judul', 'default' => 'Ringkasan Fitur Website', 'multiline' => false],
        'about_feature_home_label' => ['section' => 'About', 'label' => 'Label fitur Beranda', 'default' => 'Beranda', 'multiline' => false],
        'about_feature_home' => ['section' => 'About', 'label' => 'Fitur Beranda', 'default' => 'Ringkasan portal dan navigasi cepat ke seluruh bagian.', 'multiline' => true],
        'about_feature_profile_label' => ['section' => 'About', 'label' => 'Label fitur Profil', 'default' => 'Profil', 'multiline' => false],
        'about_feature_profile' => ['section' => 'About', 'label' => 'Fitur Profil', 'default' => 'Sub-menu 6 anggota keluarga (Bapak, Mama, dan 4 bersaudara) dengan 10 data diri & foto.', 'multiline' => true],
        'about_feature_media_label' => ['section' => 'About', 'label' => 'Label fitur Audio Video', 'default' => 'Audio Video', 'multiline' => false],
        'about_feature_media' => ['section' => 'About', 'label' => 'Fitur Audio Video', 'default' => 'Video perkenalan diri (landscape 3 menit, kamera belakang) + audio lagu pilihan.', 'multiline' => true],
        'about_feature_gallery_label' => ['section' => 'About', 'label' => 'Label fitur Galeri', 'default' => 'Galeri', 'multiline' => false],
        'about_feature_gallery' => ['section' => 'About', 'label' => 'Fitur Galeri', 'default' => '16 foto keluarga seragam landscape (non-selfie) dengan lightbox klik kiri/kanan & swipe HP.', 'multiline' => true],
        'about_feature_news_label' => ['section' => 'About', 'label' => 'Label fitur Berita', 'default' => 'Berita', 'multiline' => false],
        'about_feature_news' => ['section' => 'About', 'label' => 'Fitur Berita', 'default' => '5 kategori (IT, AI, Politik Indonesia, Pemrograman, Lifestyle Papua) × 5 berita = 25 file .php dengan link sumber.', 'multiline' => true],
        'about_feature_about_label' => ['section' => 'About', 'label' => 'Label fitur About', 'default' => 'About', 'multiline' => false],
        'about_feature_about' => ['section' => 'About', 'label' => 'Fitur About', 'default' => 'Halaman informasi tentang website ini.', 'multiline' => true],
    ];
}

function get_site_content(): array
{
    $fields = site_content_fields();
    $content = [];
    foreach ($fields as $key => $field) {
        $content[$key] = $field['default'];
    }

    require_once __DIR__ . '/content_store.php';
    $store = load_content_store();
    if (!empty($store['site_content']) && is_array($store['site_content'])) {
        foreach ($store['site_content'] as $key => $value) {
            if (array_key_exists($key, $fields) && is_string($value)) {
                $content[$key] = $value;
            }
        }
    }

    return $content;
}

function save_site_content(array $input): void
{
    $fields = site_content_fields();
    update_content_store(static function (array $store) use ($fields, $input): array {
        $content = $store['site_content'] ?? [];
        foreach ($fields as $key => $field) {
            if (isset($input[$key]) && is_string($input[$key])) {
                $content[$key] = trim($input[$key]);
            }
        }
        $store['site_content'] = $content;
        return $store;
    });
}
