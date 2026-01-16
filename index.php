<?php
$indexPath = __DIR__ . '/index.html';
if (!file_exists($indexPath)) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=UTF-8');
    echo 'Missing index.html';
    exit;
}

header('Content-Type: text/html; charset=UTF-8');
readfile($indexPath);
