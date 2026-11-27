<?php
/**
 * Data Audio & Video untuk halaman Audio Video.
 */

$videoPerkenalan = [
    'judul'       => 'Video Perkenalan Diri — Saldi',
    'deskripsi'   => 'Video perkenalan diri berdurasi 3 menit yang direkam menggunakan kamera belakang HP dengan orientasi landscape, menceritakan latar belakang pribadi, keluarga, perkuliahan, serta minat di bidang teknologi.',
    'src'         => 'assets/media/video-perkenalan.mp4',
    'durasi'      => '03:00',
    'orientasi'   => 'Landscape (16:9) • Kamera Belakang HP',
];

$audioPlaylist = [
    [
        'id'      => 1,
        'judul'   => 'Laskar Pelangi',
        'artis'   => 'Nidji',
        'genre'   => 'Pop Inspiratif Indonesia',
        'durasi'  => '03:45',
        'src'     => 'assets/media/audio-01.mp3',
        'catatan' => 'Lagu penuh semangat tentang mimpi, pendidikan, dan persahabatan.',
    ],
    [
        'id'      => 2,
        'judul'   => 'Untukku',
        'artis'   => 'Chrisye',
        'genre'   => 'Pop Klasik Indonesia',
        'durasi'  => '04:12',
        'src'     => 'assets/media/audio-02.mp3',
        'catatan' => 'Lagu klasik yang tenang dan nyaman didengarkan saat belajar atau bersantai.',
    ],
    [
        'id'      => 3,
        'judul'   => 'Negeri di Awan',
        'artis'   => 'Katon Bagaskara',
        'genre'   => 'Akustik / Pop',
        'durasi'  => '04:05',
        'src'     => 'assets/media/audio-03.mp3',
        'catatan' => 'Melodi lembut yang cocok menemani waktu mengerjakan tugas pemrograman.',
    ],
    [
        'id'      => 4,
        'judul'   => 'Harta Berharga',
        'artis'   => 'Bunga Citra Lestari (OST Keluarga Cemara)',
        'genre'   => 'Soundtrack / Keluarga',
        'durasi'  => '03:28',
        'src'     => 'assets/media/audio-04.mp3',
        'catatan' => 'Mengingatkan bahwa harta yang paling berharga adalah keluarga.',
    ],
];

$mediaRows = [];
foreach ($audioPlaylist as $audio) {
    $mediaRows[] = [
        'id' => $audio['id'] + 1,
        'tipe' => 'audio',
        'judul' => $audio['judul'],
        'artis_atau_info' => $audio['artis'],
        'genre_atau_orientasi' => $audio['genre'],
        'durasi' => $audio['durasi'],
        'src' => $audio['src'],
        'deskripsi' => $audio['catatan'],
    ];
}
$mediaRows[] = [
    'id' => 1,
    'tipe' => 'video',
    'judul' => $videoPerkenalan['judul'],
    'artis_atau_info' => '',
    'genre_atau_orientasi' => $videoPerkenalan['orientasi'],
    'durasi' => $videoPerkenalan['durasi'],
    'src' => $videoPerkenalan['src'],
    'deskripsi' => $videoPerkenalan['deskripsi'],
];

require_once __DIR__ . '/../includes/content_store.php';
$storedContent = load_content_store();
if (!empty($storedContent['media']) && is_array($storedContent['media'])) {
    $mediaRows = $storedContent['media'];
    $audioFromStore = [];
    $audioNo = 1;
    foreach ($mediaRows as $row) {
        if ($row['tipe'] === 'video') {
            $videoPerkenalan = [
                'judul'     => $row['judul'],
                'deskripsi' => $row['deskripsi'],
                'src'       => $row['src'],
                'durasi'    => $row['durasi'],
                'orientasi' => $row['genre_atau_orientasi'],
            ];
        } elseif ($row['tipe'] === 'audio') {
            $audioFromStore[] = [
                'id'      => $audioNo++,
                'judul'   => $row['judul'],
                'artis'   => $row['artis_atau_info'],
                'genre'   => $row['genre_atau_orientasi'],
                'durasi'  => $row['durasi'],
                'src'     => $row['src'],
                'catatan' => $row['deskripsi'],
            ];
        }
    }
    $audioPlaylist = $audioFromStore;
}
