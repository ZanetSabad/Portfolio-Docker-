<?php
$pageTitle = $pageTitle ?? 'Žaneta Sabadková – WordPress & PHP Developer';
$pageDescription = $pageDescription ?? 'Žaneta Sabadková – WordPress a PHP vývojářka a správa systémů. Vývoj pluginů, Linux, Docker, LDAP.';
// Plná adresa webu – sociální sítě potřebují u náhledového obrázku absolutní URL
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$siteUrl = $scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost');
$currentPath = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/') ?: '/';

$navItems = [
    '/o-mne' => 'O mně',
    '/zkusenosti' => 'Zkušenosti',
    '/skills' => 'Skills',
    '/projekty' => 'Portfolio',
];
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($siteUrl . $currentPath) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($siteUrl) ?>/assets/img/my-foto.jpg">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='40' fill='%23d7633e'/></svg>">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<nav class="pf-nav">
    <a href="/" class="pf-logo" aria-label="Domů">
        <span class="pf-logo-dot"></span>
        Žaneta Sabadková
    </a>
    <div class="pf-nav-links">
        <?php foreach ($navItems as $href => $label): ?>
            <a href="<?= $href ?>"<?= $currentPath === $href ? ' class="is-active" aria-current="page"' : '' ?>><?= $label ?></a>
        <?php endforeach; ?>
        <a href="/kontakt" class="pf-nav-cta">Kontakt</a>
    </div>
</nav>
