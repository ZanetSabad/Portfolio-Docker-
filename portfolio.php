<?php
$pageTitle = 'Portfolio – Žaneta Sabadková';
$pageDescription = 'Projekty: WordPress pluginy pro správu clusteru, hlídání domén a integraci AI chatbota, PHP a webové projekty.';
include __DIR__ . '/partials/header.php';

$caseStudies = [
    [
        'icon' => '🖥️',
        'title' => 'Správa přístupů na výpočetní cluster (Slurm)',
        'goal' => 'Zjednodušit správu uživatelů výpočetního clusteru a jejich podílů na výkonu.',
        'solution' => 'WordPress plugin, který zobrazuje uživatele a jejich zařazení do organizací, umožňuje nastavit fairshare pro organizace i jednotlivé uživatele a generuje konfigurační soubor pro cluster.',
        'tags' => ['WordPress', 'PHP', 'Shell', 'Slurm'],
    ],
    [
        'icon' => '📅',
        'title' => 'Hlídání expirace domén',
        'goal' => 'Žádná doména nesmí nečekaně vypršet.',
        'solution' => 'Plugin s přehledem domén a termínů vypršení. Cron úloha posílá e-mailová upozornění správcům i vlastníkům domény 30, 14 a 7 dní před expirací.',
        'tags' => ['WordPress', 'PHP', 'WP-Cron', 'E-mail'],
    ],
    [
        'icon' => '🤖',
        'title' => 'Integrace AI chatbota do WordPressu',
        'goal' => 'Zpřístupnit AI chatbota (samostatnou React aplikaci) na webu ciirc.cvut.cz, který běží na WordPressu.',
        'link' => 'https://ciirc.cvut.cz/',
        'linkLabel' => 'Chatbot na ciirc.cvut.cz →',
        'solution' => 'Odlehčený integrační plugin, který načítá skripty a styly aplikace a vytváří kořenový element pro její vykreslení. Chatbot tak běží ve WordPressu bez zásahu do svého zdrojového kódu.',
        'tags' => ['WordPress', 'PHP', 'React', 'AI'],
    ],
    [
        'icon' => '🐳',
        'title' => 'Toto portfolio',
        'goal' => 'Vlastní web jako vývojové prostředí pro PHP a Docker.',
        'solution' => 'PHP web s vlastním routerem a hezkými URL, běžící v Docker kontejneru s Apache.',
        'tags' => ['PHP', 'Docker', 'Apache'],
        'link' => 'https://github.com/ZanetSabad/Portfolio-Docker-',
        'linkLabel' => 'Kód na GitHubu →',
    ],
];

$otherProjects = [
    ['url' => 'https://zanetasabadka.cz/sepekov/', 'img' => 'sepekov.webp', 'title' => 'Web ČSŽ Sepekov – vlastní WordPress šablona', 'tags' => ['WordPress', 'PHP', 'Šablona'], 'color' => 'green'],
    ['url' => 'https://contact-form-fawn.vercel.app/', 'img' => 'Contact.webp', 'title' => 'Kontaktní formulář', 'tags' => ['React', 'Form'], 'color' => 'blue'],
    ['url' => 'https://aplikace-ukoly-2wdh.vercel.app/', 'img' => 'buy_list.webp', 'title' => 'Aplikace na úkoly', 'tags' => ['React', 'To do'], 'color' => 'green'],
];
?>

<main class="pf">
    <section class="pf-page-hero">
        <div class="pf-section-inner">
            <span class="pf-s-kicker">Portfolio</span>
            <h1 class="pf-s-title">Vybrané projekty</h1>
        </div>
    </section>

    <section class="pf-projects-preview pf-projects-full">
        <div class="pf-section-inner">
            <div class="pf-case-grid">
                <?php foreach ($caseStudies as $case): ?>
                    <article class="pf-case">
                        <div class="pf-case-head">
                            <span><?= $case['icon'] ?></span>
                            <h2><?= $case['title'] ?></h2>
                        </div>
                        <p><strong>Cíl:</strong> <?= $case['goal'] ?></p>
                        <p><strong>Řešení:</strong> <?= $case['solution'] ?></p>
                        <div class="pf-tags">
                            <?php foreach ($case['tags'] as $tag): ?><span><?= $tag ?></span><?php endforeach; ?>
                        </div>
                        <?php if (!empty($case['link'])): ?>
                            <a class="pf-case-link" href="<?= $case['link'] ?>" target="_blank" rel="noreferrer"><?= $case['linkLabel'] ?></a>
                        <?php else: ?>
                            <p class="pf-case-note">Interní projekt CIIRC ČVUT – kód nelze zveřejnit.</p>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="pf-projects-preview">
        <div class="pf-section-inner">
            <div class="pf-section-head">
                <h2 class="pf-s-title">Další projekty</h2>
            </div>
            <div class="pf-project-grid">
                <?php foreach ($otherProjects as $project): ?>
                    <a class="pf-project-card pf-card-<?= $project['color'] ?>" href="<?= $project['url'] ?>" target="_blank" rel="noreferrer">
                        <div class="pf-project-media"><img src="/assets/img/<?= $project['img'] ?>" alt="<?= $project['title'] ?>" loading="lazy"></div>
                        <div class="pf-project-body">
                            <div class="pf-tags">
                                <?php foreach ($project['tags'] as $tag): ?><span><?= $tag ?></span><?php endforeach; ?>
                            </div>
                            <h3><?= $project['title'] ?></h3>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
