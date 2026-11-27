// Galeri: klik foto -> tampil besar, bisa kiri/kanan (tombol, panah keyboard, swipe)
(function () {
    var fotos = Array.prototype.slice.call(document.querySelectorAll('.foto-galeri'));
    var lb = document.getElementById('lightbox');
    if (!lb || fotos.length === 0) { return; }

    var img = document.getElementById('lightbox-img');
    var info = document.getElementById('lb-info');
    var sekarang = 0;

    function tampil(i) {
        sekarang = (i + fotos.length) % fotos.length;
        img.src = fotos[sekarang].src;
        info.textContent = (sekarang + 1) + ' / ' + fotos.length;
    }
    function buka(i) { tampil(i); lb.classList.add('buka'); }
    function tutup() { lb.classList.remove('buka'); }

    fotos.forEach(function (f, i) { f.addEventListener('click', function () { buka(i); }); });
    document.getElementById('lb-kiri').addEventListener('click', function (e) { e.stopPropagation(); tampil(sekarang - 1); });
    document.getElementById('lb-kanan').addEventListener('click', function (e) { e.stopPropagation(); tampil(sekarang + 1); });
    document.getElementById('lb-tutup').addEventListener('click', tutup);
    lb.addEventListener('click', function (e) { if (e.target === lb) { tutup(); } });

    document.addEventListener('keydown', function (e) {
        if (!lb.classList.contains('buka')) { return; }
        if (e.key === 'ArrowLeft') { tampil(sekarang - 1); }
        if (e.key === 'ArrowRight') { tampil(sekarang + 1); }
        if (e.key === 'Escape') { tutup(); }
    });

    // Swipe di layar sentuh
    var awalX = null;
    lb.addEventListener('touchstart', function (e) { awalX = e.touches[0].clientX; });
    lb.addEventListener('touchend', function (e) {
        if (awalX === null) { return; }
        var selisih = e.changedTouches[0].clientX - awalX;
        if (Math.abs(selisih) > 50) { tampil(sekarang + (selisih < 0 ? 1 : -1)); }
        awalX = null;
    });
})();
