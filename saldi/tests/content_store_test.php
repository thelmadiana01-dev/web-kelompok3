<?php
require_once __DIR__ . '/../includes/content_store.php';

function assert_same($expected, $actual, string $message): void
{
    if ($expected !== $actual) {
        throw new RuntimeException($message);
    }
}

$path = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'saldi-content-store-' . uniqid() . '.json';
$lockPath = $path . '.lock';

try {
    update_content_store(
        fn(array $store): array => array_merge($store, ['keluarga' => ['bapak' => ['nama' => 'Saleh']]]),
        $path
    );
    update_content_store(
        fn(array $store): array => array_merge($store, ['berita' => [['id' => 'it-1']]]),
        $path
    );

    $store = load_content_store($path);
    assert_same('Saleh', $store['keluarga']['bapak']['nama'] ?? null, 'Profile data should persist.');
    assert_same('it-1', $store['berita'][0]['id'] ?? null, 'News updates should preserve and persist.');

    file_put_contents($path, '{invalid json');
    try {
        load_content_store($path);
        throw new RuntimeException('Invalid JSON must not be silently ignored.');
    } catch (UnexpectedValueException $e) {
        assert_same(true, true, 'Invalid JSON is reported.');
    }
} finally {
    if (file_exists($path)) {
        unlink($path);
    }
    if (file_exists($lockPath)) {
        unlink($lockPath);
    }
}

echo "Content store tests passed.\n";
