<?php
$pageTitle = 'Skills – Žaneta Sabadková';
$pageDescription = 'Dovednosti: WordPress, PHP, MySQL, Linux, Docker, LDAP, Git a frontend.';
include __DIR__ . '/partials/header.php';

$skillGroups = [
    ['icon' => '🧩', 'title' => 'WordPress', 'items' => ['Vývoj pluginů', 'Administrace pluginů', 'WP-Cron', 'E-mailové notifikace', 'Integrace React aplikací']],
    ['icon' => '🐘', 'title' => 'Backend', 'items' => ['PHP', 'MySQL / MariaDB']],
    ['icon' => '🐧', 'title' => 'Systémy', 'items' => ['Linux', 'Shell', 'Docker', 'Apache', 'LDAP', 'Slurm']],
    ['icon' => '🔀', 'title' => 'Verzování', 'items' => ['Git', 'GitLab', 'GitHub']],
    ['icon' => '🎨', 'title' => 'Frontend', 'items' => ['HTML', 'CSS / SCSS', 'JavaScript', 'React']],
    ['icon' => '🛠️', 'title' => 'Další nástroje', 'items' => ['Technická dokumentace', 'Uživatelské návody', 'Figma', 'Google Analytics', 'SEO']],
];

$learning = [
    ['icon' => '🛡️', 'title' => 'Kybernetická bezpečnost', 'text' => 'Zabezpečení WordPressu a serverů.'],
    ['icon' => '🤖', 'title' => 'AI', 'text' => 'Integrace AI nástrojů do webů a automatizace práce.'],
    ['icon' => '⚙️', 'title' => 'CI/CD', 'text' => 'Automatické testy a nasazení – GitHub Actions, GitLab CI, Jenkins.'],
    ['icon' => '🪟', 'title' => 'Windows Server & cloud', 'text' => 'Správa Windows serverů a cloudové služby.'],
];
?>

<main class="pf">
    <section class="pf-page-hero">
        <div class="pf-section-inner">
            <span class="pf-s-kicker">Dovednosti</span>
            <h1 class="pf-s-title">Co umím</h1>
        </div>
    </section>

    <section class="pf-projects-preview pf-projects-full">
        <div class="pf-section-inner">
            <div class="pf-skill-groups">
                <?php foreach ($skillGroups as $group): ?>
                    <div class="pf-skill-group">
                        <h2><span><?= $group['icon'] ?></span> <?= $group['title'] ?></h2>
                        <div class="pf-tags">
                            <?php foreach ($group['items'] as $item): ?>
                                <span><?= htmlspecialchars($item) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="pf-skills">
        <div class="pf-section-inner">
            <span class="pf-s-kicker">Aktuálně se učím</span>
            <h2 class="pf-s-title">Kam rostu</h2>
            <div class="pf-focus-grid pf-learning-grid">
                <?php foreach ($learning as $item): ?>
                    <div class="pf-focus-card">
                        <span><?= $item['icon'] ?></span>
                        <strong><?= $item['title'] ?></strong>
                        <p><?= $item['text'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
