<?php
/**
 * Data Profil Keluarga (6 Anggota: Bapak, Mama, dan 4 Bersaudara).
 * Setiap anggota memiliki tepat 10 sub-data diri yang seragam dan foto profil.
 * Catatan: Silakan sesuaikan detail data dan ganti file foto di assets/images/profil/ dengan foto asli.
 */

$keluargaList = [
    'bapak' => [
        'slug'     => 'bapak',
        'urutan'   => 'Orang Tua (Bapak)',
        'nama'     => 'Saleh',
        'foto'     => 'assets/images/profil/bapak.svg',
        'ringkas'  => 'Kepala Keluarga',
        'data'     => [
            'Nama Lengkap'          => 'Saleh',
            'Status dalam Keluarga' => 'Bapak (Kepala Keluarga)',
            'Pekerjaan'             => 'Petani',
            'Pendidikan Terakhir'   => 'SD',
            'Jenis Kelamin'         => 'Laki-laki',
            'Tempat, Tanggal Lahir' => 'BANDA, 30 APRIL 1979',
            'Asal Daerah'           => 'BANDA',
            'Alamat'                => 'DANAWERIA',
            'Makanan Kesukaan'      => 'SUAMI',
            'Hobi & Media Sosial'   => 'TIDAK TAU',
        ],
    ],
    'mama' => [
        'slug'     => 'mama',
        'urutan'   => 'Orang Tua (Mama)',
        'nama'     => 'Sukmawati',
        'foto'     => 'assets/images/profil/mama.svg',
        'ringkas'  => 'Ibu Rumah Tangga',
        'data'     => [
            'Nama Lengkap'          => 'Sukmawati',
            'Status dalam Keluarga' => 'Mama (Ibu)',
            'Pekerjaan / Status'    => 'Ibu Rumah Tangga',
            'Pendidikan Terakhir'   => 'SMP',
            'Jenis Kelamin'         => 'Perempuan',
            'Tempat, Tanggal Lahir' => 'AMBON, 5 APRIL 1988',
            'Asal Daerah'           => 'AMBON',
            'Alamat'                => 'DANAWERIA',
            'Makanan Kesukaan'      => 'Papeda',
            'Hobi & Media Sosial'   => 'TIDAK TAU',
        ],
    ],
    'anak-1' => [
        'slug'     => 'anak-1',
        'urutan'   => 'Anak Pertama (Saldi)',
        'nama'     => 'Saldi',
        'foto'     => 'assets/images/profil/anak-1-20261127123456.jpeg',
        'ringkas'  => 'Anak ke-1 • Mahasiswa (Pembuat Web)',
        'data'     => [
            'Nama Lengkap'          => 'Saldi',
            'Status dalam Keluarga' => 'Anak Pertama',
            'NIM'                   => '16325043',
            'Program Studi'         => 'Manajemen Informatika',
            'Jenis Kelamin'         => 'Laki-laki',
            'Tempat, Tanggal Lahir' => 'Fakfak, 3 Juli 2006',
            'Asal Daerah'           => 'Fakfak',
            'Alamat'                => 'DANAWERIA',
            'Makanan Kesukaan'      => 'Lontar',
            'Hobi'                  => 'Main game',
        ],
    ],
    'anak-2' => [
        'slug'     => 'anak-2',
        'urutan'   => 'Anak Kedua (Salwan)',
        'nama'     => 'Salwan',
        'foto'     => 'assets/images/profil/anak-2.svg',
        'ringkas'  => 'Anak ke-2',
        'data'     => [
            'Nama Lengkap'          => 'Salwan',
            'Status dalam Keluarga' => 'Anak Kedua',
            'NIM / Status'          => 'Pelajar',
            'Pendidikan / Jurusan'  => 'SMA',
            'Jenis Kelamin'         => 'Laki-laki',
            'Tempat, Tanggal Lahir' => 'Ambon, 29 Juli 2009',
            'Asal Daerah'           => 'Ambon',
            'Alamat'                => 'DANAWERIA',
            'Makanan Kesukaan'      => 'Lontar',
            'Hobi'                  => 'Main game',
        ],
    ],
    'anak-3' => [
        'slug'     => 'anak-3',
        'urutan'   => 'Anak Ketiga (Safina)',
        'nama'     => 'Safina',
        'foto'     => 'assets/images/profil/anak-3-20261127123552.jpeg',
        'ringkas'  => 'Anak ke-3',
        'data'     => [
            'Nama Lengkap'          => 'Safina',
            'Status dalam Keluarga' => 'Anak Ketiga',
            'NISN / Status'         => 'Pelajar SMP',
            'Sekolah / Jurusan'     => 'SMP Negeri 2 Fakfak',
            'Jenis Kelamin'         => 'Perempuan',
            'Tempat, Tanggal Lahir' => 'Fakfak, 23 april 2014',
            'Asal Daerah'           => 'Fakfak',
            'Alamat'                => 'DANAWERIA',
            'Makanan Kesukaan'      => 'Lontar',
            'Hobi'                  => 'Nonton drama china',
        ],
    ],
    'anak-4' => [
        'slug'     => 'anak-4',
        'urutan'   => 'Anak Keempat (Safini)',
        'nama'     => 'Safini',
        'foto'     => 'assets/images/profil/anak-4-20261127123924.jpeg',
        'ringkas'  => 'Anak ke-4 (Bungsu)',
        'data'     => [
            'Nama Lengkap'          => 'Safini',
            'Status dalam Keluarga' => 'Anak Keempat (Bungsu)',
            'NISN / Status'         => 'Pelajar SMP',
            'Sekolah / Kelas'       => 'SMP Negeri 2 Fakfak',
            'Jenis Kelamin'         => 'Perempuan',
            'Tempat, Tanggal Lahir' => 'Fakfak, 23 April 2014',
            'Asal Daerah'           => 'Fakfak',
            'Alamat'                => 'DANAWERIA',
            'Makanan Kesukaan'      => 'Lontar',
            'Hobi'                  => 'main game',
        ],
    ],
];

require_once __DIR__ . '/../includes/content_store.php';
$storedContent = load_content_store();
if (!empty($storedContent['keluarga']) && is_array($storedContent['keluarga'])) {
    $keluargaList = $storedContent['keluarga'];
}
