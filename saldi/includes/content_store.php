<?php

function content_store_path(): string
{
    return dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'saldi-data' . DIRECTORY_SEPARATOR . 'content.json';
}

function load_content_store(?string $path = null): array
{
    $path = $path ?? content_store_path();
    ensure_content_store_directory($path);
    $lock = fopen($path . '.lock', 'c');
    if ($lock === false) {
        throw new RuntimeException('Tidak dapat membuka kunci penyimpanan konten.');
    }

    try {
        if (!flock($lock, LOCK_SH)) {
            throw new RuntimeException('Tidak dapat mengunci penyimpanan konten.');
        }

        return read_content_store_file($path);
    } finally {
        flock($lock, LOCK_UN);
        fclose($lock);
    }
}

function update_content_store(callable $update, ?string $path = null): array
{
    $path = $path ?? content_store_path();
    ensure_content_store_directory($path);
    $lock = fopen($path . '.lock', 'c');
    if ($lock === false) {
        throw new RuntimeException('Tidak dapat membuka kunci penyimpanan konten.');
    }

    try {
        if (!flock($lock, LOCK_EX)) {
            throw new RuntimeException('Tidak dapat mengunci penyimpanan konten.');
        }

        $store = read_content_store_file($path);
        $updatedStore = $update($store);
        if (!is_array($updatedStore)) {
            throw new UnexpectedValueException('Pembaruan konten harus menghasilkan array.');
        }

        $json = json_encode(
            $updatedStore,
            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        );
        if ($json === false) {
            throw new UnexpectedValueException('Data konten tidak dapat diubah menjadi JSON: ' . json_last_error_msg());
        }

        $directory = dirname($path);
        if (!is_dir($directory)) {
            throw new RuntimeException('Folder penyimpanan konten tidak ditemukan.');
        }

        $temporaryPath = $path . '.tmp.' . bin2hex(random_bytes(6));
        if (file_put_contents($temporaryPath, $json . PHP_EOL, LOCK_EX) === false) {
            throw new RuntimeException('Gagal menulis file sementara konten.');
        }
        if (!rename($temporaryPath, $path)) {
            unlink($temporaryPath);
            throw new RuntimeException('Gagal mengganti file penyimpanan konten.');
        }

        return $updatedStore;
    } finally {
        flock($lock, LOCK_UN);
        fclose($lock);
    }
}

function update_content_group(string $group, callable $update): array
{
    return update_content_store(static function (array $store) use ($group, $update): array {
        $current = $store[$group] ?? [];
        $updated = $update($current);
        if (!is_array($updated)) {
            throw new UnexpectedValueException('Grup konten harus menghasilkan array.');
        }
        $store[$group] = $updated;
        return $store;
    });
}

function ensure_content_store_directory(string $path): void
{
    $directory = dirname($path);
    if (!is_dir($directory) && !mkdir($directory, 0770, true) && !is_dir($directory)) {
        throw new RuntimeException('Folder penyimpanan konten tidak dapat dibuat.');
    }
}

function read_content_store_file(string $path): array
{
    if (!is_file($path)) {
        return [];
    }

    $json = file_get_contents($path);
    if ($json === false) {
        throw new RuntimeException('Gagal membaca file penyimpanan konten.');
    }

    $store = json_decode($json, true);
    if (!is_array($store)) {
        throw new UnexpectedValueException('File penyimpanan konten bukan JSON yang valid.');
    }

    return $store;
}
