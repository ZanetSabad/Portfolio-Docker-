<?php include __DIR__ . '/partials/header.php'; ?>

<main class="pf">
    <section class="pf-skills">
        <div class="pf-section-inner pf-skills-grid">
            <div class="pf-skill-bars">
                <span class="pf-s-kicker">Dovednosti</span>
                <h1 class="pf-s-title">Co umím</h1>

                <div class="pf-progress-list">
                    <div class="pf-progress" style="--value: 85%;">
                        <div><strong>HTML &amp; CSS</strong><span>85%</span></div>
                        <span class="pf-track"><span></span></span>
                    </div>
                    <div class="pf-progress" style="--value: 65%;">
                        <div><strong>JavaScript</strong><span>65%</span></div>
                        <span class="pf-track"><span></span></span>
                    </div>
                    <div class="pf-progress" style="--value: 75%;">
                        <div><strong>SCSS</strong><span>75%</span></div>
                        <span class="pf-track"><span></span></span>
                    </div>
                    <div class="pf-progress" style="--value: 45%;">
                        <div><strong>Python</strong><span>45%</span></div>
                        <span class="pf-track"><span></span></span>
                    </div>
                    <div class="pf-progress" style="--value: 70%;">
                        <div><strong>Figma &amp; Design</strong><span>70%</span></div>
                        <span class="pf-track"><span></span></span>
                    </div>
                </div>
            </div>

            <div class="pf-tool-grid" aria-label="Nástroje">
                <span>🧙‍♀️ Git &amp; GitHub</span>
                <span>📊 Google Analytics</span>
                <span>🔍 SEO</span>
                <span>🎨 Canva</span>
                <span>✂️ ShotCut</span>
                <span>🖼️ Figma</span>
            </div>
        </div>
    </section>

    <section class="pf-projects-preview">
        <div class="pf-section-inner">
            <div class="pf-section-head">
                <h2 class="pf-s-title">Projekty</h2>
                <a href="/projekty">Všechny projekty →</a>
            </div>

            <div class="pf-project-grid">
                <article class="pf-project-card pf-card-purple">
                    <div class="pf-project-media">🌐</div>
                    <div class="pf-project-body">
                        <div class="pf-tags"><span>HTML</span><span>CSS</span><span>JS</span></div>
                        <h3>Osobní portfolio v1</h3>
                    </div>
                </article>
                <article class="pf-project-card pf-card-blue">
                    <div class="pf-project-media">📈</div>
                    <div class="pf-project-body">
                        <div class="pf-tags"><span>Python</span><span>GA</span></div>
                        <h3>Analýza webu v Google Analytics</h3>
                    </div>
                </article>
                <article class="pf-project-card pf-card-green">
                    <div class="pf-project-media">🎨</div>
                    <div class="pf-project-body">
                        <div class="pf-tags"><span>Figma</span><span>Design</span></div>
                        <h3>UI Design - mobilní app</h3>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
