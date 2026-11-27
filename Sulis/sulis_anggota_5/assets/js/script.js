document.addEventListener("DOMContentLoaded", () => {
    const galleryItems = document.querySelectorAll(".gallery-item");
    const modal = document.querySelector(".lightbox-modal");

    // Hentikan eksekusi jika bukan di halaman galeri
    if (!modal || galleryItems.length === 0) return;

    const modalImg = modal.querySelector(".lightbox-img");
    const modalCaption = modal.querySelector(".lightbox-caption");
    const btnClose = modal.querySelector(".btn-close");
    const btnPrev = modal.querySelector(".btn-prev");
    const btnNext = modal.querySelector(".btn-next");

    let currentIndex = 0;
    let startX = 0;

    function showImage(index) {
        if (index < 0) index = galleryItems.length - 1;
        if (index >= galleryItems.length) index = 0;
        currentIndex = index;

        const img = galleryItems[currentIndex].querySelector("img");
        const caption = galleryItems[currentIndex].querySelector("figcaption");

        modalImg.src = img.src;
        modalImg.alt = img.alt;
        modalCaption.textContent = caption ? caption.textContent : "";
    }

    // Buka modal saat salah satu dari 16 foto diklik
    galleryItems.forEach((item, idx) => {
        item.addEventListener("click", () => {
            showImage(idx);
            modal.showModal();
        });
    });

    // Tombol kontrol modal
    btnClose.addEventListener("click", () => modal.close());
    btnPrev.addEventListener("click", () => showImage(currentIndex - 1));
    btnNext.addEventListener("click", () => showImage(currentIndex + 1));

    // Tutup modal jika mengklik area gelap di luar gambar
    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.close();
        }
    });

    // Navigasi Keyboard (Panah Kiri & Panah Kanan)
    document.addEventListener("keydown", (e) => {
        if (!modal.open) return;
        if (e.key === "ArrowLeft") showImage(currentIndex - 1);
        if (e.key === "ArrowRight") showImage(currentIndex + 1);
    });

    // Navigasi Swipe Layar Sentuh (HP / Layar Sentuh)
    modal.addEventListener("touchstart", (e) => {
        startX = e.changedTouches[0].screenX;
    }, { passive: true });

    modal.addEventListener("touchend", (e) => {
        const endX = e.changedTouches[0].screenX;
        handleSwipe(startX, endX);
    }, { passive: true });

    // Navigasi Swipe Mouse Drag (Laptop / Desktop)
    modal.addEventListener("mousedown", (e) => {
        startX = e.clientX;
    });

    modal.addEventListener("mouseup", (e) => {
        const endX = e.clientX;
        handleSwipe(startX, endX);
    });

    function handleSwipe(awal, akhir) {
        const selisih = akhir - awal;
        if (selisih < -40) {
            showImage(currentIndex + 1); // Geser ke kiri -> Foto berikutnya
        } else if (selisih > 40) {
            showImage(currentIndex - 1); // Geser ke kanan -> Foto sebelumnya
        }
    }
});