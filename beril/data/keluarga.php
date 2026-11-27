<?php
/*
 * Data keluarga. Tiap orang WAJIB 10 data diri (label boleh diganti, tapi usahakan seragam).
 * Mau menambah kakak/adik: tambah satu blok di sini, lalu buat file profil/<slug>.php
 * (salin isi profil/saya.php dan ganti $slug).
 * Foto profil: taruh di assets/img/profil/
 */
if (!function_exists('data10')) {
function data10(array $o): array
{
    return [
        'Nama Lengkap'      => $o['nama']    ?? '...',
        'Jenis Kelamin'     => $o['jk']      ?? '...',
        'Tempat, Tgl Lahir' => $o['lahir']   ?? '...',
        'Alamat'            => $o['alamat']  ?? '...',
        'Asal Daerah'       => $o['asal']    ?? '...',
        'Pendidikan/Kerja'  => $o['kerja']   ?? '...',
        'Makanan Kesukaan'  => $o['makanan'] ?? '...',
        'Hobi'              => $o['hobi']    ?? '...',
        'Akun Sosmed'       => $o['sosmed']  ?? '...',
        'Motto Hidup'       => $o['motto']   ?? '...',
    ];
}
}

return [
    'saya' => [
        'peran' => 'Saya',
        'foto'  => 'assets/img/profil/saya.jpg',
        'ringkas' => 'Mahasiswa D3 Manajemen Informatika.',
        'data'  => data10([
            'nama'  => 'Beril azura aurelya',
            'jk'    => 'perempuan',
            'kerja' => 'Mahasiswa D3 Manajemen Informatika, Politeknik Negeri Fakfak',
            'lahir' => 'Kendari 27-04-2008',
            'alamat'=> 'jln kadamber',
            'asal'  => 'kendari',
            'makanan'=> 'brownies',
            'hobi'  => 'apapun asal yg positif',
            'sosmed' => 'privat',
            'motto' => 'hidup sekali berbuat baik berkali-kali',  
        ]),
    ],
    'ayah' => [
        'peran' => 'Ayah',
        'foto'  => 'assets/img/profil/ayah.jpg',
        'ringkas' => 'Isi deskripsi singkat ayah.',
        'data'  => data10([
            'nama' => 'renold r',
            'jk' => 'Laki-laki',
            'kerja' => 'wirausaha',
            'lahir' => 'privat',
            'alamat' => 'jln. kadamber',
            'asal' => 'fakfak',
            'makanan'=> 'apapun',
            'hobi' => 'banyak',
            'sosmed'=> 'privat',
            'motto' => 'katanya kurang tau',
        ]),
    ],
    'ibu' => [
        'peran' => 'Ibu',
        'foto'  => 'assets/img/profil/ibu.jpg',
        'ringkas' => 'Isi deskripsi singkat ibu.',
        'data'  => data10([
            'nama' => 'nurwati audy',
            'jk' => 'Perempuan',
            'kerja' => 'wirausaha',
            'lahir' => 'privat',
            'alamat' => 'jln.kadamber',
            'asal' => 'kendari',
            'makanan' => 'banyak pokoknya',
            'hobi' => 'shooping',
            'sosmed' => 'privat',
            'motto' => 'kurang tau katanya',
        ]),
    ],
    'adik' => [
        'peran' => 'Adik',
        'foto'  => 'assets/img/profil/adik.jpg',
        'ringkas' => 'Isi deskripsi singkat adik.',
        'data'  => data10([
            'nama' => 'ranatasya',
            'jk' => 'Perempuan',
            'kerja' => 'sekolah',
            'lahir' => 'privat',
            'alamat' => 'jln.kadamber',
            'asal' => 'fakfak',
            'makanan' => 'semuanya',
            'hobi' => 'main game',
            'sosmed' => 'privat',
            'motto' => 'belum punya motto',
        ]),
    ],
];
