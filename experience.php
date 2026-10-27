<?php
$pageTitle = 'Zkušenosti – Žaneta Sabadková';
$pageDescription = 'Pracovní zkušenosti: IT specialistka v CIIRC ČVUT – vývoj WordPress pluginů, správa interních systémů, integrace AI chatbota.';
include __DIR__ . '/partials/header.php';
?>

<main class="pf">
    <section class="pf-page-hero">
        <div class="pf-section-inner">
            <span class="pf-s-kicker">Zkušenosti</span>
            <h1 class="pf-s-title">Kde pracuji</h1>
        </div>
    </section>

    <section class="pf-projects-preview pf-projects-full">
        <div class="pf-section-inner">
            <article class="pf-job">
                <header class="pf-job-head">
                    <div>
                        <h2>IT specialistka – vývoj a správa webů</h2>
                        <p class="pf-job-company">CIIRC ČVUT</p>
                    </div>
                    <span class="pf-job-date">02/2025 – současnost</span>
                </header>

                <h3 class="pf-job-subtitle">WordPress pluginy</h3>
                <ul class="pf-job-list">
                    <li>
                        <strong>Správa přístupů na výpočetní cluster (Slurm)</strong>
                        – přehled uživatelů a jejich zařazení do organizací, nastavení fairshare
                        (podílu výpočetního výkonu) pro organizace i jednotlivé uživatele
                        a generování konfiguračního souboru pro cluster.
                    </li>
                    <li>
                        <strong>Hlídání expirace domén</strong>
                        – přehled domén a termínů vypršení, automatická e-mailová upozornění
                        správcům i vlastníkům domény 30, 14 a 7 dní před expirací (plánováno přes Cron).
                    </li>
                    <li>
                        <strong>Integrace AI chatbota do WordPressu</strong>
                        – integrační plugin, který načítá React aplikaci chatbota na web
                        <a href="https://ciirc.cvut.cz/" target="_blank" rel="noreferrer">ciirc.cvut.cz</a>
                        bez zásahu do jejího zdrojového kódu.
                    </li>
                    <li>
                        <strong>Správa DNS záznamů</strong> <em>(ve vývoji)</em>
                    </li>
                </ul>

                <h3 class="pf-job-subtitle">Správa webů a systémů</h3>
                <ul class="pf-job-list">
                    <li>
                        Správa celého webu
                        <a href="https://ciirc.cvut.cz/" target="_blank" rel="noreferrer">ciirc.cvut.cz</a>
                        (WordPress).
                    </li>
                    <li>Správa interního portálu pro zaměstnance a další interní webové aplikace.</li>
                    <li>LDAP integrace a správa interních systémů.</li>
                </ul>

                <h3 class="pf-job-subtitle">Dokumentace</h3>
                <ul class="pf-job-list">
                    <li>Tvorba interních návodů pro zaměstnance i technické dokumentace pro IT tým.</li>
                </ul>

                <div class="pf-tags pf-job-tags">
                    <span>WordPress</span><span>PHP</span><span>MySQL</span><span>Linux</span>
                    <span>Shell</span><span>Slurm</span><span>LDAP</span><span>Docker</span>
                    <span>React</span><span>GitLab</span>
                </div>
            </article>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
