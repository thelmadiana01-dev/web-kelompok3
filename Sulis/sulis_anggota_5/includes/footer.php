<?php
$base_path = basename(dirname($_SERVER['SCRIPT_FILENAME'])) === 'berita_detail' ? '../' : '';
?>
    </main>
    <footer class="site-footer">
        <p>© <?php echo date('Y'); ?> Sulistiyani (16325044) • D3 Manajemen Informatika. Dibuat dengan PHP Modular.</p>
    </footer>
    <script src="<?php echo $base_path; ?>assets/js/script.js"></script>
</body>
</html>