document.addEventListener('DOMContentLoaded', () => {
    // 1. Ambient Cursor Glow
    const cursorGlow = document.getElementById('cursorGlow');
    if (cursorGlow) {
        document.addEventListener('mousemove', (e) => {
            cursorGlow.style.left = `${e.clientX}px`;
            cursorGlow.style.top = `${e.clientY}px`;
        });
    }

    // 2. Interactive 3D Tilt & Spotlight Hover on Cards
    document.querySelectorAll('.neon-card').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = ((y - centerY) / centerY) * -5;
            const rotateY = ((x - centerX) / centerX) * 5;
            card.style.transform = `perspective(800px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-5px)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(800px) rotateX(0deg) rotateY(0deg) translateY(0px)';
        });
    });

    // 3. Collapsible Left Sidebar (Desktop) & Mobile Drawer
    const sidebar = document.getElementById('sidebar');
    const collapseBtn = document.getElementById('sidebarCollapseBtn');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const sidebarClose = document.getElementById('sidebarClose');

    if (sidebar && collapseBtn) {
        if (localStorage.getItem('sidebarCollapsed') === 'true' && window.innerWidth > 768) {
            sidebar.classList.add('collapsed');
        }
        collapseBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
        });
    }

    if (mobileMenuBtn && sidebar) {
        mobileMenuBtn.addEventListener('click', () => sidebar.classList.add('open'));
    }
    if (sidebarClose && sidebar) {
        sidebarClose.addEventListener('click', () => sidebar.classList.remove('open'));
    }

    // 4. Sidebar Accordion Submenu
    document.querySelectorAll('.sub-toggle').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            if (sidebar && sidebar.classList.contains('collapsed')) {
                sidebar.classList.remove('collapsed');
                localStorage.setItem('sidebarCollapsed', 'false');
            }
            btn.closest('.side-dropdown-wrap').classList.toggle('open');
        });
    });

    // 5. Smooth Scroll Reveal for Cards, Gallery Items, and News Rows
    const revealTargets = document.querySelectorAll('.neon-card, .gallery-item, .news-row, .media-panel, .stats-banner');
    revealTargets.forEach((el, idx) => {
        el.classList.add('reveal-item');
        el.style.transitionDelay = `${(idx % 4) * 65}ms`;
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08 });

    revealTargets.forEach(el => observer.observe(el));

    // 6. Lightbox Gallery (Klik foto -> layar penuh + klik/swipe kiri & kanan)
    const galleryItems = document.querySelectorAll('.gallery-item[data-src]');
    const lightbox = document.getElementById('galleryLightbox');
    if (galleryItems.length > 0 && lightbox) {
        const lightboxImg = document.getElementById('lightboxImg');
        const lightboxCaption = document.getElementById('lightboxCaption');
        const lightboxCounter = document.getElementById('lightboxCounter');
        const btnPrev = document.getElementById('lightboxPrev');
        const btnNext = document.getElementById('lightboxNext');
        const btnClose = document.getElementById('lightboxClose');

        let currentIndex = 0;
        const images = Array.from(galleryItems).map(item => ({
            src: item.getAttribute('data-src'),
            caption: item.getAttribute('data-caption')
        }));

        function showImage(index) {
            if (index < 0) index = images.length - 1;
            if (index >= images.length) index = 0;
            currentIndex = index;

            lightboxImg.style.opacity = '0.35';
            lightboxImg.style.transform = 'scale(0.96)';
            setTimeout(() => {
                lightboxImg.src = images[currentIndex].src;
                lightboxCaption.textContent = images[currentIndex].caption;
                lightboxCounter.textContent = `Foto ${currentIndex + 1} dari ${images.length}`;
                lightboxImg.style.opacity = '1';
                lightboxImg.style.transform = 'scale(1)';
            }, 110);
        }

        galleryItems.forEach((item, idx) => {
            item.addEventListener('click', () => {
                showImage(idx);
                lightbox.classList.add('open');
            });
        });

        btnPrev.addEventListener('click', (e) => {
            e.stopPropagation();
            showImage(currentIndex - 1);
        });

        btnNext.addEventListener('click', (e) => {
            e.stopPropagation();
            showImage(currentIndex + 1);
        });

        btnClose.addEventListener('click', () => lightbox.classList.remove('open'));
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) lightbox.classList.remove('open');
        });

        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('open')) return;
            if (e.key === 'ArrowLeft') showImage(currentIndex - 1);
            if (e.key === 'ArrowRight') showImage(currentIndex + 1);
            if (e.key === 'Escape') lightbox.classList.remove('open');
        });

        let touchStartX = 0;
        lightbox.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        lightbox.addEventListener('touchend', (e) => {
            const diff = touchStartX - e.changedTouches[0].screenX;
            if (Math.abs(diff) > 40) {
                if (diff > 0) showImage(currentIndex + 1);
                else showImage(currentIndex - 1);
            }
        }, { passive: true });
    }
});
