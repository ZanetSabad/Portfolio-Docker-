<?php
$pageTitle = 'Kontakt – Žaneta Sabadková';
$pageDescription = 'Kontaktujte mě e-mailem, přes LinkedIn nebo GitHub, nebo si stáhněte moje CV.';
include __DIR__ . '/partials/header.php';
?>

<main class="pf">
    <section class="pf-contact">
        <div class="pf-section-inner">
            <span class="pf-s-kicker">Kontakt</span>
            <h1 class="pf-s-title">Napište mi</h1>
            <div class="pf-contact-grid">
                <a class="pf-contact-card" href="mailto:zaneta.sabadkova@gmail.com">
                    <span>✉️</span>
                    <strong>E-mail</strong>
                    <p>zaneta.sabadkova@gmail.com</p>
                </a>
                <a class="pf-contact-card" href="https://www.linkedin.com/in/%C5%BEaneta-sabadkov%C3%A1-56542b213/" target="_blank" rel="noreferrer">
                    <span>💼</span>
                    <strong>LinkedIn</strong>
                    <p>Žaneta Sabadková</p>
                </a>
                <a class="pf-contact-card" href="https://github.com/ZanetSabad" target="_blank" rel="noreferrer">
                    <span>🐙</span>
                    <strong>GitHub</strong>
                    <p>github.com/ZanetSabad</p>
                </a>
                <a class="pf-contact-card" href="/documents/Sabadkova_Zaneta_CV.pdf" target="_blank" rel="noreferrer">
                    <span>📄</span>
                    <strong>Životopis</strong>
                    <p>Stáhnout CV (PDF)</p>
                </a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
