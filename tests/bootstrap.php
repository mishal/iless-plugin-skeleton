<?php

if (!is_readable(__DIR__.'/../vendor/autoload.php')) {
    echo "Missing autoload.php, please run composer install --dev";
    exit(1);
}

require __DIR__.'/../vendor/autoload.php';

define('ILESS_TEST_CACHE_DIR', sys_get_temp_dir().'/iless-plugin-skeleton');

if (is_dir(ILESS_TEST_CACHE_DIR)) {
    // clear the directory
    $files = glob(ILESS_TEST_CACHE_DIR.'/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
    rmdir(ILESS_TEST_CACHE_DIR);
}
