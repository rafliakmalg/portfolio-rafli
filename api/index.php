<?php

// Vercel's filesystem is read-only except /tmp: point Laravel's writable paths there.
foreach (['framework/views', 'framework/cache', 'framework/sessions', 'logs'] as $dir) {
    @mkdir("/tmp/storage/$dir", 0755, true);
}
putenv('LARAVEL_STORAGE_PATH=/tmp/storage');
$_ENV['LARAVEL_STORAGE_PATH'] = '/tmp/storage';

require __DIR__ . '/../public/index.php';
