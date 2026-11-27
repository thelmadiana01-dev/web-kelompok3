<?php
$fotoGaleri = [
  'assets/galeri/Lano%20dan%20lisa.jpeg',
  'assets/galeri/Thelma%20%26%20ijal.jpeg',
  'assets/galeri/foto%20keluarga.jpeg',
  'assets/galeri/ijal%26thelma.jpeg',
  'assets/galeri/keluarga.jpeg',
  'assets/galeri/lisa%20%26%20mm.jpeg',
  'assets/galeri/windy%20%26%20mm.jpeg',
  'assets/galeri/Keluarga%20%282%29.jpeg',
  'assets/galeri/Keluarga%20%283%29.jpeg',
  'assets/galeri/Keluarga%20%284%29.jpeg',
  'assets/galeri/Keluarga%20%285%29.jpeg',
  'assets/galeri/Lano%20dan%20Bapa.jpeg',
  'assets/galeri/Saudara.jpeg',
  'assets/galeri/Thelma%20dan%20Mama.jpeg',
];
$jumlahFoto = count($fotoGaleri);
$aktif='galeri'; $judul='Galeri'; require 'includes/header.php';
?>
<h2>Galeri Keluarga</h2>
<p style="color:var(--mute)">Klik foto untuk memperbesar. Geser kiri/kanan, atau pakai tombol panah.</p>
<?php if ($jumlahFoto): ?>
<div class="gal">
<?php foreach ($fotoGaleri as $i=>$foto): ?>
  <button type="button" data-i="<?= $i ?>" aria-label="Buka <?= htmlspecialchars(pathinfo(rawurldecode($foto), PATHINFO_FILENAME), ENT_QUOTES, 'UTF-8') ?>"><img src="<?= htmlspecialchars($foto, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars(pathinfo(rawurldecode($foto), PATHINFO_FILENAME), ENT_QUOTES, 'UTF-8') ?>" loading="lazy"></button>
<?php endforeach; ?>
</div>
<div class="lb" id="lb" role="dialog" aria-modal="true" aria-label="Penampil foto">
  <button class="x" aria-label="Tutup">&times;</button><button class="p" aria-label="Sebelumnya">&#8249;</button>
  <img id="lbimg" alt=""><button class="n" aria-label="Berikutnya">&#8250;</button><div class="c" id="lbc"></div>
</div>
<script>
const photos=<?= json_encode($fotoGaleri, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT) ?>,total=photos.length,lb=document.getElementById('lb'),im=document.getElementById('lbimg'),c=document.getElementById('lbc');let cur=0;
function show(i){cur=(i+total)%total;im.src=photos[cur];im.alt=document.querySelector('.gal button[data-i="'+cur+'"] img').alt;c.textContent=(cur+1)+' / '+total}
document.querySelectorAll('.gal button').forEach(b=>b.onclick=()=>{show(+b.dataset.i);lb.classList.add('open')});
lb.querySelector('.p').onclick=()=>show(cur-1);lb.querySelector('.n').onclick=()=>show(cur+1);
lb.querySelector('.x').onclick=()=>lb.classList.remove('open');
lb.onclick=e=>{if(e.target===lb)lb.classList.remove('open')};
document.addEventListener('keydown',e=>{if(!lb.classList.contains('open'))return;if(e.key==='ArrowLeft')show(cur-1);if(e.key==='ArrowRight')show(cur+1);if(e.key==='Escape')lb.classList.remove('open')});
let sx=0;lb.addEventListener('touchstart',e=>sx=e.touches[0].clientX);
lb.addEventListener('touchend',e=>{const d=e.changedTouches[0].clientX-sx;if(Math.abs(d)>40)show(d<0?cur+1:cur-1)});
</script><br>
<?php else: ?>
<p></p>
<?php endif; ?>
<?php require 'includes/footer.php'; ?>
