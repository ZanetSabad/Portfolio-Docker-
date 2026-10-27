<?php

$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$file = __DIR__ . $path;

if ($path !== '/' && is_file($file)) {
    return false;
}

$routes = [
    '/' => 'index.php',
    '/o-mne' => 'about-me.php',
    '/zkusenosti' => 'experience.php',
    '/skills' => 'skills.php',
    '/projekty' => 'portfolio.php',
    '/vzdelani' => 'education.php',
    '/kontakt' => 'contact.php',
];

$target = rtrim($path, '/');
$target = $target === '' ? '/' : $target;

if (isset($routes[$target])) {
    require __DIR__ . '/' . $routes[$target];
    return true;
}

http_response_code(404);
require __DIR__ . '/index.php';
