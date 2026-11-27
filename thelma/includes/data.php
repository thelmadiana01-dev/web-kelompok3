<?php
$namaSitus = 'Website Keluarga';          
$namaAnda  = 'Thelma Diana Wansaubun';
$nim       = '16325029';

// Data Keluarga
$keluarga = [
  'mama'=>[
    'peran'=>'Mama',
    'data'=>[
      'Nama Lengkap'=>'Yuliana Selly',
      'Nama Panggilan'=>'Yuliana',
      'Jenis Kelamin'=>'Perempuan',
      'Tempat Lahir'=>'Fakfak Papua Barat',
      'Tanggal Lahir'=>'14 Juli 1977',
      'Alamat'=>'Jl.Grapangit gewab misidalam',
      'Pekerjaan'=>'Ibu Rumah Tangga',
      'Asal Daerah'=>'Adonara, Nusa Tenggara Timur',
      'Makanan Kesukaan'=>'Papeda, Ikan Kuah Kuning, Sayur Kangkung',
      'Hobi'=>'Membaca, Menyanyi',
    ],
  ],
  'bapak'=>[
    'peran'=>'Bapak',
    'data'=>[
      'Nama Lengkap'=>'Tera Franus Wansaubun',
      'Nama Panggilan'=>'Tera',
      'Jenis Kelamin'=>'Laki-laki',
      'Tempat Lahir'=>'Tual Maluku Tenggara',
      'Tanggal Lahir'=>'13 Maret 1973',
      'Alamat'=>'Jl.Grapangit gewab misidalam',
      'Pekerjaan'=>'Tukang Bangunan',
      'Asal Daerah'=>'Tual, Maluku Tenggara',
      'Makanan Kesukaan'=>'Embal',
      'Hobi'=>'Menyelam',
    ],
  ],
  'anak1'=>[
    'peran'=>'Anak ke-1',
    'data'=>[
      'Nama Lengkap'=>'Emanuel Ariyanto Beda Wansaubun',
      'Nama Panggilan'=>'Emanuel',
      'Jenis Kelamin'=>'Laki-laki',
      'Tempat Lahir'=>'Fakfak Papua Barat',
      'Tanggal Lahir'=>'03 Oktober 1991',
      'Alamat'=>'Jl.Grapangit gewab misidalam',
      'Pendidikan'=>'D3 Teknik Mesin',
      'Asal Daerah'=>'Tual, Maluku Tenggara',
      'Makanan Kesukaan'=>'Nasi Goreng',
      'Hobi'=>'Menyanyi',
    ],
  ],
  'anak2'=>[
    'peran'=>'Anak ke-2',
    'data'=>[
      'Nama Lengkap'=>'Windy Ardiana Wansaubun',
      'Nama Panggilan'=>'Windy Ardiana',
      'Jenis Kelamin'=>'Perempuan',
      'Tempat Lahir'=>'Fakfak Papua Barat',
      'Tanggal Lahir'=>'12 Januari 2001',
      'Alamat'=>'Jl.Grapangit gewab misidalam',
      'Pekerjaan'=>'Guru Kimia',
      'Asal Daerah'=>'Tual, Maluku Tenggara',
      'Makanan Kesukaan'=>'Ikan Bakar',
      'Hobi'=>'Menari',
    ],
  ],
  'anak3'=>[
    'peran'=>'Anak ke-3',
    'data'=>[
      'Nama Lengkap'=>'Martina Christin Wansaubun',
      'Nama Panggilan'=>'Martina',
      'Jenis Kelamin'=>'Perempuan',
      'Tempat Lahir'=>'Fakfak Papua Barat',
      'Tanggal Lahir'=>'12 Maret 2002',
      'Alamat'=>'Jl.Grapangit gewab misidalam',
      'Pendidikan'=>'Sarjana Akuntansi',
      'Asal Daerah'=>'Tual, Maluku Tenggara',
      'Makanan Kesukaan'=>'Nasi Padang',
      'Hobi'=>'Menulis',
    ],
  ],
  'anak4'=>[
    'peran'=>'Anak ke-4',
    'data'=>[
      'Nama Lengkap'=>'Thelma Diana Wansaubun',
      'Nama Panggilan'=>'Thelma',
      'Jenis Kelamin'=>'Perempuan',
      'Tempat Lahir'=>'Fakfak Papua Barat',
      'Tanggal Lahir'=>'28 Januari 2005',
      'Alamat'=>'Jl.Grapangit gewab misidalam',
      'Pekerjaan'=>'Mahasiswa',
      'Asal Daerah'=>'Tual, Maluku Tenggara',
      'Makanan Kesukaan'=>'Bakso, Mie Ayam, Sate',
      'Hobi'=>'Membaca',
    ],
  ],
  'anak5'=>[
    'peran'=>'Anak ke-5',
    'data'=>[
      'Nama Lengkap'=>'Lisa Wansaubun',
      'Nama Panggilan'=>'Lisa',
      'Jenis Kelamin'=>'Perempuan',
      'Tempat Lahir'=>'Fakfak Papua Barat',
      'Tanggal Lahir'=>'11 Maret 2007',
      'Alamat'=>'jl.Grapangit gewab misidalam',
      'Pekerjaan'=>'Mahasiswa',
      'Asal Daerah'=>'Tual, Maluku Tenggara',
      'Makanan Kesukaan'=>'Ikan bakar',
      'Hobi'=>'Menari',
    ],
  ],
  'anak6'=>[
    'peran'=>'Anak ke-6',
    'data'=>[
      'Nama Lengkap'=>'Lano Abraham Wansaubun',
      'Nama Panggilan'=>'Lano Abraham',
      'Jenis Kelamin'=>'Laki-laki',
      'Tempat Lahir'=>'Fakfak Papua Barat',
      'Tanggal Lahir'=>'11 Februari 2009',
      'Alamat'=>'Jl.Grapangit gewab misidalam',
      'Pekerjaan'=>'Pelajar',
      'Asal Daerah'=>'Tual, Maluku Tenggara',
      'Makanan Kesukaan'=>'Pisang Goreng',
      'Hobi'=>'Bermain alat musik',
    ],
  ],
];
$daftar = [];
foreach ($keluarga as $_id => $_profil) { $daftar[$_id] = $_profil['peran']; }

