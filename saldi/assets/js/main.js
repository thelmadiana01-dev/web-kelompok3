/**
 * Script interaksi utama:
 * 1. Toggle menu navigasi mobile
 * 2. Lightbox Galeri ala HP (klik kanan/kiri, tombol panah keyboard, dan swipe sentuh kiri/kanan)
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Navigation Toggle
    const navToggle = document.getElementById('navToggle');
    const mainNav = document.getElementById('mainNav');

    if (navToggle && mainNav) {
        navToggle.addEventListener('click', () => {
            const isOpen = mainNav.classList.toggle('open');
            navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    }

    // 2. Gallery Lightbox (HP-Style Viewer)
    const lightbox = document.getElementById('galleryLightbox');
    const galleryCards = Array.from(document.querySelectorAll('.gallery-card'));

    if (!lightbox || galleryCards.length === 0) {
        return;
    }

    const lbImage = document.getElementById('lightboxImage');
    const lbTitle = document.getElementById('lightboxTitle');
    const lbCaption = document.getElementById('lightboxCaption');
    const lbCounter = document.getElementById('lightboxCounter');
    const lbClose = document.getElementById('lightboxClose');
    const lbPrev = document.getElementById('lightboxPrev');
    const lbNext = document.getElementById('lightboxNext');
    const lbStage = document.getElementById('lightboxStage');

    let currentIndex = 0;

    function showPhoto(index) {
        const total = galleryCards.length;
        currentIndex = (index + total) % total;
        const card = galleryCards[currentIndex];

        lbImage.src = card.dataset.src || '';
        lbImage.alt = card.dataset.title || 'Foto Galeri';
        lbTitle.textContent = card.dataset.title || '';
        lbCaption.textContent = card.dataset.caption || '';
        lbCounter.textContent = `${currentIndex + 1} / ${total}`;
    }

    function openLightbox(index) {
        showPhoto(index);
        lightbox.classList.add('open');
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightbox.classList.remove('open');
        lightbox.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    galleryCards.forEach((card, idx) => {
        card.addEventListener('click', () => openLightbox(idx));
    });

    if (lbClose) lbClose.addEventListener('click', closeLightbox);
    if (lbPrev) lbPrev.addEventListener('click', () => showPhoto(currentIndex - 1));
    if (lbNext) lbNext.addEventListener('click', () => showPhoto(currentIndex + 1));

    // Tutup jika klik area gelap di luar gambar
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox || e.target === lbStage) {
            closeLightbox();
        }
    });

    // Navigasi Keyboard (Kiri, Kanan, Escape)
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('open')) return;
        if (e.key === 'ArrowLeft') showPhoto(currentIndex - 1);
        if (e.key === 'ArrowRight') showPhoto(currentIndex + 1);
        if (e.key === 'Escape') closeLightbox();
    });

    // Dukungan Swipe Kiri & Kanan (Touchscreen / HP)
    let touchStartX = 0;
    let touchEndX = 0;

    lbStage.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    lbStage.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchEndX - touchStartX;
        if (Math.abs(diff) > 40) {
            if (diff < 0) {
                showPhoto(currentIndex + 1); // Swipe kiri -> foto berikutnya
            } else {
                showPhoto(currentIndex - 1); // Swipe kanan -> foto sebelumnya
            }
        }
    }, { passive: true });
});
