<?php
$pageTitle = 'Kontakt – Žaneta Sabadková';
$pageDescription = 'Kontaktujte mě e-mailem, přes LinkedIn nebo GitHub.';
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
                <a class="pf-contact-card" href="tel:+420724831189">
                    <span>📞</span>
                    <strong>Telefon</strong>
                    <p>+420 724 831 189</p>
                </a>
                <a class="pf-contact-card" href="https://www.linkedin.com/" target="_blank" rel="noreferrer">
                    <span>💼</span>
                    <strong>LinkedIn</strong>
                    <p>Profil na LinkedIn</p>
                </a>
                <a class="pf-contact-card" href="https://github.com/ZanetSabad" target="_blank" rel="noreferrer">
                    <span>🐙</span>
                    <strong>GitHub</strong>
                    <p>github.com/ZanetSabad</p>
                </a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