$kategori = ['it'=>'IT','ai'=>'AI','politik'=>'Politik Indonesia','pemrograman'=>'Pemrograman','lifestyle'=>'Lifestyle: Keindahan Papua'];
$berita = [];
foreach ($kategori as $_k => $_nama) {
  for ($_n = 1; $_n <= 5; $_n++) {
    $berita[$_k][$_n] = [
      'judul'  => "Judul berita $_nama $_n (ganti)",
      'ringkas'=> 'Ringkasan singkat berita. Ganti dengan satu atau dua kalimat pembuka.',
      'isi'    => ['Paragraf pertama berita. Salin isi berita dari sumbernya ke sini.', 'Paragraf kedua berita.'],
      'sumber' => 'https://contoh.com/tautan-berita-asli',
    ];
  }
}
$berita['it'] = [
  1=>[
    'judul'=>'Tiga Badan Intelijen Amerika Serikat Dilaporkan Diretas',
    'ringkas'=>'Laporan media menyebut tiga badan intelijen AS, termasuk CIA, menjadi sasaran peretasan yang diduga memanfaatkan perangkat berbasis AI.',
    'isi'=>[
      'The New York Times melaporkan bahwa tiga badan intelijen Amerika Serikat, termasuk CIA, diduga mengalami peretasan. Perangkat bernama ARTEX yang dikaitkan dengan penggunaan AI disebut dalam laporan tersebut.',
      'Waktu pasti penyusupan dan jenis data yang mungkin diakses belum diumumkan. Informasi mengenai kasus ini masih berdasarkan laporan media dan belum merinci dampak akhirnya.',
    ],
    'sumber'=>'https://news.republika.co.id/berita/tp330v451/3-badan-intelijen-as-termasuk-cia-diretas-jejak-peretas-mengarah-ke-china',
  ],
  2=>[
    'judul'=>'FBI dan Komdigi Mengingatkan Ancaman Serangan Siber Berbasis AI',
    'ringkas'=>'Peringatan FBI menyoroti pemanfaatan AI agentic untuk mengotomatisasi serangan, sementara data BSSN menunjukkan tingginya anomali trafik.',
    'isi'=>[
      'FBI mengeluarkan peringatan pada 13 November 2026 mengenai penggunaan AI agentic dalam serangan siber yang dapat berjalan dengan sedikit campur tangan manusia. Komdigi juga mengimbau masyarakat dan organisasi untuk meningkatkan kewaspadaan.',
      'Menurut data BSSN yang dikutip dalam laporan, lebih dari 3,3 miliar anomali trafik tercatat sejak Januari hingga 12 November 2026. Angka tersebut menjadi pengingat pentingnya pemantauan dan perlindungan sistem digital.',
    ],
    'sumber'=>'https://rri.co.id/samarinda/iptek/2916848/serangan-siber-pakai-ai-peringatan-fbi-dan-imbauan-komdigi',
  ],
  3=>[
    'judul'=>'Microsoft Memperingatkan Gangguan Sistem Teknologi Bisa Meningkat',
    'ringkas'=>'Brad Smith dari Microsoft menilai analisis kode dengan AI mempercepat penemuan celah keamanan dan menambah tekanan bagi perusahaan perangkat lunak.',
    'isi'=>[
      'Presiden Microsoft, Brad Smith, memperingatkan bahwa gangguan pada sistem teknologi dapat semakin sering terjadi. Salah satu faktor yang disorot adalah kemampuan AI untuk menganalisis kode dengan lebih cepat.',
      'Penemuan kerentanan yang semakin cepat membuat perusahaan perangkat lunak perlu segera menilai risiko, memperbaiki celah, dan merilis pembaruan keamanan untuk melindungi penggunanya.',
    ],
    'sumber'=>'https://www.mediakompeten.co.id/microsoft-prediksi-gangguan-sistem',
  ],
  4=>[
    'judul'=>'Google Mengungkap Perkembangan Serangan Siber Berbasis AI Mandiri',
    'ringkas'=>'Temuan Google Threat Intelligence Group dan Mandiant menyoroti bagaimana otomatisasi AI dapat memperpendek waktu antara pembaruan perangkat lunak dan serangan.',
    'isi'=>[
      'Google Threat Intelligence Group bersama Mandiant melaporkan perkembangan serangan siber yang memanfaatkan AI secara mandiri. Otomatisasi dapat membantu pelaku bergerak lebih cepat setelah sebuah pembaruan perangkat lunak dirilis.',
      'Jeda yang semakin singkat antara tersedianya pembaruan dan upaya mengeksploitasi sistem membuat pemasangan patch serta pemantauan keamanan perlu dilakukan dengan segera.',
    ],
    'sumber'=>'https://www.harapanrakyat.com/2026/11/google-ungkap-perkembangan-teknologi-otomatisasi-dan-ancaman-serangan-siber-ai/',
  ],
  5=>[
    'judul'=>'SecurXcess Meluncurkan VERA AI SOC di Jakarta',
    'ringkas'=>'VERA AI SOC diperkenalkan di Jakarta dengan pendekatan yang menggabungkan kecerdasan buatan dan keahlian analis keamanan siber.',
    'isi'=>[
      'SecurXcess meluncurkan VERA AI SOC dalam acara di Discovery SCBD, Jakarta, pada 25 November. Solusi ini dirancang untuk membantu operasi pusat keamanan memanfaatkan AI dalam menghadapi ancaman.',
      'Pendekatan yang diperkenalkan tetap memadukan kemampuan AI dengan penilaian analis manusia. Kombinasi tersebut ditujukan untuk membantu organisasi mendeteksi dan menangani ancaman siber.',
    ],
    'sumber'=>'https://www.jawapos.com/teknologi/2611250500/ai-ubah-lanskap-keamanan-siber-perusahaan-perkuat-deteksi-ancaman?page=all',
  ],
];
$berita['ai'] = [
  1=>[
    'judul'=>'Karyawan OpenAI dan Anthropic Khawatir Model yang Belum Dirilis Sulit Dikendalikan',
    'ringkas'=>'Sebuah laporan yang mengutip lebih dari dua lusin sumber menyebut adanya kekhawatiran karyawan terhadap kemampuan model AI yang belum dirilis.',
    'isi'=>[
      'Laporan yang terbit sekitar 24 November 2026 menyebut sejumlah karyawan OpenAI dan Anthropic khawatir model yang masih dikembangkan semakin sulit dikendalikan. Kekhawatiran tersebut dikaitkan dengan kemampuan model yang terus meningkat.',
      'Informasi ini bersumber dari keterangan yang dikutip media dan membahas model yang belum dirilis ke publik. Perkembangan ini kembali menyoroti pentingnya pengujian dan langkah keselamatan sebelum model AI diluncurkan.',
    ],
    'sumber'=>'https://news.lavx.hu/id/article/karyawan-openai-dan-anthropic-memperingatkan-model-ai-yang-belum-dirilis-melampaui-kendali-keselamatan',
  ],
  2=>[
    'judul'=>'Anthropic dan OpenAI Dilaporkan Merilis Model AI Baru',
    'ringkas'=>'Laporan 22 September 2026 menyebut Anthropic meluncurkan Claude Opus 5.5, sementara OpenAI memperkenalkan GPT-6 Sol dan Luna dengan harga lebih rendah.',
    'isi'=>[
      'Anthropic dan OpenAI dilaporkan memperkenalkan model AI baru pada 22 September 2026. Anthropic merilis Claude Opus 5.5, sedangkan OpenAI menghadirkan GPT-6 Sol dan Luna.',
      'Laporan tersebut juga menyebut OpenAI memangkas harga untuk bersaing dengan penyedia AI lain. Peluncuran ini berlangsung di tengah perdebatan tentang laju pengembangan dan keselamatan teknologi AI.',
    ],
    'sumber'=>'https://kumparan.com/kumparantekno/bosnya-serukan-rem-pengembangan-ai-openai-dan-anthropic-malah-rilis-model-baru-28EoeyFGZ40',
  ],
  3=>[
    'judul'=>'OpenAI, Anthropic, dan Google DeepMind Dikabarkan Berunding soal Keselamatan AI',
    'ringkas'=>'Pembicaraan antarperusahaan AI besar dilaporkan berlangsung selama beberapa pekan, tetapi belum ada kepastian bahwa pelatihan atau peluncuran model akan ditunda.',
    'isi'=>[
      'OpenAI, Anthropic, dan Google DeepMind dilaporkan mulai membahas isu keselamatan AI sekitar pertengahan September 2026. Pembicaraan tersebut disebut telah berlangsung selama beberapa pekan.',
      'Hingga laporan itu diterbitkan, belum ada bukti bahwa ketiga perusahaan sepakat menunda pelatihan atau peluncuran model baru. Karena itu, hasil pembicaraan dan dampaknya terhadap pengembangan AI masih belum dapat dipastikan.',
    ],
    'sumber'=>'https://inet.detik.com/cyberlife/d-8665558/openai-anthropic-dan-google-mulai-berunding-soal-keselamatan-ai',
  ],
  4=>[
    'judul'=>'Anthropic Pertimbangkan Model Baru di Tengah Persaingan AI Korporat',
    'ringkas'=>'Reuters melaporkan Anthropic sedang mempertimbangkan model baru ketika persaingan dengan OpenAI meningkat dan rencana IPO menjadi perhatian.',
    'isi'=>[
      'Anthropic dilaporkan mempertimbangkan peluncuran model AI baru pada akhir September 2026. Kabar tersebut muncul saat perusahaan menghadapi persaingan yang semakin kuat dari OpenAI di pasar AI untuk perusahaan.',
      'Laporan juga mengaitkan perkembangan itu dengan rencana IPO Anthropic. Namun, pertimbangan peluncuran belum berarti model baru tersebut sudah diumumkan atau tersedia untuk publik.',
    ],
    'sumber'=>'https://id.investing.com/news/company-news/anthropic-pertimbangkan-peluncuran-model-ai-baru-saat-openai-makin-kuat-3074988',
  ],
  5=>[
    'judul'=>'Google dan OpenAI Dikabarkan Menyiapkan Model AI Baru',
    'ringkas'=>'Laporan The Information menyebut Google mengembangkan Gemini 4 Carbon dan OpenAI menyiapkan model baru dari keluarga Terra.',
    'isi'=>[
      'Tiga perusahaan AI besar dikabarkan menyiapkan model baru sekitar pertengahan Oktober 2026. Google disebut mengerjakan Gemini 4 Carbon, sementara OpenAI dikabarkan mengembangkan model dari keluarga Terra.',
      'Informasi tersebut berasal dari laporan media dan menggambarkan proyek yang masih dalam tahap persiapan. Nama, jadwal rilis, serta ketersediaan model dapat berubah sebelum ada pengumuman resmi.',
    ],
    'sumber'=>'https://id.investing.com/news/stock-market-news/anthropic-google-dan-openai-siapkan-model-ai-baru-3098497',
  ],
];
$berita['politik'] = [
  1=>[
    'judul'=>'MPR Bersiap Memilih Wakil Presiden Baru Setelah Gibran Dilaporkan Mundur',
    'ringkas'=>'VIVA melaporkan Gibran mengundurkan diri dan Prabowo menyerahkan nama Sugiono serta Amran Sulaiman sebagai calon pengganti kepada MPR.',
    'isi'=>[
      'Menurut laporan VIVA, Gibran mengundurkan diri dari jabatan wakil presiden. Prabowo disebut telah menyerahkan dua nama, yaitu Sugiono dan Amran Sulaiman, kepada MPR untuk dipertimbangkan sebagai pengganti.',
      'Sidang paripurna MPR untuk pemilihan tersebut dijadwalkan pada 11 Desember 2026. Perkembangan ini mengikuti keterangan dalam laporan sumber dan perlu dilihat bersama pengumuman resmi lembaga terkait.',
    ],
    'sumber'=>'https://viva.co.id/berita/nasional/1946731-jelang-2027-bagaimana-situasi-politik-indonesia-ini-prediksi-pakar',
  ],
  2=>[
    'judul'=>'Fraksi-Fraksi MPR Menyampaikan Dukungan untuk Dua Calon Wakil Presiden',
    'ringkas'=>'Laporan CNN Indonesia menyebut delapan fraksi partai di MPR menyampaikan sikap terhadap calon Sugiono dan Amran Sulaiman.',
    'isi'=>[
      'Delapan fraksi partai di MPR dilaporkan menyampaikan pandangan dan dukungan mereka terhadap dua nama calon wakil presiden, Sugiono dan Amran Sulaiman.',
      'Sikap tiap fraksi menjadi bagian dari proses politik menjelang pemilihan di MPR. Tautan sumber yang tersedia mengarah ke kanal nasional CNN Indonesia.',
    ],
    'sumber'=>'https://www.cnnindonesia.com/nasional',
  ],
  3=>[
    'judul'=>'Gerindra Mendorong Pemilihan Wakil Presiden Melalui Musyawarah',
    'ringkas'=>'Habiburokhman mendorong musyawarah sebagai cara memilih wakil presiden dan menyebut voting dapat dilakukan jika musyawarah tidak mencapai kesepakatan.',
    'isi'=>[
      'Gerindra mendorong agar pemilihan wakil presiden di MPR terlebih dahulu dilakukan melalui musyawarah. Habiburokhman menyampaikan bahwa pendekatan tersebut dapat menjadi cara untuk mencari kesepakatan antarfraksi.',
      'Jika musyawarah tidak menghasilkan keputusan, pemungutan suara dapat menjadi langkah berikutnya. Tautan sumber yang diberikan mengarah ke kanal berita Detikcom.',
    ],
    'sumber'=>'https://news.detik.com/berita',
  ],
  4=>[
    'judul'=>'Listyo Sigit Dilaporkan Menolak Hadir dalam Sidang Etik Polri',
    'ringkas'=>'Politik Indonesia melaporkan Listyo Sigit menolak menghadiri sidang etik terkait kasus penyadapan dan makar sehingga jadwal sidang diubah.',
    'isi'=>[
      'Menurut laporan Politik Indonesia, Listyo Sigit menolak hadir dalam sidang etik Polri yang berkaitan dengan perkara penyadapan dan makar.',
      'Polri kemudian menjadwalkan ulang sidang tersebut pada 30 November. Tautan sumber yang diberikan mengarah ke halaman utama Politik Indonesia.',
    ],
    'sumber'=>'https://www.politikindonesia.id/',
  ],
  5=>[
    'judul'=>'Baleg DPR Menetapkan 62 RUU dalam Prolegnas Prioritas 2027',
    'ringkas'=>'Badan Legislasi DPR dilaporkan menetapkan 62 rancangan undang-undang sebagai bagian dari Prolegnas Prioritas 2027.',
    'isi'=>[
      'Badan Legislasi DPR menetapkan 62 rancangan undang-undang untuk masuk dalam Program Legislasi Nasional Prioritas tahun 2027, menurut laporan CNN Indonesia.',
      'Daftar prioritas tersebut menjadi agenda legislasi yang akan dibahas DPR. Tautan sumber yang diberikan mengarah ke kanal nasional CNN Indonesia.',
    ],
    'sumber'=>'https://www.cnnindonesia.com/nasional',
  ],
];
$berita['pemrograman'] = [
  1=>[
    'judul'=>'.NET 11 Resmi Dirilis dengan Pembaruan untuk Pengembang',
    'ringkas'=>'Microsoft merilis .NET 11 pada 12 November, dengan pembaruan yang mencakup C# 15, ASP.NET Core, .NET MAUI, dan pengembangan Windows.',
    'isi'=>[
      '.NET 11 dilaporkan resmi dirilis pada 12 November 2026. Pembaruan ini mencakup sejumlah bagian ekosistem, termasuk C# 15, ASP.NET Core, .NET MAUI, dan dukungan pengembangan Windows.',
      'Rilis baru memberi pengembang kesempatan untuk mengevaluasi peningkatan dan kompatibilitas proyek mereka. Informasi pada tautan sumber merangkum sejumlah perkembangan .NET pada pekan tersebut.',
    ],
    'sumber'=>'https://www.i-programmer.info/i-programmer-weekly/246-i-programmer-weekly-2026/19294-november-week-3.html',
  ],
  2=>[
    'judul'=>'Survei Stack Overflow 2026 Menyoroti Perubahan Peran Komunitas Pengembang',
    'ringkas'=>'Laporan yang Anda kirim menyoroti bagaimana chatbot AI generatif mulai mengambil alih sebagian peran Stack Overflow sebagai sumber jawaban pemrograman.',
    'isi'=>[
      'Hasil Stack Overflow Developer Survey 2026 disebut membahas dampak AI generatif terhadap kebiasaan pengembang mencari jawaban. Chatbot AI kini menjadi salah satu pilihan yang digunakan untuk memperoleh bantuan teknis.',
      'Perubahan tersebut menimbulkan pertanyaan tentang peran forum tanya jawab pemrograman ke depannya. Tautan sumber yang diberikan mengarah ke halaman utama I-Programmer.',
    ],
    'sumber'=>'https://www.i-programmer.info/',
  ],
  3=>[
    'judul'=>'Anthropic Memperkenalkan Dua Agen Beta dalam Claude Ship',
    'ringkas'=>'Claude Ship dilaporkan menghadirkan PR Steward untuk membantu menangani kegagalan CI dan konflik merge, serta Claude Approvals untuk mengelola perubahan rutin.',
    'isi'=>[
      'Anthropic memperkenalkan dua agen beta dalam Claude Ship pada 24 November 2026. PR Steward ditujukan untuk membantu memperbaiki kegagalan CI dan menangani konflik saat penggabungan perubahan kode.',
      'Claude Approvals dirancang untuk menggabungkan perubahan rutin sesuai kebijakan yang dijelaskan dalam bahasa alami. Fitur-fitur tersebut menunjukkan penggunaan agen AI dalam alur kerja pengembangan perangkat lunak.',
    ],
    'sumber'=>'https://dev.to/magnus_ferm/dev-news-digest-24-nov-2026-0600-43ml',
  ],
  4=>[
    'judul'=>'Llama.cpp Merilis Versi 1.0.0 dengan Komitmen Stabilitas API',
    'ringkas'=>'Llama.cpp berjanji menandai perubahan API dan ABI yang tidak kompatibel melalui kenaikan versi mayor.',
    'isi'=>[
      'Llama.cpp dilaporkan merilis versi pustaka 1.0.0 pada 16 November 2026. Proyek tersebut menyatakan perubahan yang memutus kompatibilitas API atau ABI akan ditandai melalui perubahan nomor versi mayor.',
      'Komitmen versi yang lebih jelas dapat membantu pengembang mengantisipasi dampak pembaruan terhadap aplikasi mereka. Tautan sumber yang diberikan mengarah ke halaman utama DeveloperTech.',
    ],
    'sumber'=>'https://www.developer-tech.com/',
  ],
  5=>[
    'judul'=>'Ternary Bonsai 2.5 27B Diklaim Muat dalam 5,9 GB',
    'ringkas'=>'Model coding agentik ini dilaporkan berjalan sekitar 200 token per detik di RTX 4090 serta mendukung llama.cpp dan MLX.',
    'isi'=>[
      'Ternary Bonsai 2.5 27B diperkenalkan pada 25 November 2026 sebagai model coding agentik dengan ukuran berkas sekitar 5,9 GB. Laporan yang diberikan menyebut kecepatan sekitar 200 token per detik saat dijalankan pada RTX 4090.',
      'Bobot model disebut menggunakan lisensi Apache 2.0 dan mendukung llama.cpp serta MLX. Kinerja aktual dapat berbeda bergantung pada perangkat keras dan konfigurasi yang digunakan.',
    ],
    'sumber'=>'https://dev.to/magnus_ferm/dev-news-digest-25-nov-2026-0600-jka',
  ],
];
$berita['lifestyle'] = [
  1=>[
    'judul'=>'Air Terjun Kiti-kiti Mengalir Langsung ke Laut',
    'ringkas'=>'Air terjun di Distrik Karas ini memiliki pemandangan berbeda saat laut surut dan pasang.',
    'isi'=>[
      'Air Terjun Kiti-kiti di Distrik Karas, Fakfak, dikenal karena alirannya yang jatuh langsung ke laut. Saat air laut surut, area di bawahnya membentuk pantai yang dapat terlihat.',
      'Ketika laut pasang, air terjun tampak mengalir langsung ke laut. Perubahan pemandangan mengikuti kondisi pasang surut, sehingga pengunjung sebaiknya memeriksa keadaan laut sebelum berkunjung.',
    ],
    'sumber'=>'https://inanegeriku.com/5-wisata-papua-barat-di-fakfak-dengan-pesona-alam-yang-tak-diragukan-lagi/',
  ],
  2=>[
    'judul'=>'Teluk Toran dan Pulau Tubir Seram Menawarkan Wisata Alam Fakfak',
    'ringkas'=>'Teluk Toran memiliki gugusan karst dan anggrek, sementara Pulau Tubir Seram dikenal sebagai lokasi snorkeling dan menyelam.',
    'isi'=>[
      'Teluk Toran di Fakfak digambarkan memiliki gugusan pulau karst, anggrek, dan hamparan pasir putih. Bentang alam pesisir ini menjadi salah satu daya tarik wisata alam di Papua Barat.',
      'Pulau Tubir Seram menawarkan aktivitas snorkeling dan menyelam untuk menikmati kawasan bawah laut. Pengunjung tetap perlu menjaga lingkungan dan mengikuti arahan keselamatan setempat.',
    ],
    'sumber'=>'https://papuabarat.tribunnews.com/2023/03/09/daftar-wisata-papua-barat-di-maybrat-dan-fakfak-danau-uter-hingga-pulau-tubir-seram?page=all&s=paging_new',
  ],
  3=>[
    'judul'=>'Pantai Wayob dan Patawana Menjadi Tujuan Wisata Pesisir Fakfak',
    'ringkas'=>'Wayob memiliki pasir putih dan terumbu karang, sedangkan Pantai Patawana dapat dicapai sekitar satu jam dari pusat kota Fakfak.',
    'isi'=>[
      'Pantai Wayob dan Pantai Patawana termasuk tujuan wisata pesisir yang dibahas dalam laporan tentang Fakfak. Wayob digambarkan memiliki pasir putih, terumbu karang, dan suasana alam yang masih asri.',
      'Pantai Patawana disebut berjarak sekitar satu jam perjalanan dari kota Fakfak. Waktu tempuh dapat berubah sesuai kondisi perjalanan dan cuaca.',
    ],
    'sumber'=>'https://kumparan.com/jendela-dunia/3-tempat-wisata-di-fakfak-papua-barat-yang-punya-pemandangan-alam-yang-indah-23O89YL0l0s',
  ],
  4=>[
    'judul'=>'Fakfak Menawarkan Pantai, Pulau, Air Terjun, dan Situs Gua Bersejarah',
    'ringkas'=>'Sejumlah tujuan alam Fakfak yang disebut dalam laporan meliputi Pantai Pasir Putih, Pulau Panjang, Gua Tapurarang, dan Air Terjun Ubadari.',
    'isi'=>[
      'Fakfak, yang dikenal dengan julukan Kota Pala, memiliki beragam tujuan wisata alam. Daftar yang dibahas sumber mencakup Pantai Pasir Putih, Pulau Panjang, Gua Tapurarang, dan Air Terjun Ubadari.',
      'Gua Tapurarang juga disebut menyimpan jejak peradaban masa lampau. Keberagaman pantai, pulau kecil, dan situs sejarah memberi pilihan kegiatan bagi pengunjung yang ingin mengenal alam serta budaya setempat.',
    ],
    'sumber'=>'https://beritapress.id/menjelajahi-keindahan-wisata-alam-di-fakfak-surga-tersembunyi-papua-barat/',
  ],
  5=>[
    'judul'=>'Panduan Wisata Fakfak Menyarankan Aktivitas Alam dan Perencanaan Musim',
    'ringkas'=>'Sebuah panduan menyebut April hingga Oktober sebagai waktu yang lebih kering serta menawarkan aktivitas seperti snorkeling, menyelam, dan trekking.',
    'isi'=>[
      'Panduan wisata yang dikirim menyebut April hingga Oktober sebagai perkiraan waktu yang lebih kering untuk berkunjung ke Fakfak. Aktivitas yang disorot meliputi snorkeling, menyelam, dan trekking.',
      'Informasi musim pada sumber tersebut belum diverifikasi melalui kanal resmi. Sebelum merencanakan perjalanan, wisatawan sebaiknya memeriksa prakiraan cuaca, kondisi lokasi, dan arahan dari pengelola atau pemerintah setempat.',
    ],
    'sumber'=>'https://www.dprdfakfak.id/panduan-wisata-terbaik-di-kabupaten-fakfak-papua-barat/',
  ],
];
unset($_id,$_profil,$_k,$_nama,$_n);

$videoFiles = glob(__DIR__.'/../assets/video/*') ?: [];
$videoFiles = array_filter($videoFiles, function ($path) {
  return is_file($path) && in_array(strtolower(pathinfo($path, PATHINFO_EXTENSION)), ['mp4','webm','ogg'], true);
});
natcasesort($videoFiles);
$videoFiles = array_map(function ($path) {
  $nama = basename($path);
  $ekstensi = strtolower(pathinfo($nama, PATHINFO_EXTENSION));
  $tipe = ['mp4'=>'video/mp4','webm'=>'video/webm','ogg'=>'video/ogg'][$ekstensi];
  return ['judul'=>pathinfo($nama, PATHINFO_FILENAME), 'src'=>'assets/video/'.rawurlencode($nama), 'tipe'=>$tipe];
}, $videoFiles);
$videoFiles = array_values($videoFiles);
