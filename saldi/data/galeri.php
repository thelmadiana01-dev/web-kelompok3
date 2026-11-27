<?php
/**
 * Data Galeri: 16 Foto Pribadi & Keluarga (Orientasi Landscape Seragam, Non-Selfie).
 * Ganti path gambar dengan foto asli (format .jpg/.png/.webp) berorientasi landscape di folder assets/images/galeri/.
 */

$galeriPhotos = [
    [
        'id'      => 1,
        'src'     => 'assets/images/galeri/foto-01.svg',
        'judul'   => 'Foto Keluarga Lengkap Saat Hari Raya',
        'caption' => 'Foto bersama Bapak, Mama, dan saudara-saudara di ruang tamu rumah saat momen Lebaran.',
        'tahun'   => '2025',
    ],
    [
        'id'      => 2,
        'src'     => 'assets/images/galeri/foto-02.svg',
        'judul'   => 'Makan Malam Bersama Keluarga',
        'caption' => 'Kebersamaan makan malam akhir pekan di rumah setelah semua anggota keluarga berkumpul.',
        'tahun'   => '2025',
    ],
    [
        'id'      => 3,
        'src'     => 'assets/images/galeri/foto-03.svg',
        'judul'   => 'Bapak dan Mama di Halaman Rumah',
        'caption' => 'Bapak dan Mama berfoto di taman kecil depan rumah pada pagi hari.',
        'tahun'   => '2025',
    ],
    [
        'id'      => 4,
        'src'     => 'assets/images/galeri/foto-04.svg',
        'judul'   => 'Saldi di Kampus Setelah Praktikum',
        'caption' => 'Difoto oleh teman sekelas di depan gedung laboratorium komputer kampus.',
        'tahun'   => '2025',
    ],
    [
        'id'      => 5,
        'src'     => 'assets/images/galeri/foto-05.svg',
        'judul'   => 'Kegiatan Kerja Bakti Keluarga',
        'caption' => 'Membersihkan halaman rumah bersama adik-adik pada hari Minggu pagi.',
        'tahun'   => '2025',
    ],
    [
        'id'      => 6,
        'src'     => 'assets/images/galeri/foto-06.svg',
        'judul'   => 'Wisuda Kakak Pertama',
        'caption' => 'Momen bahagia menghadiri acara wisuda Kakak Rahmat bersama seluruh keluarga.',
        'tahun'   => '2024',
    ],
    [
        'id'      => 7,
        'src'     => 'assets/images/galeri/foto-07.svg',
        'judul'   => 'Saldi Mengerjakan Proyek Web',
        'caption' => 'Suasana belajar dan ngoding di meja belajar rumah (difoto menggunakan tripod).',
        'tahun'   => '2025',
    ],
    [
        'id'      => 8,
        'src'     => 'assets/images/galeri/foto-08.svg',
        'judul'   => 'Rekreasi Pantai Losari',
        'caption' => 'Jalan-jalan sore bersama keluarga menikmati matahari terbenam di Pantai Losari.',
        'tahun'   => '2024',
    ],
    [
        'id'      => 9,
        'src'     => 'assets/images/galeri/foto-09.svg',
        'judul'   => 'Kunjungan ke Kampung Halaman Bone',
        'caption' => 'Silaturahmi ke rumah kakek dan nenek di Kabupaten Bone saat liburan semester.',
        'tahun'   => '2024',
    ],
    [
        'id'      => 10,
        'src'     => 'assets/images/galeri/foto-10.svg',
        'judul'   => 'Saldi Saat Mengikuti Seminar IT',
        'caption' => 'Dokumentasi setelah mengikuti seminar teknologi informasi dan pengembangan web.',
        'tahun'   => '2025',
    ],
    [
        'id'      => 11,
        'src'     => 'assets/images/galeri/foto-11.svg',
        'judul'   => 'Ulang Tahun Mama',
        'caption' => 'Kejutan sederhana untuk ulang tahun Mama bersama seluruh saudara di rumah.',
        'tahun'   => '2025',
    ],
    [
        'id'      => 12,
        'src'     => 'assets/images/galeri/foto-12.svg',
        'judul'   => 'Olahraga Pagi Bersama Saudara',
        'caption' => 'Jogging pagi di lapangan bersama Kakak Arif dan Adik Fajar.',
        'tahun'   => '2025',
    ],
    [
        'id'      => 13,
        'src'     => 'assets/images/galeri/foto-13.svg',
        'judul'   => 'Saldi Membaca di Perpustakaan',
        'caption' => 'Mencari referensi tugas pemrograman di perpustakaan daerah.',
        'tahun'   => '2025',
    ],
    [
        'id'      => 14,
        'src'     => 'assets/images/galeri/foto-14.svg',
        'judul'   => 'Persiapan Bakar Ikan Akhir Tahun',
        'caption' => 'Menyiapkan hidangan bakar ikan bersama Bapak dan kakak-kakak di teras belakang.',
        'tahun'   => '2024',
    ],
    [
        'id'      => 15,
        'src'     => 'assets/images/galeri/foto-15.svg',
        'judul'   => 'Mengantar Adik Lomba Sekolah',
        'caption' => 'Mendampingi Adik Zaskia saat mengikuti kegiatan lomba menggambar tingkat SMP.',
        'tahun'   => '2025',
    ],
    [
        'id'      => 16,
        'src'     => 'assets/images/galeri/foto-16.svg',
        'judul'   => 'Potret Keluarga di Teras Rumah',
        'caption' => 'Foto santai sore hari di teras rumah menggunakan tripod dengan timer kamera.',
        'tahun'   => '2025',
    ],
];

require_once __DIR__ . '/../includes/content_store.php';
$storedContent = load_content_store();
if (!empty($storedContent['galeri']) && is_array($storedContent['galeri'])) {
    $galeriPhotos = $storedContent['galeri'];
}
