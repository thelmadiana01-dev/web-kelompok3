<?php
/**
 * Data berita bawaan, dengan pembaruan tersimpan pada file JSON lokal.
 */

$beritaCategories = array (
  'ai' => 'AI',
  'it' => 'IT',
  'lifestyle' => 'Lifestyle (Keindahan Papua & Indonesia Timur)',
  'pemrograman' => 'Pemrograman',
  'politik' => 'Politik di Indonesia',
);

$beritaList = array (
  0 => 
  array (
    'id' => 'ai-1',
    'kategori_slug' => 'ai',
    'kategori' => 'AI',
    'judul' => 'Pemanfaatan Kecerdasan Buatan Generatif dalam Membantu Riset dan Pembelajaran Mahasiswa',
    'tanggal' => '21 November 2026',
    'file' => 'berita/ai-1.php',
    'ringkasan' => 'AI generatif membantu merangkum literatur dan menjelaskan konsep kompleks, namun tetap menuntut verifikasi kritis dari pengguna.',
    'isi' => 
    array (
      0 => 'Kehadiran model kecerdasan buatan generatif telah mengubah cara mahasiswa mencari referensi, memahami materi kuliah, dan menyusun kerangka ide penelitian.',
      1 => 'Para akademisi menekankan bahwa AI sebaiknya digunakan sebagai asisten belajar untuk berdiskusi dan memeriksa logika, bukan menggantikan proses berpikir kritis manusia.',
      2 => 'Verifikasi fakta terhadap sumber asli tetap mutlak diperlukan karena model bahasa dapat menghasilkan informasi yang kurang akurat jika tidak dikaji ulang.',
    ),
    'sumber_url' => 'https://www.unesco.org/en/artificial-intelligence/education',
  ),
  1 => 
  array (
    'id' => 'ai-2',
    'kategori_slug' => 'ai',
    'kategori' => 'AI',
    'judul' => 'Teknologi Computer Vision untuk Deteksi Dini Penyakit Tanaman Pangan',
    'tanggal' => '17 November 2026',
    'file' => 'berita/ai-2.php',
    'ringkasan' => 'Pengolahan citra daun berbasis machine learning mampu mengenali gejala serangan hama lebih cepat dari pengamatan manual.',
    'isi' => 
    array (
      0 => 'Computer vision merupakan salah satu cabang AI yang sangat bermanfaat di bidang ketahanan pangan. Melalui kamera ponsel, petani dapat memotret daun tanaman yang tampak bermasalah.',
      1 => 'Model deep learning yang telah dilatih dengan ribuan citra penyakit tanaman akan menganalisis pola bercak atau perubahan warna daun dalam hitungan detik.',
      2 => 'Diagnosis dini ini membantu petani mengambil tindakan penanganan sebelum kerusakan meluas ke seluruh lahan.',
    ),
    'sumber_url' => 'https://ai.google/discover/',
  ),
  2 => 
  array (
    'id' => 'ai-3',
    'kategori_slug' => 'ai',
    'kategori' => 'AI',
    'judul' => 'Etika dan Tata Kelola AI: Menjaga Privasi Data di Era Otomatisasi',
    'tanggal' => '14 November 2026',
    'file' => 'berita/ai-3.php',
    'ringkasan' => 'Regulasi dan prinsip etika AI diperlukan agar sistem cerdas berjalan transparan, adil, dan menghormati privasi pengguna.',
    'isi' => 
    array (
      0 => 'Seiring meluasnya penggunaan sistem berbasis AI di layanan keuangan, kesehatan, dan rekrutmen kerja, isu transparansi algoritma semakin menjadi perhatian.',
      1 => 'Pengembang sistem AI dituntut untuk memastikan dataset pelatihan bebas dari bias yang merugikan kelompok tertentu serta melindungi data pribadi pengguna.',
      2 => 'Berbagai negara, termasuk Indonesia melalui strategi nasional kecerdasan artifisial, terus merumuskan pedoman etika pemanfaatan AI yang bertanggung jawab.',
    ),
    'sumber_url' => 'https://www.oecd.org/en/topics/artificial-intelligence.html',
  ),
  3 => 
  array (
    'id' => 'ai-4',
    'kategori_slug' => 'ai',
    'kategori' => 'AI',
    'judul' => 'Asisten AI untuk Pengkodean Meningkatkan Produktivitas Developer Pemula dan Profesional',
    'tanggal' => '10 November 2026',
    'file' => 'berita/ai-4.php',
    'ringkasan' => 'Alat bantu AI di editor kode membantu mendeteksi bug, menulis dokumentasi, dan mempercepat pembuatan prototipe.',
    'isi' => 
    array (
      0 => 'Integrasi kecerdasan buatan di lingkungan pengembangan perangkat lunak (IDE) kini menjadi bagian dari alur kerja sehari-hari banyak programmer.',
      1 => 'Fitur seperti pelengkapan kode otomatis, penjelasan pesan error, hingga saran pengujian unit membantu developer fokus pada arsitektur dan logika bisnis aplikasi.',
      2 => 'Meski demikian, pemahaman dasar algoritma, struktur data, dan keamanan kode tetap wajib dikuasai oleh setiap pengembang.',
    ),
    'sumber_url' => 'https://github.blog/ai-and-ml/',
  ),
  4 => 
  array (
    'id' => 'ai-5',
    'kategori_slug' => 'ai',
    'kategori' => 'AI',
    'judul' => 'Penerapan AI dalam Layanan Kesehatan untuk Membantu Pembacaan Hasil Radiologi',
    'tanggal' => '07 November 2026',
    'file' => 'berita/ai-5.php',
    'ringkasan' => 'Sistem pendukung keputusan medis berbasis AI membantu dokter mempercepat skrining awal citra rontgen dan CT scan.',
    'isi' => 
    array (
      0 => 'Di sektor kesehatan, kecerdasan buatan berperan sebagai alat bantu bagi tenaga medis dalam menganalisis volume citra radiologi yang sangat besar setiap harinya.',
      1 => 'Algoritma pengenalan pola dapat menandai area yang mencurigakan pada hasil rontgen sehingga dokter dapat memprioritaskan kasus-kasus yang membutuhkan penanganan segera.',
      2 => 'Kolaborasi antara keahlian klinis dokter dan kecepatan analisis AI terbukti mampu meningkatkan ketepatan layanan medis.',
    ),
    'sumber_url' => 'https://www.who.int/health-topics/artificial-intelligence',
  ),
  5 => 
  array (
    'id' => 'it-1',
    'kategori_slug' => 'it',
    'kategori' => 'IT',
    'judul' => 'Microsoft Tetapkan Status "Code Red" Usai Gangguan Layanan Hampir 24 Jam',
    'tanggal' => '27 November 2026',
    'file' => 'berita/it-1.php',
    'ringkasan' => 'Microsoft menetapkan status darurat internal (Code Red) setelah sejumlah layanan cloud dan produktivitas utamanya mengalami gangguan operasional (down) selama hampir satu hari penuh. Insiden ini berdampak luas pada aktivitas bisnis dan pengguna global sebelum sistem berhasil dipulihkan secara bertahap.',
    'isi' => 
    array (
      0 => 'Microsoft menetapkan status darurat internal (Code Red) setelah sejumlah layanan cloud dan produktivitas utamanya mengalami gangguan operasional (down) selama hampir satu hari penuh. Insiden ini berdampak luas pada aktivitas bisnis dan pengguna global sebelum sistem berhasil dipulihkan secara bertahap.',
    ),
    'sumber_url' => 'https://tekno.kompas.com/#:~:text=Internet%20%2D%2010%20jam%20lalu.%20Baca%20berita,yang%20Awet%202%20Hari.%20Dibaca%205.686%20kali',
  ),
  6 => 
  array (
    'id' => 'it-2',
    'kategori_slug' => 'it',
    'kategori' => 'IT',
    'judul' => 'Kantor Berita AFP dan Platform 1Password Dilaporkan Terkena Serangan Siber',
    'tanggal' => '27 November 2026',
    'file' => 'berita/it-2.php',
    'ringkasan' => 'Gelombang serangan siber kembali menyasar infrastruktur digital global, kali ini menimpa kantor berita internasional AFP yang membuat layanannya sempat tidak dapat diakses, serta layanan pengelola kata sandi 1Password yang melaporkan adanya insiden peretasan data.',
    'isi' => 
    array (
      0 => 'Gelombang serangan siber kembali menyasar infrastruktur digital global, kali ini menimpa kantor berita internasional AFP yang membuat layanannya sempat tidak dapat diakses, serta layanan pengelola kata sandi 1Password yang melaporkan adanya insiden peretasan data.',
    ),
    'sumber_url' => 'https://www.cnnindonesia.com/teknologi',
  ),
  7 => 
  array (
    'id' => 'it-3',
    'kategori_slug' => 'it',
    'kategori' => 'IT',
    'judul' => 'BSSN Peringatkan Adanya Celah Keamanan Kritis di Browser Google Chrome',
    'tanggal' => '26 November 2026',
    'file' => 'berita/it-3.php',
    'ringkasan' => 'Badan Siber dan Sandi Negara (BSSN) mengeluarkan imbauan resmi kepada pengguna internet di Indonesia untuk segera memperbarui peramban (browser) Google Chrome ke versi terbaru. Pembaruan ini penting untuk menutup celah kerentanan keamanan yang berpotensi dieksploitasi peretas dari jarak jauh.',
    'isi' => 
    array (
      0 => 'Badan Siber dan Sandi Negara (BSSN) mengeluarkan imbauan resmi kepada pengguna internet di Indonesia untuk segera memperbarui peramban (browser) Google Chrome ke versi terbaru. Pembaruan ini penting untuk menutup celah kerentanan keamanan yang berpotensi dieksploitasi peretas dari jarak jauh.',
    ),
    'sumber_url' => 'https://www.cnbcindonesia.com/tech',
  ),
  8 => 
  array (
    'id' => 'it-4',
    'kategori_slug' => 'it',
    'kategori' => 'IT',
    'judul' => 'Nvidia Dikabarkan Hentikan Pengiriman Server ke Sejumlah Negara Asia Tenggara',
    'tanggal' => '27 November 2026',
    'file' => 'berita/it-4.php',
    'ringkasan' => 'Raksasa semikonduktor Nvidia dilaporkan menghentikan sementara pengiriman perangkat keras server komputasi tingkat tinggi ke Indonesia, Malaysia, Singapura, dan Thailand di tengah ketatnya rantai pasok dan kebijakan distribusi perangkat keras pusat data.',
    'isi' => 
    array (
      0 => 'Raksasa semikonduktor Nvidia dilaporkan menghentikan sementara pengiriman perangkat keras server komputasi tingkat tinggi ke Indonesia, Malaysia, Singapura, dan Thailand di tengah ketatnya rantai pasok dan kebijakan distribusi perangkat keras pusat data.',
    ),
    'sumber_url' => 'https://tekno.kompas.com/#:~:text=Nvidia%20Dikabarkan%20Setop%20Pengiriman%20Server%20ke%20Indonesia%2C,Jaringan%20Perusahaan%20Lewat%20CCTV%20untuk%20Tambang%20Kripto',
  ),
  9 => 
  array (
    'id' => 'it-5',
    'kategori_slug' => 'it',
    'kategori' => 'IT',
    'judul' => 'Menperin Dorong Industri Nasional Percepat Transformasi Digital dan INDI 4.0',
    'tanggal' => '25 November 2026',
    'file' => 'berita/it-5.php',
    'ringkasan' => 'Dalam ajang Penganugerahan National Lighthouse, Teknologi dan Jasa Industri, Kementerian Perindustrian menyoroti keberhasilan 53 perusahaan yang meraih indeks kesiapan transformasi digital (INDI 4.0). Pemerintah mendorong sektor industri dalam negeri terus memperkuat adopsi teknologi informasi mandiri agar mampu bersaing di pasar global.',
    'isi' => 
    array (
      0 => 'Dalam ajang Penganugerahan National Lighthouse, Teknologi dan Jasa Industri, Kementerian Perindustrian menyoroti keberhasilan 53 perusahaan yang meraih indeks kesiapan transformasi digital (INDI 4.0). Pemerintah mendorong sektor industri dalam negeri terus memperkuat adopsi teknologi informasi mandiri agar mampu bersaing di pasar global.',
    ),
    'sumber_url' => 'https://money.kompas.com/read/2026/11/25/171500426/menperin-dorong-industri-ri-perkuat-teknologi-dan-ai-agar-tak-tertinggal#:~:text=%22Pada%20tahun%202026%20ini%2C%20seleksi%20penghargaan%20INDI,Jasa%20Industri%20(BSKJI)%20dalam%20acara%20yang%20sama',
  ),
  10 => 
  array (
    'id' => 'lifestyle-1',
    'kategori_slug' => 'lifestyle',
    'kategori' => 'Lifestyle (Keindahan Papua & Indonesia Timur)',
    'judul' => 'Pesona Raja Ampat Papua Barat Daya: Surga Bahari dengan Keanekaragaman Hayati Terbaik Dunia',
    'tanggal' => '24 November 2026',
    'file' => 'berita/lifestyle-1.php',
    'ringkasan' => 'Gugusan pulau karst Piaynemo dan terumbu karang Raja Ampat menjadi destinasi wisata bahari impian wisatawan lokal maupun mancanegara.',
    'isi' => 
    array (
      0 => 'Kepulauan Raja Ampat di Papua Barat Daya dikenal luas sebagai salah satu destinasi wisata bahari terindah di dunia. Gugusan pulau-pulau karst yang menjulang di atas air laut berwarna biru kehijauan, seperti di puncak Piaynemo dan Wayag, menawarkan panorama yang memukau.',
      1 => 'Di bawah permukaan lautnya, Raja Ampat menyimpan lebih dari 75 persen spesies karang dunia serta ribuan jenis ikan tropis yang menjadikannya surga bagi para penyelam dan pecinta snorkeling.',
      2 => 'Selain keindahan alamnya, keramahan masyarakat lokal dan komitmen menjaga kelestarian laut melalui ekowisata membuat pengalaman berkunjung ke Raja Ampat terasa sangat berkesan.',
    ),
    'sumber_url' => 'https://www.indonesia.travel/id/id/destinasi/maluku-papua/raja-ampat',
  ),
  11 => 
  array (
    'id' => 'lifestyle-2',
    'kategori_slug' => 'lifestyle',
    'kategori' => 'Lifestyle (Keindahan Papua & Indonesia Timur)',
    'judul' => 'Keindahan Alam Lembah Baliem Wamena dan Kekayaan Budaya Pegunungan Tengah Papua',
    'tanggal' => '20 November 2026',
    'file' => 'berita/lifestyle-2.php',
    'ringkasan' => 'Dikelilingi pegunungan hijau yang sejuk di ketinggian 1.600 meter, Lembah Baliem memadukan lanskap memukau dan tradisi leluhur.',
    'isi' => 
    array (
      0 => 'Terletak di kawasan Pegunungan Jayawijaya, Lembah Baliem di Wamena menyuguhkan pemandangan alam yang sangat berbeda dari wilayah pesisir Papua. Udara pegunungan yang sejuk dan hamparan kabut pagi menciptakan suasana tenang dan eksotis.',
      1 => 'Lembah ini juga menjadi rumah bagi masyarakat Suku Dani, Lani, dan Yali yang menjaga tradisi budaya mereka secara turun-temurun, termasuk Festival Lembah Baliem yang menampilkan seni tari dan tradisi lokal.',
      2 => 'Perjalanan menuju Lembah Baliem memberikan perspektif mendalam mengenai harmoni antara manusia dan alam di tanah Papua.',
    ),
    'sumber_url' => 'https://www.indonesia.travel/id/id/destinasi/maluku-papua/lembah-baliem',
  ),
  12 => 
  array (
    'id' => 'lifestyle-3',
    'kategori_slug' => 'lifestyle',
    'kategori' => 'Lifestyle (Keindahan Papua & Indonesia Timur)',
    'judul' => 'Menikmati Senja di Danau Sentani Jayapura dengan Latar Pegunungan Cyclops',
    'tanggal' => '15 November 2026',
    'file' => 'berita/lifestyle-3.php',
    'ringkasan' => 'Danau luas yang dihiasi puluhan pulau kecil ini menjadi ikon wisata alam sekaligus pusat seni ukir dan budaya di Jayapura.',
    'isi' => 
    array (
      0 => 'Danau Sentani yang membentang di kaki Pegunungan Cyclops, Jayapura, merupakan salah satu danau terbesar dan terindah di Papua. Dari Bukit Tungku Wiri atau Bukit Teletubbies Sentani, pengunjung dapat menyaksikan panorama danau yang berpadu dengan perbukitan hijau.',
      1 => 'Di sekitar danau terdapat perkampungan adat yang terkenal dengan kerajinan lukisan kulit kayu khas Sentani serta kuliner ikan gabus bakar yang lezat.',
      2 => 'Menjelang matahari terbenam, pantulan cahaya keemasan di permukaan Danau Sentani menjadi momen favorit bagi para fotografer dan pelancong.',
    ),
    'sumber_url' => 'https://www.indonesia.travel/id/id/destinasi/maluku-papua/danau-sentani',
  ),
  13 => 
  array (
    'id' => 'lifestyle-4',
    'kategori_slug' => 'lifestyle',
    'kategori' => 'Lifestyle (Keindahan Papua & Indonesia Timur)',
    'judul' => 'Taman Nasional Teluk Cenderawasih: Pengalaman Berenang Bersama Hiu Paus di Nabire',
    'tanggal' => '10 November 2026',
    'file' => 'berita/lifestyle-4.php',
    'ringkasan' => 'Kawasan konservasi laut terluas di Indonesia ini menawarkan interaksi langka dan ramah lingkungan bersama hiu paus.',
    'isi' => 
    array (
      0 => 'Taman Nasional Teluk Cenderawasih yang membentang di wilayah Nabire dan Teluk Wondama adalah kawasan taman nasional perairan laut terluas di Indonesia.',
      1 => 'Daya tarik paling unik di kawasan ini adalah kemunculan hiu paus (whale shark) yang jinak di sekitar bagan nelayan, sehingga wisatawan dapat berenang atau snorkeling dengan tetap mematuhi aturan jarak konservasi.',
      2 => 'Keberadaan pulau-pulau kecil berpasir putih dan terumbu karang yang masih alami menjadikan Teluk Cenderawasih permata tersembunyi di Indonesia Timur.',
    ),
    'sumber_url' => 'https://www.indonesia.travel/id/id/destinasi/maluku-papua/taman-nasional-teluk-cenderawasih',
  ),
  14 => 
  array (
    'id' => 'lifestyle-5',
    'kategori_slug' => 'lifestyle',
    'kategori' => 'Lifestyle (Keindahan Papua & Indonesia Timur)',
    'judul' => 'Eksotisme Pulau Misool dan Danau Ubur-Ubur Tanpa Sengat di Selatan Papua',
    'tanggal' => '05 November 2026',
    'file' => 'berita/lifestyle-5.php',
    'ringkasan' => 'Pulau Misool menyuguhkan laguna tersembunyi, gua purba, hingga danau air payau tempat hidupnya ubur-ubur tak menyengat.',
    'isi' => 
    array (
      0 => 'Terletak di bagian selatan Kepulauan Raja Ampat, Pulau Misool menawarkan ketenangan alam yang masih sangat asri dan jauh dari keramaian kota.',
      1 => 'Salah satu destinasi ikonik di Misool adalah Puncak Love Dafalen serta Lenmakana, sebuah danau tersembunyi yang dihuni ribuan ubur-ubur tanpa sengat.',
      2 => 'Keindahan laguna biru jernih dan tebing kapur purba di Misool membuktikan betapa kayanya pesona alam Indonesia Timur yang patut dijaga bersama.',
    ),
    'sumber_url' => 'https://www.indonesia.travel/id/id/destinasi/maluku-papua',
  ),
  15 => 
  array (
    'id' => 'pemrograman-1',
    'kategori_slug' => 'pemrograman',
    'kategori' => 'Pemrograman',
    'judul' => 'Keunggulan PHP 8.x dalam Membangun Aplikasi Web Modular yang Cepat dan Aman',
    'tanggal' => '23 November 2026',
    'file' => 'berita/pemrograman-1.php',
    'ringkasan' => 'Fitur modern seperti type declarations, match expression, dan peningkatan performa JIT membuat PHP tetap relevan di pengembangan web.',
    'isi' => 
    array (
      0 => 'PHP masih menjadi salah satu bahasa pemrograman sisi server yang paling banyak digunakan di dunia untuk membangun website dinamis dan aplikasi web.',
      1 => 'Pada versi PHP 8.x, pengembang mendapatkan peningkatan performa eksekusi yang signifikan serta fitur penulisan kode yang lebih rapi dan aman dari kesalahan tipe data.',
      2 => 'Dengan menerapkan struktur modular—memisahkan header, navigasi, footer, dan data—proyek PHP menjadi jauh lebih mudah dirawat dan dikembangkan.',
    ),
    'sumber_url' => 'https://www.php.net/releases/8.2/en.php',
  ),
  16 => 
  array (
    'id' => 'pemrograman-2',
    'kategori_slug' => 'pemrograman',
    'kategori' => 'Pemrograman',
    'judul' => 'Praktik Terbaik Desain Web Responsif Menggunakan CSS Grid dan Flexbox',
    'tanggal' => '18 November 2026',
    'file' => 'berita/pemrograman-2.php',
    'ringkasan' => 'Kombinasi CSS Grid untuk tata letak dua dimensi dan Flexbox untuk komponen satu dimensi mempermudah pembuatan tampilan adaptif.',
    'isi' => 
    array (
      0 => 'Pengguna mengakses website dari berbagai ukuran layar, mulai dari ponsel pintar hingga monitor desktop berukuran besar.',
      1 => 'Dengan memanfaatkan CSS Grid dan Flexbox secara tepat, pengembang tidak perlu lagi bergantung pada teknik float lama yang rumit dan rentan rusak.',
      2 => 'Penggunaan properti seperti aspect-ratio dan media query juga menjaga agar galeri foto dan kartu konten tetap proporsional di semua perangkat.',
    ),
    'sumber_url' => 'https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_grid_layout',
  ),
  17 => 
  array (
    'id' => 'pemrograman-3',
    'kategori_slug' => 'pemrograman',
    'kategori' => 'Pemrograman',
    'judul' => 'Mengenal Konsep Clean Code agar Kode Program Mudah Dibaca Tim Pengembang',
    'tanggal' => '13 November 2026',
    'file' => 'berita/pemrograman-3.php',
    'ringkasan' => 'Penamaan variabel yang jelas, fungsi yang ringkas, dan menghindari duplikasi kode adalah kunci perangkat lunak yang mudah dipelihara.',
    'isi' => 
    array (
      0 => 'Menulis kode yang sekadar berjalan tidaklah cukup dalam pengembangan perangkat lunak jangka panjang. Kode juga harus mudah dibaca dan dipahami oleh orang lain.',
      1 => 'Prinsip Clean Code menganjurkan pemecahan fungsi besar menjadi bagian-bagian kecil dengan satu tanggung jawab yang jelas.',
      2 => 'Selain itu, menghindari pengulangan logika (DRY - Don\'t Repeat Yourself) membantu mengurangi risiko bug saat terjadi perubahan fitur.',
    ),
    'sumber_url' => 'https://refactoring.guru/refactoring/what-is-refactoring',
  ),
  18 => 
  array (
    'id' => 'pemrograman-4',
    'kategori_slug' => 'pemrograman',
    'kategori' => 'Pemrograman',
    'judul' => 'Pentingnya Version Control System dengan Git bagi Mahasiswa Teknik Informatika',
    'tanggal' => '08 November 2026',
    'file' => 'berita/pemrograman-4.php',
    'ringkasan' => 'Git memungkinkan pencatatan riwayat perubahan kode, kolaborasi tim tanpa konflik, serta pemulihan kode dengan cepat.',
    'isi' => 
    array (
      0 => 'Banyak pengembang pemula masih menyimpan salinan proyek dengan nama folder seperti "tugas_final_v2_revisi" yang sangat membingungkan.',
      1 => 'Dengan mempelajari Git sejak bangku kuliah, mahasiswa dapat melacak setiap perubahan baris kode, membuat cabang (branch) untuk eksperimen fitur baru, dan berkolaborasi secara profesional.',
      2 => 'Penguasaan Git juga menjadi salah satu keterampilan dasar yang hampir selalu dicari oleh industri teknologi.',
    ),
    'sumber_url' => 'https://git-scm.com/doc',
  ),
  19 => 
  array (
    'id' => 'pemrograman-5',
    'kategori_slug' => 'pemrograman',
    'kategori' => 'Pemrograman',
    'judul' => 'Pencegahan Celah Keamanan XSS dan SQL Injection pada Aplikasi Web Dasar',
    'tanggal' => '04 November 2026',
    'file' => 'berita/pemrograman-5.php',
    'ringkasan' => 'Escaping output dengan htmlspecialchars() dan penggunaan prepared statements wajib diterapkan sejak awal pembuatan web.',
    'isi' => 
    array (
      0 => 'Keamanan aplikasi web harus dibangun sejak baris kode pertama ditulis, bukan ditambahkan setelah aplikasi selesai.',
      1 => 'Dalam PHP, selalu gunakan fungsi htmlspecialchars() saat menampilkan data ke HTML untuk mencegah serangan Cross-Site Scripting (XSS).',
      2 => 'Sementara itu, untuk interaksi dengan basis data, penggunaan PDO dengan prepared statements adalah standar wajib untuk menutup celah SQL Injection.',
    ),
    'sumber_url' => 'https://owasp.org/www-project-top-ten/',
  ),
  20 => 
  array (
    'id' => 'politik-1',
    'kategori_slug' => 'politik',
    'kategori' => 'Politik di Indonesia',
    'judul' => 'Penguatan Sistem Pemerintahan Berbasis Elektronik (SPBE) untuk Transparansi Publik',
    'tanggal' => '22 November 2026',
    'file' => 'berita/politik-1.php',
    'ringkasan' => 'Digitalisasi tata kelola pemerintahan diharapkan menekan birokrasi berbelit dan meningkatkan akuntabilitas anggaran.',
    'isi' => 
    array (
      0 => 'Pemerintah Indonesia terus mendorong penerapan Sistem Pemerintahan Berbasis Elektronik (SPBE) di kementerian, lembaga, hingga pemerintah daerah.',
      1 => 'Melalui integrasi portal layanan publik dan keterbukaan informasi anggaran, masyarakat dapat memantau program pembangunan secara lebih transparan.',
      2 => 'Langkah ini dipandang sebagai bagian penting dari reformasi birokrasi agar pelayanan publik semakin cepat, bersih, dan akuntabel.',
    ),
    'sumber_url' => 'https://www.menpan.go.id',
  ),
  21 => 
  array (
    'id' => 'politik-2',
    'kategori_slug' => 'politik',
    'kategori' => 'Politik di Indonesia',
    'judul' => 'Peran Generasi Muda dan Mahasiswa dalam Mengawal Demokrasi dan Kebijakan Publik',
    'tanggal' => '19 November 2026',
    'file' => 'berita/politik-2.php',
    'ringkasan' => 'Partisipasi aktif pemilih muda melalui ruang diskusi sehat dan literasi politik menjadi kunci kualitas demokrasi Indonesia.',
    'isi' => 
    array (
      0 => 'Generasi muda dan mahasiswa memiliki porsi demografi yang sangat besar dalam menentukan arah pembangunan politik di Indonesia.',
      1 => 'Melalui forum kajian kebijakan, organisasi kemahasiswaan, serta kanal aspirasi digital, anak muda dapat menyalurkan gagasan konstruktif bagi pemerintah daerah maupun pusat.',
      2 => 'Literasi politik yang baik membantu masyarakat muda menyaring informasi secara objektif serta menolak praktik hoaks dan politik uang.',
    ),
    'sumber_url' => 'https://www.kpu.go.id',
  ),
  22 => 
  array (
    'id' => 'politik-3',
    'kategori_slug' => 'politik',
    'kategori' => 'Politik di Indonesia',
    'judul' => 'Sinergi Pemerintah Pusat dan Daerah dalam Percepatan Pembangunan Infrastruktur Wilayah Timur',
    'tanggal' => '16 November 2026',
    'file' => 'berita/politik-3.php',
    'ringkasan' => 'Koordinasi lintas kementerian dan pemerintah daerah difokuskan pada pemerataan konektivitas, pendidikan, dan layanan dasar.',
    'isi' => 
    array (
      0 => 'Kebijakan pembangunan nasional terus menekankan prinsip keadilan sosial dengan memperkuat konektivitas antarwilayah di Indonesia bagian timur.',
      1 => 'Sinergi antara pemerintah pusat dan pemerintah daerah menjadi faktor penentu agar program pembangunan pelabuhan, jalan trans-wilayah, serta fasilitas pendidikan berjalan tepat sasaran.',
      2 => 'Keterlibatan tokoh masyarakat dan pemerintah lokal juga memastikan kebijakan pembangunan selaras dengan kebutuhan warga setempat.',
    ),
    'sumber_url' => 'https://www.setneg.go.id',
  ),
  23 => 
  array (
    'id' => 'politik-4',
    'kategori_slug' => 'politik',
    'kategori' => 'Politik di Indonesia',
    'judul' => 'DPR dan Pemerintah Bahas Penguatan Perlindungan Data Pribadi di Ruang Digital',
    'tanggal' => '11 November 2026',
    'file' => 'berita/politik-4.php',
    'ringkasan' => 'Implementasi regulasi perlindungan data pribadi menjadi perhatian utama di tengah maraknya kebocoran data.',
    'isi' => 
    array (
      0 => 'Komisi terkait di parlemen bersama pemerintah terus mengevaluasi kesiapan lembaga pengawas dan aturan turunan terkait perlindungan data pribadi warga negara.',
      1 => 'Regulasi ini mewajibkan penyelenggara sistem elektronik baik sektor publik maupun swasta untuk menjaga kerahasiaan data pengguna secara ketat.',
      2 => 'Keberadaan payung hukum yang kuat diharapkan meningkatkan kepercayaan masyarakat terhadap ekosistem layanan digital nasional.',
    ),
    'sumber_url' => 'https://www.dpr.go.id',
  ),
  24 => 
  array (
    'id' => 'politik-5',
    'kategori_slug' => 'politik',
    'kategori' => 'Politik di Indonesia',
    'judul' => 'Diplomasi Aktif Indonesia dalam Menjaga Stabilitas Kawasan ASEAN',
    'tanggal' => '06 November 2026',
    'file' => 'berita/politik-5.php',
    'ringkasan' => 'Politik luar negeri bebas aktif Indonesia terus dikedepankan untuk mendorong kerja sama ekonomi dan perdamaian regional.',
    'isi' => 
    array (
      0 => 'Dalam percaturan politik internasional, Indonesia konsisten menjalankan prinsip politik luar negeri bebas dan aktif.',
      1 => 'Melalui forum ASEAN dan kerja sama bilateral, Indonesia mendorong dialog konstruktif untuk menjaga stabilitas kawasan Asia Tenggara serta memperluas peluang perdagangan.',
      2 => 'Pendekatan diplomasi yang inklusif tersebut memperkuat posisi Indonesia sebagai mitra strategis di tingkat global.',
    ),
    'sumber_url' => 'https://kemlu.go.id',
  ),
);

/**
 * Gunakan data berita yang dikelola melalui halaman web jika tersedia.
 */
require_once __DIR__ . '/../includes/content_store.php';
$storedContent = load_content_store();
if (!empty($storedContent['berita_categories']) && is_array($storedContent['berita_categories'])) {
    $beritaCategories = $storedContent['berita_categories'];
}
if (!empty($storedContent['berita']) && is_array($storedContent['berita'])) {
    $beritaList = $storedContent['berita'];
}

/**
 * Ambil satu berita berdasarkan ID (misal 'it-1').
 */
function get_berita_by_id(string $id): ?array
{
    global $beritaList;
    foreach ($beritaList as $item) {
        if ($item['id'] === $id) {
            return $item;
        }
    }
    return null;
}

/**
 * Ambil semua berita dalam satu kategori berdasarkan slug.
 */
function get_berita_by_category(string $categorySlug): array
{
    global $beritaList;
    return array_values(array_filter(
        $beritaList,
        fn(array $item) => $item['kategori_slug'] === $categorySlug
    ));
}